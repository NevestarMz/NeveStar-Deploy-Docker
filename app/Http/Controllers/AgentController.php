<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\ChatSession;


class AgentController extends Controller
{
    // Mostra a view do painel do agente
    public function index()
    {
        return view('agent.index');
    }

    // Lista sessões (session_id) com última mensagem — usado na sidebar
    public function sessions()
    {
        $sessions = Message::select(
                'session_id',
                DB::raw('MAX(created_at) as last_at'),
                DB::raw('MAX(id) as last_id')
            )
            ->groupBy('session_id')
            ->orderByDesc('last_at')
            ->get();

        // Para cada sessão, obtem a última mensagem texto e um count de mensagens do usuário não respondidas (opcional)
        $data = $sessions->map(function($s) {
            $lastMsg = Message::where('session_id', $s->session_id)
                              ->orderByDesc('created_at')
                              ->first(['sender','text','created_at']);
            return [
                'session_id' => $s->session_id,
                'last_at' => $s->last_at,
                'last_sender' => $lastMsg->sender ?? null,
                'last_text' => $lastMsg->text ?? null,
            ];
        });

        return response()->json(['sessions' => $data]);
    }

    // Abre uma sessão específica e retorna todas as mensagens dessa sessão
    public function openSession($sessionId)
    {
        // atribui a sessão ao agente autenticado (se não estiver atribuída ou se já for dele)
        $agent = Auth::user();

        $chatSession = ChatSession::firstOrCreate(
            ['session_id' => $sessionId],
            ['ack_sent' => false]
        );

        if (! $chatSession->agent_id) {
            $chatSession->agent_id = $agent->id;
            $chatSession->ack_sent = true;
            $chatSession->save();

            // opcional: cria mensagem automática assinada informando o cliente
            Message::create([
                'session_id' => $sessionId,
                'sender'     => $agent->name,
                'text'       => "Olá, sou {$agent->name} e vou assumir esta conversa. — {$agent->name}"
            ]);
        }

        $messages = Message::where('session_id', $sessionId)->orderBy('created_at')->get(['sender','text','created_at']);
        return response()->json(['messages' => $messages]);
    }

    // Envia uma mensagem como Agente para a sessão especificada
    public function sendToSession(Request $request, $sessionId)
    {
        $text = trim($request->input('message', ''));
        if ($text === '') {
            return response()->json(['error' => 'Mensagem vazia'], 422);
        }

        $agent = auth()->user();
        $msg = Message::create([
            'session_id' => $sessionId,
            'sender'     => $agent->name, // armazena o nome do agente
            'text'       => $text
        ]);

        // actualiza chat_session se necessário
        $chatSession = ChatSession::firstOrCreate(['session_id' => $sessionId]);
        $chatSession->agent_id = $agent->id;
        $chatSession->ack_sent = true;
        $chatSession->save();

        $messages = Message::where('session_id', $sessionId)->orderBy('created_at')->get(['sender','text','created_at']);
        return response()->json(['messages' => $messages, 'sent' => true, 'message' => $msg]);
    }
    // Alterna o estado online do agente
    public function toggleOnline(Request $request)
    {
        $user = auth()->user();
        $user->is_online = ! $user->is_online;
        $user->save();
        return response()->json(['is_online' => $user->is_online]);
    }
}

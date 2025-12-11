<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Models\ChatMessage;
use App\Models\ChatSession;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ChatController extends Controller
{
    // Inicia ou retorna sessão (gera session_key). Chamada quando abre o widget.
    public function start(Request $request)
    {
        $clientSid = $request->session()->getId();
        // Se já tiver sessão aberta, reutiliza
        $session = ChatSession::firstOrCreate(
            ['client_session_id' => $clientSid, 'status' => 'open'],
            ['session_key' => Str::uuid()->toString()]
        );

        return response()->json([
            'session_key' => $session->session_key,
            'client_name' => $session->client_name,
            'agent' => optional($session->agent)->name
        ]);
    }

    // Define nome do cliente (opcional, chamado no primeiro start)
    public function setName(Request $request)
    {
        $request->validate(['name'=>'required|string|max:80']);
        $clientSid = $request->session()->getId();
        $session = ChatSession::firstOrCreate(
            ['client_session_id' => $clientSid, 'status' => 'open'],
            ['session_key' => Str::uuid()->toString()]
        );
        $session->client_name = $request->name;
        $session->save();

        // envia uma mensagem de system de boas vindas
        $m = $session->messages()->create([
            'sender_type'=>'system','sender_name'=>'Sistema','text'=>"Olá {$session->client_name}, como posso ajudar?"
        ]);
        event(new MessageSent($m));

        return response()->json(['ok'=>true,'session_key'=>$session->session_key]);
    }

    // Histórico inicial
    public function history(Request $request, $sessionKey)
    {
        $session = ChatSession::where('session_key',$sessionKey)->firstOrFail();
        $messages = $session->messages()->get();
        return response()->json(['messages'=>$messages]);
    }

    // Cliente envia mensagem
    public function clientSend(Request $request, $sessionKey)
    {
        $request->validate(['message'=>'required|string']);
        $session = ChatSession::where('session_key',$sessionKey)->firstOrFail();

        $msg = $session->messages()->create([
            'sender_type'=>'client','sender_name'=>$session->client_name ?? 'Cliente','text'=>trim($request->message)
        ]);

        event(new MessageSent($msg));

        // Tenta atribuir agente online se necessário (automático)
        if (!$session->agent_id) {
            $agent = User::where('is_agent',true)->where('is_online',true)->first();
            if ($agent) {
                $session->agent_id = $agent->id;
                $session->ack_sent = true;
                $session->save();

                $g = $session->messages()->create([
                    'sender_type'=>'agent','sender_name'=>$agent->name,'text'=>"Olá, sou {$agent->name} e vou atendê-lo. — {$agent->name}"
                ]);
                event(new MessageSent($g));
            } else {
                if (! $session->ack_sent) {
                    $ack = $session->messages()->create([
                        'sender_type'=>'agent','sender_name'=>'Agente','text'=>'Recebi a sua mensagem. Um agente humano irá responder em breve.'
                    ]);
                    $session->ack_sent = true; $session->save();
                    event(new MessageSent($ack));
                }
            }
        }

        // Bot simples: palavras-chave
        $botReply = $this->botReply($request->message);
        if ($botReply) {
            $botMsg = $session->messages()->create([
                'sender_type'=>'bot','sender_name'=>'Bot','text'=>$botReply
            ]);
            event(new MessageSent($botMsg));
        }

        return response()->json(['ok'=>true]);
    }

    // Agente envia mensagem
    public function agentSend(Request $request, $sessionKey)
    {
        $request->validate(['message'=>'required|string']);
        $session = ChatSession::where('session_key',$sessionKey)->firstOrFail();

        $agent = auth()->user();
        $name = $agent ? $agent->name : 'Agente';

        if ($agent && !$session->agent_id) {
            $session->agent_id = $agent->id; $session->ack_sent = true; $session->save();
        }

        $msg = $session->messages()->create([
            'sender_type'=>'agent','sender_name'=>$name,'text'=>trim($request->message)
        ]);
        event(new MessageSent($msg));
        return response()->json(['ok'=>true]);
    }

    // Bot reply simples
    private function botReply($text)
    {
        $t = mb_strtolower($text);
        if (str_contains($t,'horário') || str_contains($t,'horario')) {
            return "Nosso horário é de 08h às 18h (Seg-Sex).";
        }
        if (str_contains($t,'pagamento') || str_contains($t,'pagar')) {
            return "Aceitamos cartão, MBWay e transferência bancária.";
        }
        if (str_contains($t,'entrega') || str_contains($t,'prazo')) {
            return "Prazos de entrega: 3-7 dias úteis.";
        }
        if (in_array(trim($t), ['oi','olá','ola'])) {
            return "Olá! Posso te ajudar. Escreva 'horário', 'pagamento' ou 'entrega'.";
        }
        return null;
    }
}

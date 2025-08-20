<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; // Importa o modelo User
use App\Models\User; // Importa o modelo User
use App\Models\ChatSession; // Importa o modelo ChatSession
use App\Models\Message;

class ChatController extends Controller
{
    // GET /chat/messages
    public function messages()
    {
        $sid = session()->getId();
        $messages = Message::where('session_id', $sid)->orderBy('created_at')->get(['sender', 'text', 'created_at']);
        return response()->json(['messages' => $messages]);
    }

    // GET /chat/mode
    public function mode()
    {
        return response()->json(['mode' => session('chat_mode', null)]);
    }

    // POST /chat/choose
    public function choose(Request $request)
    {
        $mode = $request->input('mode');
        if (!in_array($mode, ['bot', 'agente'])) {
            return response()->json(['error' => 'Modo inválido'], 422);
        }

        session(['chat_mode' => $mode]);
        $sid = session()->getId();

        Message::create([
            'session_id' => $sid,
            'sender'     => 'Sistema',
            'text'       => "Escolheu atendimento: " . ($mode === 'bot' ? 'Bot' : 'Agente')
        ]);

        if ($mode === 'bot') {
            Message::create([
                'session_id' => $sid,
                'sender'     => 'Bot',
                'text'       => 'Olá! Sou o assistente virtual. Digite "menu" para ver opções rápidas.'
            ]);
        } else {
            Message::create([
                'session_id' => $sid,
                'sender'     => 'Agente',
                'text'       => 'Olá! Um agente humano irá atendê-lo. Descreva o seu assunto.'
            ]);
        }

        return $this->messages();
    }

    // POST /chat/send
    public function send(Request $request)
    {
        $text = trim($request->input('message', ''));
        if ($text === '') {
            return response()->json(['error' => 'Mensagem vazia'], 422);
        }

        $sid = session()->getId();

        // cria mensagem do usuário
        Message::create([
            'session_id' => $sid,
            'sender'     => 'Você',
            'text'       => $text
        ]);

        // obtém ou cria registro de sessão
        $chatSession = ChatSession::firstOrCreate(
            ['session_id' => $sid],
            ['ack_sent' => false]
        );

        // Se já existe agente atribuído -> não mandar ACK genérico
        if ($chatSession->agent_id) {
            // NÃO enviar a mensagem "Agente: Recebi..." — o agente irá responder.
            // Se quiseres, podes avisar o cliente que "Agente X está atribuído".
            // Opcional: se quiseres que a primeira mensagem informando o cliente quem está atendendo apareça:
            if (! $chatSession->ack_sent) {
                $agent = $chatSession->agent;
                if ($agent) {
                    Message::create([
                        'session_id' => $sid,
                        'sender'     => $agent->name,
                        'text'       => "Olá, eu sou {$agent->name} e vou atendê-lo. — {$agent->name}"
                    ]);
                }
                $chatSession->ack_sent = true;
                $chatSession->save();
            }
        } else {
            // nenhum agente atribuído: tenta atribuir automaticamente a um agente ONLINE
            $agent = User::where('is_agent', true)->where('is_online', true)->first();
            if ($agent) {
                // atribui e notifica com nome assinado
                $chatSession->agent_id = $agent->id;
                $chatSession->ack_sent = true;
                $chatSession->save();

                Message::create([
                    'session_id' => $sid,
                    'sender'     => $agent->name,
                    'text'       => "Olá, sou {$agent->name}. Fui atribuído para atendê-lo e vou responder em breve. — {$agent->name}"
                ]);
            } else {
                // sem agentes online: enviar o ACK genérico apenas uma vez
                if (! $chatSession->ack_sent) {
                    Message::create([
                        'session_id' => $sid,
                        'sender'     => 'Agente',
                        'text'       => 'Recebi a sua mensagem. Um agente humano irá responder em breve.'
                    ]);
                    $chatSession->ack_sent = true;
                    $chatSession->save();
                }
                // se ack_sent == true, não faz nada
            }
        }

        // Retorna todas as mensagens da sessão (ordenadas)
        $messages = Message::where('session_id', $sid)->orderBy('created_at')->get(['sender', 'text', 'created_at']);
        return response()->json(['messages' => $messages]);
    }

    // POST /chat/clear  (opcional, útil em dev)
    public function clear()
    {
        $sid = session()->getId();
        Message::where('session_id', $sid)->delete();
        session()->forget('chat_mode');
        return response()->json(['ok' => true]);
    }

    // Lógica simple do bot (expandível)
    private function botReply($input)
    {
        $cmd = strtolower(trim($input));

        if ($cmd === 'menu') {
            return "Opções:\n1) Produtos\n2) Suporte técnico\n3) Pagamentos\nDigite o número da opção ou escreva a sua pergunta.";
        }

        if ($cmd === '1' || str_contains($cmd, 'produt')) {
            return "Temos A, B e C. Qual queres saber mais?";
        }

        if ($cmd === '2' || str_contains($cmd, 'suporte')) {
            return "Descreve o problema técnico: ex. erro, login, pagamento.";
        }

        if ($cmd === '3' || str_contains($cmd, 'pagam')) {
            return "Pagamentos: aceitamos cartão, MBWay e transferência.";
        }

        if (str_contains($cmd, 'olá') || str_contains($cmd, 'oi')) {
            return "Olá! Escreve 'menu' para ver opções rápidas.";
        }

        return "Desculpe, não entendi. Escreva 'menu' para ver opções rápidas.";
    }
}

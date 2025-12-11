<?php

namespace App\Http\Controllers;

use App\Models\ChatSession;
use Illuminate\Http\Request;


class AgentController extends Controller
{
    // view do painel do agente
    public function index()
    {
        return view('agent.panel');
    }

    // lista sessões abertas
    public function sessions()
    {
        $sessions = ChatSession::where('status','open')
            ->withCount('messages')
            ->with('agent:id,name')
            ->orderByDesc('updated_at')
            ->get(['session_key','client_name','agent_id','updated_at']);
        return response()->json(['sessions'=>$sessions]);
    }

    // abre sessão e retorna histórico
    public function open($sessionKey)
    {
        $session = ChatSession::where('session_key',$sessionKey)->firstOrFail();
        // se agente autenticado e sessão sem agent_id, atribui automaticamente
        if (auth()->check() && ! $session->agent_id) {
            $session->agent_id = auth()->id();
            $session->ack_sent = true;
            $session->save();

            $m = $session->messages()->create([
                'sender_type'=>'agent','sender_name'=>auth()->user()->name,'text'=>"Olá, sou ".auth()->user()->name." e vou assumir esta conversa."
            ]);
            event(new \App\Events\MessageSent($m));
        }

        $messages = $session->messages()->get();
        return response()->json(['session'=>$session,'messages'=>$messages]);
    }
}

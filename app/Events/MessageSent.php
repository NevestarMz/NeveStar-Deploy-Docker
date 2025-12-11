<?php

namespace App\Events;

use App\Models\ChatMessage;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class MessageSent implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;

    public $payload;
    protected $sessionKey;

    public function __construct(ChatMessage $message)
    {
        $this->payload = [
            'id' => $message->id,
            'sender_type' => $message->sender_type,
            'sender_name' => $message->sender_name,
            'text' => $message->text,
            'created_at' => $message->created_at->toDateTimeString()
        ];
        $this->sessionKey = $message->session->session_key;
    }

    public function broadcastOn(): Channel
    {
        return new Channel('chat.'.$this->sessionKey);
    }

    public function broadcastAs(): string
    {
        return 'MessageSent';
    }
}

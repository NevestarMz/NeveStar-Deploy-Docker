<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatSession extends Model
{
    protected $fillable = [
        'session_key','client_session_id','client_name','agent_id','ack_sent','status'
    ];

    public function messages()
    {
        return $this->hasMany(ChatMessage::class)->orderBy('created_at');
    }

    public function agent()
    {
        return $this->belongsTo(\App\Models\User::class,'agent_id');
    }
}

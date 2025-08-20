<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatSession extends Model
{
    protected $fillable = ['session_id', 'agent_id', 'ack_sent'];

    public function agent()
    {
        return $this->belongsTo(\App\Models\User::class, 'agent_id');
    }
}

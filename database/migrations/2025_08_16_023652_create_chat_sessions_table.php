<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('chat_sessions', function (Blueprint $table) {
            $table->id();
            $table->string('session_id')->unique()->index();
            $table->foreignId('agent_id')->nullable()->constrained('users')->nullOnDelete();
            $table->boolean('ack_sent')->default(false); // ack "Agente responderá em breve" já enviado?
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('chat_sessions');
    }
};

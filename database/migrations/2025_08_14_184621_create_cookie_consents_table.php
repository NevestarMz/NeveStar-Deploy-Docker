<?php

// database/migrations/xxxx_xx_xx_create_cookie_consents_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('cookie_consents', function (Blueprint $table) {
            $table->id();
            $table->string('cookie_id')->nullable()->index(); // id do visitante (uuid)
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->json('consent')->nullable(); // {"necessary":true,"analytics":false,"marketing":false}
            $table->ipAddress('ip')->nullable();
            $table->string('user_agent')->nullable();
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('cookie_consents');
    }
};

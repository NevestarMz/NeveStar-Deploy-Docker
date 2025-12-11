<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('service_requests', function (Blueprint $table) {
            $table->id();
            $table->string('clientName');
            $table->string('clientEmail');
            $table->string('clientPhone');
            $table->string('serviceName');
            $table->decimal('price', 10, 2);
            $table->string('couponCode')->nullable();
            $table->text('comment')->nullable();
            $table->decimal('iva', 10, 2);
            $table->decimal('totalPrice', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_requests');
    }
};

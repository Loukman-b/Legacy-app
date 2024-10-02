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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('event_name'); // Kolom voor de naam van het evenement
            $table->dateTime('event_date'); // Kolom voor de datum van het evenement
            $table->integer('price'); // Kolom voor de prijs van het ticket
            $table->integer('quantity'); // Kolom voor de hoeveelheid tickets
            $table->timestamps(); // Kolommen voor created_at en updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets'); // Verwijder de tickets-tabel
    }
};

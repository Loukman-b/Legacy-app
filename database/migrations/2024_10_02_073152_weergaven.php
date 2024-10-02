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
        Schema::create('handleidingen', function (Blueprint $table) {
            $table->unsignedInteger('weergaven')->default(0); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('handleidingen', function (Blueprint $table) {
            $table->dropColumn('weergaven');
        });
    }
};


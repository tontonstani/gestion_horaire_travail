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
        Schema::create('quart_travails', function (Blueprint $table) {
            $table->id();
            $table->datetime('debut_quart',0);
            $table->datetime('fin_quart',0);
            $table->integer('id_employe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quart_travails');
    }
};

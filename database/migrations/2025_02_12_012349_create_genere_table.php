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
        Schema::create('genere', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('universe_id');
            $table->foreign('universe_id')->references('id')->on('universe');
            $table->unsignedBigInteger('superheroe_id');
            $table->foreign('superheroe_id')->references('id')->on('superheroes');
            $table->string('gender', 6);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genere');
    }
};

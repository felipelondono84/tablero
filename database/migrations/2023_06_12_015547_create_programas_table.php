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
        Schema::create('programas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 150);
            $table->string('peso',20);
            $table->string('descripcion',255);
            $table->unsignedBigInteger('hechos_id');
            $table->unsignedBigInteger('politica_id');
            $table->unsignedBigInteger('estrategias_id');
            $table->timestamps();

            $table->foreign('hechos_id')->references('id')->on('hechos');
            $table->foreign('politica_id')->references('id')->on('politicas');
         
            $table->foreign('estrategias_id')->references('id')->on('estrategias');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programas');
    }
};

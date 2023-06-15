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
        Schema::create('metas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_meta', 150);
            $table->string('nombre', 150);
            $table->string('indicador', 255);
            $table->string('peso',20);
            $table->string('tipo_indicador',150);
            $table->string('linea', 150);
            $table->date('ano');
            $table->string('meta1', 150);
            $table->string('meta2', 150);
            $table->string('meta3', 150);
            $table->string('meta4', 150);
            $table->string('metatotal', 150);
            $table->string('recurso1', 150);
            $table->string('recurso2', 150);
            $table->string('recurso3', 150);
            $table->string('recurso4', 150);
            $table->string('recursototal', 150);
            $table->unsignedBigInteger('hechos_id');
            $table->unsignedBigInteger('politica_id');
            $table->unsignedBigInteger('estrategia_id');
            $table->unsignedBigInteger('programa_id');
            $table->timestamps();

            $table->foreign('hechos_id')->references('id')->on('hechos');
            $table->foreign('politica_id')->references('id')->on('politicas');
         
            $table->foreign('estrategia_id')->references('id')->on('estrategias');
            $table->foreign('programa_id')->references('id')->on('programas');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metas');
    }
};

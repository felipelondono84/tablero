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
        Schema::create('actividades', function (Blueprint $table) {
            $table->id();
            $table->string('meta_cumplida', 150);
            $table->string('actividad', 150);
            $table->string('tipo_evidencia', 255);
            $table->unsignedBigInteger('meta_id');
            $table->timestamps();
            
            $table->foreign('meta_id')->references('id')->on('metas');
         
            
            
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actividades');
    }
};

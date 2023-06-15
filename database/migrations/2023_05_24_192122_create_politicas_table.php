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
        Schema::create('politicas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 150);
            $table->string('peso',20);
            $table->string('descripcion',255);
            $table->unsignedBigInteger('hechos_id');

            $table->timestamps();

            $table->foreign('hechos_id')->references('id')->on('hechos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('politicas');
    }
};

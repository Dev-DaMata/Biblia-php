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
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->integer('posicao');
            $table->string('nome');
            $table->string('abreviacao');
            $table->unsignedBigInteger('Testamento_id'); //para acidionar fk
            $table->timestamps();



            $table->foreign('Testamento_id')->references('id')->on('testamentos');//referenciando a fk
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};

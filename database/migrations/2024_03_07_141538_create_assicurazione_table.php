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
        Schema::create('assicurazione', function (Blueprint $table) {
	        $table->id();
	        $table->unsignedBigInteger('id_veicolo');
	        $table->string('targa', 256)->nullable();
	        $table->integer('anno', false, true)->length(16)->nullable();
	        $table->date('data_pagamento')->nullable();
	        $table->date('inizio_validita')->nullable();
	        $table->date('fine_validita')->nullable();
	        $table->integer('importo', false, true)->length(16)->nullable();
	        $table->string('agenzia', 256)->nullable();
	        $table->string('polizza', 256)->nullable();
	        $table->set('tipo_scadenza', ['Quadrimestrale', 'Semestrale', 'Annuale'])->nullable();
	        $table->timestamps();
	        
	        $table->foreign('id_veicolo')->references('id')->on('veicolo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assicurazione');
    }
};

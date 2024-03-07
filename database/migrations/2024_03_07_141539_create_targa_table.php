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
        Schema::create('targa', function (Blueprint $table) {
	        $table->id();
	        $table->unsignedBigInteger('id_veicolo');
	        $table->string('targa', 10);
	        $table->date('data_immatricolazione')->nullable();
	        $table->timestamps();
	        $table->set('attiva', ['0', '1']);
	        
	        $table->foreign('id_veicolo')->references('id')->on('veicolo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('targa');
    }
};

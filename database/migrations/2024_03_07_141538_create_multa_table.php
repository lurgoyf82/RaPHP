<?php
	
	use Illuminate\Database\Migrations\Migration;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Support\Facades\Schema;
	
	return new class extends Migration {
		/**
		 * Run the migrations.
		 */
		public function up(): void
		{
			Schema::create('multa', function (Blueprint $table) {
				$table->id();
				$table->unsignedBigInteger('id_veicolo');
				$table->date('data_multa');
				$table->decimal('importo', 10, 2);
				$table->text('descrizione')->nullable();
				$table->boolean('pagato')->default(0);
				$table->date('data_pagamento')->nullable();
				$table->timestamps();
				
				$table->foreign('id_veicolo')->references('id')->on('veicolo');
			});
		}
		
		/**
		 * Reverse the migrations.
		 */
		public function down(): void
		{
			Schema::dropIfExists('multa');
		}
	};

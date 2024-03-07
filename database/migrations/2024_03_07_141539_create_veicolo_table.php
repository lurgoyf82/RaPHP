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
			Schema::create('veicolo', function (Blueprint $table) {
				$table->id();
				$table->unsignedBigInteger('id_proprietario')->nullable();
				$table->unsignedBigInteger('id_tipo_veicolo')->nullable();
				$table->unsignedBigInteger('id_tipo_allestimento')->nullable();
				$table->unsignedBigInteger('id_marca')->nullable();
				$table->unsignedBigInteger('id_modello')->nullable();
				$table->unsignedBigInteger('id_tipo_asse')->nullable();
				$table->unsignedBigInteger('id_tipo_cambio')->nullable();
				$table->unsignedBigInteger('id_alimentazione')->nullable();
				$table->unsignedBigInteger('id_destinazione_uso')->nullable();
				$table->string('colore', 256)->nullable();
				$table->decimal('lunghezza_esterna', 10, 2)->unsigned()->nullable();
				$table->decimal('larghezza_esterna', 10, 2)->unsigned()->nullable();
				$table->decimal('massa', 10, 2)->unsigned()->nullable();
				$table->integer('portata')->unsigned()->nullable();
				$table->integer('cilindrata')->unsigned()->nullable();
				$table->integer('potenza')->unsigned()->nullable();
				$table->integer('numero_assi')->unsigned()->nullable();
				$table->timestamps();
				
				// Foreign keys and their constraints
				$table->foreign('id_proprietario')->references('id')->on('impostazione_proprietario_veicolo')->onDelete('set null')->onUpdate('cascade');
				$table->foreign('id_tipo_veicolo')->references('id')->on('impostazione_tipo_veicolo')->onDelete('set null')->onUpdate('cascade');
				$table->foreign('id_tipo_allestimento')->references('id')->on('impostazione_allestimento_veicolo')->onDelete('set null')->onUpdate('cascade');
				$table->foreign('id_marca')->references('id')->on('impostazione_marca_veicolo')->onDelete('set null')->onUpdate('cascade');
				$table->foreign('id_modello')->references('id')->on('impostazione_modello_veicolo')->onDelete('set null')->onUpdate('cascade');
				$table->foreign('id_tipo_asse')->references('id')->on('impostazione_asse_veicolo')->onDelete('set null')->onUpdate('cascade');
				$table->foreign('id_tipo_cambio')->references('id')->on('impostazione_cambio_veicolo')->onDelete('set null')->onUpdate('cascade');
				$table->foreign('id_alimentazione')->references('id')->on('impostazione_alimentazione_veicolo')->onDelete('set null')->onUpdate('cascade');
				$table->foreign('id_destinazione_uso')->references('id')->on('impostazione_destinazione_veicolo')->onDelete('set null')->onUpdate('cascade');
				
			});
			
		}
		
		/**
		 * Reverse the migrations.
		 */
		public function down(): void
		{
			Schema::dropIfExists('veicolo');
		}
	};

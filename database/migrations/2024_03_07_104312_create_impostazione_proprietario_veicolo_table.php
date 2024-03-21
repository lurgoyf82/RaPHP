<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {
        /**
         * Run the migrations.
         */
        public function up(): void
        {
            Schema::create('impostazione_proprietario_veicolo', function (Blueprint $table) {
                $table->id(); // Equivalent to `bigint(20) unsigned NOT NULL AUTO_INCREMENT`
                $table->string('nome', 256); // Equivalent to `varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL`
                $table->timestamps(); // Creates `created_at` and `updated_at` columns
            });

            DB::table('impostazione_proprietario_veicolo')->insert([
                ['id' => '1', 'nome' => 'TOP CAR', 'created_at' => NOW(), 'updated_at' => NOW()],
                ['id' => '2', 'nome' => 'AUTOMOTIVE', 'created_at' => NOW(), 'updated_at' => NOW()],
                ['id' => '3', 'nome' => 'MOVIMOB', 'created_at' => NOW(), 'updated_at' => NOW()],
                ['id' => '4', 'nome' => 'RL2', 'created_at' => NOW(), 'updated_at' => NOW()],
                ['id' => '5', 'nome' => 'VENETA LOGISTIC', 'created_at' => NOW(), 'updated_at' => NOW()],
                ['id' => '6', 'nome' => 'SOLUZIONE VEICOLARE', 'created_at' => NOW(), 'updated_at' => NOW()],
                ['id' => '7', 'nome' => 'B7', 'created_at' => NOW(), 'updated_at' => NOW()],
                ['id' => '8', 'nome' => 'GAIA78', 'created_at' => NOW(), 'updated_at' => NOW()],
                ['id' => '9', 'nome' => 'LEASEPLAN', 'created_at' => NOW(), 'updated_at' => NOW()],
                ['id' => '10', 'nome' => 'DINA BIRIIAC', 'created_at' => NOW(), 'updated_at' => NOW()],
                ['id' => '11', 'nome' => 'Bentrack', 'created_at' => NOW(), 'updated_at' => NOW()]
            ]);
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('impostazione_proprietario_veicolo');
        }
    };

    //    export class impostazione_proprietario_veicolo
    //    {
    //    constructor(
    //        public readonly id: number,
    //            public nome: string
    //        ) { }
    //    }

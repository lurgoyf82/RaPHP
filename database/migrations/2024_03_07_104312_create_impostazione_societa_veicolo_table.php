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
        Schema::create('impostazione_societa_veicolo', function (Blueprint $table) {
            $table->id(); // Equivalent to `bigint(20) unsigned NOT NULL AUTO_INCREMENT`
            $table->string('nome', 256); // Equivalent to `varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL`
            $table->timestamps(); // Creates `created_at` and `updated_at` columns
        });

        // Insert default data directly after creating the table
        DB::table('impostazione_societa_veicolo')->insert([
            ['id' => 1, 'nome' => 'TOP CAR', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'nome' => 'AUTOMOTIVE', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'nome' => 'MOVIMOB', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'nome' => 'RL2', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'nome' => 'VENETA LOGISTIC', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'nome' => 'SOLUZIONE VEICOLARE', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'nome' => 'B7', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'nome' => 'GAIA78', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'nome' => 'LEASEPLAN', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'nome' => 'DINA BIRIIAC', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('impostazione_societa_veicolo');
    }
};

//    export class impostazione_societa_veicolo
//    {
//    constructor(
//        public readonly id: number,
//            public nome: string
//        ) { }
//    }

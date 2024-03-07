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
        Schema::create('impostazione_tipo_veicolo', function (Blueprint $table) {
            $table->id(); // Equivalent to `bigint(20) unsigned NOT NULL AUTO_INCREMENT`
            $table->string('nome', 256); // Equivalent to `varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL`
            $table->timestamps(); // Creates `created_at` and `updated_at` columns
        });

        // Insert default data directly after creating the table
        DB::table('impostazione_tipo_veicolo')->insert([
            ['id' => 1, 'nome' => 'SEMIRIMORCHIO', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'nome' => 'TRATTORE', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'nome' => 'AUTOVETTURA', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'nome' => 'MOTRICE', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'nome' => 'FURGONATO', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'nome' => 'CASSONATO', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'nome' => 'CASSONATO FRIGO', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'nome' => 'CASSONATO 250', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'nome' => 'CARROATTREZZI', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'nome' => 'CICLOMOTORE', 'created_at' => now(), 'updated_at' => now()]
        ]);


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('impostazione_tipo_veicolo');
    }
};

//    export class impostazione_tipo_veicolo
//    {
//    constructor(
//        public readonly id: number,
//            public nome: string
//        ) { }
//    }

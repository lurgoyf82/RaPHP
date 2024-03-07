<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('impostazione_cambio_veicolo', function (Blueprint $table) {
            $table->id(); // Equivalent to `bigint(20) unsigned NOT NULL AUTO_INCREMENT`
            $table->string('nome', 256); // Equivalent to `varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL`
            $table->timestamps(); // Creates `created_at` and `updated_at` columns
        });

        // Insert default data directly after creating the table
        DB::table('impostazione_cambio_veicolo')->insert([
            ['id' => 1, 'nome' => 'MECCANICO', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'nome' => 'AUTOMATICO', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'nome' => '0', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('impostazione_cambio_veicolo');
    }
};

    //    export class impostazione_cambio_veicolo
    //    {
    //    constructor(
    //        public readonly id: number,
    //            public nome: string
    //        ) { }
    //    }

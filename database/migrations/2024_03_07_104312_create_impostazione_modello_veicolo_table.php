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
        Schema::create('impostazione_modello_veicolo', function (Blueprint $table) {
            $table->id(); // Equivalent to `bigint(20) unsigned NOT NULL AUTO_INCREMENT`
            $table->string('nome', 256); // Equivalent to `varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL`
            $table->timestamps(); // Creates `created_at` and `updated_at` columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('impostazione_modello_veicolo');
    }
};

    //    export class impostazione_modello_veicolo
    //    {
    //    constructor(
    //        public readonly id: number,
    //            public nome: string
    //        ) { }
    //    }

<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {
        /**
         * Run the migrations.
         */
        public function up()
        {
            Schema::create('impostazione_allestimento_veicolo', function (Blueprint $table) {
                $table->id(); // Equivalent to `bigint(20) unsigned NOT NULL AUTO_INCREMENT`
                $table->string('nome', 256); // Equivalent to `varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL`
                $table->timestamps(); // Creates `created_at` and `updated_at` columns
            });


            // Insert default data directly after creating the table
            DB::table('impostazione_allestimento_veicolo')->insert([
                ['id' => 1, 'nome' => 'CENTINATO', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 2, 'nome' => 'NO', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 3, 'nome' => 'RIBALTABILE', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 4, 'nome' => 'CITY VAN', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 5, 'nome' => 'STANDARD', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 6, 'nome' => 'PASSO CORTO', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 7, 'nome' => 'PASSO MEDIO', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 8, 'nome' => 'FRIGO FNA CON SPONDA', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 9, 'nome' => 'PASSO LUNGO', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 10, 'nome' => 'FRCX', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 11, 'nome' => 'FRC', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 12, 'nome' => 'XXL', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 13, 'nome' => 'TELONATO CON SPONDA', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 14, 'nome' => 'CON SPONDA', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 15, 'nome' => 'FRIGO FNA', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 16, 'nome' => 'FRIGO FRC', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 17, 'nome' => 'FRCX CON SPONDA', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 18, 'nome' => 'FRC CON SPONDA', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 19, 'nome' => 'FNA CON SPONDA', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 20, 'nome' => 'BOXATO CON SPONDA', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 21, 'nome' => 'FRBX', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 22, 'nome' => 'FNA', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 23, 'nome' => 'MINICAR', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 24, 'nome' => 'CABINATO', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 25, 'nome' => 'PORTACONTAINER', 'created_at' => now(), 'updated_at' => now()],
                ['id' => 26, 'nome' => 'CARRELLONE', 'created_at' => now(), 'updated_at' => now()]
            ]);

        }

        public function down()
        {
            Schema::dropIfExists('impostazione_allestimento_veicolo');
        }
    };

    //    export class impostazione_allestimento_veicolo
    //    {
    //    constructor(
    //        public readonly id: number,
    //            public nome: string
    //        ) { }
    //    }

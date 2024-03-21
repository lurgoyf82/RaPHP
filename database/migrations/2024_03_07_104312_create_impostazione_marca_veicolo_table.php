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
        Schema::create('impostazione_marca_veicolo', function (Blueprint $table) {
            $table->id(); // Equivalent to `bigint(20) unsigned NOT NULL AUTO_INCREMENT`
            $table->string('nome', 256); // Equivalent to `varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL`
            $table->timestamps(); // Creates `created_at` and `updated_at` columns
        });

        DB::table('impostazione_marca_veicolo')->insert([
            ['id' => '1' , 'nome' => 'CARDI' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '2' , 'nome' => 'SCANIA' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '3' , 'nome' => 'FORD' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '4' , 'nome' => 'IVECO' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '5' , 'nome' => 'PIAGGIO ' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '6' , 'nome' => 'FIAT' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '7' , 'nome' => 'MERCEDES BENZ' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '8' , 'nome' => 'NISSAN' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '9' , 'nome' => 'RENAULT' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '10' , 'nome' => 'MAN' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '11' , 'nome' => 'MITSUBISHI' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '12' , 'nome' => 'SMART' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '13' , 'nome' => 'VOLKSWAGEN' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '14' , 'nome' => 'PEUGEOT' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '15' , 'nome' => 'OPEL' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '16' , 'nome' => 'AUDI' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '17' , 'nome' => 'MINI' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '18' , 'nome' => 'LAMBORGHINI' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '19' , 'nome' => 'DAF' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '20' , 'nome' => 'ALFA ROMEO' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '21' , 'nome' => 'JEEP' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '22' , 'nome' => 'LAND ROVER' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '23' , 'nome' => 'PORSCHE ' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '24' , 'nome' => 'CITROEN' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '25' , 'nome' => 'CORVETTE' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '26' , 'nome' => 'SEAT' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '27' , 'nome' => 'LIGIER' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '28' , 'nome' => 'AIXAM' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '29' , 'nome' => 'LECITRAILER' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '30' , 'nome' => 'OMT' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '31' , 'nome' => 'VLASTUIN' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '32' , 'nome' => 'WIELTON' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '33' , 'nome' => 'BARTOLETTI' , 'created_at' => NOW() , 'updated_at' => NOW() ],
            ['id' => '34' , 'nome' => 'KRONE' , 'created_at' => NOW() , 'updated_at' => NOW() ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('impostazione_marca_veicolo');
    }
};

    //    export class impostazione_marca_veicolo
    //    {
    //    constructor(
    //        public readonly id: number,
    //            public nome: string
    //        ) { }
    //    }

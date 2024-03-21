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
            Schema::create('impostazione_modello_veicolo', function (Blueprint $table) {
                $table->id(); // Equivalent to `bigint(20) unsigned NOT NULL AUTO_INCREMENT`
                $table->string('nome', 256); // Equivalent to `varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL`
                $table->unsignedBigInteger('id_marca')->nullable();
                $table->timestamps(); // Creates `created_at` and `updated_at` columns
            });

            DB::table('impostazione_modello_veicolo')->insert([
                ['id' => '1' , 'nome' => '39S3SP' , 'id_marca' => '1' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '2' , 'nome' => 'R124LA' , 'id_marca' => '2' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '3' , 'nome' => 'FOCUS' , 'id_marca' => '3' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '4' , 'nome' => 'MT180E30' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '5' , 'nome' => 'PORTER' , 'id_marca' => '5' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '6' , 'nome' => 'DAILY 35/E4' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '7' , 'nome' => 'DUCATO' , 'id_marca' => '6' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '8' , 'nome' => 'VITO 115 DF LONG' , 'id_marca' => '7' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '9' , 'nome' => 'DAILY 35S12' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '10' , 'nome' => 'AGMB411CDIT35' , 'id_marca' => '7' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '11' , 'nome' => 'SCUDO' , 'id_marca' => '6' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '12' , 'nome' => 'DAILY 35J12' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '13' , 'nome' => 'ATLEON' , 'id_marca' => '8' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '14' , 'nome' => 'KANGOO' , 'id_marca' => '9' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '15' , 'nome' => 'SPRINTER 309 DF 37/35' , 'id_marca' => '7' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '16' , 'nome' => 'DAILY 35C15' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '17' , 'nome' => 'VITO 109 DF LONG' , 'id_marca' => '7' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '18' , 'nome' => 'VITO 109 DF COMPACT' , 'id_marca' => '7' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '19' , 'nome' => 'SPRINTER 415 DT 43/35' , 'id_marca' => '7' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '20' , 'nome' => 'DAILY 35C13' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '21' , 'nome' => 'AG 18 FT' , 'id_marca' => '10' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '22' , 'nome' => 'DAILY 35-10.1' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '23' , 'nome' => 'DAILY 35C12' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '24' , 'nome' => 'SPRINTER 209 DF 32/30' , 'id_marca' => '7' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '25' , 'nome' => 'TRANSIT' , 'id_marca' => '3' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '26' , 'nome' => 'V.I. 56ANA1-150' , 'id_marca' => '9' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '27' , 'nome' => 'CANTER' , 'id_marca' => '11' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '28' , 'nome' => 'V.I. 56ANA1-130' , 'id_marca' => '9' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '29' , 'nome' => 'CONNECT' , 'id_marca' => '3' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '30' , 'nome' => '65C/60/E4' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '31' , 'nome' => 'SPRINTER 411 CDI T 35' , 'id_marca' => '7' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '32' , 'nome' => 'FOR TWO CABRIO CDI' , 'id_marca' => '12' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '33' , 'nome' => 'DAILY 40C12' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '34' , 'nome' => 'SPRINTER 311 DF 37/35' , 'id_marca' => '7' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '35' , 'nome' => 'CABSTAR' , 'id_marca' => '8' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '36' , 'nome' => 'SPRINTER 211 DF 37/30' , 'id_marca' => '7' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '37' , 'nome' => 'DAILY 35C18' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '38' , 'nome' => 'CRAFTER' , 'id_marca' => '13' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '39' , 'nome' => 'PARTNER' , 'id_marca' => '14' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '40' , 'nome' => 'AG906' , 'id_marca' => '7' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '41' , 'nome' => 'DAILY 29L12' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '42' , 'nome' => 'TRANSIT 300 M VAN 2.2' , 'id_marca' => '3' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '43' , 'nome' => 'COMBO VAN NGT' , 'id_marca' => '15' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '44' , 'nome' => 'SPRINTER 906/TC-FO' , 'id_marca' => '7' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '45' , 'nome' => 'BOXER' , 'id_marca' => '14' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '46' , 'nome' => 'SPRINTER 313 DF 37/35' , 'id_marca' => '7' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '47' , 'nome' => 'EXPERT' , 'id_marca' => '14' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '48' , 'nome' => 'DAILY 29L10' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '49' , 'nome' => 'DAILY 35C14' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '50' , 'nome' => 'M812' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '51' , 'nome' => 'DAILY 35S11' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '52' , 'nome' => 'DAILY 35SE4' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '53' , 'nome' => 'SPRINTER 416 CDI T' , 'id_marca' => '7' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '54' , 'nome' => 'MASTER VG VGU6J' , 'id_marca' => '9' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '55' , 'nome' => 'DOBLO\'' , 'id_marca' => '6' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '56' , 'nome' => 'BRAVO' , 'id_marca' => '6' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '57' , 'nome' => 'DAILY 35C17' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '58' , 'nome' => 'DUCATO 250 CMMFC' , 'id_marca' => '6' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '59' , 'nome' => 'ML100E17' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '60' , 'nome' => 'MOVANO' , 'id_marca' => '15' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '61' , 'nome' => 'VIVARO' , 'id_marca' => '15' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '62' , 'nome' => 'SPRINTER' , 'id_marca' => '7' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '63' , 'nome' => 'A1' , 'id_marca' => '16' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '64' , 'nome' => 'MOKKA' , 'id_marca' => '15' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '65' , 'nome' => 'TRANSIT 85 T300' , 'id_marca' => '3' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '66' , 'nome' => 'SPRINTER 906BA50' , 'id_marca' => '7' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '67' , 'nome' => 'TGX 18.480T' , 'id_marca' => '10' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '68' , 'nome' => 'TRANSIT 85 T280' , 'id_marca' => '3' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '69' , 'nome' => 'TGX' , 'id_marca' => '10' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '70' , 'nome' => 'SPRINTER 906BA35G' , 'id_marca' => '7' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '71' , 'nome' => 'DAILY 35S14' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '72' , 'nome' => 'FOR TWO' , 'id_marca' => '12' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '73' , 'nome' => 'FIORINO' , 'id_marca' => '6' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '74' , 'nome' => 'SPRINTER (906BB35G)' , 'id_marca' => '7' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '75' , 'nome' => 'DUCATO 250 DGMFC' , 'id_marca' => '6' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '76' , 'nome' => 'DUCATO 250 FRMFA' , 'id_marca' => '6' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '77' , 'nome' => 'MASTER' , 'id_marca' => '9' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '78' , 'nome' => 'CLASSE V' , 'id_marca' => '7' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '79' , 'nome' => 'AD910S27' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '80' , 'nome' => 'COOPER D' , 'id_marca' => '17' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '81' , 'nome' => 'DAILY 35S13' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '82' , 'nome' => 'SPRINTER 413 CDI T 35' , 'id_marca' => '7' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '83' , 'nome' => 'SM1V 4542A 36' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '84' , 'nome' => 'TM1V 4542A 36' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '85' , 'nome' => 'TRANSIT L3H2' , 'id_marca' => '3' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '86' , 'nome' => 'PUNTO' , 'id_marca' => '6' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '87' , 'nome' => 'HD001' , 'id_marca' => '9' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '88' , 'nome' => 'COOPER D CABRIO' , 'id_marca' => '17' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '89' , 'nome' => 'VITO TOURER' , 'id_marca' => '7' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '90' , 'nome' => 'TIGUAN' , 'id_marca' => '13' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '91' , 'nome' => 'TRAFIC' , 'id_marca' => '9' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '92' , 'nome' => 'Q5' , 'id_marca' => '16' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '93' , 'nome' => 'HURACAN LP610' , 'id_marca' => '18' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '94' , 'nome' => 'FOR FOUR COUPE\'' , 'id_marca' => '12' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '95' , 'nome' => 'IS70CI2BA' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '96' , 'nome' => 'DUCATO 250 C7MFB' , 'id_marca' => '6' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '97' , 'nome' => 'MEGANE' , 'id_marca' => '9' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '98' , 'nome' => 'DUCATO 250 B7MFB' , 'id_marca' => '6' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '99' , 'nome' => 'Q5 SPORT' , 'id_marca' => '16' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '100' , 'nome' => 'CLIO' , 'id_marca' => '9' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '101' , 'nome' => 'KADJAR' , 'id_marca' => '9' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '102' , 'nome' => 'DAILY IS35CI2AA 35C15' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '103' , 'nome' => 'CORSA' , 'id_marca' => '15' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '104' , 'nome' => 'XF480' , 'id_marca' => '19' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '105' , 'nome' => 'GLA 200' , 'id_marca' => '7' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '106' , 'nome' => 'STELVIO' , 'id_marca' => '20' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '107' , 'nome' => '3008' , 'id_marca' => '14' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '108' , 'nome' => 'COMPASS' , 'id_marca' => '21' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '109' , 'nome' => 'MASTER VG UM9T' , 'id_marca' => '9' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '110' , 'nome' => 'KARL ROCKS' , 'id_marca' => '15' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '111' , 'nome' => 'DAILY IS70CI2BA 70C18' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '112' , 'nome' => 'DAILY IS35CI2AA 35C14' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '113' , 'nome' => 'ML80E21' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '114' , 'nome' => 'CROSSLAND X' , 'id_marca' => '15' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '115' , 'nome' => 'Q3 ' , 'id_marca' => '16' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '116' , 'nome' => 'TOURNEO CUSTOM' , 'id_marca' => '3' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '117' , 'nome' => 'SPRINTER F32/33 311' , 'id_marca' => '7' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '118' , 'nome' => 'SPRINTER L3H2' , 'id_marca' => '7' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '119' , 'nome' => 'RANG ROVER EVOQUE' , 'id_marca' => '22' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '120' , 'nome' => 'SQ8' , 'id_marca' => '16' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '121' , 'nome' => '75E' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '122' , 'nome' => 'AMG GT 43' , 'id_marca' => '7' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '123' , 'nome' => 'Q3 SPORTBACK' , 'id_marca' => '16' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '124' , 'nome' => 'MKD 61 ME' , 'id_marca' => '10' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '125' , 'nome' => 'MACAN GTS' , 'id_marca' => '23' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '126' , 'nome' => 'C3 AIRCROSS' , 'id_marca' => '24' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '127' , 'nome' => 'C8' , 'id_marca' => '25' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '128' , 'nome' => 'H4EN3' , 'id_marca' => '19' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '129' , 'nome' => 'ML110E18/P' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '130' , 'nome' => 'RENEGADE' , 'id_marca' => '21' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '131' , 'nome' => 'TARRACO' , 'id_marca' => '26' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '132' , 'nome' => 'IG120EL2BA' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '133' , 'nome' => 'CAYENNE E-HYBRID ' , 'id_marca' => '23' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '134' , 'nome' => '208' , 'id_marca' => '14' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '135' , 'nome' => 'PANDA' , 'id_marca' => '6' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '136' , 'nome' => '992' , 'id_marca' => '23' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '137' , 'nome' => 'DAILY 35C16' , 'id_marca' => '4' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '138' , 'nome' => 'A1 SPORTBACK' , 'id_marca' => '16' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '139' , 'nome' => 'A3 SPORTBACK' , 'id_marca' => '16' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '140' , 'nome' => 'JS50' , 'id_marca' => '27' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '141' , 'nome' => 'SV 43 RF' , 'id_marca' => '28' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '142' , 'nome' => 'JS60' , 'id_marca' => '27' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '143' , 'nome' => '2E20 03CNN' , 'id_marca' => '29' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '144' , 'nome' => '3ST01-PE' , 'id_marca' => '30' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '145' , 'nome' => 'D-TEC F DBAA' , 'id_marca' => '31' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '146' , 'nome' => 'NS34P' , 'id_marca' => '32' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '147' , 'nome' => 'SR1E 03CNN' , 'id_marca' => '29' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '148' , 'nome' => '48 SF 15' , 'id_marca' => '33' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '149' , 'nome' => 'SD01 27 B06PN0' , 'id_marca' => '34' , 'created_at' => NOW() , 'updated_at' => NOW() ],
                ['id' => '150' , 'nome' => 'SDP 27' , 'id_marca' => '34' , 'created_at' => NOW() , 'updated_at' => NOW() ]
            ]);
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

<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;


    class Veicolo extends Shared\BaseModel {
        use HasFactory;

        // Explicitly defining the table associated with this model
        protected $table = 'veicolo';

        // Mass assignable attributes
        protected $fillable = ['id_proprietario', 'id_tipo_veicolo', 'id_tipo_allestimento', 'id_marca', 'id_modello',
            'id_tipo_asse', 'id_tipo_cambio', 'id_alimentazione', 'id_destinazione_uso', 'colore', 'lunghezza_esterna',
            'larghezza_esterna', 'massa', 'portata', 'cilindrata', 'potenza', 'numero_assi'];

        // Attributes to be cast to native types
        protected $casts = ['lunghezza_esterna' => 'float', 'larghezza_esterna' => 'float', 'massa' => 'float',
            'portata' => 'integer', 'cilindrata' => 'integer', 'potenza' => 'integer', 'numero_assi' => 'integer'];

        protected $DBRelations = ['proprietario', 'tipoVeicolo', 'tipoAllestimento', 'marca', 'modello', 'tipoAsse',
            'tipoCambio', 'alimentazione', 'destinazioneUso'];


        public static function store($validatedData): Veicolo {
            if (is_array($validatedData) && array_key_exists('targa', $validatedData)) {
                $validatedData['targa'] = strtoupper(str_replace(' ', '', $validatedData['targa']));
            }
            $veicolo = new \App\Models\Veicolo();
            $veicolo->fill($validatedData);
            $veicolo->save();

            return $veicolo;
        }

//        public static function create($validatedData): Veicolo {
//            if (is_array($validatedData) && array_key_exists('targa', $validatedData)) {
//                $validatedData['targa'] = strtoupper(str_replace(' ', '', $validatedData['targa']));
//            }
//            $veicolo = new \App\Models\Veicolo();
//            $veicolo->fill($validatedData);
//            $veicolo->save();
//
//            return $veicolo;
//        }

//        public static function allWithRelationNames()
//        {
//            $query = static::query()->from(static::getTableName());
//            return(static::commonJoins($query)->get(static::commonSelect()));
//        }

        /*
        *                                   Relationships
        */

        public function proprietario() {
            return $this->belongsTo(\App\Models\ImpostazioneProprietarioVeicolo::class, 'id_proprietario');
        }

        public function tipoVeicolo() {
            return $this->belongsTo(\App\Models\ImpostazioneTipoVeicolo::class, 'id_tipo_veicolo');
        }

        public function tipoAllestimento() {
            return $this->belongsTo(\App\Models\ImpostazioneAllestimentoVeicolo::class, 'id_tipo_allestimento');
        }

        public function marca() {
            return $this->belongsTo(\App\Models\ImpostazioneMarcaVeicolo::class, 'id_marca');
        }

        public function modello() {
            return $this->belongsTo(\App\Models\ImpostazioneModelloVeicolo::class, 'id_modello');
        }

        public function tipoAsse() {
            return $this->belongsTo(\App\Models\ImpostazioneAsseVeicolo::class, 'id_tipo_asse');
        }

        public function tipoCambio() {
            return $this->belongsTo(\App\Models\ImpostazioneCambioVeicolo::class, 'id_tipo_cambio');
        }

        public function alimentazione() {
            return $this->belongsTo(\App\Models\ImpostazioneAlimentazioneVeicolo::class, 'id_alimentazione');
        }

        public function destinazioneUso() {
            return $this->belongsTo(\App\Models\ImpostazioneDestinazioneVeicolo::class, 'id_destinazione_uso');
        }

        public static function allWithRelationNames()
        {
            $query = static::query()->from(static::getTableName());
            return(static::commonJoins($query)->get(static::commonSelect()));
        }

        protected static function commonSelect()
        {
            return (['veicolo.*',
                'impostazione_proprietario_veicolo.nome as proprietario_nome',
                'impostazione_tipo_veicolo.nome as tipo_veicolo_nome',
                'impostazione_allestimento_veicolo.nome as tipo_allestimento_nome',
                'impostazione_marca_veicolo.nome as marca_nome',
                'impostazione_modello_veicolo.nome as modello_nome',
                'impostazione_destinazione_veicolo.nome as destinazione_uso_nome',
                'impostazione_cambio_veicolo.nome as tipo_cambio_nome',
                'impostazione_asse_veicolo.nome as tipo_asse_nome',
                'impostazione_alimentazione_veicolo.nome as tipo_alimentazione_nome'
                ,'targa.targa as targa'
            ]);
        }

        protected static function commonJoins($query)
        {
            return ($query->leftJoin('impostazione_proprietario_veicolo', 'impostazione_proprietario_veicolo.id', '=', 'veicolo.id_proprietario')
                ->leftJoin('impostazione_tipo_veicolo', 'impostazione_tipo_veicolo.id', '=', 'veicolo.id_tipo_veicolo')
                ->leftJoin('impostazione_allestimento_veicolo', 'impostazione_allestimento_veicolo.id', '=', 'veicolo.id_tipo_allestimento')
                ->leftJoin('impostazione_marca_veicolo', 'impostazione_marca_veicolo.id', '=', 'veicolo.id_marca')
                ->leftJoin('impostazione_modello_veicolo', 'impostazione_modello_veicolo.id', '=', 'veicolo.id_modello')
                ->leftJoin('impostazione_asse_veicolo', 'impostazione_asse_veicolo.id', '=', 'veicolo.id_tipo_asse')
                ->leftJoin('impostazione_cambio_veicolo', 'impostazione_cambio_veicolo.id', '=', 'veicolo.id_tipo_cambio')
                ->leftJoin('impostazione_destinazione_veicolo', 'impostazione_destinazione_veicolo.id', '=', 'veicolo.id_destinazione_uso')
                ->leftJoin('impostazione_alimentazione_veicolo', 'impostazione_alimentazione_veicolo.id', '=', 'veicolo.id_alimentazione')
                ->leftJoin('targa', 'targa.id_veicolo', '=', 'veicolo.id')
            );
        }

        /*
        *                             Additional Variables
        */

        //protected array $searchable = ['name', 'license_plate'];
        //
        //// Attributes that should be hidden in arrays Usually passwords or sensitive information; for this model, we may not have any
        //protected $hidden = [];
        //
        //// Attributes that should be mutated to dates if your model had a deleted_at column for soft deletes, it would be listed here as well
        //protected $dates = ['created_at', 'updated_at'];
        //
        //// Defining whether the ID of the model is auto-incrementing
        //public $incrementing = true;
        //
        //// The data type of the auto-incrementing ID
        //protected $keyType = 'int';
        //
        //// Indicates if the model should be timestamped. Default is true.
        //public $timestamps = true;
    }

<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Telaio extends Shared\BaseModel {
        use HasFactory;

        // Explicitly defining the table associated with this model
        protected $table = 'telaio';

        // Mass assignable attributes
        protected $fillable = ['id_veicolo','numero_telaio'];

        /*
        *                                   Relationships
        */

        public function veicolo() {
            return $this->belongsTo(\App\Models\Veicolo::class, 'id_veicolo');
        }
    }

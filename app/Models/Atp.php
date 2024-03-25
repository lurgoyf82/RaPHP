<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atp extends Shared\BaseModel {
    use HasFactory;

    // Explicitly defining the table associated with this model
    protected $table = 'atp';



    // Mass assignable attributes
    protected $fillable = ['id_veicolo','anno','data_pagamento','inizio_validita','fine_validita','importo'];

    // Attributes to be cast to native types
    protected $casts = ['lunghezza_esterna' => 'float', 'larghezza_esterna' => 'float', 'massa' => 'float',
        'portata' => 'integer', 'cilindrata' => 'integer', 'potenza' => 'integer', 'numero_assi' => 'integer'];

    /*
    *                                   Relationships
    */

    public function veicolo() {
        return $this->belongsTo(\App\Models\Veicolo::class, 'id_veicolo');
    }
}

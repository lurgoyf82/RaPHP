<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sinistro extends Shared\BaseModel {
    use HasFactory;

    // Explicitly defining the table associated with this model
    protected $table = 'sinistro';

    // Mass assignable attributes
    protected $fillable = ['id_proprietario', 'id_tipo_veicolo', 'id_tipo_allestimento', 'id_marca', 'id_modello',
        'id_tipo_asse', 'id_tipo_cambio', 'id_alimentazione', 'id_destinazione_uso', 'colore', 'lunghezza_esterna',
        'larghezza_esterna', 'massa', 'portata', 'cilindrata', 'potenza', 'numero_assi'];

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

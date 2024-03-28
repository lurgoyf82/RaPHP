<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImpostazioneModelloVeicolo extends Shared\ImpostazioneModel {
    use HasFactory;
    protected $table = 'impostazione_modello_veicolo';

    // Mass assignable attributes
    protected $fillable = ['nome','id_marca'];

    // Attributes to be cast to native types
    protected $casts = ['nome' => 'string','id_marca' => 'integer|exists:impostazione_marca_veicolo,id'];

    /*
    *                                   Relationships
    */

    public function marca() {
        return $this->belongsTo(\App\Models\ImpostazioneMarcaVeicolo::class, 'id_marca');
    }
}

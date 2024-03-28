<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImpostazioneAlimentazioneVeicolo extends Shared\ImpostazioneModel {
    use HasFactory;

    // Explicitly defining the table associated with this model
    protected $table = 'impostazione_alimentazione_veicolo';

    // Mass assignable attributes
    protected $fillable = ['nome'];

    // Attributes to be cast to native types
    protected $casts = ['nome' => 'string'];

    /*
    *                                   Relationships
    */
}

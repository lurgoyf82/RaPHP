<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImpostazioneSocietaVeicolo extends Shared\ImpostazioneModel {
    use HasFactory;
    protected $table = 'impostazione_societa_veicolo';
}

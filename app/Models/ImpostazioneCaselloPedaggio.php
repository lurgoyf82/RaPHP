<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImpostazioneCaselloPedaggio extends Shared\ImpostazioneModel {
    use HasFactory;
    protected $table = 'impostazione_casello_pedaggio';
}

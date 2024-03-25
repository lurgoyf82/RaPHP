<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImpostazioneStatoPedaggio extends Shared\ImpostazioneModel {
    use HasFactory;
    protected $table = 'impostazione_stato_pedaggio';
}

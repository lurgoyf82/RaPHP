<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veicolo extends Model
{
    use HasFactory;
    protected $table = 'veicolo';
    protected array $searchable = ['name', 'license_plate'];
}

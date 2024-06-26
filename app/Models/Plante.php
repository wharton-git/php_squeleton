<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plante extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_plante', 'variete', 'description', 'nbr_plante'
    ];
}

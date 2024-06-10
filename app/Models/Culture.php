<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    use HasFactory;
    protected $fillable = [
        'code_parcelle', 'id_plante', 'date_plantation', 'date_production', 'date_recolte', 'produit_kg', 'nb_planter', 'surface_c', 'resultat_c'
    ];

}

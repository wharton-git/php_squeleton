<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $table = 'animal';
    
    protected $primaryKey = 'id_animal';

    public $incrementing = true; 

    protected $keyType = 'int'; 
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_animal', 'nom', 'espece', 'race', 'sexe', 'date_naiss', 'date_enregist', 'date_vente', 'date_dece',
        'age', 'poids', 'status', 'vaccin', 'vermifuge', 'date_vacc', 'date_verm', 'maladie', 'blessure',
        'date_trait', 'etat', 'gestation'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'vermifuge' => 'boolean',
        'gestation' => 'boolean',
        'date_naiss' => 'date',
        'date_enregist' => 'date',
        'date_vente' => 'date',
        'date_dece' => 'date',
        'date_vacc' => 'date',
        'date_verm' => 'date',
        'date_trait' => 'date',
    ];
}

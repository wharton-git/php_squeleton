<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sante extends Model
{
    use HasFactory;
    protected $table = 'sante';

    protected $fillable = [
        'id_animal', 'vaccin', 'vermifuge', 'date_vacc', 'date_verm', 'maladie', 'blessure', 'date_trait', 'etat', 'gestation'
    ];

}

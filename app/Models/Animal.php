<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $table = 'animal';

    protected $fillable = [
        'nom', 'espece', 'race', 'sexe', 'date_naiss', 'date_enregist', 'date_vente', 'date_dece', 'age', 'poids', 'status'
    ];

    public function sante()
    {
        return $this->hasOne(Sante::class, 'id_animal');
    }
}

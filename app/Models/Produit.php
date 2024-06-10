<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $table = 'produit';
    protected $primaryKey = 'id_produit';

    protected $fillable = [
        'type_produit',
        'quantite',
        'qualite',
        'date_prod',
        'especef',
    ];
}

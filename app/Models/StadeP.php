<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StadeP extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_cultiver', 'etape', 'date_debut', 'date_fin', 'besoin_e'
    ];
}

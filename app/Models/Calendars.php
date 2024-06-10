<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendars extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_plante', 'activite', 'date_debu', 'date_fin', 'description'
    ];
}

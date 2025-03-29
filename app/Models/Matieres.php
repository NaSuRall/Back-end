<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matieres extends Model
{
    use HasFactory;
    protected $table = 'matieres';
    protected $fillable = [
        'nom_matiere',
        'prof_id'
    ];
}

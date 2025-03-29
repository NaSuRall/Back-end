<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profs extends Model
{
    use HasFactory;
    protected $table = 'profs';
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'promotion_id'
    ];
}

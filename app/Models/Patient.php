<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'species',
        'breed',
        'color',
        'age',
        'gender',
        'sterilized',
        'vaccination_history',
        'health_history',
        'notes',
        'photo',
    ];

    protected $casts = [
        'sterilized' => 'boolean',
    ];
}

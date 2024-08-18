<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date_of_birth',
        'gender',
        'phone_number',
        'address',
    ];

    protected $casts = [
        'date_of_birth' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

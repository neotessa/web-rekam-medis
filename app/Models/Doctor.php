<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date_of_birth',
        'gender',
        'phone_number',
        'address',
        'specialization',
    ];

    protected $casts = [
        'date_of_birth' => 'datetime',
    ];

    /**
     * Get the associated user for the doctor.
     */
    public function user()
    {
        return $this->morphOne(User::class, 'profile');
    }
}

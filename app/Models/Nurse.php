<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date_of_birth',
        'gender',
        'phone_number',
        'address',
    ];

    /**
     * Get the associated user for the doctor.
     */
    public function user()
    {
        return $this->morphOne(User::class, 'profile');
    }
}

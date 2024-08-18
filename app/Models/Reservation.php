<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Client;
use App\Models\Patient;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'reservation_date',
        'status',
        'service_name',
        'doctor_user_id',
        'admin_user_id',
        'client_id',
        'patient_id',
    ];

    protected $casts = [
        'reservation_date' => 'datetime',
    ];

    /**
     * Get the doctor that owns the reservation
     */
    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_user_id');
    }

    /**
     * Get the admin that owns the reservation
     */
    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_user_id');
    }

    /**
     * Get the client that owns the reservation
     */
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    /**
     * Get the patient that owns the reservation
     */
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}

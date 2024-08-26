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
        'service',
        'doctor_id',
        'nurse_id',
        'created_by',
        'client_id',
        'patient_id',
    ];

    protected $casts = [
        'reservation_date' => 'datetime:Y-m-d\TH:i:s',
    ];

    /**
     * Get the doctor that owns the reservation
     */
    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }

    /**
     * Get the admin that owns the reservation
     */
    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by');
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

    /**
     * Get the nurse that owns the reservation
     */
    public function nurse() {
        return $this->belongsTo(User::class, 'nurse_id');
    }
}

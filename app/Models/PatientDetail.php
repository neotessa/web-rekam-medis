<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'temperature',
        'bodyweight',
        'behaviour',
        'blood_sugar',
        'blood_pressure',
        'heartbeat',
        'saturation',
        'respiratory_rate',
        'status'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}

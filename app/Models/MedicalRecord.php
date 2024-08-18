<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;
use App\Models\ImageMedicalRecord;

class MedicalRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'temperature',
        'weight',
        'blood_sugar',
        'blood_pressure',
        'heart_rate',
        'saturation',
        'respiratory_rate',
        'notes',
        'special_treatment',
        'medication',
        'date',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function images()
    {
        return $this->hasMany(ImageMedicalRecord::class);
    }
}

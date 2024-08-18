<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;
use App\Models\User;

class Outpatient extends Model
{
    use HasFactory;

    protected $fillable = [
        'visit_date',
        'complaint_date',
        'complaint_issue',
        'diagnosis',
        'treatment',
        'prescription',
        'status',
        'patient_id',
        'doctor_id',
    ];

    protected $casts = [
        'visit_date' => 'datetime',
        'complaint_date' => 'datetime',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }
}

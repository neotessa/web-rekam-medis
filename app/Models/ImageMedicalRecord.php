<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MedicalRecord;

class ImageMedicalRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'medical_record_id',
        'photo',
        'description',
    ];

    public function medicalRecord()
    {
        return $this->belongsTo(MedicalRecord::class);
    }
}

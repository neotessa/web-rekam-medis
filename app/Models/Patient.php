<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'client_id',
        'name',
        'species',
        'race',
        'age',
    ];

    /**
     * Get the client that owns the patient.
     */

    public function client(): BelongsTo
    {
        return $this->belongsTo(client::class);
    }

    public function patientDetail()
    {
        return $this->hasMany(PatientDetail::class);
    }
}

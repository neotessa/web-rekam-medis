<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'speciality_id',
    ];

    /**
     * Get the speciality that owns the doctor
     */

    public function speciality(): BelongsTo
    {
        return $this->belongsTo(Specialist::class);
    }
}

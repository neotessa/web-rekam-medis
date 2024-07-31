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
        'owner_id',
        'name',
        'species',
        'race',
        'age',
    ];

    /**
     * Get the owner that owns the patient.
     */

    public function owner(): BelongsTo
    {
        return $this->belongsTo(Owner::class);
    }
}

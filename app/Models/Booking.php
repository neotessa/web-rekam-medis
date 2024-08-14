<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'booking_date',
        'status',
        'service_name',
        'user_id',
        'client_id',
        'patient_id',
    ];

    /**
     * Get the user that owns the booking
     */

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the client that owns the booking
     */

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * Get the patient that owns the booking
     */

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
}

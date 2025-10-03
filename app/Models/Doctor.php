<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'birth_date',
        'specialization_id'
    ];

    public function specialization(): BelongsTo
    {
        return $this->belongsTo(DoctorSpecialization::class);
    }

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }

    public function reviews()
    {
        return $this->hasMany(DoctorReview::class);
    }
}

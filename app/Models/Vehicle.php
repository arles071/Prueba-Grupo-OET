<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'plate',
        'color',
        'brand',
        'vehicle_type',
        'driver_id',
        'owner_id',
    ];

    /**
     * Relación con el conductor.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function driver()
    {
        return $this->belongsTo(Person::class, 'driver_id');
    }

    /**
     * Relación con el propietario.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner()
    {
        return $this->belongsTo(Person::class, 'owner_id');
    }
}

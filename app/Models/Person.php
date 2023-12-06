<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vehicle;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'identification_number',
        'first_name',
        'middle_name',
        'last_name',
        'address',
        'phone',
        'city',
    ];

    /**
     * Obtiene la relacion de todos los vehiculos que un conductor tiene asignado
     */
    public function driver(){
        return $this->hasMany(Vehicle::class, 'driver_id', 'id');
    }

    /**
     * Obtiene la relacion de todos los vehiculos que pertenecen a un Propietario.
     */
    public function owner(){
        return $this->hasMany(Vehicle::class, 'owner_id', 'id');
    }
}

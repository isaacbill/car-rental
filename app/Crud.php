<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $fillable = [
        'VehiclesTitle', 'VehiclesBrand', 'ModelYear', 'FuelType', 'PricePerDay', 'SeatingCapacity',  'image'
    ];
}

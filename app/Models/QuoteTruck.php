<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuoteTruck extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'type_of_vehicle_truck',
        'mobile_number_truck'
    ];
}

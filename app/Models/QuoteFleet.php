<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuoteFleet extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'number_of_vehicles_fleet',
        'mobile_number_fleet'
    ];
}

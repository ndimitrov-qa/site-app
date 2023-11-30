<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuoteHgv extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'type_of_vehicle_hgv',
        'mobile_number_hgv'
    ];
}

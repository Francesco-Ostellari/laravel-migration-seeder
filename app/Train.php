<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class train extends Model
{
    protected $fillable = [
        'agency',
        'departure_station',
        'arrival_station',
        'departure_date',
        'arrival_date',
        'departure_time',
        'arrival_time',
        'train_code',
        'carriages',
        'on_time',
        'delete',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudioBooking extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'studio',
        'date',
        'time',
    ];
}

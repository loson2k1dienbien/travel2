<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourImage extends Model
{
     protected $primaryKey = 'id';
    protected $fillable = [
        'Images','tour_id',
    ];
}

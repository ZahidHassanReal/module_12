<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = ['departure_city', 'arrival_city', 'departure_time', 'arrival_time'];


    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}


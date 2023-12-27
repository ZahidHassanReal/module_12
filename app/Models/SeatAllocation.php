<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeatAllocation extends Model
{
    protected $fillable = ['ticket_id', 'seat_number'];


    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }


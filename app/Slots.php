<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slots extends Model
{
    protected $primaryKey = "Slot_id"; 

    protected $fillable = [
        'Slot_date',
        'Slot_is_available',
        'Slot_appointment_number',
    ];
}

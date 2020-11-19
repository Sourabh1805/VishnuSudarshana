<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $primaryKey = 'Appointment_id';
    protected $fillable = [
        "Appointment_user_id", "Appointment_service_id","Appointment_time","Appointment_ispaid",
        "Appointment_prize","Appointment_status"
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $primaryKey = 'Service_id';
    protected $fillable = [
        "Service_name", "Service_description","Service_prize","Service_status","Service_image1",
        "Service_image2","Service_image3"
    ];
}

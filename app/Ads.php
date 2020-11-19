<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    protected $primaryKey = 'Ads_id';
    protected $fillable = [
        "Ads_type", "Ads_image_path","Ads_video_path","Ads_text","Ads_status"
    ];
}

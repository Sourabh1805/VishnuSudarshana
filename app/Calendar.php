<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $primaryKey = 'Calendar_id';
    protected $fillable = [
        "Calendar_date", "Calendar_dinVishesh","Calendar_dinRashi"
    ];
}

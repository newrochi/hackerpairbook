<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $dates=[
        'created_at',
        'updated_at',
        'started_at',
    ];
}

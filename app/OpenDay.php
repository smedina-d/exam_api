<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpenDay extends Model
{
    //
    protected $table = 'open_days';
    protected $fillable = [
        'cashier_id',
        'date_open',
        'hour_open',
        'value_previous_close',
        'value_open',
        'observation'
    ];
}

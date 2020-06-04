<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CloseDay extends Model
{
    protected $table = 'close_days';
    protected $fillable = [
        'cashier_id',
        'date_close',
        'hour_close',
        'value_card',
        'value_cash',
        'value_transfer',
        'other_value',
        'sales_total',
        'total_cashier',
        'total_open',
        'tip_card',
        'tip_cash',
    ];
}

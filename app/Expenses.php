<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    //
    protected $table = 'expenses';

    protected $fillable = [
        'close_day_id',
        'nombre',
        'valor',
    ];
}

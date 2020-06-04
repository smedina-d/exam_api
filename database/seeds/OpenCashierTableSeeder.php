<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OpenCashierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('open_days')->insert([
            'cashier_id'    => 1,
            'date_open' => DateTime::createFromFormat('Y-m-d H:i:s',\Carbon\Carbon::now('America/Mexico_City'))->format('Y/m/d'),
            'hour_open' => '10:21',
            'value_previous_close'  => 65231,
            'value_open'    => null,
            'observation'   => null
        ]);
        DB::table('open_days')->insert([
            'cashier_id'    => 2,
            'date_open' => DateTime::createFromFormat('Y-m-d H:i:s',\Carbon\Carbon::now('America/Mexico_City'))->format('Y/m/d'),
            'hour_open' => '10:21',
            'value_previous_close'  => 65231,
            'value_open'    => 200,
            'observation'   => null
        ]);
    }
}

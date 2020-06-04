<?php

use Illuminate\Database\Seeder;

class CloseDayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('close_days')->insert([
            'cashier_id' => 1,
            'date_close' => DateTime::createFromFormat('Y-m-d H:i:s',\Carbon\Carbon::now('America/Mexico_City'))->format('Y/m/d'),
            'hour_close' => DateTime::createFromFormat('Y-m-d H:i:s',\Carbon\Carbon::now('America/Mexico_City'))->format('H:i'),
            'value_card' => 0,
            'value_cash' => 0,
            'value_close' => 0,
            'value_open' => 0,
            'value_sales' => 0,
        ]);
        DB::table('close_days')->insert([
            'cashier_id' => 2,
            'date_close' => DateTime::createFromFormat('Y-m-d H:i:s',\Carbon\Carbon::now('America/Mexico_City'))->format('Y/m/d'),
            'hour_close' => DateTime::createFromFormat('Y-m-d H:i:s',\Carbon\Carbon::now('America/Mexico_City'))->format('H:i'),
            'value_card' => 5,
            'value_cash' => 10,
            'value_close' => 15,
            'value_open' => 20,
            'value_sales' => 256,
        ]);
    }
}

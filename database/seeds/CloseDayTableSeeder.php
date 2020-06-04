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
            'value_transfer' => 0,
            'other_value' => 0,
            'sales_total' => 0,
            'total_cashier' => 0,
            'total_open' => 0,
            'tip_card' => 0,
            'tip_cash' => 0,
        ]);
        DB::table('close_days')->insert([
            'cashier_id' => 2,
            'date_close' => DateTime::createFromFormat('Y-m-d H:i:s',\Carbon\Carbon::now('America/Mexico_City'))->format('Y/m/d'),
            'hour_close' => DateTime::createFromFormat('Y-m-d H:i:s',\Carbon\Carbon::now('America/Mexico_City'))->format('H:i'),
            'value_card' => 5,
            'value_cash' => 2500,
            'value_transfer' => 3000,
            'other_value' => 10000,
            'sales_total' => 23456,
            'total_cashier' => 0,
            'total_open' => 0,
            'tip_card' => 100,
            'tip_cash' => 10000,
        ]);
    }
}

<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1')->group(function (){
    Route::get('cashier/balance','API\CashierController@cashierBalance');
    Route::post('cashier/balance/open/day','API\CashierController@cashierBalanceOpenDay');
    Route::get('has/open/cashier/balance','API\CashierController@hasOpenCashierBalance');
    Route::post('cashier/balance/close/day','API\CashierController@cashierBalanceCloseDay');
});

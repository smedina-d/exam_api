<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CashierController extends Controller
{
    //
    public function __construct()
    {

    }

    public function cashierBalance()
    {
        $resp['status'] = 'Success';
        $resp['results'] = [
            "date_open" => "2019/06/11",
            "hour_open" => "12:45",
            "value_previous_close" => 6280,
            "value_open" => null,
            "observation" => ""
        ];

        return Response()->json($resp,200);
    }

    public function cashierBalanceOpenDay(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'date_open' => 'required',
            'hour_open' => 'required',
            'value_previous_close' => 'required',
            'value_open' => 'required'
        ]);


        if ($validator->fails()) {
            return Response()->json('Validation Error: '.$validator->errors(),404);
        }


        $resp['msg'] = 'Información guardada con éxito';
        $resp['results'] = [
            "date_open" => "2019/06/11",
            "hour_open" => "12:45",
            "value_previous_close" => 6280,
            "value_open" => null,
            "observation" => ""
        ];

        return Response()->json($resp,200);

    }

    public function hasOpenCashierBalance()
    {

        $data['msg'] = 'Success';
        $data['results'] = true;
        $data['value']  = 5000;
        $data['close']  = 0;
        $data['card']   = 0;

        return Response()->json($data,200);
    }

    public function cashierBalanceCloseDay(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'date_close' => 'required',
            'hour_close' => 'required',
            'value_close' => 'required',
            'value_open' => 'required'
        ]);


        if ($validator->fails()) {
            return Response()->json('Validation Error: '.$validator->errors(),404);
        }

        $resp['msg'] = 'Información guardada con éxito';
        $resp['results'] = null;

        return Response()->json($resp,200);

    }
}

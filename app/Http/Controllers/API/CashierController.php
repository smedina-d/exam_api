<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\OpenDay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CashierController extends Controller
{
    //
    public function __construct()
    {

    }

    public function cashierBalance(Request $request)
    {
        $open =  OpenDay::where('cashier_id',$request->get('caja'))->first();

        $resp['status'] = 'Success';
        $resp['results'] = $open;
        
        return response()->json($resp,200);


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
        $data['results'] = [
            'date_close'    => "2020-05-02",
            'hour_close'    => "19:25",
            'value_cash'    => 0,
            'value_card'    => 0,
            'value_transfer'    => 0,
            'other_value'   => 0,
            'sales_total'   => 0,
            'tip_cash'      => 0,
            'total_open'    => 0,
            'tip_card'      => 0,
            'total_cashier' => 0
        ];

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

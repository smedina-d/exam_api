<?php

namespace App\Http\Controllers\API;

use App\CloseDay;
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
        $open =  OpenDay::where('cashier_id',$request->get('caja'))->orderBy('id','desc')->first();

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

        $open =  OpenDay::create([
            "date_open" => $request->date_open,
            "hour_open" => $request->hour_open,
            "value_previous_close" => $request->value_previous_close,
            "value_open" => $request->value_open,
            "observation" => $request->observation
        ]);

        $open =  OpenDay::orderBy('id','desc')->first();

        $resp['msg'] = 'Información guardada con éxito';
        $resp['results'] = $open;

        return Response()->json($resp,200);

    }

    public function hasOpenCashierBalance(Request $request)
    {
        $close =  CloseDay::where('cashier_id',$request->get('caja'))->orderBy('id','desc')->first();

        $data['msg'] = 'Success';
        $data['results'] = $close;

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

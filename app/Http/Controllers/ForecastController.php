<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\forecast;
use Illuminate\Support\Facades\DB;
class ForecastController extends Controller
{
    //
    public function index(){
        $forecast = forecast::all();
        return view('forecast.index',['forecasts'=>$forecast]);
    }
    public function store(Request $request){
        $this->validate($request,[
            'tanggal'=>'required',
            'debit'=>'required',
        ]);
        $forecast = new forecast();
        $forecast->tanggal=$request->tanggal;
        $forecast->debit = $request->debit;
        $forecast->save();
        return redirect()->route('createForecast');
    }
}

<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\image;
use App\aliran;
use Illuminate\Http\Request;

class AliranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $mytime = Carbon::now();
        $aliran = aliran::where('tanggal',$mytime->toDateString())->first();

        $time = str_replace_first('2017','2015',$mytime);
        $strTgl= str_split($time,10);
        $aliran2 = aliran::where('tanggal',$strTgl)->first();
//
//        return $aliran2->debit;
        if($aliran->debit>=138.035){
            $image = image::where('kondisi',1)->first();
        }else{
            $image = image::where('kondisi',0)->first();
        }
        return view('debitair.index',['aliran'=>$aliran,'image'=>$image,'aliran2'=>$aliran2]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {
//        //
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
//    {
//        //
//        $this->validate($request,[
//            'tanggal'=>'required',
//            'debit'=>'required',
//        ]);
//        $aliran = new aliran();
//        $aliran->tanggal = $request->tanggal;
//        $aliran->debit= $request->debit;
////        $files = $request->file('gambar');
////        $imageName=  time().'.'.$files->getClientOriginalExtension();
////        $request->gambar->move(public_path('images'), $imageName);
////        $aliran->gambar= $imageName;
//        $aliran->save();
//        return redirect()->route('dashboard');
//    }

    /**
     * Display the specified resource.
     *
     * @param  \App\aliran  $aliran
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
//    {
//        $aliran = aliran::find($id);
//        return view('debitair.show',['aliran'=>$aliran]);
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\aliran  $aliran
     * @return \Illuminate\Http\Response
     */
//    public function edit(aliran $aliran)
//    {
//        //
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\aliran  $aliran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, aliran $aliran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\aliran  $aliran
     * @return \Illuminate\Http\Response
     */
    public function destroy(aliran $aliran)
    {
        //
    }
}

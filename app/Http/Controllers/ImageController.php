<?php

namespace App\Http\Controllers;
use App\image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public function create(){
        return view ('images.store');
    }
    public function store(Request $request){
        $this->validate($request,[
            'kondisi' => 'required',
        ]);
        $file = $request->file('gambar');
        $imageName=  time()  . '.' . $file->getClientOriginalExtension();
        $request->gambar->move(public_path('images'), $imageName);
        $image = new image();
        $image->gambar = $imageName;
        $image->kondisi = $request->kondisi;
        $image->save();
        return redirect()->route('createImage');
    }
}

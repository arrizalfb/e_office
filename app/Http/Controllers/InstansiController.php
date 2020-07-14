<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instansi;

class InstansiController extends Controller
{
    public function index(){
        $instansi = Instansi::all();
        
        return view ('page.instansirekanan',['instansi'=>$instansi]);

    }
    public function create(){
        //untuk mengurutkan nomor
        $max = Instansi::max('id');
        $max = $max + 1;

        return view ('page.createinstansi');
    }
    public function save(Request $request){
        $this->validate($request,[
            'instansirekanan'=>'required',
            'alamat'=>'required',
            'npwp'=>'required',
            'nama_conatact'=>'required',
            'contact'=>'required'
        ]);

        Instansi::create([
            'instansi_rekanan'=>$request->instansirekanan,
            'alamat'=>$request->alamat,
            'npwp'=>$request->npwp,
            'nama_contact'=>$request->nama_contact,
            'contact_person'=>$request->contact
        ]);
        return redirect('/instansi');
    }
}

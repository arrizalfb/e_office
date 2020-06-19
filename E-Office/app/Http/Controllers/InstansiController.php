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
        return view ('page.createinstansi');
    }
    public function save(Request $request){
        $this->validate($request,[
            'instansi_rekanan'=>'required',
            'alamat'=>'required',
            'npwp'=>'required',
            'contact_person'=>'required'
        ]);

        Instansi::create([
            'instansi_rekanan'=>$request->instansi_rekanan,
            'alamat'=>$request->alamat,
            'npwp'=>$request->npwp,
            'contact_person'=>$request->contact_person
        ]);
        return redirect('/instansi');
    }
    
    public function update($id){
        
    }
    
    public function delete($id){

    }
}

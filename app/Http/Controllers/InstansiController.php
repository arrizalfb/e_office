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
        
        //diambil dari html name
        $this->validate($request,[
            'instansirekanan'=>'required',
            'alamat'=>'required',
            'npwp'=>'required',
            'contact'=>'required',
            'namecontact'=>'required'
        ]);

        //dari database
        Instansi::create([
            'instansi_rekanan'=>$request->instansirekanan,
            'alamat'=>$request->alamat,
            'npwp'=>$request->npwp,
            'contact_person'=>$request->contact,
            'prioritas'=>$request->prioritas,
            'namecontact'=>$request->namecontact
        ]);
        return redirect('/instansi');
    }
    public function destroy($id)
    {
        $instansi = Instansi::all();
        $instansi = Instansi::find($id);
        $instansi->delete();

        return redirect('instansi');
    }
}

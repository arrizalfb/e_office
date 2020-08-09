<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instansi;

class InstansiController extends Controller
{
    public function index()
    {
        $instansi = Instansi::all();
        
        return view ('page.instansirekanan',['instansi'=>$instansi]);

    }
    public function create(){
        $instansi = Instansi::all();

        //untuk mengurutkan nomor
        $max = Instansi::max('id');
        $max = $max + 1;

        return view ('page.createinstansi', compact('instansi'));
    }
    public function save(Request $request){
        
        //diambil dari html name
        // $this->validate($request,[
        //     'instansirekanan'=>'required',
        //     'alamat'=>'required',
        //     'npwp'=>'required',
        //     'contact'=>'required',
        //     'namecontact'=>'required'
        // ]);

        //dari database
        Instansi::create([
            'instansi_rekanan'=>$request->instansirekanan,
            'alamat'=>$request->alamat,
            'npwp'=>$request->npwp,
            'contact_person'=>$request->contact,
            'prioritas'=>$request->skala,
            'namecontact'=>$request->namecontact
        ]);
        return redirect('/instansi');
    }
    
    public function update(Request $request, $id){

        $instansi = Instansi::find($id);

        $instansi->instansi_rekanan = $request->instansirekanan;
        $instansi->alamat = $request->alamat;
        $instansi->npwp = $request->npwp;
        $instansi->contact_person = $request->contact;
        $instansi->namecontact = $request->namecontact;
        $instansi->save();

        return redirect('/instansi');
    }
    
    public function destroy($id)
    {
        $instansi = Instansi::find($id);
        $instansi->delete();

        return redirect('/instansi');
    }
}

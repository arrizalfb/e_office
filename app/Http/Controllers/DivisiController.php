<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Divisi;

class DivisiController extends Controller
{
    public function index(){
        $divisi = Divisi::all();
        return view ('page.divisi',['divisi'=>$divisi]);

    }
    public function create(){
        //untuk mengurutkan nomor
        $max = Divisi::max('id');
        $max = $max + 1;

        return view ('page.createdivisi');
    }
    public function save(Request $request){
        $this->validate($request,[
            'jenis_divisi'=>'required',
            'inisial_divisi'=>'required'
        ]);

        Divisi::create([
            'jenis_divisi'=>$request->jenis_divisi,
            'inisial_divisi'=>$request->inisial_divisi
        ]);
        return redirect('/divisi');
    }
}

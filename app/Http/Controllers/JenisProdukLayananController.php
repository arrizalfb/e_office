<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisProdukLayanan;

class JenisProdukLayananController extends Controller
{
    public function index()
    {
        $jenisproduklayanan = JenisProdukLayanan::all();
        
        return view ('page.dropdown8', compact('jenisproduklayanan'));
    }

    public function create()
    {
        $jenisproduklayanan = JenisProdukLayanan::all();

        //untuk mengurutkan nomor
        $max = JenisProdukLayanan::max('id');
        $max = $max + 1;

        return view ('page.createjenisproduklayanan', compact('jenisproduklayanan','max'));
    }

    public function store(Request $request)
    {
        //memanggil dari createjenissurat dengan variabel name
        $this->validate($request,[
            'jenisproduklayanan'=>'required',
            'keterangan'=>'required'
        ]);
        
        //memanggil dari createjenissurat dengan variabel id
        JenisProdukLayanan::create([
            'jenisproduklayanan'=>$request->jenisproduklayanan,
            'keterangan'=>$request->keterangan,
        ]);
        return redirect('/jenisproduklayanan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $produklayanan = JenisProdukLayanan::find($id);
        
        //letak folder sama layout yang akan diedit, kemudian panggil variabel suratkeluar di bagian input untuk diletakkan disana
        return view('page.editjenisproduklayanan', ['produklayanan'=>$produklayanan]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'jenisproduklayanan'=>'required',
            'keterangan'=>'required'
        ]);

        $produklayanan = JenisProdukLayanan::find($id);
        $produklayanan->jenisproduklayanan = $request->jenisproduklayanan;
        $produklayanan->keterangan = $request->keterangan;
        $produklayanan->save();

        return redirect('/jenisproduklayanan');
    }

    public function destroy($id)
    {
        $jenisproduklayanan = JenisProdukLayanan::find($id);
        $jenisproduklayanan->delete();

        return redirect('/jenisproduklayanan');
    }
}

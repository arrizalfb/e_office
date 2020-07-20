<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisProdukLayanan;

class JenisProdukLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisproduklayanan = JenisProdukLayanan::all();
        
        return view ('page.dropdown7',['jenisproduklayanan'=>$jenisproduklayanan], );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenisproduklayanan = JenisProdukLayanan::all();

        //untuk mengurutkan nomor
        $max = JenisProdukLayanan::max('id');
        $max = $max + 1;

        return view ('page.createjenisproduklayanan', compact('jenisproduklayanan','max'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produklayanan = JenisProdukLayanan::find($id);
        
        //letak folder sama layout yang akan diedit, kemudian panggil variabel suratkeluar di bagian input untuk diletakkan disana
        return view('page.editjenisproduklayanan', ['produklayanan'=>$produklayanan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenisproduklayanan = JenisProdukLayanan::find($id);
        $jenisproduklayanan->delete();

        return redirect('/jenisproduklayanan');
    }
}

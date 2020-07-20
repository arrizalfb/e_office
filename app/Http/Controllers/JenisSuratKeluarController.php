<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisSuratKeluar;

class JenisSuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenissuratkeluar = JenisSuratKeluar::all();
        
        return view ('page.dropdown1',['jenissuratkeluar'=>$jenissuratkeluar]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //untuk mengurutkan nomor
        $jenissuratkeluar = JenisSuratKeluar::all();
        
        $max = JenisSuratKeluar::max('id');
        $max = $max + 1;
        
        return view ('page.createjenissuratkeluar', compact('max', 'jenissuratkeluar'));
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
            'noromawijenissurat'=>'required',
            'suratjenis'=>'required',
            'inisialjenissurat'=>'required',
            'ket'=>'required'
        ]);
        
        //memanggil dari createjenissurat dengan variabel naem dan dimasukkan ke database
        JenisSuratKeluar::create([
            'noromawijenissurat'=>$request->noromawijenissurat,
            'jenissurat'=>$request->suratjenis,
            'inisialjenissurat'=>$request->inisialjenissurat,
            'keterangan'=>$request->ket,
        ]);
        return redirect('/jenissuratkeluar');
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
        $suratkeluar = JenisSuratKeluar::find($id);
        
        //letak folder sama layout yang akan diedit, kemudian panggil variabel suratkeluar di bagian input untuk diletakkan disana
        return view('page.editjenissuratkeluar', ['suratkeluar'=>$suratkeluar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $this->validate($request,[
        //     'no_urut_surat'=>'required,'
        //     'jenis'=>'required',
        //     'jenissurat'=>'required',
        //     'keterangan'=>'required',
        // ]);
        
        //memanggil inisialisasi dari edit dan membuat variabel baru yang akan di masukkan ke database
        $suratkeluar = JenisSuratKeluar::find($id);

        $suratkeluar->no_urut_surat = $request->nourutsurat;
        $suratkeluar->jenissurat = $request->jenissurat;
        $suratkeluar->inisialjenissurat = $request->inisialjenissurat;
        $suratkeluar->keterangan = $request->keterangan;
        $suratkeluar->save();

        return redirect('/jenissuratkeluar');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suratkeluar = JenisSuratKeluar::find($id);
        $suratkeluar->delete();

        return redirect('/jenissuratkeluar');
    }
}

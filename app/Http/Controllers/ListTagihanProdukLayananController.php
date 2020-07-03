<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListTagihanProdukLayanan;
use App\Instansi;

class ListTagihanProdukLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listtagihanproduklayanan = ListTagihanProdukLayanan::all();
        
        return view ('page.dropdown8',['listtagihanproduklayanan'=>$listtagihanproduklayanan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //untuk mengurutkan nomor
        $max = ListTagihanProdukLayanan::max('id');
        $max = $max + 1;
        
        //memanggil variabel dari instansi
        $instansi = Instansi::all();

        return view ('page.createlisttagihanproduklayanan',['instansi'=>$instansi], ['max'=>$max]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //memanggil dari dengan variabel name
        // $this->validate($request,[
        //     'instansirekanan'=>'required',
        //     'tanggaltagihan'=>'required',
        //     'nominalhpp'=>'required',
        //     'tanggaljatuhtempo'=>'required',
        //     'dokumenpelengkap'=>'required',
        //     'keterangan'=>'required'
        // ]);

        //untuk menyimpan gambar di folder laravel
        $dokumen = $request->file('dokumenpelengkap')->store('dokumen');
        // dd($dokumen);

        //menampilkan bulan
        $bulan = date('m', strtotime($request->tanggaltagihan));
        
        //menghitung nilai ppn
        $ppn = $request->nominalhpp * 0.1;

        //memanggil dari createjenissurat dengan variabel name
        ListTagihanProdukLayanan::create([
            'instansirekanan'=>$request->instansi,
            'bulantagihan'=>$bulan,
            'tanggaltagihan'=>$request->tanggaltagihan,
            'hpp'=>$request->nominalhpp,
            'ppn'=>$ppn,
            'jatuhtempo'=>$request->jatuhtempo,
            'dokumenpelengkap'=>$dokumen,
            'keterangan'=>$request->keterangan,
            'statusdokument'=>'',
            'statustagihan'=>''
        ]);
        return redirect('/listtagihanproduklayanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listtagihanproduklayanan = ListTagihanProdukLayanan::find($id);
        return view('page.readlisttagihanproduklayanan ', ['listtagihanproduklayanan'=>$listtagihanproduklayanan ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listtagihan = ListTagihanProdukLayanan::find($id);
        
        //letak folder sama layout yang akan diedit, kemudian panggil variabel suratkeluar di bagian input untuk diletakkan disana
        return view('page.editlisttagihanproduklayanan ', ['listtagihan'=>$listtagihan]);
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
        $this->validate($request,[
            'instansirekanan'=>'required',
            'tanggaltagihan'=>'required',
            'nominalhpp'=>'required',
            'tanggaljatuhtempo'=>'required',
            'dokumenpelengkap'=>'required',
            'keterangan'=>'required',
        ]);

        $listtagihan = ListTagihanProdukLayanan::find($id);
        $listtagihan->instansirekanan = $request->instansirekanan;
        $listtagihan->tanggaltagihan = $request->tanggaltagihan;
        $listtagihan->hpp = $request->hpp;
        $listtagihan->tanggaljatuhtempo = $request->tanggaljatuhtempo;
        $listtagihan->dokumenpelengkap = $request->dokumenpelengkap;
        $listtagihan->keterangan = $request->keterangan;
        $listtagihan->statusdokument = $request->statusdokument;
        $listtagihan->statustagihan = $request->statustagihan;
        $listtagihan->save();

        return redirect('/listtagihanproduklayanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listtagihanproduklayanan = ListTagihanProdukLayanan::find($id);
        $listtagihanproduklayanan->delete();

        return redirect('/listtagihanproduklayanan');
    }
}

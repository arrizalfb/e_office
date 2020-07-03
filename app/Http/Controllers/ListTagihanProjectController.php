<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListTagihanProject;
use App\Instansi;

class ListTagihanProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listtagihanproject = ListTagihanProject::all();
        
        return view ('page.dropdown12',['listtagihanproject'=>$listtagihanproject]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //untuk mengurutkan nomor
        $max = ListTagihanProject::max('id');
        $max = $max + 1;
        
        //memanggil variabel dari instansi
        $instansi = Instansi::all();
        
        return view ('page.createlisttagihanproject',['instansi'=>$instansi], ['max'=>$max]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // //memanggil dari dengan variabel name
        // $this->validate($request,[
        //     'instansirekanan'=>'required',
        //     'tanggaltagihan'=>'required',
        //     'nominalhpp'=>'required',
        //     'tanggaljatuhtempo'=>'required',
        //     'dokumentpelengkap'=>'required',
        //     'keterangan'=>'required'
        // ]);

        //untuk menyimpan gambar di folder laravel
        $dokumen = $request->file('dokumentpelengkap')->store('dokumen');

        //menghitung nilai ppn
        $ppn = $request->nominalhpp * 0.1;
        $bulan = date('m', strtotime($request->tanggaltagihan));
        //memanggil dari createjenissurat dengan variabel name
        ListTagihanProject::create([
            'instansirekanan'=>$request->instansi,
            'tanggaltagihan'=>$request->tanggaltagihan,
            'nominalhpp'=>$request->nominalhpp,
            'ppn'=>$ppn,
            'tanggaljatuhtempo'=>$request->tanggaljatuhtempo,
            'dokumentpelengkap'=>$dokumen,
            'keterangan'=>$request->keterangan,
            'statusdokument'=>'',
            'statustagihan'=>''
        ]);
        return redirect('/listtagihanproject');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listtagihanpoject = ListTagihanProject::find($id);
        return view('page.readlisttagihanpoject ', ['listtagihanpoject'=>$listtagihanpoject ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listproject = ListTagihanProject::find($id);
        
        //letak folder sama layout yang akan diedit, kemudian panggil variabel suratkeluar di bagian input untuk diletakkan disana
        return view('page.editlisttagihanproject ', ['listproject'=>$listproject]);
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
            'dokumentpelengkap'=>'required',
            'keterangan'=>'required',
        ]);

        $listproject = ListTagihanProject::find($id);
        $listproject->instansirekanan = $request->instansirekanan;
        $listproject->tanggaltagihan = $request->tanggaltagihan;
        $listproject->nominalhpp = $request->nominalhpp;
        $listproject->tanggaljatuhtempo = $request->tanggaljatuhtempo;
        $listproject->dokumentpelengkap = $request->dokumentpelengkap;
        $listproject->keterangan = $request->keterangan;
        $listproject->statusdokument = $request->statusdokument;
        $listproject->statustagihan = $request->statustagihan;
        $listproject->save();
        

        return redirect('/listtagihanproject');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listtagihanproject = ListTagihanProject::find($id);
        $listtagihanproject->delete();

        return redirect('/listtagihanproject');
    }
}

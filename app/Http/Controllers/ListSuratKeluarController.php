<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListSuratKeluar;
use App\Instansi;
use App\JenisSuratKeluar;


class ListSuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listsuratkeluar = ListSuratKeluar::all();
        
        return view ('page.dropdown2',compact('listsuratkeluar'));
    }

    public function laporanindex()
    {
        $listsuratkeluar = ListSuratKeluar::all();
        
        return view ('page.laporanlistsuratkeluar',['listsuratkeluar'=>$listsuratkeluar]);
    }

    public function cetaklist()
    {
        $listsuratkeluar = ListSuratKeluar::all();
        
        return view ('page.cetaklaporanlistsuratkeluar',['listsuratkeluar'=>$listsuratkeluar]);
    }

    // public function cetaksatu($id)
    // {
    //     $suratkeluar = ListSuratKeluar::find($id);

    //     return view('page.cetaklistsuratkeluar', compact('suratkeluar'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $listsuratkeluar = ListSuratKeluar::all();

         //untuk mengurutkan nomor
         $max = ListSuratKeluar::max('id');
         $max = $max + 1;

         //memanggil variabel dari instansi
         $instansi = Instansi::all();

         //memanggil variabale dari jenis surat
         $jenissurat = JenisSuratKeluar::all();

         return view ('page.createlistsuratkeluar', compact('max', 'jenissurat', 'instansi','listsuratkeluar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //memanggil dari createlistsuratmasuk dengan variabel name
        // $this->validate($request,[
        //     'no_surat'=>'required',
        //     'jenissurat'=>'required',
        //     'perihal'=>'required',
        //     'tujuan'=>'required',
        //     'perusahaan'=>'required',
        //     'penanggungjawab'=>'required',
        //     'keterangan'=>'required'
        // ]);
        

        //memanggil dari createlistsuratmasuk dengan variabel name dan memasukan ke database
        ListSuratKeluar::create([
            //request itu diambil untuk name
            //'no_surat' itu diambil dari database
            'no_surat'=>$request->no_surat,
            'jenissurat'=>$request->jenissurat,
            'perihal'=>$request->perihal,
            'tujuan'=>$request->instansi,
            'penanggungjawab'=>$request->penanggungjawab,
            'keterangan'=>$request->keterangan,
            'statussuratkeluar'=>''
        ]);
        return redirect('/listsuratkeluar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $laporanlistsuratkeluar = ListSuratKeluar::find($id);

        $suratkeluar = ListSuratKeluar::find($id);

        return view('page.readlistsuratkeluar', compact('suratkeluar','laporanlistsuratkeluar'));
    }

    //untuk view laporan
    public function read($id)
    {
        $suratkeluar = ListSuratKeluar::find($id);

        return view('page.readlaporanlistsuratkeluar', compact('suratkeluar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listkeluar = ListSuratKeluar::find($id);
        
        //letak folder sama layout yang akan diedit, kemudian panggil variabel suratkeluar di bagian input untuk diletakkan disana
        return view('page.editlistsuratkeluar', ['listkeluar'=>$listkeluar]);
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
        // $this->validate($request,[
        //     'no_surat'=>'required',
        //     'jenissurat'=>'required',
        //     'perihal'=>'required',
        //     'tujuan'=>'required',
        //     'perusahaan'=>'required',
        //     'penanggungjawab'=>'required',
        //     'keterangan'=>'required',
        //     'statussuratkeluar'=>'statussuratkeluar'
        // ]);
        
        //memanggil inisialisasi dari edit dan membuat variabel baru yang akan di masukkan ke database
        $listkeluar = ListSuratKeluar::find($id);
        $listkeluar->no_surat = $request->no_surat;
        $listkeluar->jenissurat = $request->jenissurat;
        $listkeluar->perihal = $request->perihal;
        $listkeluar->tujuan = $request->tujuan;
        $listkeluar->penanggungjawab = $request->penanggungjawab;
        $listkeluar->keterangan = $request->keterangan;
        $listkeluar->statussuratkeluar = $request->statussuratkeluar;
        $listkeluar->save();

        return redirect('/listsuratkeluar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suratkeluar = ListSuratKeluar::find($id);
        $suratkeluar->delete();

        return redirect('/listsuratkeluar');
    }
}

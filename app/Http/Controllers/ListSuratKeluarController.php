<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListSuratKeluar;
use App\Instansi;
use App\JenisSuratKeluar;


class ListSuratKeluarController extends Controller
{
    public function index()
    {
        $listsuratkeluar = ListSuratKeluar::all();
        $jenissuratkeluar = JenisSuratKeluar::all();
        $instansi = Instansi::all();

        return view ('page.dropdown2',compact('listsuratkeluar','jenissuratkeluar','instansi'));
    }

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
        
        
        // if (!empty($request->ketstat)) {
        //    $ketstat = $request->ketstat;
        // }else{
        //    $ketstat = '.';
        // }
        //memanggil dari createlistsuratmasuk dengan variabel name dan memasukan ke database
        ListSuratKeluar::create([
            //request itu diambil untuk name
            'no_surat' =>$request->no_surat,
            'jenissurat'=>$request->jenissurat,
            'perihal'=>$request->perihal,
            'tujuan'=>$request->instansi,
            'penanggungjawab'=>$request->penanggungjawab,
            'keterangan'=>$request->keterangan,
            'statussuratkeluar'=>$request->statusuratkeluar,
            'keteranganstatus'=>''
        ]);
        return redirect('/listsuratkeluar');
    }

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

    public function edit($id)
    {
        $listkeluar = ListSuratKeluar::find($id);
        
        //letak folder sama layout yang akan diedit, kemudian panggil variabel suratkeluar di bagian input untuk diletakkan disana
        return view('page.statuslistsuratkeluar', compact('listkeluar'));
    }

    public function update($id, Request $request)
    {   
        //memanggil inisialisasi dari edit dan membuat variabel baru yang akan di masukkan ke database
        $listkeluar = ListSuratKeluar::find($id);
        $listkeluar->jenissurat = $request->jenissurat;
        $listkeluar->perihal = $request->perihal;
        $listkeluar->tujuan = $request->instansi;
        $listkeluar->penanggungjawab = $request->penanggungjawab;
        $listkeluar->keterangan = $request->keterangan;
        $listkeluar->save();

        return redirect('/listsuratkeluar');
    }

    public function status($id, Request $request)
    {
        if (!empty($request->ketstat)) {
           $ketstat = $request->ketstat;
        }else{
           $ketstat = '';
        }

        //memanggil inisialisasi dari edit dan membuat variabel baru yang akan di masukkan ke database
        $listkeluar = ListSuratKeluar::find($id);
        $listkeluar->statussuratkeluar = $request->statusuratkeluar;
        $listkeluar->keteranganstatus = $ketstat;
        $listkeluar->save();

        return redirect('/statussuratkeluar');
    }

    public function statussurat()
    {
        $listsuratkeluar = ListSuratKeluar::all();

        return view('page.dropdown3', compact('listsuratkeluar'));
    }

    public function laporanindex()
    {
        $listsuratkeluar = ListSuratKeluar::all();
        
        return view ('page.dropdown4',compact('listsuratkeluar'));
    }

    public function destroy($id)
    {
        $suratkeluar = ListSuratKeluar::find($id);
        $suratkeluar->delete();

        return redirect('/listsuratkeluar');
    }

    // public function cetaklist()
    // {
    //     $listsuratkeluar = ListSuratKeluar::all();
        
    //     return view ('page.cetaklaporanlistsuratkeluar',['listsuratkeluar'=>$listsuratkeluar]);
    // }

    // public function cetaksatu($id)
    // {
    //     $suratkeluar = ListSuratKeluar::find($id);

    //     return view('page.cetaklistsuratkeluar', compact('suratkeluar'));
    // }
}

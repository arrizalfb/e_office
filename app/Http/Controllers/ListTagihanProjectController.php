<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListTagihanProject;
use App\Instansi;

class ListTagihanProjectController extends Controller
{
    public function index()
    {
        $instansi = Instansi::all();
        $listtagihanproject = ListTagihanProject::all();
        
        return view ('page.dropdown13',compact('listtagihanproject','instansi'));
    }

    public function create()
    {
        $listtagihanproject = ListTagihanProject::all();

        //untuk mengurutkan nomor
        $max = ListTagihanProject::max('id');
        $max = $max + 1;
        
        //memanggil variabel dari instansi
        $instansi = Instansi::all();
        
        return view ('page.createlisttagihanproject',compact('listtagihanproject','instansi','max'));
    }

    public function store(Request $request)
    {
        //memanggil dari dengan variabel name
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
        //dd($dokumen);

        //menampilkan bulan
        $bulan = date('m', strtotime($request->tanggaltagihan));

        //menghitung nilai ppn
        $ppn = $request->nominalhpp * 0.1;
        // $bulan = date('m', strtotime($request->tanggaltagihan));
        
        //memanggil dari createjenissurat dengan variabel name
        ListTagihanProject::create([
            'instansirekanan'=>$request->instansi,
            'tanggaltagihan'=>$request->tanggaltagihan,
            'nominalhpp'=>$request->nominalhpp,
            'ppn'=>$ppn,
            'tanggaljatuhtempo'=>$request->tanggaljatuhtempo,
            'dokumentpelengkap'=>$dokumen,
            'keterangan'=>$request->keterangan,
            // 'bulantagihan'=>$bulan,
        ]);
        return redirect('/listtagihanproject');
    }

    public function update(Request $request, $id)
    {
        // $this->validate($request,[
        //     'instansirekanan'=>'required',
        //     'tanggaltagihan'=>'required',
        //     'nominalhpp'=>'required',
        //     'tanggaljatuhtempo'=>'required',
        //     'dokumentpelengkap'=>'required',
        //     'keterangan'=>'required',
        // ]);
        
        $file_baru = $request->file('file_baru');
        // dd($file_baru);
        if (!empty($file_baru)) {
           $file = $file_baru;
           $file = $file_baru->store('dokumen');
        }else{
           $file = $request->file_lama;
        }

        $listproject = ListTagihanProject::find($id);
        $listproject->instansirekanan = $request->instansi;
        $listproject->tanggaltagihan = $request->tanggaltagihan;
        $listproject->nominalhpp = $request->nominalhpp;
        $listproject->tanggaljatuhtempo = $request->tanggaljatuhtempo;
        $listproject->dokumentpelengkap = $file;
        $listproject->keterangan = $request->keterangan;
        $listproject->save();
        
        return redirect('/listtagihanproject');
    }

    public function status(Request $request, $id)
    {
        // $this->validate($request,[
        //     'instansirekanan'=>'required',
        //     'tanggaltagihan'=>'required',
        //     'nominalhpp'=>'required',
        //     'tanggaljatuhtempo'=>'required',
        //     'dokumentpelengkap'=>'required',
        //     'keterangan'=>'required',
        // ]);

        if (!empty($request->ketstat)) {
           $ketstat = $request->ketstat;
        }else{
           $ketstat = '';
        }

        $listproject = ListTagihanProject::find($id);
        $listproject->statusdokument = $request->statusdok;
        $listproject->keteranganstatus = $ketstat;
        $listproject->save();
        
        return redirect('/statusdokumentproject');
    }

    public function tagihan(Request $request, $id)
    {
        // $this->validate($request,[
        //     'instansirekanan'=>'required',
        //     'tanggaltagihan'=>'required',
        //     'nominalhpp'=>'required',
        //     'tanggaljatuhtempo'=>'required',
        //     'dokumentpelengkap'=>'required',
        //     'keterangan'=>'required',
        // ]);

        $listproject = ListTagihanProject::find($id);
        $listproject->statustagihan = $request->statustagihan;
        $listproject->save();

        return redirect('/statustagihanproject');
    }

    public function statusdokument()
    {
        $instansi = Instansi::all();
        $listtagihanproject = ListTagihanProject::all();

        return view('page.dropdown14', compact('instansi','listtagihanproject'));
    }

    public function statustagihan()
    {
        $instansi = Instansi::all();
        $listtagihanproject = ListTagihanProject::all();

        return view('page.dropdown15', compact('instansi','listtagihanproject'));
    }

    public function laporanindex()
    {
        $instansi = Instansi::all();
        $listtagihanproject = ListTagihanProject::all();
        
        return view ('page.dropdown16',compact('instansi','listtagihanproject'));
    }

    public function destroy($id)
    {
        $listtagihanproject = ListTagihanProject::find($id);
        $listtagihanproject->delete();

        return redirect('/listtagihanproject');
    }

    // public function cetaksatu()
    // {
    //     $listtagihanproject = ListTagihanProject::all();
        
    //     return view ('page.cetaklistproject', compact('listtagihanproject'));
    // }

    // public function laporanindex()
    // {
    //     $listtagihanproject = ListTagihanProject::all();
        
    //     return view ('page.laporanlistproject', compact('listtagihanproject'));
    // }

    // public function cetaklist()
    // {
    //     $listtagihanproject = ListTagihanProject::all();
        
    //     return view ('page.cetaklaporanlistproject', compact('listtagihanproject'));
    // }
 
    // public function show($id)
    // {
    //     $laporanlistproject = ListTagihanProject::find($id);

    //     $listtagihanproject = ListTagihanProject::find($id);

    //     return view('page.readlisttagihanproject ', compact('laporanlistproject','listtagihanproject'));
    // }

    // public function read($id)
    // {
    //     $listtagihanproject = ListTagihanProject::find($id);

    //     return view('page.readlaporanlistproject', compact('listtagihanproject'));
    // }

    // public function edit($id)
    // {
    //     $listproject = ListTagihanProject::find($id);
        
    //     //letak folder sama layout yang akan diedit, kemudian panggil variabel suratkeluar di bagian input untuk diletakkan disana
    //     return view('page.editlisttagihanproject ', ['listproject'=>$listproject]);
    // }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListTagihanProdukLayanan;
use App\Instansi;

class ListTagihanProdukLayananController extends Controller
{

    public function index()
    {
        $instansi = Instansi::all();
        $listtagihanproduklayanan = ListTagihanProdukLayanan::all();
        
        return view ('page.dropdown9',compact('listtagihanproduklayanan','instansi'));
    }

    public function create()
    {
        $listtagihanproduklayanan = ListTagihanProdukLayanan::all();

        //untuk mengurutkan nomor
        $max = ListTagihanProdukLayanan::max('id');
        $max = $max + 1;
        
        //memanggil variabel dari instansi
        $instansi = Instansi::all();

        return view ('page.createlisttagihanproduklayanan', compact('listtagihanproduklayanan','instansi','max'));
    }

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
            'nominalhpp'=>$request->nominalhpp,
            'ppn'=>$ppn,
            'tanggaljatuhtempo'=>$request->jatuhtempo,
            'dokumenpelengkap'=>$dokumen,
            'keterangan'=>$request->keterangan,
            'statusdokument'=>'',
            'statustagihan'=>''
        ]);
        return redirect('/listtagihanproduklayanan');
    }

    public function update(Request $request, $id)
    {
        // $this->validate($request,[
        //     'instansirekanan'=>'required',
        //     'tanggaltagihan'=>'required',
        //     'nominalhpp'=>'required',
        //     'tanggaljatuhtempo'=>'required',
        //     'dokumenpelengkap'=>'required',
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

        $listtagihan = ListTagihanProdukLayanan::find($id);
        $listtagihan->instansirekanan = $request->instansi;
        $listtagihan->tanggaltagihan = $request->tanggaltagihan;
        $listtagihan->nominalhpp = $request->nominalhpp;
        $listtagihan->tanggaljatuhtempo = $request->jatuhtempo;
        $listtagihan->dokumenpelengkap = $file;
        $listtagihan->keterangan = $request->keterangan;
        $listtagihan->save();

        return redirect('/listtagihanproduklayanan');
    }

    public function status(Request $request, $id)
    {
        // $this->validate($request,[
        //     'instansirekanan'=>'required',
        //     'tanggaltagihan'=>'required',
        //     'nominalhpp'=>'required',
        //     'tanggaljatuhtempo'=>'required',
        //     'dokumenpelengkap'=>'required',
        //     'keterangan'=>'required',
        // ]);


        if (!empty($request->ketstat)) {
           $ketstat = $request->ketstat;
        }else{
           $ketstat = '';
        }

        $listtagihan = ListTagihanProdukLayanan::find($id);
        $listtagihan->statusdokument = $request->status;
        $listtagihan->keteranganstatus = $ketstat;
        $listtagihan->save();

        return redirect('/statusdokumentproduklayanan');
    }

    public function tagihanstatus(Request $request, $id)
    {
        // $this->validate($request,[
        //     'instansirekanan'=>'required',
        //     'tanggaltagihan'=>'required',
        //     'nominalhpp'=>'required',
        //     'tanggaljatuhtempo'=>'required',
        //     'dokumenpelengkap'=>'required',
        //     'keterangan'=>'required',
        // ]);

        if (!empty($request->ketstat)) {
           $ketstat = $request->ketstat;
        }else{
           $ketstat = '';
        }

        $listtagihan = ListTagihanProdukLayanan::find($id);
        $listtagihan->status = $request->status;
        $listtagihan->save();

        return redirect('/statustagihanproduklayanan');
    }

    public function statusdokument()
    {
        $instansi = Instansi::all();
        $listtagihanproduklayanan = ListTagihanProdukLayanan::all();    

        return view('page.dropdown10', compact('instansi','listtagihanproduklayanan'));
    }

    public function statustagihan()
    {
        $instansi = Instansi::all();
        $listtagihanproduklayanan = ListTagihanProdukLayanan::all();   

        return view('page.dropdown11', compact('instansi','listtagihanproduklayanan'));
    }

    public function laporanindex()
    {
        $instansi = Instansi::all();
        $listtagihanproduklayanan = ListTagihanProdukLayanan::all();
        
        return view ('page.dropdown12',compact('instansi','listtagihanproduklayanan'));
    }

    public function destroy($id)
    {
        $listtagihanproduklayanan = ListTagihanProdukLayanan::find($id);
        $listtagihanproduklayanan->delete();

        return redirect('/listtagihanproduklayanan');
    }

    // public function cetaksatu()
    // {
    //     $listtagihanproduklayanan = ListTagihanProdukLayanan::all();
        
    //     return view ('page.cetaklisttagihanproduk', compact('listtagihanproduklayanan'));
    // }

    // public function laporanindex()
    // {
    //     $listtagihanproduklayanan = ListTagihanProdukLayanan::all();
        
    //     return view ('page.laporanlisttagihanproduk', compact('listtagihanproduklayanan'));
    // }

    // public function cetaklist()
    // {
    //     $listtagihanproduklayanan = ListTagihanProdukLayanan::all();
        
    //     return view ('page.cetaklaporanlisttagihanproduk', compact('listtagihanproduklayanan'));
    // }

    // public function show($id)
    // {
    //     $laporanlisttagihanproduk = ListTagihanProdukLayanan::find($id);

    //     $listtagihanproduklayanan = ListTagihanProdukLayanan::find($id);

    //     return view('page.readlisttagihanproduklayanan', compact('listtagihanproduklayanan','laporanlisttagihanproduk'));
    // }

    // public function read($id)
    // {
    //     $listtagihanproduklayanan = ListTagihanProdukLayanan::find($id);

    //     return view('page.readlaporanlisttagihanproduk', compact('listtagihanproduklayanan'));
    // }

    // public function edit($id)
    // {
    //     $listtagihan = ListTagihanProdukLayanan::find($id);
        
    //     //letak folder sama layout yang akan diedit, kemudian panggil variabel suratkeluar di bagian input untuk diletakkan disana
    //     return view('page.editlisttagihanproduklayanan ', ['listtagihan'=>$listtagihan]);
    // }
}

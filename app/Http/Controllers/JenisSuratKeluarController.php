<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisSuratKeluar;
use App\Instansi;
use App\Divisi;

class JenisSuratKeluarController extends Controller
{
    public function index()
    {
        $jenissuratkeluar = JenisSuratKeluar::all();
        $instansi = Instansi::all();
        $divisi = Divisi::all();
        $inisialjenissurat = JenisSuratKeluar::all();

        $max = JenisSuratKeluar::max('id');
        $max = $max + 1;
        
        return view ('page.dropdown1',compact('jenissuratkeluar', 'instansi', 'max', 'divisi'));

    }

    public function statussurat()
    {
        $jenissuratkeluar = JenisSuratKeluar::all();

        return view('page.dropdown3', compact('jenissuratkeluar'));
    }

    public function create()
    {
        //untuk mengurutkan nomor
        $jenissuratkeluar = JenisSuratKeluar::all();
        
        $max = JenisSuratKeluar::max('id');
        $max = $max + 1;
        
        return view ('page.createjenissuratkeluar', compact('max', 'jenissuratkeluar'));
    }

    public function store(Request $request)
    {
        //memanggil dari createjenissurat dengan variabel name
        // $this->validate($request,[
        //     'noromawijenissurat'=>'required',
        //     'suratjenis'=>'required',
        //     'inisialjenissurat'=>'required',
        //     'ket'=>'required'
        // ]);
        $nosurat = $request->nosurat.'/'.$request->divnosurat.$request->noromawijenissurat;
       
        //memanggil dari createjenissurat dengan variabel naem dan dimasukkan ke database
        JenisSuratKeluar::create([
            'noromawijenissurat'=>$nosurat,
            'jenissurat'=>$request->suratjenis,
            'inisialjenissurat'=>$request->inisialjenissurat,
            'keterangan'=>$request->ket,
        ]);
        return redirect('/jenissuratkeluar');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $suratkeluar = JenisSuratKeluar::find($id);
        
        //letak folder sama layout yang akan diedit, kemudian panggil variabel suratkeluar di bagian input untuk diletakkan disana
        return view('page.editjenissuratkeluar', ['suratkeluar'=>$suratkeluar]);
    }

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

        //$suratkeluar->no_urut_surat = $request->nourutsurat;
        $suratkeluar->jenissurat = $request->suratjenis;
        $suratkeluar->inisialjenissurat = $request->inisialjenissurat;
        $suratkeluar->keterangan = $request->ket;
        $suratkeluar->save();

        return redirect('/jenissuratkeluar');

    }

    public function destroy($id)
    {
        $suratkeluar = JenisSuratKeluar::find($id);
        $suratkeluar->delete();

        return redirect('/jenissuratkeluar');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListSuratMasuk;

class ListSuratMasukController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listsuratmasuk = ListSuratMasuk::all();
        
        return view ('page.dropdown4',compact('listsuratmasuk'));
    }

    public function laporanindex()
    {
        $listsuratmasuk = ListSuratMasuk::all();

        return view ('page.laporanlistsuratmasuk',compact('listsuratmasuk'));
    }

    public function cetaklist()
    {
        $listsuratmasuk = ListSuratMasuk::all();

        return view ('page.cetaklaporanlistsuratmasuk',compact('listsuratmasuk'));
    }

    // public function cetaksatu($id)
    // {
    //     $suratmasuk = ListSuratMasuk::all();

    //     return view ('page.cetaklistsuratmasuk',compact('suratmasuk'));
    // }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listsuratmasuk = ListSuratMasuk::all();

        //untuk mengurutkan nomor
        $max = ListSuratMasuk::max('id');
        $max = $max + 1;

        return view ('page.createlistsuratmasuk', compact('listsuratmasuk','max'));
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
        //     'perihal'=>'required',
        //     'instansipengirimasuk'=>'required',
        //     'keterangan'=>'required',
        // ]);
        
        //memanggil dari createlistsuratmasuk dengan variabel id
        ListSuratMasuk::create([
            //dari database => dari variabel name html
            'no_surat'=>$request->number,
            'perihal'=>$request->perihal,
            'instansipengirim'=>$request->instansipengirim,
            'Keterangan'=>$request->Keterangan,
            'statussuratmasuk'=>''
        ]);
        return redirect('/listsuratmasuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $laporanlistsuratmasuk = ListSuratMasuk::find($id);

        $suratmasuk = ListSuratMasuk::find($id);

        return view('page.readlistsuratmasuk', compact('laporanlistsuratmasuk','suratmasuk'));
    }

    //untuk view laporan
    public function read($id)
    {
        $suratmasuk = ListSuratMasuk::find($id);

        return view('page.readlaporanlistsuratmasuk', compact('suratmasuk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $suratmasuk = ListSuratMasuk::find($id);
        
        //letak folder sama layout yang akan diedit, kemudian panggil variabel suratkeluar di bagian input untuk diletakkan disana
        return view('page.editlistsuratmasuk', ['suratmasuk'=>$suratmasuk]);
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
            'no_surat'=>'required',
            'perihal'=>'required',
            'instansipengirim'=>'required',
            'Keterangan'=>'required',
            'statussuratmasuk'=>'required'
        ]);
        
        //memanggil inisialisasi dari edit dan membuat variabel baru yang akan di masukkan ke database
        $suratmasuk = ListSuratMasuk::find($id);
        $suratmasuk->no_surat = $request->no_surat;
        $suratmasuk->perihal = $request->perihal;
        $suratmasuk->instansipengirim = $request->instansipengirim;
        $suratmasuk->Keterangan = $request->Keterangan;
        $suratmasuk->statussuratmasuk = $request->statussuratmasuk;
        $suratmasuk->save();

        return redirect('/listsuratmasuk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suratmasuk = ListSuratMasuk::find($id);
        $suratmasuk->delete();

        return redirect('/listsuratmasuk');
    }
}

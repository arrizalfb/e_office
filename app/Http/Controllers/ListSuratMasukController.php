<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListSuratMasuk;

class ListSuratMasukController extends Controller
{

    public function index()
    {
        $listsuratmasuk = ListSuratMasuk::all();
        
        return view ('page.dropdown5',compact('listsuratmasuk'));
    }

    public function create()
    {
        $listsuratmasuk = ListSuratMasuk::all();

        //untuk mengurutkan nomor
        $max = ListSuratMasuk::max('id');
        $max = $max + 1;

        return view ('page.createlistsuratmasuk', compact('listsuratmasuk','max'));
    }

    public function store(Request $request)
    {
        // diambil dari html name
        // $this->validate($request,[
        //     'no_surat'=>'required',
        //     'perihal'=>'required',
        //     'instansipengirimasuk'=>'required',
        //     'keterangan'=>'required',
        // ]);
        
        //memanggil dari createlistsuratmasuk dengan variabel id
        ListSuratMasuk::create([
            //dari database => dari variabel name html
            'no_surat'=>$request->no_surat,
            'perihal'=>$request->perihal,
            'instansipengirim'=>$request->instansipengirim,
            'Keterangan'=>$request->Keterangan,
            'statussuratmasuk'=>''
        ]);
        return redirect('/listsuratmasuk');
    }

    public function update(Request $request, $id)
    {
        
        //memanggil inisialisasi dari edit dan membuat variabel baru yang akan di masukkan ke database
        $suratmasuk = ListSuratMasuk::find($id);

        $suratmasuk->no_surat = $request->no_surat;
        $suratmasuk->perihal = $request->perihal;
        $suratmasuk->instansipengirim = $request->instansipengirim;
        $suratmasuk->Keterangan = $request->Keterangan;
        // $suratmasuk->statussuratmasuk = $request->statussuratmasuk;
        $suratmasuk->save();

        return redirect('/listsuratmasuk');
    }

    public function status(Request $request, $id)
    {
        if (!empty($request->nosurat)) {
           $nosurat = $request->nosurat;
        }else{
           $nosurat = '';
        }
        
        //memanggil inisialisasi dari edit dan membuat variabel baru yang akan di masukkan ke database
        $suratmasuk = ListSuratMasuk::find($id);
        $suratmasuk->keteranganstatus = $nosurat;
        $suratmasuk->save();

        return redirect('/statussuratmasuk');
    }

    public function statussurat()
    {
        $listsuratmasuk = ListSuratMasuk::all();

        return view('page.dropdown6', compact('listsuratmasuk'));
    }

    public function laporanindex()
    {
        $listsuratmasuk = ListSuratMasuk::all();
        
        return view ('page.dropdown7',compact('listsuratmasuk'));
    }

    public function destroy($id)
    {
        $suratmasuk = ListSuratMasuk::find($id);
        $suratmasuk->delete();

        return redirect('/listsuratmasuk');
    }

    // public function cetaklist()
    // {
    //     $listsuratmasuk = ListSuratMasuk::all();

    //     return view ('page.cetaklaporanlistsuratmasuk',compact('listsuratmasuk'));
    // }

    // public function cetaksatu($id)
    // {
    //     $suratmasuk = ListSuratMasuk::all();

    //     return view ('page.cetaklistsuratmasuk',compact('suratmasuk'));
    // }

    // public function show($id)
    // {
    //     $laporanlistsuratmasuk = ListSuratMasuk::find($id);

    //     $suratmasuk = ListSuratMasuk::find($id);

    //     return view('page.readlistsuratmasuk', compact('laporanlistsuratmasuk','suratmasuk'));
    // }

    //untuk view laporan
    // public function read($id)
    // {
    //     $suratmasuk = ListSuratMasuk::find($id);

    //     return view('page.readlaporanlistsuratmasuk', compact('suratmasuk'));
    // }

    // public function edit($id)
    // {
    //     $suratmasuk = ListSuratMasuk::find($id);
        
    //     //letak folder sama layout yang akan diedit, kemudian panggil variabel suratkeluar di bagian input untuk diletakkan disana
    //     return view('page.editlistsuratmasuk', ['suratmasuk'=>$suratmasuk]);
    // }

}

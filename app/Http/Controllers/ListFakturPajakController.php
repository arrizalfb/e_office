<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListFakturPajak;
use App\Instansi;

class ListFakturPajakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listfakturpajak = ListFakturPajak::all();
        
        return view ('page.dropdown16',['listfakturpajak'=>$listfakturpajak]);
    }

    public function laporanindex()
    {
        $listfakturpajak = ListFakturPajak::all();
        
        return view ('page.laporanlistfakturpajak',['listfakturpajak'=>$listfakturpajak]);
    }

    public function cetaklist()
    {
        $listfakturpajak = ListFakturPajak::all();
        
        return view ('page.cetaklaporanlistpajak',['listfakturpajak'=>$listfakturpajak]);
    }

    // public function cetaksatu()
    // {
    //     $listfakturpajak = ListFakturPajak::all();
        
    //     return view ('page.cetaklistpajak',['listfakturpajak'=>$listfakturpajak]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listfakturpajak = ListFakturPajak::all();

        //untuk mengurutkan nomor
        $max = ListFakturPajak::max('id');
        $max = $max + 1;
        
        //memanggil variabel dari instansi
        $instansi = Instansi::all();
        
        return view ('page.createlistfakturpajak',compact('listfakturpajak','instansi','max'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // //memanggil dari createlistsuratmasuk dengan variabel name
        // $this->validate($request,[
        //     'nofakturpajak'=>'required',
        //     'tanggalfakturpajak'=>'required',
        //     'nokwitansi'=>'required',
        //     'noinvoice'=>'required',
        //     'perihal'=>'required',
        //     'bulanpajak'=>'required',
        //     'nominalhpp'=>'required',
        //     'nominalppn'=>'required',
        //     'keterangan'=>'required'
        // ]);
        
        //memanggil dari createlistsuratmasuk dengan variabel id
        ListFakturPajak::create([
            'nofakturpajak'=>$request->nofakturpajak,
            'tanggalfakturpajak'=>$request->tanggalfakturpajak,
            'nokwitansi'=>$request->nokwitansi,
            'noinvoice'=>$request->noinvoice,
            'perihal'=>$request->perihal,
            'instansirekanan'=>$request->instansi,
            'npwp'=>$request->npwp,
            'bulanpajak'=>$request->bulanpajak,
            'nominalhpp'=>$request->nominalhpp,
            'nominalppn'=>$request->nominalppn,
            'keterangan'=>$request->keterangan,
            'statusfakturpajak'=>''
            
        ]);
        return redirect('/listfakturpajak');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listfakturpajak = ListFakturPajak::find($id);

        return view('page.readlistfakturpajak ', ['listfakturpajak'=>$listfakturpajak ]);
    }

    public function read($id)
    {
        $listfakturpajak = ListFakturPajak::find($id);

        return view('page.readlaporanlistfakturpajak ', ['listfakturpajak'=>$listfakturpajak ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listfaktur = ListFakturPajak::find($id);
        
        //letak folder sama layout yang akan diedit, kemudian panggil variabel suratkeluar di bagian input untuk diletakkan disana
        return view('page.editlistfakturpajak ', ['listfaktur'=>$listfaktur]);
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
            'nofakturpajak'=>'required',
            'tanggalfakturpajak'=>'required',
            'nokwitansi'=>'required',
            'noinvoice'=>'required',
            'perihal'=>'required',
            'bulanpajak'=>'required',
            'nominalhpp'=>'required',
            'nominalppn'=>'required',
            'keterangan'=>'required'
        ]);
        
        $listfaktur = ListFakturPajak::find($id);
        $listfaktur->nofakturpajak = $request->nofakturpajak;
        $listfaktur->tanggalfakturpajak = $request->tanggalfakturpajak;
        $listfaktur->nokwitansi = $request->nokwitansi;
        $listfaktur->noinvoice = $request->noinvoice;
        $listfaktur->perihal = $request->perihal;
        $listfaktur->instansirekanan = $request->instansi;
        $listfaktur->bulanpajak = $request->bulanpajak;
        $listfaktur->nominalhpp = $request->nominalhpp;
        $listfaktur->nominalppn = $request->nominalppn;
        $listfaktur->keterangan = $request->keterangan;
        $listfaktur->statusfakturpajak = $request->statusfakturpajak;
        $listfaktur->save();


        return redirect('/listfakturpajak');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suratmasuk = ListFakturPajak::find($id);
        $suratmasuk->delete();

        return redirect('/listfakturpajak');
    }
}

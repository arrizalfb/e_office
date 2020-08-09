<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Divisi;

class DivisiController extends Controller
{
    public function index()
    {
        $divisi = Divisi::all();
        
        return view ('page.divisi', compact('divisi'));
    }

    public function create()
    {
        $divisi = Divisi::all();

        $max = Divisi::max('id');
        $max = $max + 1;

        return view ('page.createdivisi', compact('divisi'));
    }

    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'inisialdevisi'=>'required',
        //     'jenisdivisi'=>'required',
        // ]);

        //dari database
        Divisi::create([
            'inisialdevisi'=>$request->inisialdevisi,
            'jenisdivisi'=>$request->jenisdivisi,
        ]);
        return redirect('/divisi');
    }

    public function update(Request $request, $id)
    {
        $divisi = Divisi::find($id);

        $divisi->inisialdevisi= $request->inisialdevisi;
        $divisi->jenisdivisi = $request->jenisdivisi;
        $divisi->save();

        return redirect('/divisi');
    }

    public function destroy($id)
    {
        $divisi = Divisi::find($id);
        $divisi->delete();

        return redirect('/divisi');
    }
}

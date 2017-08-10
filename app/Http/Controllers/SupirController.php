<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supir;

class SupirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Supir = Supir::all();
        return view('Supir.index', compact('Supir'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supir = supir::all();
        return view('supir.create', compact('supir'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $supir = new supir;
        $supir->nama = $request->nama;
        $supir->jk = $request->jk;
        $supir->no_identitas = $request->no_identitas;
        $supir->alamat = $request->alamat;
        $supir->no_hp = $request->no_hp;
        $supir->harga_sewa = $request->Harga_sewa;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = str_random(6). '.'.$file->getClientOriginalName();
            $desinationPath = public_path().DIRECTORY_SEPARATOR.'img';
            $uploadSucces = $file->move($desinationPath, $filename);
            $supir->foto = $filename;
         }
        $supir->save();
        return redirect('supir');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $supir = supir::findOrFail($id);
        return view('supir.show', compact('supir'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $supir = supir::findOrFail($id);
        return view('supir.edit', compact('supir'));
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
        //
        $supir = supir::findOrFail($id);
        $supir->nama = $request->nama;
        $supir->jk = $request->jk;
        $supir->no_identitas = $request->no_identitas;
        $supir->alamat = $request->alamat;
        $supir->no_hp = $request->no_hp;
        $supir->harga_sewa = $request->Harga_sewa;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = str_random(6). '.'.$file->getClientOriginalName();
            $desinationPath = public_path().DIRECTORY_SEPARATOR.'img';
            $uploadSucces = $file->move($desinationPath, $filename);
            $supir->foto = $filename;
         }
        $supir->save();
        return redirect('supir');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mobil;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = mobil::all();
        return view('mobil.index', compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mobil = mobil::all();
        return view('mobil.create', compact('mobil'));
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
        $mobil = new mobil;
        $mobil->merk = $request->Merk;
        $mobil->palt_no = $request->Palt_no;
        $mobil->spesifikasi = $request->Spesifikasi;
        $mobil->harga_sewa = $request->Harga_sewa;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = str_random(6). '.'.$file->getClientOriginalName();
            $desinationPath = public_path().DIRECTORY_SEPARATOR.'img';
            $uploadSucces = $file->move($desinationPath, $filename);
            $mobil->foto = $filename;
         }
        $mobil->save();
        return redirect('mobil');

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
        $mobil = mobil::findOrFail($id);
        return view('mobil.show', compact('mobil'));
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
        $mobil = mobil::findOrFail($id);
        return view('mobil.edit', compact('mobil'));
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
        $mobil = mobil::findOrFail($id);
        $mobil->merk = $request->merk;
        $mobil->palt_no = $request->palt_no;
        $mobil->spesifikasi = $request->spesifikasi;
        $mobil->harga_sewa = $request->Harga_sewa;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = str_random(6). '.'.$file->getClientOriginalName();
            $desinationPath = public_path().DIRECTORY_SEPARATOR.'img';
            $uploadSucces = $file->move($desinationPath, $filename);
            $mobil->foto = $filename;
         }
        $mobil->save();
        return redirect('mobil');

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
        $mobil = mobil::findOrFail($id);
        $mobil->delete();
        return redirect('mobil');
    }
}

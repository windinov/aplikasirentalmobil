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

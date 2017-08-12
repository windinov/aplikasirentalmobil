<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sewa;
use App\konsumen;
use App\mobil;
use App\supir;

class sewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sewa= sewa::with('mobil','supir','konsumen')->get();
        return view('sewa.index', compact('sewa','supir','konsumen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mobil=Mobil::all();
        $supir=Supir::all();
        $konsumen =konsumen::all();
        return view('sewa.create', compact('mobil','supir','konsumen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaksi = $request->all();

        $mobil = mobil::where('id', $transaksi['mobil_id'])->first();
        // dd($mobil);
        $hargasewa = $mobil->harga_sewa;
        // dd($hargasewa);
        $supir = supir::where('id', $transaksi['id_supir'])->first();

        $konsumen = new sewa;
        $konsumen->tgl_sewa=$request->tgl_sewa;
        $konsumen->jmlh_hari=$request->jmlh_hari;
        $konsumen->total_sewa= ($hargasewa = $request->jmlh_hari) + $supir->harga_sewa;

        $konsumen->konsumen_id=$request->id_konsumen;
        $konsumen->mobil_id=$request->mobil_id;
        $konsumen->supir_id=$request->id_supir;
        //dd($konsumen);
        $konsumen->save();
        return redirect('sewa');
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

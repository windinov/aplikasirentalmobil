<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\konsumen;
class KonsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konsumen = konsumen::all();
        return view('konsumen.index', compact('konsumen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('konsumen.create');
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
        $konsumen = new konsumen;
        $konsumen->nama = $request->a;
        $konsumen->jk = $request->b;
        $konsumen->no_hp = $request->c;
        $konsumen->no_identitas = $request->d;
        $konsumen->alamat = $request->e;
        $konsumen->save();
        return redirect('konsumen');
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
        $konsumen = konsumen::findOrFail($id);
        return view('konsumen.show', compact('konsumen'));
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
        $konsumen = konsumen::findOrFail($id);
        return view('konsumen.edit', compact('konsumen'));
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
        $konsumen = konsumen::findOrFail($id);
        $konsumen->nama = $request->a;
        $konsumen->jk = $request->b;
        $konsumen->no_hp = $request->c;
        $konsumen->no_identitas = $request->d;
        $konsumen->alamat = $request->e;
        $konsumen->save();
        return redirect('konsumen');

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
        $konsumen = konsumen::findOrFail($id);
        $konsumen->delete();
        return redirect('konsumen');
    }
}

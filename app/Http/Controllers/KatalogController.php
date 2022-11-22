<?php

namespace App\Http\Controllers;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;
use App\Models\Katalog;
use Validator;
use App\Http\Resources\Katalog as KatalogResource;


class KatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $katalog = Katalog::all();
        return view('katalog.index', compact('katalog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $katalog = Katalog::all();
        return view('katalog.create', compact('katalog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $nm = $request->foto;
        $namaFile = $nm->getClientOriginalName();
        
        $katalog = new Katalog();
        $katalog->nama_makanan = $request->nama_makanan;
        $katalog->harga = $request->harga;
        $katalog->keterangan = $request->keterangan;
        $katalog->foto = $namaFile;
        $nm->move(public_path().'/img',$namaFile);
        $katalog->save();


        return redirect(route('katalog.index'));
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
    public function edit(Request $request, $id)
    {
        $katalog = Katalog::findorfail($id);
        return view('katalog.edit', compact('katalog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Katalog $katalog, Request $request)
    {
        $input = $request->all();

        $nm = $request->foto;
        $namaFile = $nm->getClientOriginalName();


        $katalog->nama_makanan = $request->nama_makanan;
        $katalog->harga = $request->harga;
        $katalog->keterangan = $request->keterangan;
        $katalog->foto = $namaFile;
        $nm->move(public_path().'/img',$namaFile);
        $katalog->save();


        return redirect(route('katalog.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $katalog = Katalog::find($id);

        $katalog->delete();

        return redirect(route('katalog.index'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Kas;
use Validator;
use Illuminate\Http\RedirectResponse;
use App\Http\Resources\Kas as KasResource;


class UangKasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kas = Kas::all();
        return view('kas.index', compact('kas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kas = Kas::all();
        return view('kas.create', compact('kas'));
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
   
        $kas = new Kas();
        $kas->nama_transaksi = $request->nama_transaksi;
        $kas->tgl_transaksi = $request->tgl_transaksi;
        $kas->uang_keluar = $request->uang_keluar;
        $kas->foto = $namaFile;
        $nm->move(public_path().'/imgKas',$namaFile);
        $kas->save();

        return redirect(route('kas.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $kas = Kas::findorfail($id);
        return view('kas.show', compact('kas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $kas = Kas::findorfail($id);
        return view('kas.edit', compact('kas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Kas $kas, Request $request)
    {
        $input = $request->all();

        $nm = $request->foto;
        $namaFile = $nm->getClientOriginalName();
   
        $kas->nama_transaksi = $request->nama_transaksi;
        $kas->tgl_transaksi = $request->tgl_transaksi;
        $kas->uang_keluar = $request->uang_keluar;
        $kas->foto = $namaFile;
        $nm->move(public_path().'/imgKas',$namaFile);
        $kas->save();

        return redirect(route('kas.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kas = Kas::find($id);

        $kas->delete();
   
        return redirect(route('kas'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\PesananMasuk;
use App\Http\Requests\StorePesananMasukRequest;
use App\Http\Requests\UpdatePesananMasukRequest;

class PesananMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pesanan.masuk.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePesananMasukRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePesananMasukRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PesananMasuk  $pesananMasuk
     * @return \Illuminate\Http\Response
     */
    public function show(PesananMasuk $pesananMasuk)
    {
        return view('pesanan.masuk.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PesananMasuk  $pesananMasuk
     * @return \Illuminate\Http\Response
     */
    public function edit(PesananMasuk $pesananMasuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePesananMasukRequest  $request
     * @param  \App\Models\PesananMasuk  $pesananMasuk
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePesananMasukRequest $request, PesananMasuk $pesananMasuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PesananMasuk  $pesananMasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(PesananMasuk $pesananMasuk)
    {
        //
    }
}

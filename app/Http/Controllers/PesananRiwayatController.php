<?php

namespace App\Http\Controllers;

use App\Models\PesananRiwayat;
use App\Http\Requests\StorePesananRiwayatRequest;
use App\Http\Requests\UpdatePesananRiwayatRequest;

class PesananRiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pesanan.riwayat.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePesananRiwayatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePesananRiwayatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PesananRiwayat  $pesananRiwayat
     * @return \Illuminate\Http\Response
     */
    public function show(PesananRiwayat $pesananRiwayat)
    {
        return view('pesanan.riwayat.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PesananRiwayat  $pesananRiwayat
     * @return \Illuminate\Http\Response
     */
    public function edit(PesananRiwayat $pesananRiwayat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePesananRiwayatRequest  $request
     * @param  \App\Models\PesananRiwayat  $pesananRiwayat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePesananRiwayatRequest $request, PesananRiwayat $pesananRiwayat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PesananRiwayat  $pesananRiwayat
     * @return \Illuminate\Http\Response
     */
    public function destroy(PesananRiwayat $pesananRiwayat)
    {
        //
    }
}

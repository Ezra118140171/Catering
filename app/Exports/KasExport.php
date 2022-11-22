<?php

namespace App\Exports;

use App\Models\Kas;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KasExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return[
            'id_kas',
            'nama_transaksi',
            'tgl_transaksi',
            'uang_keluar',
            'foto'
        ];
    }
    public function collection()
    {
        return Kas::all();
    }
}

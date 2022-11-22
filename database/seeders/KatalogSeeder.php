<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Katalog;

class KatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $katalog = Katalog::create([
            'nama_makanan' => 'konyol',
            'harga' => 'Rp. 100.000',
            'keterangan' => 'konyol banget asli kon',
            'foto' => '',
        ]);

        $katalog = Katalog::create([
            'nama_makanan' => 'Memang',
            'harga' => 'Rp. 100.000',
            'keterangan' => 'Memang ya memang',
            'foto' => '',
        ]);
    }
}

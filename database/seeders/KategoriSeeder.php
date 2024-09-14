<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_nama' => 'Elektronik Rumah',
            ],
            [
                'kategori_id' => 2,
                'kategori_nama' => 'Peralatan Melukis',
            ],
            [
                'kategori_id' => 3,
                'kategori_nama' => 'Mainan Anak',
            ],
            [
                'kategori_id' => 4,
                'kategori_nama' => 'Fashion Wanita',
            ],
            [
                'kategori_id' => 5,
                'kategori_nama' => 'Produk Kecantikan',
            ],
        ];
        DB::table('m_kategori') -> insert($data);
    }
}
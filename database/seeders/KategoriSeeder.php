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
                'kategori_kode' => 'BE',
                'kategori_nama' => 'Elektronik ',
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'PR',
                'kategori_nama' => 'Peralatan Rumah',
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'BK',
                'kategori_nama' => 'Mainan Anak',
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'FF',
                'kategori_nama' => 'Fashion',
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'PK',
                'kategori_nama' => 'Produk Kebersihan',
            ],
        ];
        DB::table('m_kategori') -> insert($data);
    }
}
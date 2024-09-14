<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 1, // Sesuaikan dengan user_id yang ada
                'pembeli' => 'Faqih',
                'penjualan_kode' => 'PJ001',
                'penjualan_tanggal' => '2024-09-11 07:30:00',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 2, 
                'pembeli' => 'Fadil',
                'penjualan_kode' => 'PJ002',
                'penjualan_tanggal' => '2024-09-11 08:00:00',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3, 
                'pembeli' => 'Andi',
                'penjualan_kode' => 'PJ003',
                'penjualan_tanggal' => '2024-09-11 08:30:00',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 1, 
                'pembeli' => 'Joko',
                'penjualan_kode' => 'PJ004',
                'penjualan_tanggal' => '2024-09-11 09:00:00',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 2, 
                'pembeli' => 'Kawi',
                'penjualan_kode' => 'PJ005',
                'penjualan_tanggal' => '2024-09-11 09:30:00',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3, 
                'pembeli' => 'Anang',
                'penjualan_kode' => 'PJ006',
                'penjualan_tanggal' => '2024-09-11 10:00:00',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 1, 
                'pembeli' => 'Akbar',
                'penjualan_kode' => 'PJ007',
                'penjualan_tanggal' => '2024-09-11 10:30:00',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 2, 
                'pembeli' => 'Dika',
                'penjualan_kode' => 'PJ008',
                'penjualan_tanggal' => '2024-09-11 11:00:00',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3, 
                'pembeli' => 'Awan',
                'penjualan_kode' => 'PJ009',
                'penjualan_tanggal' => '2024-09-11 11:30:00',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 1, 
                'pembeli' => 'Bumi',
                'penjualan_kode' => 'PJ010',
                'penjualan_tanggal' => '2024-09-11 12:00:00',
            ],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
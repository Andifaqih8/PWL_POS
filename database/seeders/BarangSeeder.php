<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Elektronik  
            [
                'barang_id' => 1,
                'barang_kode' => 'BE01',
                'barang_nama' => 'Kulkas 2 pintu',
                'harga_beli' => 4800000,
                'harga_jual' => 5000000,
            ],
            [
                'barang_id' => 2,
                'barang_kode' => 'BE02',
                'barang_nama' => 'Laptop Hp Pavilion',
                'harga_beli' => 12000000,
                'harga_jual' => 12500000,
            ],
            [
                'barang_id' => 3,
                'barang_kode' => 'BE03',
                'barang_nama' => 'Iphone 12',
                'harga_beli' => 8500000,
                'harga_jual' => 9000000,
            ],

            // Peralatan Rumah 
            [
                'barang_id' => 4,
                'barang_kode' => 'PR01',
                'barang_nama' => 'Sofa',
                'harga_beli' => 14000000,
                'harga_jual' => 14500000,
            ],
            [
                'barang_id' => 5,
                'barang_kode' => 'PR02',
                'barang_nama' => 'Lemari',
                'harga_beli' => 8000000,
                'harga_jual' => 8500000,
            ],
            [
                'barang_id' => 6,
                'barang_kode' => 'PR03',
                'barang_nama' => 'Meja Makan',
                'harga_beli' => 7750000,
                'harga_jual' => 8000000,
            ],

            // Mainan Anak 
            [
                'barang_id' => 7,
                'barang_kode' => 'BK007',
                'barang_nama' => 'Mobil Remote Control',
                'harga_beli' => 500000,
                'harga_jual' => 600000,
            ],
            [
                'barang_id' => 8,
                'barang_kode' => 'BK008',
                'barang_nama' => 'Lego Classic Set',
                'harga_beli' => 300000,
                'harga_jual' => 350000,
            ],
            [
                'barang_id' => 9,
                'barang_kode' => 'BK009',
                'barang_nama' => 'Boneka Barbie',
                'harga_beli' => 250000,
                'harga_jual' => 300000,
            ],

            // Fashion  
            [
                'barang_id' => 10,
                'barang_kode' => 'FF01',
                'barang_nama' => 'Kaos',
                'harga_beli' => 300000,
                'harga_jual' => 450000,
            ],
            [
                'barang_id' => 11,
                'barang_kode' => 'FF02',
                'barang_nama' => 'Kemeja',
                'harga_beli' => 400000,
                'harga_jual' => 600000,
            ],
            [
                'barang_id' => 12,
                'barang_kode' => 'FF03',
                'barang_nama' => 'Sepatu',
                'harga_beli' => 1100000,
                'harga_jual' => 1500000,
            ],

            // Produk Kebersihan 
            [
                'barang_id' => 13,
                'barang_kode' => 'KB01',
                'barang_nama' => 'Sabun Mandi',
                'harga_beli' => 15000,
                'harga_jual' => 20000,
            ],
            [
                'barang_id' => 14,
                'barang_kode' => 'KB02',
                'barang_nama' => 'Shampoo',
                'harga_beli' => 20000,
                'harga_jual' => 25000,
            ],
            [
                'barang_id' => 15,
                'barang_kode' => 'KB03',
                'barang_nama' => 'Pasta Gigi',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
            ],
        ];

        DB::table('m_barang')->insert($data);        
        //
    }
}
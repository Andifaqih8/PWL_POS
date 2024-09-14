<?php

namespace Database\Seeders;

use App\Models\m_supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'supplier_id' => 1,
                'supplier_nama' => 'PT Indo',
                ],
            [
                'supplier_id' => 2,
                'supplier_nama' => 'CV Indo Maju',
            ],
            [
                'supplier_id' => 3,
                'supplier_nama' => 'PT Indo Sejahtera',
            ],
            [
                'supplier_id' => 4,
                'supplier_nama' => 'PT Indo Terus',
            ],
            [
                'supplier_id' => 5,
                'supplier_nama' => 'CV Indo Lagi',
            ],
        ];

        DB::table('m_supplier')->insert($data);
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        Supplier::insert([
            [
                'name'         => 'PT. Elektrindo',
                'contact_info' => '08123456789',
                'created_by'   => 1,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'name'         => 'CV. Fashion Sejahtera',
                'contact_info' => '08567891234',
                'created_by'   => 2,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'name'         => 'UD. Alat Tulis Utama',
                'contact_info' => '08765432100',
                'created_by'   => 1,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
        ]);
    }
}

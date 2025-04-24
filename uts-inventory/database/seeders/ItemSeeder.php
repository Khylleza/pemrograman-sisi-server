<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    public function run(): void
    {
        Item::insert([
            [
                'name'         => 'Kipas Angin Cosmos',
                'description'  => 'Kipas angin 3 level kecepatan',
                'price'        => 300000,
                'quantity'     => 20,
                'category_id'  => 1, // Elektronik
                'supplier_id'  => 1, // PT. Elektrindo
                'created_by'   => 1,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'name'         => 'Televisi LED 32"',
                'description'  => 'Televisi dengan resolusi Full HD',
                'price'        => 2500000,
                'quantity'     => 15,
                'category_id'  => 1, // Elektronik
                'supplier_id'  => 1,
                'created_by'   => 2,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'name'         => 'Kaos Polos Hitam',
                'description'  => 'Kaos bahan cotton combed 30s',
                'price'        => 55000,
                'quantity'     => 4,
                'category_id'  => 2, // Pakaian
                'supplier_id'  => 2, // CV. Fashion Sejahtera
                'created_by'   => 1,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'name'         => 'Celana Jeans',
                'description'  => 'Celana jeans original',
                'price'        => 150000,
                'quantity'     => 80,
                'category_id'  => 2,
                'supplier_id'  => 2,
                'created_by'   => 2,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'name'         => 'Pulpen 0.7mm',
                'description'  => 'Pulpen untuk keperluan sekolah dan kantor',
                'price'        => 5000,
                'quantity'     => 500,
                'category_id'  => 3, // Alat Tulis
                'supplier_id'  => 3, // UD. Alat Tulis Utama
                'created_by'   => 1,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'name'         => 'Buku Tulis A5',
                'description'  => 'Buku tulis dengan kertas berkualitas',
                'price'        => 15000,
                'quantity'     => 200,
                'category_id'  => 3,
                'supplier_id'  => 3,
                'created_by'   => 2,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'name'         => 'Sepatu Lari',
                'description'  => 'Sepatu yang nyaman untuk lari jarak jauh',
                'price'        => 350000,
                'quantity'     => 2,
                'category_id'  => 4, // Olahraga
                'supplier_id'  => 2,
                'created_by'   => 1,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'name'         => 'Bola Sepak',
                'description'  => 'Bola sepak dengan standar FIFA',
                'price'        => 180000,
                'quantity'     => 60,
                'category_id'  => 4,
                'supplier_id'  => 1,
                'created_by'   => 2,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'name'         => 'Headphone Bluetooth',
                'description'  => 'Headphone dengan kualitas suara tinggi',
                'price'        => 450000,
                'quantity'     => 30,
                'category_id'  => 1,
                'supplier_id'  => 1,
                'created_by'   => 1,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'name'         => 'Jaket Hoodie',
                'description'  => 'Jaket hoodie trendy untuk musim hujan',
                'price'        => 200000,
                'quantity'     => 70,
                'category_id'  => 2,
                'supplier_id'  => 2,
                'created_by'   => 2,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
        ]);
    }
}

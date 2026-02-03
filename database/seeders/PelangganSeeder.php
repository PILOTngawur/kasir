<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Pelanggan::create([
                'NamaPelanggan' => 'Andi',
                'Alamat' => 'Jl. Merdeka No.1',
                'NomorTlp' => '081234567890',
        ]);
    }
}

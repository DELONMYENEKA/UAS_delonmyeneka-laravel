<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class pembayaranseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pembayarans')->insert([
            'kode_payment' => "215644",
            'jenis' => 'Transfer',
            'total_harga' => 'Rp.20.000.000',
            'jumlah_produk' => '5',
        ]);
    }
}
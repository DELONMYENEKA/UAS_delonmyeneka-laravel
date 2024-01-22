<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class relationseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('relations')->insert([
            'produk_kode_barang' => "2004",
            'pesanan_kode_buy' => '458859',
            'pembayaran_kode_payment' => '215644',
            'status' => 'Y',
        ]);
   }
}
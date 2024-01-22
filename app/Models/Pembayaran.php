<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    protected $table = 'pembayarans';
    protected $fillable = [
        'kode_payment',
        'jenis',
        'total_harga',
        'jumlah_produk',
        
    ];
}

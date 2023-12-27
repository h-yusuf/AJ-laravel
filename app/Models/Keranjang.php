<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;

    protected $table = 'keranjang'; // Sesuaikan dengan nama tabel di database

    protected $fillable = [
        'layanan_utama',
        'layanan_tambahan',
        'date',
        'time',
        'alamat',
        'ciriRumah',
        'note',
    ];
}

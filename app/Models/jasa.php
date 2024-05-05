<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class jasa extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang terkait dengan model
    protected $table = 'jasa'; 

    // Menentukan nama kolom yang merupakan primary key
    protected $primaryKey = 'idJasa';

    // Menentukan kolom yang dapat diisi secara massal
    protected $fillable = [
        'idJasa',
        'img_jasa',
        'product_name',
        'categories',
        'id_LU',
        'id_LT',
        'location'
    ];

    // BAGIAN RELASI TABEL
    // BISA BACA" DI DOKOMUNTASI https://laravel.com/docs/10.x/eloquent-relationships 

    // Definisi relasi "hasMany" antara model jasa dan Transaksi
    public function transaksi() : hasMany
    {
        return $this->hasMany(Transaksi::class);
    }

    // Definisi relasi "belongsTo" antara model jasa dan layanan_utama
    public function layananUtama() 
    {
        return $this->belongsTo(layanan_utama::class,'id_LU','id_LU');
    }

    // Definisi relasi "belongsTo" antara model jasa dan layanan_tambahan
    public function layananTambahan() 
    {
        return $this->belongsTo(layanan_tambahan::class,'id_LT','id_LT');
    }
}

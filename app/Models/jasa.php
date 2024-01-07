<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class jasa extends Model
{
    use HasFactory;

    protected $table = 'jasa'; 

    protected $fillable = [
        'idJasa',
        'img_jasa',
        'product_name',
        'categories',
        'id_LU',
        'id_LT',
        'location'
    ];
    public function transaksi() : hasMany
    {
        return $this->hasMany(Transaksi::class);
    }
    public function layananUtama() 
    {
        return $this->belongsTo(layanan_utama::class,'id_LU','id_LU');
    }
    public function layananTambahan() 
    {
        return $this->belongsTo(layanan_tambahan::class,'id_LT','id_LT');
    }
 

}

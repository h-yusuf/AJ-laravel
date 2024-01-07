<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'Transaksi'; 

    protected $fillable = [
        'id_transaksi',
        'idJasa',
        'layanan_utama',
        'layanan_tambahan',
        'date',
        'time',
        'alamat',
        'ciriRumah',
        'note',
        'price',
    ];
    public function jasa() : BelongsTo
    {
        return $this->belongsTo(jasa::class,'idJasa','idJasa');
    }
    // public function layananUtama()  : BelongsTo
    // {
    //     return $this->belongsTo(layanan_utama::class,'layanan_utama','id_LU');
    // }
    // public function layananTambahan()  : BelongsTo
    // {
    //     return $this->belongsTo(layanan_tambahan::class,'layanan_tambahan','id_LT');
    // }
 
}

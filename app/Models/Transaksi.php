<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'Transaksi'; 
    protected $primaryKey = 'id_transaksi';

    protected $fillable = [
        'id_transaksi',
        'idJasa',
        'id_user',
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
 
}

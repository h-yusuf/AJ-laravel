<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class layanan_tambahan extends Model
{
    use HasFactory;
    protected $table = 'layanan_tambahan';

protected $primaryKey = 'id_LT';

    protected $fillable = [
        'id_LT',
        'imgLT',
        'nameLT',
        'desk',
        'price',
    ];
    public function jasa() : HasMany
    {
        return $this->hasMany(jasa::class);
    }
}

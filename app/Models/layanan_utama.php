<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class layanan_utama extends Model
{
    use HasFactory;
    protected $table = 'layanan_utama';

    
protected $primaryKey = 'id_LU';
    protected $fillable = [
        'id_LU',
        'imgLU',
        'nameLU',
        'desk',
        'price',
    ];
    public function jasa() : HasMany
    {
        return $this->hasMany(jasa::class);
    }
}

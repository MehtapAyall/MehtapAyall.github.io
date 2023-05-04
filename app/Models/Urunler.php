<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urunler extends Model
{
    protected $table = 'Urunler';
    protected $primaryKey = 'urun_id';
    use HasFactory;

    protected $fillable = [
        'urun_id',
        'urun_adi',
        'urun_katagori',
        'urun_aciklama',
        'urun_fiyati',
        'urun_stok_miktari',
        'urun_resmi',
    ];
    
}

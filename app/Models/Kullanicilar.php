<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kullanicilar extends Model
{
    protected $table = 'Kullanicilar';
    protected $primaryKey = 'kullanici_id';
    use HasFactory;
}

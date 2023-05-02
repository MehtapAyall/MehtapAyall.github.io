<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Kullanicilar', function (Blueprint $table) {
            $table-> id('kullanici_id');
            $table-> string('adi');
            $table-> string('soyadi');
            $table-> string('e_posta');
            $table-> string('telefon');
            $table-> string('sifre');
            $table-> string('adres');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Kullanicilar');
    }
};

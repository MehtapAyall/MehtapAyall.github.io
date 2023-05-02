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
        Schema::create('Siparisler', function (Blueprint $table) {
            $table->id('siparis_id');
            $table->string('kullanici_id');
            $table->date('sipariş_tarihi');
            $table->integer('toplam_tutar');
            $table->timestamps();
            //$table->foreign('sip_kullanici_id')->references('kullanici_id')->on('Kullanicilar');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Siparisler');
    }
};

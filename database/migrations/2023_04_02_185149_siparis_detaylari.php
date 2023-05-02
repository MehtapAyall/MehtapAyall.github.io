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
        Schema::create('SiparisDetaylari', function (Blueprint $table) {
            $table->id('sipariş_detay_id');
            $table->string('siparis_id');
            $table->string('ürün_id');
            $table->integer('adet');
            $table->integer('birim_fiyat');

            //$table->foreign('sipariş_id')->references('sipariş_id')->on('Siparisler');
            //$table->foreign('ürün_id')->references('ürün_id')->on('Urunler');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('SiparisDetaylari');
    }
};

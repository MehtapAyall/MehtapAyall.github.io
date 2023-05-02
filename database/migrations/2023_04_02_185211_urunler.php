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
        Schema::create('Urunler', function (Blueprint $table) {
            $table->id('urun_id');
            $table->string('urun_adi');
            $table->string('urun_katagori');
            $table->string('urun_aciklama');
            $table->decimal('urun_fiyati');
            $table->integer('urun_stok_miktari');
            $table->binary('urun_resmi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Urunler');
    }
};

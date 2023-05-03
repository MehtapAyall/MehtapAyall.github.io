<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Urunler;
use Illuminate\Database\Eloquent\Builder;

class adminIslemleri extends Controller
{
    public function urunler()
    {
        $urunler = Urunler::select('urun_id','urun_resmi','urun_adi','urun_katagori','urun_aciklama','urun_fiyati','urun_stok_miktari')->get(); 
        return view('adminurunler',['urunler' => $urunler]);
    }

    public function urunSil($id)
    {
        $urun = Urunler::find($id);
        $urun->delete();
        return redirect()->back()->with('success', 'Ürün silme işlemi başarılı.');
    }

}

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

    public function urunSil($urun_id)
    {
        
        $urun = DB::table("Urunler")->where('urun_id','=',$urun_id)->delete();

        return redirect()->back()->with('success', 'Ürün silme işlemi başarılı.');
    }

    public function urunGuncelle(Request $request, $urun_id)
    {
        $urun = Urunler::find($urun_id);
        $urun->urun_adi = $request->input('urun_adi');
        $urun->urun_katagori = $request->input('urun_katagori');
        $urun->urun_aciklama = $request->input('urun_aciklama');
        $urun->urun_fiyati = $request->input('urun_fiyati');
        $urun->urun_stok_miktari = $request->input('urun_stok_miktari');
        
        $urun->save();
    
        return redirect()->back()->with('success', 'Ürün başarıyla güncellendi.');
    }

}

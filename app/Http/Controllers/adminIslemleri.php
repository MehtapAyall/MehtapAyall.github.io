<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Urunler;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;


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
        

        DB::table('urunler')->where('urun_id', $urun_id)->update([
        'urun_adi' => $request->input('urun_adi'),
        'urun_katagori' => $request->input('urun_katagori'),
        'urun_aciklama' => $request->input('urun_aciklama'),
        'urun_fiyati' => $request->input('urun_fiyati'),
        'urun_stok_miktari' => $request->input('urun_stok_miktari')
    ]);
       
    
        return redirect()->back()->with('success', 'Ürün başarıyla güncellendi.');
    }

    public function urunEkle(Request $req){
        
        $urun = new Urunler();
        $urun->urun_adi=$req->urun_adi;
        $urun->urun_katagori=$req->urun_katagori;
        $urun->urun_aciklama=$req->urun_aciklama;
        $urun->urun_fiyati=$req->urun_fiyati;
        $urun->urun_stok_miktari=$req->urun_stok_miktari;

        if($req->hasfile('image'))
        {
            $file = $req->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('urunRes/', $filename);
            $urun->urun_resmi = $filename;
        }
        $urun->save();
        return redirect()->back()->with('success', 'Ürün başarıyla eklendi.');
    }

}

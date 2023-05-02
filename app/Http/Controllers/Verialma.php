<?php

namespace App\Http\Controllers;
use App\Models\Urunler;
use App\Models\Kullanicilar;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Verialma extends Controller
{
    public function listele (){

        $urunler = Urunler::select('urun_adi','urun_fiyati','urun_resmi')->get();
        
        return view('anasayfa',compact('urunler'));
    }

    public function listele1 (){

        $urunler = Urunler::select('urun_adi','urun_fiyati')->where('urun_katagori', 'şal')->get();
        
        return view('pamuksal',compact('urunler'));
    }

    public function kaydet(Request $req){
        $kullanici = new Kullanicilar();
        $kullanici->adi = $req->input('adi');
        $kullanici->soyadi = $req->input('soyadi');
        $kullanici->e_posta = $req->input('e_posta');  
        $kullanici->telefon = $req->input('telefon'); 
        $kullanici->sifre = bcrypt($req->sifre);
        $kullanici->adres = $req->input('adres'); 

        $kullanici->save();

        return view('girisyap');
    }


    function girisKontrol(Request $request) {
        $validatedData = $request->validate([
            'e_posta' => 'required',
            'sifre' => 'required',
        ]);

        $user = DB::table('Kullanicilar')->where('e_posta', $validatedData['e_posta'])->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Kullanıcı adı veya şifre yanlış.');
        }

        if (Hash::check($validatedData['sifre'], $user->sifre)) {
            session(['e_posta' => $user->e_posta, 'sifre' => $user->sifre, 'adi' => $user->adi, 'soyadi' => $user->soyadi]);
            return view('anasayfa');
        } 
        else {

            return redirect()->back()->with('error', 'Kullanıcı adı veya şifre yanlış.');
        }
    }

    public function cikisYap()
    {
        session()->forget('e_posta');
        return redirect('/girisyap');
    }
    
}

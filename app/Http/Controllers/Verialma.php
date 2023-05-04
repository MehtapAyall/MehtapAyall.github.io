<?php

namespace App\Http\Controllers;
use App\Models\Urunler;
use App\Models\Kullanicilar;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Builder;

class Verialma extends Controller
{
    function kullaniciBilgi()
    {
        $kullaniciBilgi = DB::table('Kullanicilar')->where('e_posta', '=', session('e_posta'))->get();
        
        return view('profil', ['kullaniciBilgi' => $kullaniciBilgi]);
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

        if($request->input('e_posta')=="admin@admin.com" && $request->input('sifre')=="1234")
        {
            return view('adminanasayfa');
        }
        else{
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
    }

    function bakiyeGoster(){
        $bakiyeGoster = Kullanicilar::select('bakiye')->where('e_posta', '=', session('e_posta'))->first();
        
        return view('cuzdan', ['bakiye' => $bakiyeGoster]);
    }

    function paraYukle(Request $request){
        $bakiye = Kullanicilar::where('e_posta', '=', session('e_posta'))->firstOrFail();
        $girilendeger = $request->input('miktar'); 
    
        $bakiye->bakiye += $girilendeger;
        
        Kullanicilar::where('e_posta', '=', session('e_posta'))->update(['bakiye' => DB::raw('bakiye + ' . $girilendeger)]);
    
        return redirect()->back()->with('success', 'Bakiye yükleme işlemi başarılı.');
    }

    public function arama(Request $request)
    {
        $q = $request->input('q');

        $urunler = Urunler::select('urun_adi','urun_fiyati','urun_resmi')->where('urun_adi', 'LIKE', "%$q%")->orWhere('urun_aciklama', 'LIKE', "%$q%")->get();

        return view('arama',  ['urunler' => $urunler]);
    }

    public function degis(Request $request)
    {
        $request->validate([
            'sifree' => 'required',
            'sifre' => 'required',
            'sifret' => 'required',
        ]);

        $kullanici = Kullanicilar::select('sifre')->where('e_posta', '=', session('e_posta'))->first();

        if (Hash::check($request->sifree, $kullanici->sifre)) {
            $kullanici->sifre = Hash::make($request->sifre);
            $kullanici->save();
            return redirect()->back()->with('success', 'Şifre değiştirildi');
        } else {
            return back()->withErrors(['sifre' => 'Şifreler eşleşmiyor']);
        }
    }

    public function cikisYap()
    {
        session()->forget('e_posta');
        return redirect('/girisyap');
    }

    public function listele (){

        $urunler = Urunler::select('urun_adi','urun_fiyati','urun_resmi')->get();
        
        return view('anasayfa',compact('urunler'));
    }

    public function listele1 (){

        $urunler = Urunler::select('urun_adi','urun_fiyati','urun_resmi')->where('urun_katagori', 'pamuk şal')->get();
        
        return view('pamuksal',compact('urunler'));
    }

    public function listele2 (){

        $urunler = Urunler::select('urun_adi','urun_fiyati','urun_resmi')->where('urun_katagori', 'aksesuar')->get();
        
        return view('aksesuarlar',compact('urunler'));
    }

    public function listele3 (){

        $urunler = Urunler::select('urun_adi','urun_fiyati','urun_resmi')->where('urun_katagori', 'bandana bone')->get();
        
        return view('bandanabone',compact('urunler'));
    }

    public function listele4 (){

        $urunler = Urunler::select('urun_adi','urun_fiyati','urun_resmi')->where('urun_katagori', 'boru bone')->get();
        
        return view('borubone',compact('urunler'));
    }

    public function listele5 (){

        $urunler = Urunler::select('urun_adi','urun_fiyati','urun_resmi')->where('urun_katagori', 'desenli eşarp')->get();
        
        return view('desenliesarp',compact('urunler'));
    }

    public function listele6 (){

        $urunler = Urunler::select('urun_adi','urun_fiyati','urun_resmi')->where('urun_katagori', 'desenli şal')->get();
        
        return view('desenlisal',compact('urunler'));
    }

    public function listele7 (){

        $urunler = Urunler::select('urun_adi','urun_fiyati','urun_resmi')->where('urun_katagori', 'ipek şal')->get();
        
        return view('ipeksal',compact('urunler'));
    }

    public function listele8 (){

        $urunler = Urunler::select('urun_adi','urun_fiyati','urun_resmi')->where('urun_katagori', 'kaşmir eşarp')->get();
        
        return view('kasmiresarp',compact('urunler'));
    }

    public function listele9 (){

        $urunler = Urunler::select('urun_adi','urun_fiyati','urun_resmi')->where('urun_katagori', 'kraşe eşarp')->get();
        
        return view('pamukesarp',compact('urunler'));
    }

    public function listele10 (){

        $urunler = Urunler::select('urun_adi','urun_fiyati','urun_resmi')->where('urun_katagori', 'penye şal')->get();
        
        return view('penyesal',compact('urunler'));
    }

    public function listele11 (){

        $urunler = Urunler::select('urun_adi','urun_fiyati','urun_resmi')->where('urun_katagori', 'tesettür bone')->get();
        
        return view('tesetturbone',compact('urunler'));
    }

    public function listele12 (){

        $urunler = Urunler::select('urun_adi','urun_fiyati','urun_resmi')->where('urun_katagori', 'topuz bone')->get();
        
        return view('topuzbonesi',compact('urunler'));
    }
    
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
    <div>
        @include('menu')
    </div>

    <div class="container mt-3">
        <div class="row justify-content-center" id="profile_view">
            <div class="col-md-8">
                <div class="card">

                    @foreach ($kullaniciBilgi as $bilgi )
                      
                    
                    <div class="card-header">Kullanıcı Bilgileri</div>
                    <br>
                    
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Ad') }}</label>
    
                            <div class="col-md-6">
                                <label for="name" class="col-md "> {{ $bilgi->adi }}</label>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Soyad') }}</label>
    
                            <div class="col-md-6">
                                <label for="name" class="col-md">{{ $bilgi->soyadi }}</label>

                            </div>
                        </div>    
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Posta Adresi') }}</label>
    
                            <div class="col-md-6">
                                <label for="name" class=" col-md">{{ $bilgi->e_posta }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Telefon Numarası') }}</label>
    
                            <div class="col-md-6">
                                <label for="phone" class=" col-md">{{ $bilgi->telefon }}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Adres') }}</label>
    
                            <div class="col-md-6">
                                <label for="phone" class=" col-md">{{ $bilgi->adres }}</label>
                            </div>
                        </div>

                    @endforeach
                        <div class="form-group row mb-0">                           
                            <div class="col-md-6">
                                <button class="btn btn-primary" onclick="showForm()">Bilgilerimi Düzenle</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div id="edit-form" style="display:none;"> 
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Kullanıcı Bilgilerini Değiştir</div>
                        <br><br>
                        @foreach ($kullaniciBilgi as $bilgi )
                         
                        <form method="POST" action="{{ route('guncelle', ['id' => $bilgi->kullanici_id]) }}">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Ad') }}</label>
                                <div class="col-md-6">
                                    <input id="ad" type="text" class="form-control" name="ad" value="{{ old('ad', $bilgi->adi) }}" required autocomplete="name" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Soyad') }}</label>
                                <div class="col-md-6">
                                    <input id="soyad" type="text" class="form-control" name="soyad" value="{{ old('soyad', $bilgi->soyadi) }}" required autocomplete="lastname" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="email" value="{{ old('email', $bilgi->e_posta) }}" required autocomplete="email" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Telafon Numarası') }}</label>
                                <div class="col-md-6">
                                    <input id="telefon" type="text" class="form-control" name="telefon" value="{{ old('telefon', $bilgi->telefon) }}" required autocomplete="phone_number" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Adres') }}</label>
                                <div class="col-md-6">
                                    <input id="adres" type="text" class="form-control" name="adres" value="{{ old('adres', $bilgi->adres) }}" required autocomplete="phone_number" autofocus>
                                </div>
                            </div>
                        
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Kaydet') }}
                                    </button>
                                    
                                        <a href="" class="btn btn-primary">{{ __('Vazgeç') }}</a>
                                   
                                </div>
                            </div>
                        </form>
    
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

</body>
</html>
<script>
    function showForm() {
        
        document.getElementById("profile_view").style.display = "none";
        
        document.getElementById("edit-form").style.display = "block";
    }
</script>
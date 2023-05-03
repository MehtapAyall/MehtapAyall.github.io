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

                    @endforeach
                        <div class="form-group row mb-0">
                            <div class="col-md-6">
                                <a href="" class="btn btn-secondary">{{ __('Geri') }}</a>
                            </div>
                           
                            <div class="col-md-6">
                                <button class="btn btn-primary" onclick="showForm()">Bilgilerimi Düzenle</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        @include('menu');
    </div>

    <div class="row" id="product-dom p-5" style="margin: 20px;">
        @if(isset($urunler))
            @foreach($urunler as $urun)
                <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="{{ route('urundetay', ['urun_id' => $urun->urun_id]) }}">
                        <img src="urunRes/{{ $urun->urun_resmi }}" class="card-img-top" alt="resim">
                    </a>
                    <div class="card-body">
                    <h5 class="card-title">{{ $urun->urun_adi }}</h5>
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-info btn-danger">Sepete Ekle</a>
                        <span class="price badge rounded-pill bg-success text-dark d-flex align-items-center">{{ $urun->urun_fiyati }} ₺</span>
                    </div>
                    </div>
                </div>
                </div>
            @endforeach
        @endif
    </div>
    
</body>
</html>
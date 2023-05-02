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
    
    <div class="container d-flex">  
        @if(isset($urunler))
            @foreach($urunler as $urun)
                <div class="card mx-2" style="width: 18rem;">
                    <img src="resimler/pamuk1.jpg" class="card-img-top" alt="resim">
                    <div class="card-body">
                        <h5 class="card-title">{{ $urun -> urun_adi}}</h5>
                        <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-info btn-danger">Sepete Ekle</a>
                        <span class="price badge rounded-pill bg-success text-dark d-flex align-items-center " style="width: 3.5rem; height: 3.5rem;"> {{ $urun -> urun_fiyati}} ₺ </span>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa</title>
</head>
<body>
    <div>
        @include('menu');
    </div>

    <div class="carousel slide" data-ride="carousel" id="slider1">
        <ol class="carousel-indicators">
            <li data-target="#slider1" data-slide-to="0" class="active"></li>
            <li data-target="#slider1" data-slide-to="1"></li>
            <li data-target="#slider1" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="resimler/slide1.jpg" alt="slide1.jpeg">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="resimler/slide2.jpg" alt="slide1.jpeg">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="resimler/slide3.jpg" alt="slide1.jpeg">
            </div>
        </div>
        <a href="#slider1" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#slider1" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <section class="products mt-5">
        <div class="row" id="product-dom">
            <div class="d-flex ">
                @if(isset($urunler))
                    @foreach($urunler as $urun)
                        <div class="card w-25 m-2 col-lg-2 col-md-6">
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
        </div>
    </section>

    <script src="js/script.js"></script>
</body>
</html>
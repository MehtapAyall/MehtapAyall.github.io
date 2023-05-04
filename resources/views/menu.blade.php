<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    .left{
        width: 100%;
        background: white;
        text-align: center;
    }

    .bg{
        background: #C9A354;
    }

    </style>

    <div class="d-flex">
        <div class="left">
           <img src="resimler/logo1.png" alt="">

            <nav class="navbar navbar-expand-lg navbar-light bg " >
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto ">
                        <li class="nav-item-auto">
                            <a class="nav-link active" aria-current="page" href="/">Anasayfa</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Şal
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/pamuksal">Pamuk Şal</a>
                            <a class="dropdown-item" href="/penyesal">Penye Şal</a>
                            <a class="dropdown-item" href="/ipeksal">İpek Şal</a>
                            <a class="dropdown-item" href="/desenlisal">Desenli Şal</a>
                        </li>

                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Eşarp
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/pamukesarp">Pamuk Kraş Eşarp</a>
                            <a class="dropdown-item" href="/kasmiresarp">Kaşmir Eşarp</a>
                            <a class="dropdown-item" href="/desenliesarp">Desenli Eşarp</a>
                        </li>

                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Boneler
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/topuzbonesi">Topuz Bonesi</a>
                            <a class="dropdown-item" href="/tesetturbone">Tesettür Bone</a>
                            <a class="dropdown-item" href="/borubone">Boru Bone</a>
                            <a class="dropdown-item" href="/bandanabone">Bandana Bone</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/aksesuarlar">Aksesuarlar</a>
                        </li>
                        </ul>
                    </div>
                </div>
                
                <!--------------------------------------------------------------------------------------------------------->

                <div class="container-fluid justify-content-end">
                    <div class="input-group" style="width: 15rem;">
                        <div class="form-outline">
                            <form action="{{ route('arama') }}" method="GET">
                                <input type="search" id="form1" class="form-control" placeholder="Ara" style="width: 10rem;" name="q" value="{{ request('q') }}">
                            </form>
                        </div>
                        <button type="button" class="btn">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>


                    <!---------------------------------->
                    <div class="shoping-cart position-relative">
                        <button type="button" class="btn-cart btn position-relative">
                            <i class="fas fa-shopping-cart"></i>
                            <span id="item-count" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger text-white"> 0</span>
                        </button>
                        <div class="shopping-cart-list bg d-none" style="width: 30rem;">
                            <b class="fs-5 text-white my-3"> Sepet </b>
                            <div class="total d-flex mt-3">
                                <div class="total-title">Toplam : </div>
                                    <span class="total-value">${shopping.price}</span>
                                    <button class="btn btn-danger float-right">Alışverişi Tamamla</button>
                            </div>
                        </div>
                    </div>

                    <!---------------------------------->
                    <ul class="navbar-nav d-flex flex-row position-relative"> 
                        <li class="nav-item dropdown dropdown-menu-right position-relative">
                        @if(session('e_posta'))
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ session('adi') }} {{ session('soyadi') }}</a>
                
                                <div class="dropdown-menu position-absolute top-0 start-100" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/profil">Profil</a>
                                    <a class="dropdown-item" href="/cuzdan">Cüzdan</a>
                                    <a class="dropdown-item" href="/siparis">Siparişlerim</a>
                                    <a class="dropdown-item" href="/sifredegis">Şifre Değiştir</a>
                                    <a class="dropdown-item" href="/cikisyap">Çıkış Yap</a>
                                </div>
                        @else
                            <a class="nav-link dropdown-toggle position-relative" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i> </a>
                            <div class="dropdown-menu position-absolute top-0 start-100" aria-labelledby="navbarDropdown">
                                @if (Route::has('girisyap'))
                                    <a class="nav-link" href="/girisyap">Giriş Yap</a>
                                @endif
                                @if (Route::has('kayit'))
                                    <a class="nav-link" href="/kayit">Kayıt Ol</a>
                                @endif
                            </div>
                        @endif
                        </li>
                    </ul> 
                <!---------------------------------------------------------------------------------------------------------->
                </div>
            </nav>
        </div>
    </div>
        
</head>
 <body>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
 </body>
 </html>
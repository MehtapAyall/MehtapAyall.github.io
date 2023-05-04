<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürürn Ekle</title>
</head>
<body>
    <div>
        @include('adminmenu')
    </div>
    
     <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                <h3 class="text-center">Ürün Ekle</h3>
                </div>
                <div class="card-body">
                <form method="POST" action="{{ route('urunEkle') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                    <label for="urun_adi">Ürün Adı:</label>
                    <input type="text" class="form-control" id="urun_adi" name="urun_adi">
                    </div>

                    <div class="form-group">
                    <label for="urun_katagori">Ürün Kategorisi:</label>
                    <input type="text" class="form-control" id="urun_katagori" name="urun_katagori">
                    </div>

                    <div class="form-group">
                    <label for="urun_aciklama">Ürün Açıklaması:</label>
                    <textarea class="form-control" id="urun_aciklama" name="urun_aciklama"></textarea>
                    </div>

                    <div class="form-group">
                    <label for="urun_fiyati">Ürün Fiyatı:</label>
                    <input type="text" class="form-control" id="urun_fiyati" name="urun_fiyati">
                    </div>

                    <div class="form-group">
                    <label for="urun_stok_miktari">Ürün Stok Miktarı:</label>
                    <input type="text" class="form-control" id="urun_stok_miktari" name="urun_stok_miktari">
                    </div>

                    <div class="form-group">
                    <label for="image">Ürün Resmi:</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Ürün Ekle</button>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>

</body>
</html>
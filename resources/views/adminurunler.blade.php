<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urunler</title>
</head>
<body>
    <div>
        @include('adminmenu')
    </div>

    <div class="container mt-3">
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Ürün Resmi</th>
            <th scope="col">Ürün Adı</th>
            <th scope="col">Ürün Kategori</th>
            <th scope="col">Ürün Açıklama</th>
            <th scope="col">Ürün Fiyatı</th>
            <th scope="col">Stok Miktarı</th>
            <th scope="col"></th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($urunler as $urun)
                <tr>
                    <td><img src="urunRes/{{ $urun->urun_resmi }}.jpg" class="card-img-top" alt="resim" style="max-width: 100px;"></td>
                    <td>{{ $urun->urun_adi }}</td>
                    <td>{{ $urun->urun_katagori }}</td>
                    <td>{{ $urun->urun_aciklama }}</td>
                    <td>{{ $urun->urun_fiyati }}</td>
                    <td>{{ $urun->urun_stok_miktari }}</td>
                    <td> <a href="{{ route('urunSil', $urun->urun_id) }}"> <button class="btn btn-info btn-danger">Sil</button> </a> </td>
                    <td> 
                        <button class="btn btn-info btn-danger" data-toggle="modal" data-target="#myModal{{$urun->urun_id}}">Güncelle</button>
                        <div id="myModal{{$urun->urun_id}}" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Ürün Güncelle</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{ route('urunGuncelle', $urun->urun_id) }}" >
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="urun_adi">Ürün Adı:</label>
                                            <input type="text" class="form-control" id="urun_adi" name="urun_adi" value="{{ $urun->urun_adi }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="urun_katagori">Ürün Kategorisi:</label>
                                            <input type="text" class="form-control" id="urun_katagori" name="urun_katagori" value="{{ $urun->urun_katagori }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="urun_aciklama">Ürün Açıklaması:</label>
                                            <textarea class="form-control" id="urun_aciklama" name="urun_aciklama">{{ $urun->urun_aciklama }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="urun_fiyati">Ürün Fiyatı:</label>
                                            <input type="number" class="form-control" id="urun_fiyati" name="urun_fiyati" value="{{ $urun->urun_fiyati }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="urun_stok_miktari">Stok Miktarı:</label>
                                            <input type="number" class="form-control" id="urun_stok_miktari" name="urun_stok_miktari" value="{{ $urun->urun_stok_miktari }}">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Güncelle</button>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    </tr>
                <tr>
            @endforeach
        </tbody>
        </table>
</body>

</html>
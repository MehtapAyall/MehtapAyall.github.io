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
            <th scope="col">#</th>
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
            @foreach($urunler as $key => $urun)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td><img src="urunRes/{{ $urun->urun_resmi }}.jpg" class="card-img-top" alt="resim" style="max-width: 100px;"></td>
                    <td>{{ $urun->urun_adi }}</td>
                    <td>{{ $urun->urun_katagori }}</td>
                    <td>{{ $urun->urun_aciklama }}</td>
                    <td>{{ $urun->urun_fiyati }}</td>
                    <td>{{ $urun->urun_stok_miktari }}</td>
                    <td> <a href="{{url('urunler',$urun->urun_id)}}"> <button class="btn btn-info btn-danger">Sil</button> </a> </td>
                    <td><a href="#" class="btn btn-info btn-danger">güncelle</a></td>
                    </tr>
                <tr>
            @endforeach
        </tbody>
        </table>
    </div>
</body>
</html>
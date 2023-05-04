@include('adminmenu')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urunler</title>
</head>
<body>
    

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
                <?php foreach($urunler as $urun) { ?>
                    <tr>
                        <form action="<?php echo route('urunGuncelle', $urun->urun_id); ?>" method="GET">
                            <td><img src="urunRes/<?php echo $urun->urun_resmi; ?>.jpg" class="card-img-top" alt="resim" style="max-width: 100px;"></td>
                            <td><input type="text" name="urun_adi" value="<?php echo $urun->urun_adi; ?>"></td>
                            <td><input type="text" name="urun_katagori" value="<?php echo $urun->urun_katagori; ?>"></td>
                            <td><input type="text" name="urun_aciklama" value="<?php echo $urun->urun_aciklama; ?>"></td>
                            <td><input type="text" name="urun_fiyati" value="<?php echo $urun->urun_fiyati; ?>"></td>
                            <td><input type="text" name="urun_stok_miktari" value="<?php echo $urun->urun_stok_miktari; ?>"></td>
                            <td>
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <button type="submit" class="btn btn-info btn-danger">Güncelle</button>
                            </td>
                        </form>
                        <td>
                            <form action="<?php echo route('urunSil', $urun->urun_id); ?>" method="GET">
                            
                                <button class="btn btn-info btn-danger" type="submit">Sil</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>

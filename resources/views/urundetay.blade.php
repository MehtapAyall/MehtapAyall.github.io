<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İncele</title>
</head>
<body>
    <div>
        @include('menu')
    </div>
    <?php $urun_id = request()->route('urun_id'); 
    $urun = urunOzellik($urun_id);
    ?>

    <div class="content m-5">
        <div class="row">
            <div class="col-md-6">
            <img src="{{ asset('urunRes/' . $urun->urun_resmi ) }}" alt="{{ $urun->urun_adi }}" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h1>{{ $urun->urun_adi }}</h1>
                <p class="font-weight-bold">{{ $urun->urun_katagori }}</p>
                <p class="lead">{{ $urun->urun_aciklama }}</p>
                <hr>
                <h2 class="font-weight-bold">{{ $urun->urun_fiyati }} ₺</h2>
                <form action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="quantity">Miktar:</label>
                        <input type="number" name="quantity" id="quantity" class="form-control" value="1">
                    </div>
                    <button type="submit" class="btn btn-lg btn-success">Sepete Ekle</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
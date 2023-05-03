<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cüzdan</title>
</head>
<body>
    <div>
        @include('menu')
    </div>

    <div class="content">
        <div class="row">
            <div class="col-md-4 mx-auto mt-3">
                <h1>Cüzdanım</h1>
                <p>Mevcut bakiyeniz: {{ $bakiye['bakiye'] }} TL</p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#depositModal">Para Yükle</button>

                <div class="modal fade" id="depositModal" tabindex="-1" role="dialog" aria-labelledby="depositModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="depositModalLabel">Para Yükleme</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('paraYukle') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="miktar">Yüklenecek Miktar (TL)</label>
                                        <input type="number" class="form-control" id="miktar" name="miktar" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Yükle</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
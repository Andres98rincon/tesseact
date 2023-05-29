<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factura</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body class="bg-dark">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-center">Factura</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('converted') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="my-input">Subir imagen</label>
                                <input id="file" class="form-control" type="file" name="file">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success">Convertir</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @if (session('resultArray'))
            <div class="row justify-content-center align-content-center mt-5">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Resultado de la factura</h5>
                            <div class="mt-3 p-5">
                                @foreach (session('resultArray') as $result)
                                    <p>{!! nl2br($result) !!}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

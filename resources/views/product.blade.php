<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">PRODOTTI</h1>
    <div class="container">
        <div class="row">
            @foreach( $prodotti as $prodotto )
            <div class="col-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>{{ $prodotto['nome'] }}</h4>
                    </div>
                    <div class="card-body">
                        <p>Prezzo: {{ $prodotto['prezzo'] }}&euro;/kg</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">CONTATTI</h1>
    <div class="container">
        <div class="row">
            @foreach( $membri as $membro )
            <div class="col-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>{{ $membro['nome'] }} {{ $membro['cognome'] }}</h4>
                    </div>
                    <div class="card-body">
                        <p>Email: {{ $membro['email'] }}</p>
                        <p>Tel: {{ $membro['n_tel'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
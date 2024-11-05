<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto CRUD WEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <h1 class="pb-5 pt-2">Pokemons:</h1>

    @foreach($pokemon as $poke)
        <div class="p-5 border border-5 ">
            <h3>{{ $poke->nome }}</h3>
            <p>Tipo: {{ $poke->tipo }}</p>
            <p>PP: {{ $poke->pontos_de_poder }}</p>
            <a href="{{ url('pokemon/'.$poke->id.'/edit') }}" class="btn btn-primary m-1">Edit</a>
            <form action="{{ url('pokemon/'.$poke->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary m-1">Delete</button>
            </form>
        </div>
    @endforeach
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
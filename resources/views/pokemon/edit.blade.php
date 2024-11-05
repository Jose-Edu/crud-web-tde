<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto CRUD WEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <h1 class="pb-5 pt-2">Editar Pokemon:</h1>

    <form action="{{ url('pokemon/'.$pokemon->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-control">
            <input type="text" name="nome" placeholder="nome" class="form-label" required>
            <input type="text" name="tipo" placeholder="tipo" class="form-label" required></input>
            <input name="pontos_de_poder" class="form-label" placeholder="pontos de poder" required></input>
            <button type="submit" class="btn btn-primary">Editar pokemon</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

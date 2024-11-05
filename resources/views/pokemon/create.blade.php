<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto CRUD WEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <h1 class="pb-5 pt-2">Criar Pokemon:</h1>

    <form action="{{ url('pokemon') }}" method="POST">
        @csrf
        <div class="form-control">
            <input type="text" name="nome" placeholder="nome" required>
            <input type="text" name="tipo" placeholder="tipo" required></input>
            <input name="pontos_de_poder" placeholder="pontos de poder" required></input>
            <button type="submit" class="btn btn-primary">Criar pokemon</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

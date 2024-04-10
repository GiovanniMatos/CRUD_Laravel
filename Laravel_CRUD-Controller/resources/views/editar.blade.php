<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>
    <h1>Editar Usuário</h1>
    <form action="/update/{{ $usuario -> id }}" method="POST">
        @csrf
        @method("PUT")
        <label class="form-label">Nome</label>
        <input type="text" name="nome" value="{{ $usuario -> nome }}">
        <label class="form-label">Email</label>
        <input type="email" name="email" value="{{ $usuario -> email }}">
        <button type="submit" class="btn btn-success">Inserir</button>
    </form>
</body>
</html>

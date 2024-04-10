<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>
    <h1>CRUD Laravel</h1>
    <form action="/create" method="POST">
        @csrf
        <label class="form-label">Nome</label>
        <input type="text" name="nome">
        <label class="form-label">Email</label>
        <input type="email" name="email">
        <button type="submit" class="btn btn-success">Inserir</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <th scope="row">{{$usuario->id}}</th>
                <td>{{$usuario->nome}}</td>
                <td>{{$usuario->email}}</td>
                <td>
                    <a href="/editar/{{$usuario->id}}" class="btn btn-warning">Editar</a>
                    <a href="/delete/{{$usuario->id}}" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

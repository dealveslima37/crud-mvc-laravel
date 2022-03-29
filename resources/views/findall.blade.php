<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Lista de usuários</title>
</head>

<body>
    <header>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="/">Painel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/create">Cadastrar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/aniversariantes">Aniversariantes</a>
            </li>
        </ul>
    </header>
    <div class="container">
        <h1>Usuários</h1>
        <div class="row">
            <div class="col-6">
                <form  action="/findall" method="GET">
                    @csrf
                    <div class="mb-3">
                        <label for="search" class="form-label"><b>Nome ou CPF</b></label>
                        <input type="text" class="form-control" id="search" name="search" placeholder="Nome ou CPF">
                    </div>
                    <button type="submit" class="btn btn-primary">Pesquisar</button>
                </form>
            </div>
            <div class="col-6">
                <form  action="/findall" method="GET">
                    @csrf
                    <div class="mb-3 mt-2">
                        <label for="search" class="form-label"><b>Data de nascimento</b></label>
                        <input type="date" class="form-control" id="search" name="search" placeholder="Nome ou CPF">
                    </div>
                    <button type="submit" class="btn btn-primary">Pesquisar</button>
                </form>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Data de nascimento</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->nome}}</td>
                    <td>{{date('d/m/Y', strtotime($usuario->date))}}</td>
                    <td><a href="/users/{{$usuario->id}}" class="btn btn-info">Detalhes</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Cadastrar usuário</title>
</head>

<body>
    <header>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="/">Painel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/findall">Listar usuários</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Aniversariantes</a>
            </li>
        </ul>
    </header>
    <div class="container">
        <h1 class="mt-4">Editar usuário</h1>
        <form action="/update/{{ $user->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nome" class="form-label"><b>Nome</b></label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome"
                    value="{{ $user->nome }}">
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label"><b>CPF</b></label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Seu CPF"
                    value="{{ $user->cpf }}">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label"><b>Data de nascimento</b></label>
                <input type="date" class="form-control" id="date" name="date" placeholder="Data de nascimento"
                    value="{{date('Y-m-d', strtotime($user->date))}}">
            </div>
            <input type="submit" value="Editar" class="btn btn-success">
        </form>
    </div>
</body>

</html>

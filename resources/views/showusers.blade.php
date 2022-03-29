<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Painel de consultas</title>
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
                <a class="nav-link" href="/findall">Listar usuários</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/aniversariantes">Aniversariantes</a>
            </li>
        </ul>
    </header>
    <div class="container">
        <h1>Número de usuários cadastrados {{$users}}</h1>
    </div>
</body>

</html>

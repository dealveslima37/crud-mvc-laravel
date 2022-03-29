<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Painel de consultas</title>
</head>

<body>
    <div class="container">
        @if (session('msg'))
            <h1 class="text-info">{{session('msg')}}</h1>
        @endif
        <h1 class="mt-4 mb-4">Painel de consultas</h1>
        <a href="/create" class="btn btn-primary">Cadastrar Usuário</a>
        <a href="/findall" class="btn btn-primary">Listar Usuários</a>
        <a href="/showusers" class="btn btn-primary">Número de usuários cadastrados</a>
        <a href="/aniversariantes" class="btn btn-primary">Aniversariantes do mês</a>
    </div>
</body>

</html>

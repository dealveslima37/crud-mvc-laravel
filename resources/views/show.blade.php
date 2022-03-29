<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Usuários</title>
</head>
<body>
    <header>
        <ul class="nav justify-content-end ">
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
        <h2>Usuário: {{$user->nome}}</h2>
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <h5>Id</h5>{{ $user->id }}
                </li>
                <li class="list-group-item">
                    <h5>Nome</h5>{{ $user->nome }}
                </li>
                <li class="list-group-item">
                    <h5>CPF</h5>{{ $user->cpf }}
                </li>
                <li class="list-group-item">
                    <h5>Data de nascimento</h5>{{ date('d/m/Y', strtotime($user->date)) }}
                </li>
                <li class="list-group-item">
                    <a href="/edit/{{ $user->id }}" class="btn btn-success mb-2">Editar</a>
                    <form action="/delete/{{$user->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Excluir</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>

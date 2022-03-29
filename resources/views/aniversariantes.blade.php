<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Aniversariantes</title>
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
        </ul>
    </header>
    <div class="container">
        <h2 id="mes"></h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Data de nascimento</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->nome}}</td>
                    <td>{{$user->cpf}}</td>
                    <td>{{date('d/m/Y', strtotime($user->date))}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        const data = new Date()
        const mes = String(data.getMonth())
        const h1 = document.querySelector('#mes')

        const meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro']

        h1.innerHTML = `Aniversariantes do mês de ${meses[mes]}`

    </script>
</body>

</html>

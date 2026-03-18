<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Meu Site Institucional</title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="{{ route('site.home') }}">Início</a></li>
            <li><a href="{{ route('site.sobre') }}">Sobre Nós</a></li>
            <li><a href="{{ route('site.contato') }}">Contato</a></li>
        </ul>
    </nav>

    <hr>

    <main>
        @yield('conteudo')
    </main>

</body>
</html>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Clínica Médica - Laravel</title>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
  <header class="site-header">
    <nav class="nav">
      <a href="{{ route('home') }}" class="brand">Clínica</a>
      <a href="{{ route('sobre') }}">Sobre</a>
      <a href="{{ route('cad-pacientes') }}">Cad. Pacientes</a>
      <a href="{{ route('cad-medicos') }}">Cad. Médicos</a>
      <a href="{{ route('agendamento') }}">Agendamento</a>
      <a href="{{ route('consultas') }}">Consultas</a>
    </nav>
  </header>

  <main class="container">
    @yield('content')
  </main>

  <footer class="site-footer">
    <p>© Clínica Médica - Laravel (simulação)</p>
  </footer>
</body>
</html>


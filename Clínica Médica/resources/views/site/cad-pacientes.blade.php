@extends('layouts.app')

@section('content')
  <div class="card">
    <h1>Cadastro de Pacientes (Simulado)</h1>
    <p>Este é um formulário fictício para demonstração.</p>
    <form>
      <label>Nome:</label><br>
      <input type="text" placeholder="Nome do paciente" class="input"/><br><br>

      <label>CPF:</label><br>
      <input type="text" placeholder="000.000.000-00" class="input"/><br><br>

      <button type="button" class="btn">Cadastrar</button>
    </form>
  </div>
@endsection

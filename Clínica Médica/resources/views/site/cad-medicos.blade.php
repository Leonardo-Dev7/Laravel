@extends('layouts.app')

@section('content')
  <div class="card">
    <h1>Cadastro de Médicos (Simulado)</h1>
    <form>
      <label>Nome:</label><br>
      <input type="text" placeholder="Nome do médico" class="input"/><br><br>

      <label>CRM:</label><br>
      <input type="text" placeholder="CRM" class="input"/><br><br>

      <button type="button" class="btn">Cadastrar</button>
    </form>
  </div>
@endsection

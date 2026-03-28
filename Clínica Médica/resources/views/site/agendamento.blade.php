@extends('layouts.app')

@section('content')
  <div class="card">
    <h1>Agendamento de Consultas (Simulado)</h1>
    <form>
      <label>Paciente:</label><br>
      <input type="text" placeholder="Nome do paciente" class="input"/><br><br>

      <label>Médico:</label><br>
      <input type="text" placeholder="Nome do médico" class="input"/><br><br>

      <label>Data:</label><br>
      <input type="date" class="input"/><br><br>

      <button type="button" class="btn">Agendar</button>
    </form>
  </div>
@endsection

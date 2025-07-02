@extends('layouts.app')

@section('content')
<h1>Nueva Cita</h1>
<form method="post" action="{{ route('appointments.store') }}">
    @csrf
    <div class="mb-3">
        <label class="form-label">Paciente</label>
        <input type="text" name="patient" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Vacuna</label>
        <input type="text" name="vaccine" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Fecha</label>
        <input type="date" name="date" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection

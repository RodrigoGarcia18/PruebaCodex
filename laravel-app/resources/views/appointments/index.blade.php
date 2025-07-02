@extends('layouts.app')

@section('content')
<h1>Citas</h1>
<table class="table">
    <tr>
        <th>Paciente</th>
        <th>Vacuna</th>
        <th>Fecha</th>
    </tr>
    @foreach($appointments as $a)
    <tr>
        <td>{{ $a->patient }}</td>
        <td>{{ $a->vaccine }}</td>
        <td>{{ $a->date }}</td>
    </tr>
    @endforeach
</table>
@endsection

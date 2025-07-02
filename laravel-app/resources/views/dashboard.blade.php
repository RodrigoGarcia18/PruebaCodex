@extends('layouts.app')

@section('content')
<h1>Estadísticas de Vacunación</h1>
<canvas id="stats" width="400" height="200"></canvas>
<script>
const ctx = document.getElementById('stats');
new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Enero', 'Feb', 'Mar'],
        datasets: [{
            label: 'Vacunas aplicadas',
            data: [3, 2, 5],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    }
});
</script>
@endsection

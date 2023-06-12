@extends('projects.layout')
@section('content')

<div>
    <h2>Proyecto</h2>
    <div>
        <h3>Nombre del proyecto:&nbsp; {{$projects->NombreProyecto}}</h3>
        <p><strong>Fuentes de fondo:</strong>&nbsp; {{$projects->fuenteFondos}}</p>
        <p><strong>Monto planificado:</strong>&nbsp; {{$projects->MontoPlanificado}}</p>
        <p><strong>Monto patrocinado:</strong>&nbsp; {{$projects->MontoPatrocinado}}</p>
        <p><strong>Monto con fondos propios:</strong>&nbsp; {{$projects->MontoFondosPropios}}</p>
        <a href="{{ url('/projects/') }}">
            Regresar
        </a>
    </div>
</div>
    
@endsection
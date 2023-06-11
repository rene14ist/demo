@extends('layouts.base')
@section('content')
  
<div class="card" style="margin:20px;">
        <div>
            <a href="{{route('project.index')}}" class="btn btn-primary">Volver</a>
        </div>
  <div class="card-header"  style="color:black">Proyectos</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title" style="color:black">Proyecto : {{ $project->nombreProyecto }}</h5>
        <p class="card-text"  style="color:black">Fondos : ${{ $project->montoFondosPropios }}</p>
        <p class="card-text" style="color:black">Patrocinador : {{ $project->fuenteFondos }}</p>
        <p class="card-text" style="color:black">Patrocinio : ${{ $project->montoPatrocinado }}</p>
        <p class="card-text" style="color:black">Monto Planificado : ${{ $project->montoPlanificado }}</p>
  </div>
    </hr>
  </div>
</div>
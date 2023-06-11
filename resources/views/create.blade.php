@extends('layouts.base')
@section('content')
  
<div class="card" style="margin:20px;">
        <div>
            <a href="{{route('project.index')}}" class="btn btn-primary">Volver</a>
        </div>

  <div class="card-header" style="color:black">Crear nuevo projecto</div>
  <div class="card-body">
       
      <form action="{{ url('project') }}" method="post">
        {!! csrf_field() !!}
        <label style="color:black">Nombre del projecto</label></br>
        <input type="text" name="nombreProyecto" id="nombreProyecto" class="form-control"></br>
        <label style="color:black">Fuente de los fondos</label></br>
        <input type="text" name="fuenteFondos" id="fuenteFondos" class="form-control"></br>
        <label style="color:black">Monto Planidicado</label></br>
        <input type="number" step="0.01" name="montoPlanificado" id="montoPlanificado" class="form-control"></br>
        <label style="color:black">Monto Patrocinado</label></br>
        <input type="number" step="0.01" name="montoPatrocinado" id="montoPatrocinado" class="form-control"></br>
        <label style="color:black">Monto Fondos Propios</label></br>
        <input type="number" step="0.01" name="montoFondosPropios" id="montoFondosPropios" class="form-control"></br>
        <input type="submit" value="Guardar" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop
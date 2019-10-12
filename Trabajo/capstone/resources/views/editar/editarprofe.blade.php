@extends('plantilla')

@section('seccion')
<h1>Editar Profesor {{$editarprofe->idUsuario}}</h1>
<form action="{{route ('crearprofesor')}}" method="POST">
    @method('PUT')
    @csrf

    @error('nombres')
        <div class="alert alert-danger">
        Rellenar el campo "Nombre"
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
    @enderror


    @error('apellidoPaterno')
        <div class="alert alert-danger">
        Rellenar el campo "Apellido"
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
    @enderror

    @error('idCarrera')
        <div class="alert alert-danger">
        Rellenar el campo "Especialidad"
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
    @enderror

    @error('email')
        <div class="alert alert-danger">
        Rellenar el campo "Mail"
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
    @enderror

   
    <input type="text" name="nombres" placeholder="Nombre" 
    class="form-control mb-2" value="{{$editarprofe->nombres}}">

    <input type="text" name="apellidoPaterno" placeholder="Apellido" 
    class="form-control mb-2" value="{{$editarprofe->apellidoPaterno}}">

    <input type="text" name="idCarrera" placeholder="Especialidad" 
    class="form-control mb-2"value="{{$editarprofe->idCarrera}}">

    <input type="text" name="email" placeholder="Mail" 
    class="form-control mb-2" value="{{$editarprofe->email}}">

    <button class="btn btn-warning btn-block">Editar</button>
</form>
@endsection
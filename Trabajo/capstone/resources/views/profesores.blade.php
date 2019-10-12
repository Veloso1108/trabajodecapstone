@extends('plantilla')

@section('seccion')

<h1>Lista de Profesores</h1>

@if (session('mensajeprofe'))
    <div class="alert alert-success">
        {{session('mensajeprofe')}}
    </div>
@endif

<form action="{{route ('crearprofesor')}}" method="POST">
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

   
    <input type="text" name="nombres" placeholder="Nombre" class="form-control mb-2" value="{{old('nombres')}}">
    <input type="text" name="apellidoPaterno" placeholder="Apellido" class="form-control mb-2" value="{{old('apellidoPaterno')}}">
    <input type="text" name="idCarrera" placeholder="Especialidad" class="form-control mb-2"value="{{old('idCarrera')}}">
    <input type="text" name="email" placeholder="Mail" class="form-control mb-2" value="{{old('email')}}">

    <button class="btn btn-primary btn-block">Agregar</button>
</form>
    <div class="container my-4">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">idUsuario</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Especialidad</th>
                <th scope="col">Mail</th>
                <th scope="col">Configuración</th>               
                </tr>
            </thead>
            <tbody>
                @foreach($infoprofe as $itemprofe)
            <tr>
                <th scope="row">{{$itemprofe->idUsuario}}</th>
                <td>{{$itemprofe->nombres}}</td>
                <td>{{$itemprofe->apellidoPaterno}}</td>
                <td>{{$itemprofe->idCarrera}}</td>
                <td>
                    <a href="{{ route ('editar.dispoprofe', $itemprofe) }}">
                    {{$itemprofe->email}}
                    </a>
                </td>
                <td>
                   <a href="{{ route ('editar.editarprofe', $itemprofe ) }}" class="btn btn-warning btn-sm">editar</a> 
                </td>
            </tr>
                @endforeach() 
            </tbody>
        </table>
    </div>
@endsection
@extends('plantilla')

@section('seccion')
<h1>Lista de Salas</h1>

    <div class="container my-4">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">id</th>
                <th scope="col">idSala</th>
                <th scope="col">L1</th>
                <th scope="col">L2</th>
                <th scope="col">L3</th>
                </tr>
            </thead>
            <tbody>
                @foreach($infosala as $itemsala)
            <tr>
                <th scope="row">{{$itemsala->id}}</th>
                <td>{{$itemsala->idSala}}</td>
                <td>{{$itemsala->L1}}</td>
                <td>{{$itemsala->L2}}</td>
                <td>{{$itemsala->L3}}</td>
            </tr>
                @endforeach()  
            </tbody>
        </table>
    </div>
@endsection

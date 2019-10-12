@extends('plantilla')

@section('seccion')
<h1>Disponibilidades</h1>

    <div class="container my-4">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">idUsuario</th>
                <th scope="col">email</th>
                <th scope="col">L1</th>
                <th scope="col">L2</th>
                <th scope="col">L3</th>
                <th scope="col">L4</th>
                <th scope="col">L5</th>
                <th scope="col">L6</th>
                <th scope="col">L7</th>
                <th scope="col">L8</th>
                </tr>
            </thead>
            <tbody>
                @foreach($infodispo as $itemdispo)
            <tr>
                <th scope="row">{{$itemdispo->idUsuario}}</th>
                <td>{{$itemdispo->email}}</td>
                <td>{{$itemdispo->L1}}</td>
                <td>{{$itemdispo->L2}}</td>
                <td>{{$itemdispo->L3}}</td>
                <td>{{$itemdispo->L4}}</td>
                <td>{{$itemdispo->L5}}</td>
                <td>{{$itemdispo->L6}}</td>
                <td>{{$itemdispo->L7}}</td>
                <td>{{$itemdispo->L8}}</td>
            </tr>
                @endforeach()  
            </tbody>
        </table>
    </div>
@endsection
@extends('layouts.app')

@section('content')

<div class="text-center">
<h1>Libros</h1>
</div>
<div class="container">
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Datos del libro</th>
                <th>Estado</th>
                <th>Página actual</th>
                <th>Calificación</th>
                <th>Portada</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($libros as $libro)
            <tr>
                <td>{{$libro->id}}</td>
                <td>{{$libro->data}}</td>
                <td>{{$libro->status}}</td>
                <td>{{$libro->page}}</td>
                <td>{{$libro->calif}}</td>
                <td><img src="{{$libro->ruta}}"></td>
                {{-- <td>{{$libro->ruta}}</td> --}}
                <td>
                    <a href="{{url('/libros/'.$libro->id.'/edit')}}" class="btn btn-link">Editar</a>
                    @include('libros.delete', ['$libro' => $libro])
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{url('/libros/create')}}" class="btn btn-primary">Agregar</a>
    <a href="{{url('/home')}}" class="btn btn-danger">Regresar</a>
</div>

@endsection
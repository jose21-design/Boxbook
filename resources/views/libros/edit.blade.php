@extends('layouts.app')

@section('content')
<form action="{{ route('libros.update', ['libro' => $libro->id]) }}" method="POST">
{{-- <form action="{{route('libros.edit')}}" method="POST"> --}}
    @csrf
    {{method_field('PATCH')}}
 
    <div class="container py-4 mb-4">
        <h1 class="text-center py-4">Editar libro</h1>
        <div class="form-group">
            <input type="text" class="form-control" name="data" value="{{$libro->data}}" placeholder="Datos del libro">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="status" value="{{$libro->status}}" placeholder="Estado leyendo, leido, pendiente">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="page" value="{{$libro->page}}" placeholder="Página actual">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="calif" value="{{$libro->calif}}" placeholder="Calificación otorgada">
        </div>
        <div class="form-group">
            Portada: <input type="file" name="ruta" value="{{$libro->ruta}}" placeholder="Portada">
        </div>
    
        <button type="Submit" class="btn btn-primary">Guardar</button>
    </div> 
</form> 
@endsection
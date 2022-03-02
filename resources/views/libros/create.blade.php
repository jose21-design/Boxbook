@extends('layouts.app')

@section('content')
<h1 class="text-center">Create</h1>
<h4 class="text-center">La mejor plataforma de libros online, continúa leyendo...</h4>

<form action="{{route('store')}}" method="POST">
    @csrf
    <div class="container py-4 mb-4">
        <h1 class="text-center py-4">Agregar nuevo libro</h1>
        <div class="form-group">
            <input type="text" class="form-control" name="data" placeholder="Datos del libro">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="status" placeholder="Estado leyendo, leido, pendiente">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="page" placeholder="Página actual">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="calif" placeholder="Calificación otorgada">
        </div>
        <div class="form-group">
            Portada: <input type="file" name="ruta" placeholder="Portada">
        </div>
    
        <button type="Submit" class="btn btn-primary">Guardar</button>
    </div>
</form>
<br><h4 class="text-center">Encuentra tus temas favoritos</h4>
@endsection
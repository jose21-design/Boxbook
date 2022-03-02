@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <img src="img/Fondo.jpg" class="img-fluid" alt="Responsive image">
    <h1 class="text-center">Biblioteca de libros <a href="{{url('/libros')}}" class="btn btn-success">Mis libros</a></h1>
    <div class="row">
        <div class="col text-center py-4">
            <h2>Suspenso</h2>
        </div>
    </div>
  
    <div class="row text-center">
        <div class="col-12 col-md-3 col-lg-3 mb-3">
             <img src="img/v1.png">
             <br> <h4>El final del viaje</h4>
             <button type="button" class="btn btn-primary">Ir al libro</button>
        </div>
  
        <div class="col-12 col-md-3 col-lg-3 mb-3">
             <img src="img/v2.png">
             <br> <h4>Un tiempo para soñar y un tiempo para despertar</h4>
             <button type="button" class="btn btn-primary">Ir al libro</button>
        </div>
  
        <div class="col-12 col-md-3 col-lg-3 mb-3">
             <img src="img/v3.png">
             <br> <h4>El buen cirujano</h4>
             <button type="button" class="btn btn-primary">Ir al libro</button>
        </div>
  
        <div class="col-12 col-md-3 col-lg-3 mb-3">
          <img src="img/v4.png">
          <br> <h4>Mi portada de libro</h4>
          <button type="button" class="btn btn-primary">Ir al libro</button>
     </div>
    </div>
  
    <div class="row">
      <div class="col text-center py-4">
          <h2>Romance</h2>
      </div>
  </div>
  
    <div class="row text-center">
      <div class="col-12 col-md-3 col-lg-3 mb-3">
           <img src="img/v5.png">
           <br> <h4>Una Única Rosa</h4>
           <button type="button" class="btn btn-primary">Ir al libro</button>
      </div>
  
      <div class="col-12 col-md-3 col-lg-3 mb-3">
           <img src="img/v6.png">
           <br> <h4>The abandoned clunker</h4>
           <button type="button" class="btn btn-primary">Ir al libro</button>
      </div>
  
      <div class="col-12 col-md-3 col-lg-3 mb-3">
           <img src="img/v7.png">
           <br> <h4>Alicia en el país de las maravillas</h4>
           <button type="button" class="btn btn-primary">Ir al libro</button>
      </div>
  
      <div class="col-12 col-md-3 col-lg-3 mb-3">
        <img src="img/v8.png">
        <br> <h4>Prohibido creer en historias de amor</h4>
        <button type="button" class="btn btn-primary">Ir al libro</button>
   </div>
  </div>
  </div>
@endsection
<form action="{{url('/libros/'.$libro->id)}}" method="POST" class="d-inline-block">
{{method_field('DELETE')}}
@csrf
<input type="submit" class="btn btn-link" style="color: red" value="Eliminar">
</form>
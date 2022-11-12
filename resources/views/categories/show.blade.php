@extends('app')
@section('content')
<div class="container w-25 my-5">
        <form action="{{route('categories.update',[$category -> id])}}" method="POST">
            @method('PATCH')
            @csrf
            <div class="form-group">
              <label for="name">Nombre</label>
              <input type="text"
                class="form-control" name="name" id="name" aria-describedby="helpId" value="{{$category->name}}">
            </div>
            <div class="form-group">
              <label for="description">Descripcion</label>
              <input type="text"
                class="form-control" name="description" id="description" value="{{$category->description}}">
            </div>
            <button type="submit" class="btn btn-primary my-2">Guardar</button>
        </form>
    </div>


@endsection
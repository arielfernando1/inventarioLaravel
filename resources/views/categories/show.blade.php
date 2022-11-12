@extends('app')
@section('content')
    <div class="container w-25 my-5">
        <form action="{{ route('categories.update', [$category->id]) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                    value="{{ $category->name }}">
            </div>
            <div class="form-group">
                <label for="description">Descripcion</label>
                <input type="text" class="form-control" name="description" id="description"
                    value="{{ $category->description }}">
            </div>
            <button type="submit" class="btn btn-primary my-2">Guardar</button>
        </form>
    </div>
    @if($category->products->count()>0)
    @foreach ($category->products as $product)
        <div class="container w-25 my-5">
            <div class="category">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $product->brand }}</h6>
                    <p class="card-text">{{ $product->description }}</p>
                    <a href="{{ route('products.show', [$product->id]) }}" class="card-link">Editar</a>
                    <form action="{{ route('products.destroy', [$product->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    @else
        <div class="container w-25 my-5">
            <h3>No hay productos en esta categoría</h3>
        </div>
    @endif
@endsection

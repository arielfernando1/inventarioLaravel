@extends('app')
@section('content')
    <div class="container w-25 m-5">
        <form action="{{route('products.update',[$product -> id])}}" method="post">
            @csrf
            @method('PATCH')
            @if (session('success'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif
            @error('name')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            @error('brand')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            @error('sku')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            @error('stock')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            @error('cost')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            @error('price')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            @error('description')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            @error('category_id')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            <div class="form-group">
                <label for="id">ID</label>
                <input type="number" class="form-control" name="id" id="id" value="{{$product->id}}" disabled> 
            </div>
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" name="name" id="name" value="{{$product->name}}">
            </div>
            <div class="form-group">
                <label for="brand">Marca</label>
                <input type="text" class="form-control" name="brand" id="brand" value="{{$product->brand}}">
            </div>
            <div class="form-group">
                <label for="sku">Codigo</label>
                <input type="text" class="form-control" name="sku" id="sku" value="{{$product->sku}}">
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" class="form-control" name="stock" id="stock" value="{{$product->stock}}">
            </div>
            <div class="form-group">
                <label for="cost">Costo</label>
                <input type="text" class="form-control" name="cost" id="cost" value="{{$product->cost}}">
            </div>
            <div class="form-group">
                <label for="price">Precio</label>
                <input type="text" class="form-control" name="price" id="price" value="{{$product->price}}">
            </div>
            <div class="form-group">
                <label for="description">Descripcion</label>
                <input type="text" class="form-control" name="description" id="description" value="{{$product->description}}">
            </div>
            <div class="form-group">
                <label for="category_id">Categoria</label>
                <select class="form-control" name="category_id" id="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-success my-3">Guardar</button>
        </form>
    </div>
@endsection

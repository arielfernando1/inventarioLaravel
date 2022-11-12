@extends('app')
@section('content')
    <div class="container w-25 m-5">
        <form action="{{ route('products.store') }}" method="post">
            @csrf
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
                <label for="name">Nombre</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="brand">Marca</label>
                <input type="text" class="form-control" name="brand" id="brand">
            </div>
            <div class="form-group">
                <label for="sku">Codigo</label>
                <input type="text" class="form-control" name="sku" id="sku">
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" class="form-control" name="stock" id="stock">
            </div>
            <div class="form-group">
                <label for="cost">Costo</label>
                <input type="text" class="form-control" name="cost" id="cost">
            </div>
            <div class="form-group">
                <label for="price">Precio</label>
                <input type="text" class="form-control" name="price" id="price">
            </div>
            <div class="form-group">
                <label for="description">Descripcion</label>
                <input type="text" class="form-control" name="description" id="description">
            </div>
            <div class="form-group">
                <label for="category_id">Categoria</label>
                <select class="form-control" name="category_id" id="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary my-3">Guardar</button>
        </form>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Codigo</th>
                        <th>Stock</th>
                        <th>Costo</th>
                        <th>Precio</th>
                        <th>Descripcion</th>
                        <th>Categoria</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->brand }}</td>
                                <td>{{ $product->sku }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>{{ $product->cost }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $category->name }}</td>
                            </tr>
                        @endforeach
                    @endforeach
        </div>
    @endsection

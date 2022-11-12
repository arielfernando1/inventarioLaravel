@extends('app')
@section('content')
    <div class="row justify-content-md-center my-3">
        <div class="col-md-auto">
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
                    <button type="submit" class="btn btn-success my-3">Guardar</button>
            </form>
        </div>
        <div>
            <table class="table table-dark col-md-auto">
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
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->brand }}</td>
                                <td>{{ $product->sku }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>{{ $product->cost }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>
                                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Editar</a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button id='delete' type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                            </tr>
                    @endforeach
        </div>
    </div>

    <script>
        //sweet alert on submit button
        $('#delete').on('click', function(e) {
            e.preventDefault();
            Swal.fire({
                title: '¿Estas seguro?',
                text: "No podras revertir los cambios!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, borrar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).closest('form').submit();
                }
            })
        });
    </script>
@endsection

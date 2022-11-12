@extends('app')
@section('content')
    <div class="row justify-content-md-center my-3">
        <div class="col-md-auto">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                @if (session('success'))
                    <h6 class="alert alert-success">{{ session('success') }}</h6>
                @endif
                @error('name')
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror
                @error('description')
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                        placeholder="Ingrese el nombre de la categoria">
                </div>
                <div class="form-group">
                    <label for="description">Descripcion</label>
                    <input type="text" class="form-control" name="description" id="description" aria-describedby="helpId"
                        placeholder="">
                </div>
                <button type="submit" class="btn btn-success my-3">Guardar</button>
            </form>
        </div>
    </div>
    <div class="row justify-content-md-center">
        @foreach ($categories as $category)
            <div class="col-md-2">
                <div class="category animate__animated animate__zoomIn">
                    <div>
                        <h3>{{ $category->name }}</h3>
                    </div>
                    <div>
                        <p>{{ $category->description }}</p>
                    </div>
                    <div class="category_options">
                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-primary">Ver</a>
                        <form action="{{ route('categories.destroy', [$category->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <script>
        $(document).ready(function() {
            $('.btn-danger').click(function(e) {
                e.preventDefault();
                Swal.fire({
                    title: '¿Estas seguro?',
                    text: "Al eliminar una categoria se eliminarán sus productos, no podrás revertir esta acción",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, eliminar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $(e.target).parent().submit();
                    }
                })
            });
        });
    </script>
@endsection

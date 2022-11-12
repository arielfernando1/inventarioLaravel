<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        a {
            text-decoration: none;
        }

        .navbar {
            background-color: #F7F052;
        }

        .category {
            background-color: #F7F052;
            margin: 0.5rem;
            border-style: transparent;
            border-radius: 60px;
            padding: 2rem;
            box-shadow: 12px -8px #F28123;
        }

        .category_options {
            display: flex;
            justify-content: space-between;
        }
    </style>
    <title>Gestor de Inventario</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="{{ route('products.index') }}">Inventory</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('products.index') }}">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ route('categories.index') }}>Categorias</a>
                </li>

            </ul>
        </div>
    </nav>
    @yield('content')
</body>

</html>

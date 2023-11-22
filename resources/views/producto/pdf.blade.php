<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <h1>Productos</h1>
    <table class="table table-stripped table-hover">
        <thead class="thead">
            <tr>
                <th>No&ensp;</th>
                <th>Descripcion &ensp;</th>
                <th>Precio&ensp;</th>
                <th>Marca&ensp;</th>
                <th>Categoria&ensp;</th>
                <th>Stock&ensp;</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->id }} &ensp;</td>
                <td>{{ $producto->descripcion }}&ensp;</td>
                <td>{{ $producto->precio }}&ensp;</td>
                <td>{{ $producto->marca->nombre }}&ensp;</td>
                <td>{{ $producto->categoria->nombre }}&ensp;</td>
                <td>{{ $producto->stock }}&ensp;</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style></style>
</head>

<body>
    <h1>Productos por Marca</h1>
    <table >
        <thead class="thead">
            <tr>
                <th>No&emsp;</th>
                <th>Descripcion&emsp;</th>
                <th>Precio&emsp;</th>
                <th>Marca&emsp;</th>
                <th>Categoria&emsp;</th>
                <th>Stock&emsp;</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->id }} &emsp;</td>
                <td>{{ $producto->descripcion }}&emsp;</td>
                <td>{{ $producto->precio }}&emsp;</td>
                <td>{{ $producto->marca_id }}&emsp;</td>
                <td>{{ $producto->categoria_id }}&emsp;</td>
                <td>{{ $producto->stock }}&emsp;</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
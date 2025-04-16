<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Listado de Herramientas</h1>
    <ul>
        @foreach ($h as $x)
            <li> {{ $x["nombre"] }} : {{$x["cantidad"]}} </li>
        @endforeach
    </ul>

    <ol>
    </ol>
</body>
</html>

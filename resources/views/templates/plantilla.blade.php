<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo') </title>   
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('ruta/a/tu/estilo.css') }}">
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 3px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    h1{
        font-size: 30px;
    }
</style>
</head>
<body>
    @yield('contenido')
</body>
</html>
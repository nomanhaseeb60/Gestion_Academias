<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <script src ="{{ asset("js/app.js") }}"></script>
    <title>Estudiante</title>
</head>
<body>
<div class="container-sm">
    <h1 class="m-3 text-info" style="text-align: center">Gestion de Estudiantes</h1>
    @isset($msj)
        <div class="alert alert-primary" role="alert">
            {{$msj}}
        </div>
    @endisset
    @yield("opciones")
    @yield("contenido")
</div>
</body>
</html>

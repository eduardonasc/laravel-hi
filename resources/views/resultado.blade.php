<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Calculadora</title>
    </head>
    <body class="antialiased">
        <h2>Resultado: {{ $resultado }}</h2>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Calculadora</title>
    </head>
    <body class="antialiased">
        <form action="/calcular" method="post">
            @csrf
            <input type="number" name="num1" placeholder="Número 1">
            <input type="text" name="operador" placeholder="Operador">
            <input type="number" name="num2" placeholder="Número 2">
            <button type="submit">Calcular</button>
        </form>
    </body>
</html>

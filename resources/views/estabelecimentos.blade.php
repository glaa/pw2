<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Estabelecimentos</title>
    </head>

    <body>
        <form method="POST" action="{{ route('estabelecimentos') }}">
            @csrf
            <input id="entrada" type="text">
            <input type="submit">
        </form>
    </body>
</html>
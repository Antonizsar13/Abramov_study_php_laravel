<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>citied</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        @foreach ($countries as $countries)
            <div>
                <h2>{{$countries->name}}</h2>
                <ul>
                    @foreach ($countries->cities as $city)
                        <li>{{$city->name}}</li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </body>
</html>

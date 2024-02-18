<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Links</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        <table style="border: 1px solid black">
            <caption>Пользователи</caption>
            <tr>
                <th style="border: 1px solid black">Имя</th>
                <th style="border: 1px solid black">Фамилия</th>
                <th style="border: 1px solid black">Статус</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td style="border: 1px solid black">{{ $user['name'] }}</td>
                <td style="border: 1px solid black">{{ $user['surname'] }}</td>
                <td style="border: 1px solid black">
                    @if ($user['banned'])
                        БАН  п  
                    @else
                        Активен
                    @endif
                </td>
            </tr>
            @endforeach
        </table>
        
        
    </body>
</html>

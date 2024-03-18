<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Users</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        <table style="border: 1px solid black">
            <caption>Пользователи</caption>
            <tr>
                <th style="border: 1px solid black">АЙДИ</th>
                <th style="border: 1px solid black">ЛОГИН</th>
                <th style="border: 1px solid black">ПАроль</th>
                <th style="border: 1px solid black">ЭМЭИЛ</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td style="border: 1px solid black">{{ $user->id }}</td>
                <td style="border: 1px solid black">{{ $user->login }}</td>
                <td style="border: 1px solid black">{{ $user->password }}</td>
                <td style="border: 1px solid black">{{ $user->email }}</td>
            </tr>
            @endforeach
        </table>

        <form action="{{ route('users.create1') }}">
            @csrf
            <input type="submit" value="Добавить 1 пользователя">
        </form>
        <form action="{{ route('users.create3') }}">
            @csrf
            <input type="submit" value="Добавить 3 пользователей">
        </form>
        <form action="{{ route('users.update') }}">
            @csrf
            <input type="submit" value="Поменять логин и эмеил рандомному пользователю">
        </form>
        <form action="{{ route('users.delete') }}">
            @csrf
            <input type="submit" value="Удалить рандомного пользователя">
        </form>
        
    </body>
</html>

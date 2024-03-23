<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>All posts</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        <table style="border: 1px solid black">
            <caption>Посты</caption>
            <tr>
                <th style="border: 1px solid black">АЙДИ</th>
                <th style="border: 1px solid black">Заголовок</th>
                <th style="border: 1px solid black">Кртаное описание статьи</th>
                <th style="border: 1px solid black">Дата</th>
                <th style="border: 1px solid black">Изменить</th>
                <th style="border: 1px solid black">Удалить</th>
            </tr>

            @foreach ($posts as $post)
            <tr>
                <td style="border: 1px solid black" name="id">{{ $post->id }}</td>
                <td style="border: 1px solid black">
                    <a href="{{route('post.getOne', [$post])}}">{{ $post->title }}</a>
                    </td>
                <td style="border: 1px solid black">{{ $post->desc }}</td>
                <td style="border: 1px solid black">{{ $post->date }}</td>
                <td style="border: 1px solid black">
                    <a href="{{route('post.editPost', [$post])}}">Изменить</a>
                </td>
                <td style="border: 1px solid black">
                    <a href="{{route('post.delPost', [$post])}}">Удалить</a>
                </td>
            </tr>
            @endforeach
        </table>

        
        
    </body>
</html>

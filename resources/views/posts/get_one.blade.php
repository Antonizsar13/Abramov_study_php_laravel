<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Статья id = {{$post->id}}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        <caption>Пост id = {{$post->id}}</caption>   
        <br>Заголовок: {{$post->title}}
        <br>Текст: {{$post->text}}
        <br>Дата: {{$post->date}}
    </body>
</html>

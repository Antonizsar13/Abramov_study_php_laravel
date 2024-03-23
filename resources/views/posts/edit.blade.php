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
        <form action="" method="POST">
            @csrf
            <div style="display: flex; flex-direction: column;">
                <input name="title" value="{{$post->title}}">
                <input name="desc"  value="{{$post->desc}}">
                <input name="date"  value="{{$post->date}}">
                <textarea name="text">{{$post->text}}</textarea>
                <input name="submit" type='submit'>
            </div>
        </form>
    </body>
</html>

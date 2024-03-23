<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Новая статья</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        <form action="" method="POST">
            @csrf
            <div style="display: flex; flex-direction: column;">
                <input name="title">
                <input name="desc" >
                <input type="date" name="date" >
                <textarea name="text"></textarea>
                <input name="submit" type='submit'>
            </div>
        </form>
    </body>
</html>

<!doctype html>
<html>
    <head>
        <title>Praktikum Laravel Ke-2</title>
    </head>
    <body>
        <ul>
            @for($x=1; $x<=5; $x++)
            <li>Ini adalah urutan ke-{{ $x }}</li>
            @endfor
        </ul>
    </body>
</html>
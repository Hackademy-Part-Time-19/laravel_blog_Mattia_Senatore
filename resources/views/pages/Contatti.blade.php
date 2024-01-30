<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="X-UA-Compatible" content="ie-edge">
    <title>Document</title>
 
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');

        * {
            font-family: 'Ubuntu', sans-serif;
        }

        h1 {
            text-align: center;
        }

        ul {
            text-align: center;
            list-style: none;
            font-size: 16px;

        }

        a {
            color: black;
        }
    </style>
</head>
<body>
<h1>{{ $titolo }}</h1>
    <ul>
        <li><a href="{{ route('contatti') }}">Contatti</a></li>
        <li><a href="{{ route('welcome') }}">Welcome</a></li>
        <li><a href="{{ route('articoli') }}">Articoli</a></li>
    </ul>

    
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
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
  <h5 style="text-align: center;"><a href="{{ route('articoli') }}">Articoli</a></h5>
    
            <x-card/>
                    <p class="card-description">{{$articolo['description']}}</p>
                    
                </div>

            </div>
          
</body>

</html>

   <link rel="stylesheet" href="resources\css\welcome.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
        *{
            font-family: 'Ubuntu', sans-serif;
        }

      
        ul{
            text-align: center;
            list-style: none;
            font-size: 16px;
           
        }

        a{
            color: black;
        }
    </style>

    
    <x-navbar/>
        <ul>
            <li><a href="{{ route('contatti') }}">Contatti</a></li>
            <li><a href="{{ route('welcome') }}">Welcome</a></li>
            <li><a href="{{ route('articoli') }}">Articoli</a></li>
        </ul>
        {{$slot}}
    <x-footer/>
   


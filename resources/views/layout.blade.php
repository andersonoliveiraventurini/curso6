<html>
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
   shrink-to-fit=no">
    <!-- Scripts -->
   
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Bootstrap CSS - public/css/app.css-->
  
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- caso não recebe nenhum valor o título da página será "Projeto 5.8"-->
  
    <title>@yield('title','Projeto 6')</title>
    </head>
    <body>
        <div class="container">
            @include('menu')
            
            @yield('content')
        </div>
    </body>
   </html>
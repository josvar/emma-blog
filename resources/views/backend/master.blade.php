<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blog pokemon</title>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="{{elixir('css/app.css')}}" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <div @yield('app_id') class="container general">
      <h1 class="titulo">POKEMON!!!</h1>
      @yield('content')
    </div>



    <script src="{{elixir('js/app.js')}}" charset="utf-8"></script>
  </body>
</html>

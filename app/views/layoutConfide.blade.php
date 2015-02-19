<!doctype html>
<html>
<head>
  <!-- en-tete de la page -->
  <meta charset="utf-8" /> <!-- choix de l'encodage utf8 -->
  {{ HTML::style('main.css') }}
  {{ HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css') }}
  {{ HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css') }}
</head>

<body>
  @yield('content')

  {{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') }}
  {{ HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js') }}
</body>
</html>

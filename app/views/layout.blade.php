<!doctype html>
<html>
<head>
  <!-- en-tete de la page -->
  <meta charset="utf-8" /> <!-- choix de l'encodage utf8 -->
  <link rel="stylesheet" href="main.css">
  <!-- Latest compiled and minified CSS, bootstrap layouts -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"> <!-- creates tons and tons of css rules -->
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
</head>

<body>
  @include('navigation')
  @yield('content')

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> <!-- fait fonctionner mes menus déroulants! -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>

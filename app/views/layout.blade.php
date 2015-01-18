<!doctype html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- adaptation mobile -->
  <title>Shockwave</title>
  <meta name=description content="BLABLABLA" /> <!-- description référencement -->
  <meta name=keywords content="keyword1, keyword2, keyword3, etc" /> <!-- mot-clés réf -->
  <meta property="og:title" content="Titre du site pour facebook" />
  <meta property="og:type" content="website" /> <!-- De quoi il s'agit -->
  <meta property="og:url" content="index.html" /> <!-- cette page.html -->
  <meta property="og:image" content="/images/image1.jpg" /> <!-- image facebook -->
  <meta property="og:description" content="Descitpion sympathique pour facebook" />
  <meta name=robots content="index, follow" /> <!-- Indexation de la page sur google sinon noindex, nofollow -->
  <link rel="icon" type="image/png" href="images/favicon.png" />  <!-- image à coté du nom de domaine -->

  {{ HTML::style('css/main.css') }}
  {{ HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css') }}
  {{ HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css') }}
  <head>
<body>
  @include('navigation')
  @yield('content')
  
  {{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') }}
  {{ HTML::script('https://cdn.jsdelivr.net/jquery.jcanvas/13.04.26/jcanvas.min.js') }}
</body>
</html>

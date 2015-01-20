<!doctype html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- adaptation mobile -->
  <title>Shockwave - Liste BDE 2015</title>
  <meta name=description content="Site internet de la liste BDE Shockwave 2015" />
  <meta name=keywords content="Shockwave bde liste 2015 application campagne" /> <!-- mot-clés réf -->
  <meta property="og:title" content="Shockwave liste BDE 2015" />
  <meta property="og:type" content="website" /> <!-- De quoi il s'agit -->
  <meta property="og:url" content="index.html" /> <!-- cette page.html -->
  <meta property="og:image" content="/images/image1.jpg" /> <!-- image facebook -->
  <meta property="og:description" content="Site internet de la liste BDE Shockwave 2015" />
  <meta name=robots content="index, follow" /> <!-- Indexation de la page sur google sinon noindex, nofollow -->
  <link rel="icon" type="image/png" href="images/favicon.png" />  <!-- image à coté du nom de domaine -->

  {{ HTML::style('build/component.css') }}
  {{ HTML::style('build/main.css') }}
<head>
<body>
  <div class="row">
    @include('navigation')
    <div class="container">
      @yield('content')
    <div>
    @include('footer')
  </diV>

  {{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js') }}
  {{ HTML::script('build/component.js') }}
  {{ HTML::script('build/main.js') }}
</body>
</html>

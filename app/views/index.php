<!doctype html>

<html>
  <head>
    <!-- en-tete de la page -->
    <meta charset="utf-8" /> <!-- choix de l'encodage utf8 -->
    <title>Shockwave 2015</title> <!-- titre de la page, s'affiche sur l'onglet -->
    <link rel="stylesheet" href="main.css">
    <!-- Latest compiled and minified CSS, bootstrap layouts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"> <!-- creates tons and tons of css rules -->
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
  </head>

  <!-- corps de la page -->
  <body>

    <!-- EN-TETE -->
    <header class="navbar-inverse" role="banner">

      <!--BARRE DE NAVIGATION -->
      <div class="container">

        <nav role="navigation">

          <!-- Brand and toggle get grouped for better mobile display -->

          <div class="navbar-header">
            <!-- ce qui suit est utile pour les portables ou tablettes, créé un menu déroulant-->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Shockwave</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Accueil<span class="sr-only">(current)</span></a></li>
              <li><a href="shockwave.html">Organigramme</a></li>
              <li><a href="programme.html">Programme</a></li>
              <li><a href="sponsors.html">Sponsors</a></li>
              <li><a href="pougnes.html">Pougnes</a></li>
              <li><a href="fun.html">Fun</a></li>
              <li><a href="http://associations.it-sudparis.eu/">Assos</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Liens utiles<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Ecampus</a></li>
                  <li><a href="#">Zimbra</a></li>
                  <li><a href="#">je sais pas =)</a></li>
                  <li class="divider"></li>
                  <li><a href="#">que mettre?</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Et là?</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->

        </nav>

      </div> <!-- container -->

    </header>
    <!--FIN DE L'EN-TETE-->



    <div class="container"> <!-- container gives the centered looking feel -->

      <div class="row">

        <div class="col-sm-6 col-xs-12">

          <div class="panel panel-success">

            <div class="panel-heading">
              <h3 class="panel-title">Widget 1</h3>
            </div>

            <div class="panel-body">

              <a href="#" class="btn btn-primary" role="button"> Link 1</a>
              <a href="#" class="btn btn-success" role="button"> Link 2</a>
              <a href="#" class="btn btn-info" role="button"> Link 3</a>
            </div>

          </div>

        </div>

        <div class="col-sm-3 col-xs-6">

          <div class="panel panel-success">

            <div class="panel-heading">
              <h3 class="panel-title">Widget 2</h3>
            </div>

            <div class="panel-body text-danger">
              <p> Hello there! </p>
              <a href="#" class="btn btn-danger" role="button"> Link 1</a>
              <a href="#" class="btn btn-danger" role="button"> Link 2</a>
            </div>

          </div>

        </div>

        <div class="col-sm-3 col-xs-6">

          <div class="panel panel-success">

            <div class="panel-heading">
              <h3 class="panel-title">Widget 3</h3>
            </div>

            <div class="panel-body">
              <a href="#" class="btn btn-danger" role="button"> Link 1</a>
              <a href="#" class="btn btn-danger" role="button"> Link 2</a>
            </div>

          </div>

        </div>

      </div> <!-- class row -->

    </div> <!-- class container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> <!-- fait fonctionner mes menus déroulants! -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

  </body>
</html>

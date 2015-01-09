<!doctype html>

<html>

<?php
include("head.php");
?>

<!-- corps de la page -->
<body>

  <!-- EN-TETE -->
  <header>
    <div class="container">
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->

          <?php
          include("respnav.php");
          ?>

          <!-- Collect the nav links, forms, and other content for toggling -->

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a  href="index.php">Accueil</a></li>
              <li><a href="shockwave.php" >Organigramme</a></li>
              <li><a  href="programme.php">Programme</a></li>
              <li><a class="active" href="#" >Sponsors</a></li>
              <li><a  href="pougnes.php" >Pougnes</a></li>
              <li><a  href="fun.php" >Fun</a></li>
              <li><a  href="http://associations.it-sudparis.eu/" role="button">Assos</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Liens utiles<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Ecampus</a></li>
                  <li><a href="#">Zimbra</a></li>
                </ul>
              </li>
            </ul>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </div>
  </header>

  <!--FIN DE L'EN-TETE-->


  <!-- COEUR DU SITE -->

  <div class="container"> <!-- container gives the centered looking feel -->

    <div class="jumbotron">
      <h1>Nos sponsors!</h1>
    </div>

    <?php
    include("corps.php");
    ?>

  </div> <!-- class container -->


  <script src="jquery.js"> </script>

  <?php
  include("jq.php");
  ?>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</body>
</html>

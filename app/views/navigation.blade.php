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
            @include('navigation-items', array('items' => $MyNavBar->roots()))
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>
  </div> <!-- container -->
</header>

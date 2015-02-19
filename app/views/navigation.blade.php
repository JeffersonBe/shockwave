<header>
  <div class="container">
    <div class="social">
      <a href="https://www.youtube.com/channel/UCefNacvu9MkcisDava-ObGA?spfreload=10">
        <i class="fa fa-youtube"></i>
      </a>
      <a href="https://www.facebook.com/profile.php?id=100007840068309&fref=ts">
        <i class="fa fa-facebook"></i>
      </a>
    </div>
    <div id="logo" class="animated pulse"></div>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigationbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Shockwave</a>
        </div>

        <div class="collapse navbar-collapse" id="navigationbar">
          <ul class="nav navbar-nav">
            @include('navigation-items', array('items' => $MyNavBar->roots()))
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </div>
</header>

<header>
  <div id="social" class="hide_mob">
    <a href="#" target="blank" class="fb"></a>
    <a href="#" target="blank" class="in"></a>
    <a href="#" class="twit"></a>
    <a href="#" class="youtube"></a>
  </div>
  <div id="logo"></div>
  <div id="menu" class="hide_mob">
    <a class="accueil" href="index.html"></a>
    <ul>
      @include('navigation-items', array('items' => $MyNavBar->roots()))
    </ul>
  </div>
</header>

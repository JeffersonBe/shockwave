$(document).ready(function(){
    $("#owl-demo").owlCarousel({

      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      responsive: true,
      lazyLoad: true,
      transitionStyle : "fade",
      // "singleItem:true" is a shortcut for:
      items : 1
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false

    });
  }
  H5F.setup(document.getElementById("FormBreakfast"));
});

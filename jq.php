  <script class="jq">

  $(function(){

    $('.pannel-button').on('click', function(){
      var panelId = $(this).attr('data-panelid');
      $('#'+panelId).toggle();
    });


  });

  </script>

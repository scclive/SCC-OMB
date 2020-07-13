<meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>SCC | 
            @if(Route::getCurrentRoute()->uri() == 'UIdetails') 
                  Universities 
            @elseif(\Request::is('CPAll') || \Request::is('CPdetails/*'))
                  Campuses
            @elseif(\Request::is('DPAll') || \Request::is('DPdetails/*'))
                  Deparmtments
            @endif
      </title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- <link rel="manifest" href="site.webmanifest"> -->
      <link rel="shortcut icon" type="image/x-icon" href="{{ url('') }}/img/notebook.png">
      <!-- Place favicon.ico in the root directory -->

      <!-- CSS here -->
      <link rel="stylesheet" href="{{ url('') }}/css/bootstrap.min.css">
      <link rel="stylesheet" href="{{ url('') }}/css/owl.carousel.min.css">
      <link rel="stylesheet" href="{{ url('') }}/css/magnific-popup.css">
      <link rel="stylesheet" href="{{ url('') }}/css/font-awesome.min.css">
      <link rel="stylesheet" href="{{ url('') }}/css/themify-icons.css">
      <link rel="stylesheet" href="{{ url('') }}/css/nice-select.css">
      <link rel="stylesheet" href="{{ url('') }}/css/flaticon.css">
      <link rel="stylesheet" href="{{ url('') }}/css/gijgo.css">
      <link rel="stylesheet" href="{{ url('') }}/css/animate.css">
      <link rel="stylesheet" href="{{ url('') }}/css/slick.css">
      <link rel="stylesheet" href="{{ url('') }}/css/slicknav.css">
      <link rel="stylesheet" href="{{ url('') }}/css/style.css">











      @if (\Request::is('per') || \Request::is('per/store')) 
            <style type="text/css">
                  #growContainer{
                        display: table !important;
                        width:100%!important;
                        height:100%!important;
                  }
                  .grow{
                        display: table-cell!important;
                        height:100%!important;
                        width: 10%!important;
                        -webkit-transition:width 500ms!important;
                        -moz-transition:width 500ms!important;
                        transition:width 500ms!important;
                  }
                  #growContainer:hover .grow{
                        width:15%!important;
                  }
                  #growContainer:hover .grow:hover {
                        width:40%!important;
                  }

            </style>
      @endif      

     


      <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
      <script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
      <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
      <script src="{{ url('quickadmin/js') }}/bootstrap.min.js"></script>
      <script src="{{ url('quickadmin/js') }}/main.js"></script>


      <script>
            window._token = '{{ csrf_token() }}';
      </script>

      @if (\Request::is('per/test') || \Request::is('per/store'))
            <script>
                  //checks if all questions ticked
                  $(".btn").click(function(e){
                        var $questions = $(".questiondiv");
                        if($questions.find("input:radio:checked").length === $questions.length) {
                              document.getElementsByClassName('hiddensubmit')[0].click();
                        }else{
                              alert("Fill out all questions!");
                        }
                  });

                  
            </script>
      @endif







      <script src="{{ url('') }}/js/vendor/modernizr-3.5.0.min.js"></script>
      <script src="{{ url('') }}/js/vendor/jquery-1.12.4.min.js"></script>
      <script src="{{ url('') }}/js/popper.min.js"></script>
      <script src="{{ url('') }}/js/bootstrap.min.js"></script>
      <script src="{{ url('') }}/js/owl.carousel.min.js"></script>
      <script src="{{ url('') }}/js/isotope.pkgd.min.js"></script>
      <script src="{{ url('') }}/js/ajax-form.js"></script>
      <script src="{{ url('') }}/js/waypoints.min.js"></script>
      <script src="{{ url('') }}/js/jquery.counterup.min.js"></script>
      <script src="{{ url('') }}/js/imagesloaded.pkgd.min.js"></script>
      <script src="{{ url('') }}/js/scrollIt.js"></script>
      <script src="{{ url('') }}/js/jquery.scrollUp.min.js"></script>
      <script src="{{ url('') }}/js/wow.min.js"></script>
      <script src="{{ url('') }}/js/nice-select.min.js"></script>
      <script src="{{ url('') }}/js/jquery.slicknav.min.js"></script>
      <script src="{{ url('') }}/js/jquery.magnific-popup.min.js"></script>
      <script src="{{ url('') }}/js/plugins.js"></script>
      <script src="{{ url('') }}/js/gijgo.min.js"></script>
      <script src="{{ url('') }}/js/slick.min.js"></script>
      <!--contact js-->
      <script src="{{ url('') }}/js/jquery.ajaxchimp.min.js"></script>
      <script src="{{ url('') }}/js/jquery.form.js"></script>
      <script src="{{ url('') }}/js/jquery.validate.min.js"></script>
      <script src="{{ url('') }}/js/mail-script.js"></script>
      <script src="{{ url('') }}/js/main.js"></script>
      @include('partials.javascripts')
      <!-- <link rel="stylesheet" href="css/responsive.css"> -->
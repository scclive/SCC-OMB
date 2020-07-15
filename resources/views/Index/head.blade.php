<meta charset="utf-8">
<title>

      @if (!Auth::guest())
            @if(Auth::user()->isAdmin())
                  Dashboard - Admin Control | SCC
            @else
                  Dashboard - User Control | SCC
            @endif 
      @else
            @if(\Request::is('login'))  
                  Login | SCC
            @else
                  @if(\Request::is('register'))
                        Register | SCC
                  @endif
            @endif
      @endif
</title>

<meta http-equiv="X-UA-Compatible"
      content="IE=edge">
<meta content="width=device-width, initial-scale=1.0"
      name="viewport"/>
<meta http-equiv="Content-type"
      content="text/html; charset=utf-8">

<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all"
      rel="stylesheet"
      type="text/css"/>
<link rel="stylesheet"
      href="{{ url('quickadmin/css') }}/font-awesome.min.css"/>
<link rel="stylesheet"
      href="{{ url('quickadmin/css') }}/bootstrap.min.css"/>
<link rel="stylesheet"
      href="{{ url('quickadmin/css') }}/components.css"/>
<link rel="stylesheet"
      href="{{ url('quickadmin/css') }}/quickadmin-layout.css"/>
<link rel="stylesheet"
      href="{{ url('quickadmin/css') }}/quickadmin-theme-default.css"/>
<link rel="stylesheet"
      href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
<link rel="stylesheet"
      href="//cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css"/>
<link rel="stylesheet"
      href="https://cdn.datatables.net/select/1.2.0/css/select.dataTables.min.css"/>
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.css"/>
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.standalone.min.css"/>


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/3.2/select2.css">

<link rel="shortcut icon" type="image/png" href="/img/notebook.png?r=31241"/>
<link rel="icon" type="image/png" href="/img/notebook.png?r=31241"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}" />


@if (\Request::is('login') || \Request::is('register')) 
      <style type="text/css">

            body{
                  background-image: url("{{  URL::to ('/img/banner/bannerlogin.png')}}");
                  background-repeat: no-repeat;
                  background-position: right; 
                  background-color: #ffffff
            }
            .btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
                  background-color: #f25440 !important;
            }
            input:focus {
                  background-color: #f5d2ce;
            }
            input{
                  border: 2px solid red;
                  border-radius: 4px;
            }

            .abcde {
                  display: flex;
                  align-items: center;
                  justify-content: space-between;
            }

            .abcde .Fresh.Mango {
                  background-image: url("{{  URL::to ('/img/home232.png')}}");
                  cursor: pointer;
                  margin-top: 9px;
                  width: 32px;
                  height: 32px;
            }
      </style>
@endif

@if (\Request::is('generate') || \Request::is('APIgenerate/*')) 
      <style type="text/css">

            .header{
                  background-image: url("{{  URL::to ('/img/banner/bannerlogin.png')}}");
                  background-repeat: no-repeat;
                  background-position: right; 
                  background-color: #ffffff;
            }
            .headerpersonality{
                  background-image: url("{{  URL::to ('/img/banner/banner_2.png')}}");
                  background-repeat: no-repeat;
                  background-position: right; 
                  background-color: #ffffff;
            }
            .headerpastrecord{
                  background-image: url("{{  URL::to ('/img/banner/accordion2.png')}}");
                  background-repeat: no-repeat;
                  background-position: right; 
                  background-color: #ffffff;
            }
            .headerentrytest{
                  background-image: url("{{  URL::to ('/img/banner/dicas-estudar-vida-toda2.png')}}");
                  background-repeat: no-repeat;
                  background-position: right; 
                  background-color: #ffffff;
            }
            .headerstrongsubjects{
                  background-image: url("{{  URL::to ('/img/banner/materiais-academicos-online-gratis-noticias.png')}}");
                  background-repeat: no-repeat;
                  background-position: right; 
                  background-color: #ffffff;
            }
            .footer{
                  background-image: url("{{  URL::to ('/img/banner/sidebar-10218708102.png')}}");
                  background-repeat: no-repeat;
                  background-position: right; 
                  background-color: #ffffff;
            }

            /* .btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
                  background-color: #f25440 !important;
            }
            input:focus {
                  background-color: #f5d2ce;
            }
            input{
                  border: 2px solid red;
                  border-radius: 4px;
            }

            .abcde {
                  display: flex;
                  align-items: center;
                  justify-content: space-between;
            }

            .abcde .Fresh.Mango {
                  background-image: url("{{  URL::to ('/img/home232.png')}}");
                  cursor: pointer;
                  margin-top: 9px;
                  width: 32px;
                  height: 32px;
            } */
      </style>
@endif

@if (\Request::is('questions/create')) 

      <link rel="stylesheet" href="{{  URL::to ('/jquery.Jcrop.min.css')}}" type="text/css" />
      <style type="text/css">
           

            input#crop {
                  padding: 5px 25px 5px 25px;
                  background: lightseagreen;
                  border: #485c61 1px solid;
                  color: #FFF;
                  visibility: hidden;
            }

            #cropped_img {
                  margin-top: 40px;
            }

      </style>
@endif

@if (\Request::is('personality/test') || \Request::is('diagnostic/*') || \Request::is('selection/*')  || \Request::is('APIpersonality/test/*') || \Request::is('APIdiagnostic/test/*') || \Request::is('APIselection/test/*')) 
      <style type="text/css">
            .hiddensubmit {
                  display:none;
            }

      </style>
@endif

@if (\Request::is('personality') || \Request::is('APIPersonality/result/*')) 
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

@if (\Request::is('null')) 
      <style type="text/css">
            
            @media(min-width:768px) {
            body {
                  margin-top: 50px;
            }
            /*html, body, #wrapper, #page-wrapper {height: 100%; overflow: hidden;}*/
            }

            #wrapper {
            padding-left: 0;    
            }

            #page-wrapper {
            width: 100%;        
            padding: 0;
            background-color: #fff;
            }

            @media(min-width:768px) {
            #wrapper {
                  padding-left: 225px;
            }

            #page-wrapper {
                  padding: 22px 10px;
            }
            }

            /* Top Navigation */

            .top-nav {
            padding: 0 15px;
            }

            .top-nav>li {
            display: inline-block;
            float: left;
            }

            .top-nav>li>a {
            padding-top: 20px;
            padding-bottom: 20px;
            line-height: 20px;
            color: #fff;
            }

            .top-nav>li>a:hover,
            .top-nav>li>a:focus,
            .top-nav>.open>a,
            .top-nav>.open>a:hover,
            .top-nav>.open>a:focus {
            color: #fff;
            background-color: #1a242f;
            }

            .top-nav>.open>.dropdown-menu {
            float: left;
            position: absolute;
            margin-top: 0;
            /*border: 1px solid rgba(0,0,0,.15);*/
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            background-color: #fff;
            -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
            box-shadow: 0 6px 12px rgba(0,0,0,.175);
            }

            .top-nav>.open>.dropdown-menu>li>a {
            white-space: normal;
            }

            /* Side Navigation */

            @media(min-width:768px) {
            .side-nav {
                  position: fixed;
                  top: 60px;
                  left: 225px;
                  width: 225px;
                  margin-left: -225px;
                  border: none;
                  border-radius: 0;
                  border-top: 1px rgba(0,0,0,.5) solid;
                  overflow-y: auto;
                  background-color: #222;
                  /*background-color: #5A6B7D;*/
                  bottom: 0;
                  overflow-x: hidden;
                  padding-bottom: 40px;
            }

            .side-nav>li>a {
                  width: 225px;
                  border-bottom: 1px rgba(0,0,0,.3) solid;
            }

            .side-nav li a:hover,
            .side-nav li a:focus {
                  outline: none;
                  background-color: #1a242f !important;
            }
            }

            .side-nav>li>ul {
            padding: 0;
            border-bottom: 1px rgba(0,0,0,.3) solid;
            }

            .side-nav>li>ul>li>a {
            display: block;
            padding: 10px 15px 10px 38px;
            text-decoration: none;
            /*color: #999;*/
            color: #fff;    
            }

            .side-nav>li>ul>li>a:hover {
            color: #fff;
            }

            .navbar .nav > li > a > .label {
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            position: absolute;
            top: 14px;
            right: 6px;
            font-size: 10px;
            font-weight: normal;
            min-width: 15px;
            min-height: 15px;
            line-height: 1.0em;
            text-align: center;
            padding: 2px;
            }

            .navbar .nav > li > a:hover > .label {
            top: 10px;
            }

            .navbar-brand {
            padding: 5px 15px;
            }

      </style>
@endif

@if (\Request::is('1gettingstarted')) 
      <style type="text/css">
            .wrapper {
                  padding:  100px;
            }
            .svg-container { 
                  display: inline-block !important;
                  position: relative !important;
                  width: 100% !important;
                  padding-bottom: 100% !important;
                  vertical-align: middle !important; 
                  overflow: hidden !important; 
                  background: #f5f3e7 !important;
            }

            .svg-content { 
                  display: inline-block !important;
                  position: absolute !important;
                  top: 0 !important;
                  left: 0 !important;
            }
            
            h4 {
                  background: #000; 
                  height:2px;
                  width: 100%; 
                  text-align: center; 
                  border-bottom: 1px solid #000; 
                  line-height: 0.1em;
                  margin: 10px 0 20px; 
            }

            h4 { 
                  display: flex; 
                  flex-direction: row; 
            } 
            
            h4:before, 
            h4:after { 
                  content: ""; 
                  flex: 1 1; 
                  border-bottom: 2px solid #000; 
                  margin: auto; 
            } 
      </style>
@endif


<style type="text/css">

      .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            float:right;
            z-index: 1;
            top: 0;
            right: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
      }

      .sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
      }

      .sidebar a:hover {
            color: #f1f1f1;
      }

      .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
            margin-top: 42px;
      }

      .openbtn {
            font-size: 20px;
            cursor: pointer;
            background-color: #111;
            color: white;
            padding: 10px 15px;
            border: none;
      }

      .openbtn:hover {
            background-color: #444;
      }

      #main {
            transition: margin-right .5s;
            padding: 16px;
      }

      table.sortable th:not(.sorttable_sorted):not(.sorttable_sorted_reverse):not(.sorttable_nosort):after { 
            content: " \25B4\25BE" 
      }

      /* input {
        resize: horizontal !important;
        width: auto !important;
      }
      
      input:active {
            width: auto !important;   
      }
      
      input:focus {
            min-width: auto !important;
      } */
</style>

<!-- 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
        margin: 0px;
    }
</style> -->

@if (\Request::is('API*'))
      <style type="text/css">
            div.panel-body > div:nth-of-type(odd) {
                  background: #fffcfc;
            }
            div.panel-body > div:nth-of-type(even) {
                  background: #f0f0f0;
            }
      </style>
@endif


<meta property="og:title" content="LaraQuiz - how well do you know Laravel?" />
<meta property="og:image" content="{{ asset('SCC(0).png') }}" />
<meta property="og:description" content="Mini-project with Laravel Quiz. Powered by QuickAdminPanel.com code generator." />

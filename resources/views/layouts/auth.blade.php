<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body class="page-header-fixed">

    <!-- home button -->
    <a href="{{  URL::to ('/')}}">
        <div class="container-fluid">
        <div class="abcde" id="abcde">
        <div class="Fresh Mango" ></div>
        </div>
    </a>

    @include('partials.analytics')

    <div style="margin-top: 10%;"></div>

    <div class="container-fluid">
        @yield('content')
    </div>

    <div class="scroll-to-top"
         style="display: none;">
        <i class="fa fa-arrow-up"></i>
    </div>

    @include('partials.javascripts')

</body>
</html>
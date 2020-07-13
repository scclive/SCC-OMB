<!-- header-start -->
<header>
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-md-5 ">
                            <div class="header_left">
                                <p>Welcome to <b>Student Career Consultant</b></p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-md-7">
                            <div class="header_right d-flex">
                                <div class="short_contact_list">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-envelope"></i> studentCareerConsultant@gmail.com</a></li>
                                        <li><a href="#"> <i class="fa fa-phone"></i> +92-51-4950336</a></li>
                                    </ul>
                                </div>
                                <div class="social_media_links" style="display:none;">
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <a href="{{ url('') }}">
                                    <img src="img/notebookSmall(3).png" alt="" >
                                </a>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="@if(Route::getCurrentRoute()->uri() == '/') active @endif" href="{{ url('') }}">home</a></li>
                                            
                                            <li><a class="@if(Route::getCurrentRoute()->uri() == 'about') active @endif" href="/about">About Us</a></li>
                                            <li><a class="@if(Route::getCurrentRoute()->uri() == 'contact') active @endif" href="/contact">Contact/Feedback</a></li>

                                            
                                            @if (!Auth::guest())
                                                @if(Auth::user()->isAdmin())
                                                    <li><a href="/home">Dashboard</a></li>
                                                @else
                                                    <li><a href="/home">Dashboard</a></li>
                                                @endif
                                            @else
                                                <li><a href="/login">Login</a></li>
                                            @endif
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a  href="#">Get Our APP <img src="img/android.png" alt=""> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
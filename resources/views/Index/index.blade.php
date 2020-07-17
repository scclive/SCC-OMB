<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('Index.head')
</head>

<body>


    @include('Index.header')
  
    <!-- service_area_start -->
    <div class="service_area">
        <br><br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center">
                        <img src="img/notebookSmall.png" alt="" > 
                        <h4><b>Student Career Consultant</b></h4>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <h3>Examine
                            Your Potential</h3>
                        <h4 style="color: rgba(64, 178, 255, 0.96);">Our Services</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <a href="/UIdetails" class="learn_more">
                        <div class="single_service text-center">
                            <div class="service_icon" >
                                <sup><img style="float:right; width:16px" src="img/notebookSmall.png" alt=""></sup>
                                <img style="margin-right:-16px;" src="img/svg_icon/1.png" alt="" > 
                            </div>
                            <h3>Universities</h3>
                            
                            <p style="" >Discover Universities</p>
                            Learn More
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <a href="/login" class="learn_more">
                        <div class="single_service text-center">
                            <div class="service_icon">
                                <sup><img style="float:right; width:16px" src="img/login.png" alt=""></sup>
                                <img style="margin-right:-16px;" src="img/svg_icon/2.png" alt="">
                            </div>
                            <h3>Career Diagnostic Test</h3>
                            <p>Test Your Interest</p>
                            Learn More
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <a href="/login" class="learn_more">
                        <div class="single_service text-center">
                            <div class="service_icon">
                                <sup><img style="float:right; width:16px" src="img/login.png" alt=""></sup>
                                <img style="margin-right:-16px;" src="img/svg_icon/3.png" alt="">
                            </div>
                            <h3>Career Selection Test</h3>
                            <p>Take Admission Tests</p>
                            Learn More
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <a href="/per" class="learn_more">
                        <div class="single_service text-center">
                            <div class="service_icon">
                                <sup><img style="float:right; width:16px" src="img/notebookSmall.png" alt=""></sup>
                                <img style="margin-right:-16px;" src="img/svg_icon/4.png" alt="">
                            </div>
                            <h3>Personality Test</h3>
                            <p>Discover Your Personality Type</p>
                            Learn More
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <a href="/login" class="learn_more">
                        <div class="single_service text-center">
                            <div class="service_icon">
                                <sup><img style="float:right; width:16px;" src="img/login.png" alt=""></sup>
                                <img style="margin-right:-16px;" src="img/svg_icon/5.png" alt="">
                            </div>
                            <h3>Your Reports</h3>
                            <p>Track Your Progress & Results</p>
                            Learn More
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <a href="#" class="learn_more">
                        <div class="single_service text-center">
                            <div class="service_icon">
                                <sup><img style="float:right;" src="img/android.png" alt=""></sup>
                                <img style="margin-right:-16px;" src="img/svg_icon/6.png" alt="">
                            </div>
                            <h3>Alerts</h3>
                            <p>Find Subscriptions for Your Interests</p>
                            Learn More
                        </div>
                    </a>
                </div>
                <!-- <div class="col-xl-2 col-md-3 col-lg-2">
                </div> -->
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <a href="/login" class="learn_more">
                        <div class="single_service text-center">
                            <div class="service_icon">
                                <sup><img style="float:right; width:16px" src="img/login.png" alt=""></sup>
                                <img style="margin-right:-16px; width:64px;" src="img/academics.png" alt="">
                            </div>
                            <h3>Your Past Records</h3>
                            <p>Record Your Past Performances</p>
                            Learn More
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <a href="/login" class="learn_more">
                        <div class="single_service text-center">
                            <div class="service_icon">
                                <sup><img style="float:right; width:16px" src="img/login.png" alt=""></sup>
                                <img style="margin-right:-16px; width:64px;" src="img/recommend.png" alt="">
                            </div>
                            <h3>Choose Your Path</h3>
                            <p>Find Profession that Suits You</p>
                            Learn More
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- service_area_end -->

    
    <!-- counter_area  -->
    <div class="counter_area" style="display:block;">
        <div class="container">
            <div class="row">

                <div class="col-xl-2 col-lg-2 col-md-2">
                    <div class="single_counter text-center">
                        <div class="counter_icon">
                            <img src="img/svg_icon/team.png" alt="">
                        </div>
                        <h3> <span class=""  style="color: #ffd5bc ;">{{$users}}</span> <span style="color: #ffd5bc;"> +</span></h3>
                        <p  style="color: #7ac0ff;">Members</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2">
                    <div class="single_counter text-center">
                        <div class="counter_icon">
                            <img src="img/svg_icon/lightbulb.png" alt="">
                        </div>
                        <h3> <span class="counter"  style="color: #ffd5bc ;">{{$departments}}</span> <span style="color: #ffd5bc;"> +</span> </h3>
                        <p  style="color: #7ac0ff;">Programs</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2">
                    <div class="single_counter text-center">
                        <div class="counter_icon">
                            <img src="img/svg_icon/book.png" alt="">
                        </div>
                        <h3> <span class=""  style="color: #ffd5bc ;">{{$subjects}}</span> <span style="color: #ffd5bc;"> +</span> </h3>
                        <p  style="color: #7ac0ff;">Subjects</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2">
                    <div class="single_counter text-center">
                        <div class="counter_icon">
                            <img src="img/svg_icon/test.png" alt="">
                        </div>
                        <h3> <span class=""  style="color: #ffd5bc ;">{{$quizzes}}</span> <span style="color: #ffd5bc;"> +</span> </h3>
                        <p  style="color: #7ac0ff;">Tests Taken</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2">
                    <div class="single_counter text-center">
                        <div class="counter_icon">
                            <img src="img/svg_icon/faq.png" alt="">
                        </div>
                        <h3> <span class="counter"  style="color: #ffd5bc ;">{{$questions}}</span> <span style="color: #ffd5bc;"> +</span> </h3>
                        <p  style="color: #7ac0ff;">Question Base</p>
                    </div>
                </div>
                
                <div class="col-xl-2 col-lg-2 col-md-2">
                    <div class="single_counter text-center">
                        <div class="counter_icon">
                            <img src="img/svg_icon/score.png" alt="">
                        </div>
                        <h3> <span class=""  style="color: #ffd5bc ;">{{$average}}</span> <span style="color: #ffd5bc;">%</span> </h3>
                        <p  style="color: #7ac0ff;">Average Score</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /counter_area  -->

	
    <!-- case_study_area  -->
    <div class="case_study_area" style="display:block;">
        <div class="container">
            <div class="border_bottom">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_title text-center mb-40">
                            <h3>Get Started</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="md-stepper-horizontal orange">

                            <div class="col-md-1">
                            </div>
                            <div class="col-md-3 md-step active">
                                <div class="md-step-circle"><span>1</span></div>
                                <div class="md-step-title">Register</div>
                                <div class="md-step-bar-left"></div>
                                <div class="md-step-bar-right"></div>
                            </div>
                            <div class="col-md-3 md-step active">
                                <div class="md-step-circle"><span>2</span></div>
                                <div class="md-step-title">Complete</div>
                                <div class="md-step-optional">Your Profile</div>
                                <div class="md-step-bar-left"></div>
                                <div class="md-step-bar-right"></div>
                            </div>
                            <div class="col-md-3 md-step active">
                                <div class="md-step-circle"><span>3</span></div>
                                <div class="md-step-title">Complete</div>
                                <div class="md-step-optional">Your Past Academic Record</div>
                                <div class="md-step-bar-left"></div>
                                <div class="md-step-bar-right"></div>
                            </div>
                            <div class="col-md-1 md-step"></div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="md-stepper-horizontal orange">
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-3 md-step active">
                                <div class="md-step-circle"><span>4</span></div>
                                <div class="md-step-title">Discover</div>
                                <div class="md-step-optional">Universities</div>
                                <div class="md-step-bar-left"></div>
                                <div class="md-step-bar-right"></div>
                            </div>
                            <div class="col-md-3 md-step active">
                                <div class="md-step-circle"><span>5</span></div>
                                <div class="md-step-title">Take</div>
                                <div class="md-step-optional">Entry Tests</div>
                                <div class="md-step-bar-left"></div>
                                <div class="md-step-bar-right"></div>
                            </div>
                            <div class="col-md-3 md-step active">
                                <div class="md-step-circle"><span>6</span></div>
                                <div class="md-step-title">Test</div>
                                <div class="md-step-optional">Your Strong Subjects</div>
                                <div class="md-step-bar-left"></div>
                                <div class="md-step-bar-right"></div>
                            </div>
                            <div class="col-md-1 md-step"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="md-stepper-horizontal orange">
                            <div class="col-md-1"></div>
                            <div class="col-md-3 md-step active">
                                <div class="md-step-circle"><span>7</span></div>
                                <div class="md-step-title">Know</div>
                                <div class="md-step-optional">Your Personality Type</div>
                                <div class="md-step-bar-left"></div>
                                <div class="md-step-bar-right"></div>
                            </div>
                            <div class="col-md-3 md-step active">
                                <div class="md-step-circle"><span>8</span></div>
                                <div class="md-step-title">Know</div>
                                <div class="md-step-optional">Your Personality Type</div>
                                <div class="md-step-bar-left"></div>
                                <div class="md-step-bar-right"></div>
                            </div>
                            <div class="col-md-3 md-step active">
                                <div class="md-step-circle"><span>9</span></div>
                                <div class="md-step-title">Track</div>
                                <div class="md-step-optional">Your Results</div>
                                <div class="md-step-bar-left"></div>
                                <div class="md-step-bar-right"></div>
                            </div>
                            <div class="col-md-1 md-step"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="md-stepper-horizontal orange">
                            <div class="col-md-1"></div>
                            <div class="col-md-3 md-step active">
                                <div class="md-step-circle"><span>10</span></div>
                                <div class="md-step-title">Get Your</div>
                                <div class="md-step-optional">Report & Suggestions</div>
                                <div class="md-step-bar-left"></div>
                                <div class="md-step-bar-right"></div>
                            </div>
                            <div class="col-md-3 md-step active">
                                <div class="md-step-circle"><span>11</span></div>
                                <div class="md-step-title">Track</div>
                                <div class="md-step-optional">Institutions Updates & Dates</div>
                                <div class="md-step-bar-left"></div>
                                <div class="md-step-bar-right"></div>
                            </div>
                            <div class="col-md-3 md-step active">
                                <div class="md-step-circle"><span>12</span></div>
                                <div class="md-step-title">Consult</div>
                                <div class="md-step-optional">Your counsellor With Your <b>SCC</b> Report</div>
                                <div class="md-step-bar-left"></div>
                                <div class="md-step-bar-right"></div>
                            </div>
                            <div class="col-md-1 md-step"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /case_study_area  -->

    @include('Index.footer')


</body>

</html>
@extends('layouts.app')

@section('content')

    <!-- <div class="row" id="container" style="width: 700px; height: 400px;">

    </div> -->
    <br />
    <center><img src="../img/shuttle.png" style="width:64px;"/></center>
    <h3 align="center">Getting Started</h3>
    <!-- <h4 align="center">Take Personality Test & Find Out Which Field of Study Suits You</h4><br /> -->
    <h4 align="center">Let's Get You on Track</h4><br />
        
    <div class="row lastresult">
        <div class="col-md-12">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Your Average Results</div> -->
                    <div class="panel-body">

                        <!-- 1 -->
                        <div class="row" style="padding-left:50px; border-left: 6px solid yellow; height:150px;">
                            <div class="col-md-1 text-center" style="height:150px;">
                                <h3 align="center" style="padding-top:40px;" >Start</h3>
                            </div>
                            <div class="col-md-2 text-center" style="height:150px;">
                                <img style="width:100px; padding-top:20px;" src="{{  URL::to ('/img/sign-up-icon_small.png')}}"/>
                            </div>
                            <div class="col-md-5 text-center align-items-center" style="height:150px; vertical-align: middle;">
                                <h4 style="padding-top:50px;">
                                    Complete Your Profile
                                </h4>
                            </div>
                        </div>

                        <!-- 2 -->
                        <div class="row" style="padding-left:50px; border-right: 6px solid brown; height:150px;">
                            <div class="col-md-4 text-center"></div>
                            <div class="col-md-5 text-center align-items-center" style="height:150px; vertical-align: middle;">
                                <h4 style="padding-top:50px;">
                                    Give Us Your Past Academic Record
                                </h4>
                            </div>
                            <div class="col-md-2 text-center" style="height:150px;">
                                <img style="width:100px; padding-top:20px;" src="{{  URL::to ('/img/academics.png')}}"/>
                            </div>
                            <div class="col-md-1 text-center" style="height:150px;">
                                <h3 align="center" style="padding-top:40px;" >2</h3>
                            </div>
                        </div>

                        <!-- 3 -->
                        <div class="row" style="padding-left:50px; border-left: 6px solid blue; height:150px;">
                            <div class="col-md-1 text-center" style="height:150px;">
                                <h3 align="center" style="padding-top:40px;" >3</h3>
                            </div>
                            <div class="col-md-2 text-center" style="height:150px;">
                                <img style="width:100px; padding-top:20px;" src="{{  URL::to ('/img/svg_icon/1.png')}}"/>
                            </div>
                            <div class="col-md-5 text-center align-items-center" style="height:150px; vertical-align: middle;">
                                <h4 style="padding-top:50px;">
                                    Discover Universities
                                </h4>
                            </div>
                        </div>

                        <!-- 4 -->
                        <div class="row" style="padding-left:50px; border-right: 6px solid black; height:150px;">
                            
                            <div class="col-md-4 text-center"></div>
                            <div class="col-md-5 text-center align-items-center" style="height:150px; vertical-align: middle;">
                                <h4 style="padding-top:50px;">
                                    Take National Assessment Exams Required for Undergrad Schools
                                </h4>
                            </div>
                            <div class="col-md-2 text-center" style="height:150px;">
                                <img style="width:100px; padding-top:20px;" src="{{  URL::to ('/img/svg_icon/3.png')}}"/>
                            </div>
                            <div class="col-md-1 text-center" style="height:150px;">
                                <h3 align="center" style="padding-top:40px;" >4</h3>
                            </div>
                        </div>

                        <!-- 5 -->
                        <div class="row" style="padding-left:50px; border-left: 6px solid purple; height:150px;">
                            <div class="col-md-1 text-center" style="height:150px;">
                                <h3 align="center" style="padding-top:40px;" >5</h3>
                            </div>
                            <div class="col-md-2 text-center" style="height:150px;">
                                <img style="width:100px; padding-top:20px;" src="{{  URL::to ('/img/svg_icon/2.png')}}"/>
                            </div>
                            <div class="col-md-5 text-center align-items-center" style="height:150px; vertical-align: middle;">
                                <h4 style="padding-top:50px;">
                                    Test Your Capabilities In A Field You Think You Excell A
                                </h4>
                            </div>
                        </div>

                        <!-- 6 -->
                        <div class="row" style="padding-left:50px; border-right: 6px solid grey; height:150px;">
                            <div class="col-md-4 text-center"></div>
                            <div class="col-md-5 text-center align-items-center" style="height:150px; vertical-align: middle;">
                                <h4 style="padding-top:50px;">
                                    Your Personality Determine Which Field of Study Suits You
                                </h4>
                            </div>
                            <div class="col-md-2 text-center" style="height:150px;">
                                <img style="width:100px; padding-top:20px;" src="{{  URL::to ('/img/svg_icon/4.png')}}"/>
                            </div>
                            <div class="col-md-1 text-center" style="height:150px;">
                                <h3 align="center" style="padding-top:40px;" >6</h3>
                            </div>
                        </div>

                        <!-- 7 -->
                        <div class="row" style="padding-left:50px; border-left: 6px solid red; height:150px;">
                            <div class="col-md-1 text-center" style="height:150px;">
                                <h3 align="center" style="padding-top:40px;" >7</h3>
                            </div>
                            <div class="col-md-2 text-center" style="height:150px;">
                                <img style="width:100px; padding-top:20px;" src="{{  URL::to ('/img/svg_icon/5.png')}}"/>
                            </div>
                            <div class="col-md-5 text-center align-items-center" style="height:150px; vertical-align: middle;">
                                <h4 style="padding-top:50px;">
                                    Track Your Results
                                </h4>
                            </div>
                        </div>

                        <!-- 8 -->
                        <div class="row" style="padding-left:50px; border-right: 6px solid green; height:150px;">
                            <div class="col-md-4 text-center"></div>
                            <div class="col-md-5 text-center align-items-center" style="height:150px; vertical-align: middle;">
                                <h4 style="padding-top:50px;">
                                    Get Your Report & Suggestions
                                </h4>
                            </div>
                            <div class="col-md-2 text-center" style="height:150px;">
                                <img style="width:100px; padding-top:20px;" src="{{  URL::to ('/img/recommend.png')}}"/>
                            </div>
                            <div class="col-md-1 text-center" style="height:150px;">
                                <h3 align="center" style="padding-top:40px;" >8</h3>
                            </div>
                        </div>

                        <!-- 9 -->
                        <div class="row" style="padding-left:50px; border-left: 6px solid Orange; height:150px;">
                            <div class="col-md-1 text-center" style="height:150px;">
                                <h3 align="center" style="padding-top:40px;" >9</h3>
                            </div>
                            <div class="col-md-2 text-center" style="height:150px;">
                                <img style="width:100px; padding-top:20px;" src="{{  URL::to ('/img/svg_icon/6.png')}}"/>
                            </div>
                            <div class="col-md-5 text-center align-items-center" style="height:150px; vertical-align: middle;">
                                <h4 style="padding-top:50px;">
                                    Track Your Institutions Updates & Dates
                                </h4>
                            </div>
                        </div>

                        <!-- End -->
                        <div class="row" style="padding-left:50px; border-right: 6px solid black; height:150px;">
                            
                            <div class="col-md-4 text-center"></div>
                            <div class="col-md-5 text-center align-items-center" style="height:150px; vertical-align: middle;">
                                <h4 style="padding-top:50px;">
                                    Consult Your counsellor With Your <b style="color: #ff5e13;">SCC</b> Report
                                </h4>
                            </div>
                            <div class="col-md-2 text-center" style="height:150px;">
                                <img style="width:100px; padding-top:20px;" src="{{  URL::to ('/img/notebook.png')}}"/>
                            </div>
                            <div class="col-md-1 text-center" style="height:150px;">
                                <h3 align="center" style="padding-top:40px;" >End</h3>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
<!-- <div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-5 text-center">
                        <h3>Text Here</h3>
                </div>
            </div>
        </div>
    </div>
</div> -->



@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">Dashboard</div> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- You are logged in! -->





                    
                     <!-- service_area_start -->
                        <!-- <div class="service_area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="section_title text-center mb-50">
                                        <center><img src="../img/dashboard64.png"/></center>
                                        <h6 align="center">Dashboard</h6><br />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-md-6 col-lg-4">
                                        <div class="single_service text-center">
                                            <div class="service_icon">
                                                <img src="img/svg_icon/1.png" alt="">
                                            </div>
                                            <h3>Universities</h3>
                                            <p>Discover Universities from our Optimized DB</p>
                                            <a href="#" class="learn_more">Learn More</a>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-lg-4">
                                        <div class="single_service text-center">
                                            <div class="service_icon">
                                                <img src="img/svg_icon/2.png" alt="">
                                            </div>
                                            <h3>Career Diagnostic Test</h3>
                                            <p>Test Your Interest</p>
                                            <a href="#" class="learn_more">Learn More</a>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-lg-4">
                                        <div class="single_service text-center">
                                            <div class="service_icon">
                                                <img src="img/svg_icon/3.png" alt="">
                                            </div>
                                            <h3>Career Selection Test</h3>
                                            <p>Find Profession that Suits You</p>
                                            <a href="#" class="learn_more">Learn More</a>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-lg-4">
                                        <div class="single_service text-center">
                                            <div class="service_icon">
                                                <img src="img/svg_icon/4.png" alt="">
                                            </div>
                                            <h3>Personality Test</h3>
                                            <p>Discover Your Personality Type</p>
                                            <a href="#" class="learn_more">Learn More</a>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-lg-4">
                                        <div class="single_service text-center">
                                            <div class="service_icon">
                                                <img src="img/svg_icon/5.png" alt="">
                                            </div>
                                            <h3>Your Reports</h3>
                                            <p>Track Your Progress & Results</p>
                                            <a href="#" class="learn_more">Learn More</a>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-lg-4">
                                        <div class="single_service text-center">
                                            <div class="service_icon">
                                                <img src="img/svg_icon/6.png" alt="">
                                            </div>
                                            <h3>Alerts</h3>
                                            <p>Find Subscriptions for Your Interests</p>
                                            <a href="#" class="learn_more">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    <!-- service_area_end -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

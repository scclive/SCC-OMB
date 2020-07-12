@extends('layouts.app')

@section('content')

    <!-- <div class="row" id="container" style="width: 700px; height: 400px;">

    </div> -->
    <br />
    @if(Auth::user()->isAdmin())
        <center><img src="../img/dashboard64.png"/></center>
        <h3 align="center">Dashboard | Admin Control - Overview</h3><br />
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Statistics</div>

                    <div class="panel-body">

                        @if(Auth::user()->isAdmin())
                            <div class="row">
                                <div class="col-md-12 text-center" id="container1" style="height: 300px;">

                                </div>
                            </div>
                        @endif

                        
                    </div>
                </div>
                <!-- <a href="{{ route('tests.index') }}" class="btn btn-success">Take a new quiz!</a> -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Counts</div>

                    <div class="panel-body">
                        <div class="row">

                            @if(Auth::user()->isAdmin())
                                <div class="col-md-2 text-center">
                                    <h1>{{ $quizzes }}</h1>
                                    all tests taken
                                </div>

                                <div class="col-md-2 text-center">
                                    <h1>{{ $subjects }}</h1>
                                    subjects
                                </div>

                                <div class="col-md-2 text-center">
                                    <h1>{{ $users }}</h1>
                                    users registered
                                </div>

                                <div class="col-md-2 text-center">
                                    <h1>{{ $reported }}</h1>
                                    questions reported
                                </div>

                                <div class="col-md-2 text-center">
                                    <h1>{{ $resolved }}</h1>
                                    questions resolved 
                                </div>

                                <div class="col-md-2 text-center">
                                    <h1>{{ $admins }}</h1>
                                    admin in control
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row lastresult">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Universities</div>

                        <div class="panel-body">
                            
                            <div class="row">
                                <div class="col-md-12 text-center" id="container2" style="height: 340px;">

                                </div>
                            </div>

                            <!-- <div class="row">
                                @if(Auth::user()->isAdmin())
                                    <div class="col-md-4 text-center">
                                        <h1>{{ $universities }}</h1>
                                        all universities
                                    </div>

                                    <div class="col-md-4 text-center">
                                        <h1>{{ $campuses }}</h1>
                                        all campuses
                                    </div>

                                    <div class="col-md-4 text-center">
                                        <h1>{{ $departments }}</h1>
                                        all departments
                                    </div>
                                @endif
                            </div> -->

                        </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">OCR</div>

                        <div class="panel-body">
                            
                            <div class="row">
                                <div class="col-md-12 text-center" id="container3" style="height: 340px;">

                                </div>
                            </div>


                        </div>
                </div>
            </div>
        </div>

        <div class="row lastresult">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Questions Overview</div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4 text-center" >
                                    <div style="vertical-align: middle; text-align: center; padding-top:120px;">
                                        <h3 style="vertical-align: middle; text-align: center; ">Total Questions:</h3>
                                        <h1 style="vertical-align: middle; text-align: center; color: #9acff9; font-size: 50px;">{{$total}}</h1>
                                    </div>
                                </div>
                                <div class="col-md-8 text-center" id="container" style="height: 380px;">

                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    
    @endif
@endsection

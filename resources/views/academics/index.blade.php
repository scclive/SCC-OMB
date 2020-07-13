@extends('layouts.app')

@section('content')

    <!-- <div class="row" id="container" style="width: 700px; height: 400px;">

    </div> -->
    <br />
    <center><img  src="../img/academics.png"/></center>
    <h3 align="center" >Academics</h3>
    <!-- <h4 align="center">Take Personality Test & Find Out Which Field of Study Suits You</h4><br /> -->
    <h4 align="center">Give Us Your Past Academic Record</h4><br />

    <div class="row lastresult">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><center>Your Records</center></div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6 text-center" id="container" style="height: 300px;">

                            </div>
                            <div class="col-md-6 text-center" id="container2" style="height: 300px;">

                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    
    <!-- menu -->
    <div class="row" id="headingimg">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><center>EDIT/ADD</center></div>
                    <div class="panel-body">
                        <div class="row">

                            <div class="col-md-2 text-center"></div>
                            <a href="#headingimg">
                                <div class="col-md-4 text-center sscButton" data-toggle="tooltip"  data-html="true" data-placement="bottom" title='Equivelent to 10 Years of Education: MAtric/O-Levels'>
                                    <img src="../img/campus.png"/>
                                    <h1>SSC</h1>
                                </div>
                            </a>
                            <a href="#headingimg">
                                <div class="col-md-4 text-center hsscButton" data-toggle="tooltip"  data-html="true" data-placement="bottom" title='Equivelent to 12 Years of Education: Intermediate/A-Levels'>
                                    <img src="../img/campusTwo.png"/>
                                    <h1>HSSC</h1>
                                </div>
                            </a>

                        </div>
                    </div>
            </div>
        </div>
    </div>

    <!-- menu2 -->
    <div class="row ssc" id="ssc" style="display: none;">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><p style="text-align:right;" class="X">X</p><p style="text-align:center;">SSC</p></div>
                    <div class="panel-body">
                        <div class="row">

                            <div class="col-md-2 text-center"></div>
                            <a href="#ssc" class="Matriculation">
                                <div class="col-md-4 text-center" data-toggle="tooltip"  data-html="true" data-placement="bottom" title='Equivelent to 12 Years of Education: Intermediate/A-Levels'>
                                    <img src="../img/icons8-circled-menu-64.png"/>
                                    <h1>Matriculation</h1>
                                </div>
                            </a>
                            <a href="{{  URL::to ('/academics/ssc/olevels')}}">
                                <div class="col-md-4 text-center" data-toggle="tooltip"  data-html="true" data-placement="bottom" title='Equivelent to 10 Years of Education: MAtric/O-Levels'>
                                    <img src="../img/icons8-circled-menu-64Unfilled.png"/>
                                    <h1>O-Levels</h1>
                                </div>
                            </a>

                        </div>
                    </div>
            </div>
        </div>
    </div>

    <!-- menu3 -->
    <div class="row hssc" id="hssc" style="display: none;">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><p style="text-align:right;" class="X">X</p><p style="text-align:center;">HSSC</p></div>
                    <div class="panel-body">
                        <div class="row">

                            <div class="col-md-2 text-center"></div>
                            <a href="{{  URL::to ('academics/hssc/alevels')}}">
                                <div class="col-md-4 text-center" data-toggle="tooltip"  data-html="true" data-placement="bottom" title=''>
                                    <img src="../img/icons8-circled-menu-64Unfilled.png"/>
                                    <h1>A-Levels</h1>
                                </div>
                            </a>
                            <a href="#hssc" class="Intermediate">
                                <div class="col-md-4 text-center" data-toggle="tooltip"  data-html="true" data-placement="bottom" title=''>
                                    <img src="../img/icons8-circled-menu-64.png"/>
                                    <h1>Intermediate</h1>
                                </div>
                            </a>

                        </div>
                    </div>
            </div>
        </div>
    </div>

    <!-- menu4 -->
    <div class="row sscTrack" style="display: none;">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><p style="text-align:right;" class="XsscTrack">X</p><p style="text-align:center;">SSC Tracks</p></div>
                    <div class="panel-body">
                        <div class="row">

                            <a href="{{  URL::to ('academics/ssc/matriculation/Medical')}}">
                                <div class="col-md-4 text-center" data-toggle="tooltip"  data-html="true" data-placement="bottom" title=''>
                                    <img src="../img/biology.png"/>
                                    <h1>Medical</h1>
                                </div>
                            </a>
                            <a href="{{  URL::to ('academics/ssc/matriculation/Engineering')}}">
                                <div class="col-md-4 text-center" data-toggle="tooltip"  data-html="true" data-placement="bottom" title=''>
                                    <img src="../img/maths.png"/>
                                    <h1>Engineering</h1>
                                </div>
                            </a>
                            <a href="{{  URL::to ('academics/ssc/matriculation/Humanities')}}">
                                <div class="col-md-4 text-center" data-toggle="tooltip"  data-html="true" data-placement="bottom" title=''>
                                    <img src="../img/accounting.png"/>
                                    <h1>Humanities</h1>
                                </div>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <!-- menu5 -->
    <div class="row hsscTrack" style="display: none;">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><p style="text-align:right;" class="XhsscTrack">X</p><p style="text-align:center;">SSC Tracks</p></div>
                    <div class="panel-body">
                        <div class="row">

                            <a href="{{  URL::to ('academics/hssc/intermediate/Pre-Med')}}">
                                <div class="col-md-4 text-center" data-toggle="tooltip"  data-html="true" data-placement="bottom" title=''>
                                    <img src="../img/biology.png"/>
                                    <h1>Pre-Medical</h1>
                                </div>
                            </a>
                            <a href="{{  URL::to ('academics/hssc/intermediate/Pre-Engineering')}}">
                                <div class="col-md-4 text-center" data-toggle="tooltip"  data-html="true" data-placement="bottom" title=''>
                                    <img src="../img/maths.png"/>
                                    <h1>Pre-Engineering</h1>
                                </div>
                            </a>
                            <a href="{{  URL::to ('academics/hssc/intermediate/ICS')}}">
                                <div class="col-md-4 text-center" data-toggle="tooltip"  data-html="true" data-placement="bottom" title=''>
                                    <img src="../img/computer.png"/>
                                    <h1>ICS</h1>
                                </div>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection

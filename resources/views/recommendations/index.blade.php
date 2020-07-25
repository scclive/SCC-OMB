@extends('layouts.app')

@section('content')

<!-- <center>
    <p style="font-size: 80px;" >WHAT ARE YOU LOOKING AT HERE?
        <br>
        COMPLETE THE DATA ENTRY ALREADY! 😤
    </p>
</center> -->

    <br/>
    <center><img style="margin-top:150px; width:80px;" src="../img/recommend.png"/></center>
    <h3 align="center"><b>Assessment Report</b></h3>
    <!-- <h4 align="center">Take Personality Test & Find Out Which Field of Study Suits You</h4><br /> -->
    <h4 align="center" style="margin:50px;">Our multidimensional Tests makes accurate assessments about your aptitude. We assess your Personality, strong Subjects and probable chances to suggest the suitable undergraduate education fields for </h4><br/>

    
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <div class="single_service text-center">
                <div class="service_icon">
                    <sup><img style="float:right; width:16px" src="@if($dataProfile) img/check.png @else img/clear.png @endif" alt=""></sup>
                    <img style="margin-right:-16px; width:64px;" src="img/sign-up-icon_small.png" alt="" > 
                </div>
                <h3>Profile</h3>
            </div>
        </div>
        <div class="col-md-2">
            <div class="single_service text-center">
                <div class="service_icon">
                    <sup><img style="float:right; width:16px" src="@if($dataAcademic) img/check.png @else img/clear.png @endif" alt=""></sup>
                    <img style="margin-right:-16px; width:64px;" src="img/academics.png" alt="" > 
                </div>
                <h3>Past Record</h3>
            </div>
        </div>
        <div class="col-md-2">
            <div class="single_service text-center">
                <div class="service_icon">
                    <sup><img style="float:right; width:16px" src="@if($dataPersonality) img/check.png @else img/clear.png @endif" alt=""></sup>
                    <img style="margin-right:-16px; width:64px;" src="img/svg_icon/4.png" alt="" > 
                </div>
                <h3>Personality Test</h3>
            </div>
        </div>
        <div class="col-md-2">
            <div class="single_service text-center">
                <div class="service_icon">
                    <sup><img style="float:right; width:16px" src="@if($dataDiagnostic) img/check.png @else img/clear.png @endif" alt=""></sup>
                    <img style="margin-right:-16px; width:64px;" src="img/svg_icon/2.png" alt="" > 
                </div>
                <h3>Diagnostic Test</h3>
            </div>
        </div>
        <div class="col-md-2">
            <div class="single_service text-center">
                <div class="service_icon">
                    <sup><img style="float:right; width:16px" src="@if($dataSelection) img/check.png @else img/clear.png @endif" alt=""></sup>
                    <img style="margin-right:-16px; width:64px;" src="img/svg_icon/3.png" alt="" > 
                </div>
                <h3>Selection Test</h3>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
    <br>
    <br>

    <div class="row"  style="padding-bottom:300px;">
        <div class="col-md-5"></div>
            <a href="generate"  target="_blank">
                <div class="col-md-2 align-self-center pagination-centered text-center btn btn-primary center-block" @if(!$dataSelection || !$dataDiagnostic || !$dataPersonality || !$dataAcademic || !$dataProfile) disabled @endif>
                    Generate Report
                </div>
            </a>
        <div class="col-md-5"></div>
    </div>

    


@stop

@section('javascript')
    
@endsection
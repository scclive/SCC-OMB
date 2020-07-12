@extends('layouts.app')

@section('content')

    <!-- <div class="row" id="container" style="width: 700px; height: 400px;">

    </div> -->
    <br />
    @if(Auth::user()->isAdmin())
    <center><img src="../img/malware.png"/></center>
    <h3 align="center">Crawler | Admin Control</h3><br />
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Sources</div>

                <div class="panel-body">
                    <div class="row">
                        @if(Auth::user()->isAdmin())
                            <a href="{{  URL::to ('/Crawler/Universities')}}">
                                <div class="col-md-4 text-center">
                                    <img src="../img/campusTwo.png"/>
                                    <h1>Universities</h1>
                                    <h4>Crawler</h4>
                                    <h4>[http://pastic.gov.pk]</h4>
                                </div>
                            </a>
                            <a href="{{  URL::to ('/Crawler/UniversitiesCampuses')}}">
                                <div class="col-md-4 text-center">
                                    <img src="../img/campusthree.png"/>
                                    <h1>Campuses</h1>
                                    <h4>Crawler</h4>
                                    <h4>[https://www.hec.gov.pk/english/universities/Pages/DAIs/HEC-recognized-Campuses.aspx]</h4>
                                </div>
                            </a>
                            <a href="{{  URL::to ('/Crawler/UniversitiesRank')}}">
                                <div class="col-md-4 text-center ">
                                    <img src="../img/rank.png"/>
                                    <h2>Universities Rank</h2>
                                    <h4>Crawler</h4>
                                    <h4>[https://www.4icu.org]</h4>
                                </div>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection

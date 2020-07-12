@extends('layouts.app')

@section('content')

    <!-- <div class="row" id="container" style="width: 700px; height: 400px;">

    </div> -->
    <br />
    <center><img src="../img/svg_icon/2.png"/></center>
        <h3 align="center">Diagnostic Test</h3>
        <!-- <h4 align="center">Take Personality Test & Find Out Which Field of Study Suits You</h4><br /> -->
        <h4 align="center">Test Your Capabilities In A Field You Think You Excell At</h4><br />
        
    <div class="row lastresult">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Your Average Results</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 text-center" id="container" style="height: 300px;">

                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><center>Select Your Subject & Take A New Test</center></div>
                    <div class="panel-body">
                        <div class="row">

                            <a href="{{  URL::to ('/diagnostic/English')}}">
                                <div class="col-md-4 text-center">
                                    <img src="../img/English.png"/>
                                    <h1>English</h1>
                                </div>
                            </a>
                            <a href="{{  URL::to ('/diagnostic/Analytical')}}">
                                <div class="col-md-4 text-center">
                                    <img src="../img/Analytical.png"/>
                                    <h1>Analytical</h1>
                                </div>
                            </a>
                            <a href="{{  URL::to ('/diagnostic/Quantitative')}}">
                                <div class="col-md-4 text-center">
                                    <img src="../img/Quantitative.png"/>
                                    <h1>Quantitative</h1>
                                </div>
                            </a>
                            <div class="col-md-2 text-center"></div>
                            <a href="{{  URL::to ('/diagnostic/Physics')}}">
                                <div class="col-md-4 text-center">
                                    <img src="../img/Physics.png"/>
                                    <h1>Physics</h1>
                                </div>
                            </a>
                            <a href="{{  URL::to ('/diagnostic/Mathematics')}}">
                                <div class="col-md-4 text-center">
                                    <img src="../img/maths.png"/>
                                    <h1>Mathematics</h1>
                                </div>
                            </a>
                            <div class="col-md-2 text-center"></div>
                            <a href="{{  URL::to ('/diagnostic/Biology')}}">
                                <div class="col-md-4 text-center">
                                    <img src="../img/Biology.png"/>
                                    <h1>Biology</h1>
                                </div>
                            </a>
                            <a href="{{  URL::to ('/diagnostic/Computer')}}">
                                <div class="col-md-4 text-center">
                                    <img src="../img/Computer.png"/>
                                    <h1>Computer</h1>
                                </div>
                            </a>
                            <a href="{{  URL::to ('/diagnostic/Statistics')}}">
                                <div class="col-md-4 text-center">
                                    <img src="../img/Statistics.png"/>
                                    <h1>Statistics</h1>
                                </div>
                            </a>
                        <!-- </div>
                        <div class="row"> -->
                            <div class="col-md-2 text-center"></div>
                            <a href="{{  URL::to ('/diagnostic/Economics')}}">
                                <div class="col-md-4 text-center">
                                    <img src="../img/Economics.png"/>
                                    <h1>Economics</h1>
                                </div>
                            </a>
                            <a href="{{  URL::to ('/diagnostic/Accounting')}}">
                                <div class="col-md-4 text-center">
                                    <img src="../img/Accounting.png"/>
                                    <h1>Accounting</h1>
                                </div>
                            </a>
                            <div class="col-md-2 text-center"></div>
                            <div class="col-md-3 text-center"></div>
                            <a href="{{  URL::to ('/diagnostic/Commerce')}}">
                                <div class="col-md-3 text-center">
                                    <img src="../img/Commerce.png"/>
                                    <h1>Commerce</h1>
                                </div>
                            </a>
                            <a href="{{  URL::to ('/diagnostic/Chemistry')}}">
                                <div class="col-md-3 text-center">
                                    <img src="../img/chemistry.png"/>
                                    <h1>Chemistry</h1>
                                </div>
                            </a>
                            <div class="col-md-3 text-center"></div>

                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Your History</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="table-responsive">
                            @if(session('error'))
                            <span class="alert alert-success" role="alert">
                                <strong style="color : red">{{ session('error') }}</strong>
                            </span>
                            @endif

                            <table class="sortable table table-striped table-bordered">
                            <thead> 
                                <tr>  
                                    <th>ID</th>
                                    <th>Subject</th>
                                    <th>Result</th>
                                    <th>Percent</th>
                                    <th>Test Date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                            @if(empty($data))
                                <tr><td colspan="6"><center>Take Your First Test</center></td></tr>
                            @else
                                @foreach ($data as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->subject}}</td>
                                    <td>{{$row->result}}/{{$row->total}}</td>
                                    <td>{{$row->percent}}%</td>
                                    <td>{{$row->created_at}}</td>
                                    <td><a href="{{ route('results.show',[$row->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.view')</a></td>
                                </tr>
                                @endforeach
                            @endif
                                
                            </tbody>
                            </table>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection

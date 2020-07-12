@extends('layouts.app')

@section('content')

    <!-- <div class="row" id="container" style="width: 700px; height: 400px;">

    </div> -->
    <br />
    <center><img src="../img/svg_icon/3.png"/></center>
        <h3 align="center">Selection Test</h3>
        <!-- <h4 align="center">Take Personality Test & Find Out Which Field of Study Suits You</h4><br /> -->
        <h4 align="center">Take National Assessment Exams Required for Undergrad Schools</h4><br/>
        
    <div class="row lastresult">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Your Last Test</div>

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
                <div class="panel-heading"><center>NAT<sup>TM</sup> Categories</center></div>
                    <div class="panel-body">
                        <div class="row">

                     

                            <a href="{{  URL::to ('/selection/IE')}}" >
                            <div class="col-md-4 text-center" data-toggle="tooltip"  data-html="true" data-placement="bottom" title='<table>
                                            <thead>
                                                <tr>
                                                    <th>Time:</th>
                                                    <td>120 minutes</td>
                                                </tr>
                                                <tr>
                                                    <th>Marks:</th>
                                                    <td>100</td>
                                                </tr>
                                                <tr>
                                                    <th>Topics:</th>
                                                    <td>English</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Analytical</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Quantitative</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Physics</td>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Chemistry</td>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Mathematics</td>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <th>Questions:</th>
                                                    <td></td>
                                                    <td>90</td>
                                                </tr>
                                            </thead>
                                        </table>'>
                                    <img src="../img/one.png"/>
                                    <h1>NAT<sup>TM</sup>-IE</h1>
                                    <h4>Pre-Engineering Group</h4>
                                </div>
                            </a>
                            <a href="{{  URL::to ('/selection/IM')}}">
                            <div class="col-md-4 text-center" data-toggle="tooltip"  data-html="true" data-placement="bottom" title='<table>
                                            <thead>
                                                <tr>
                                                    <th>Time:</th>
                                                    <td>120 minutes</td>
                                                </tr>
                                                <tr>
                                                    <th>Marks:</th>
                                                    <td>100</td>
                                                </tr>
                                                <tr>
                                                    <th>Topics:</th>
                                                    <td>English</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Analytical</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Quantitative</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Physics</td>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Chemistry</td>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Biology</td>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <th>Questions:</th>
                                                    <td></td>
                                                    <td>90</td>
                                                </tr>
                                            </thead>
                                        </table>'>
                                    <img src="../img/two.png"/>
                                    <h1>NAT<sup>TM</sup>-IM</h1>
                                    <h4>Pre-Medical  Group</h4>
                                </div>
                            </a>
                            <a href="{{  URL::to ('/selection/ICS')}}">
                                <div class="col-md-4 text-center" data-toggle="tooltip"  data-html="true" data-placement="bottom" title='<table>
                                            <thead>
                                                <tr>
                                                    <th>Time:</th>
                                                    <td>120 minutes</td>
                                                </tr>
                                                <tr>
                                                    <th>Marks:</th>
                                                    <td>100</td>
                                                </tr>
                                                <tr>
                                                    <th>Topics:</th>
                                                    <td>English</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Analytical</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Quantitative</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Physics</td>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Computer</td>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Mathematics</td>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <th>Questions:</th>
                                                    <td></td>
                                                    <td>90</td>
                                                </tr>
                                            </thead>
                                        </table>'>
                                    <img src="../img/three.png"/>
                                    <h1>NAT<sup>TM</sup>-ICS</h1>
                                    <h4>Computer Science Group</h4>
                                </div>
                            </a>
                            <div class="col-md-2 text-center"></div>
                            <a href="{{  URL::to ('/selection/IGS')}}">
                            <div class="col-md-4 text-center" data-toggle="tooltip"  data-html="true" data-placement="bottom" title='<table>
                                            <thead>
                                                <tr>
                                                    <th>Time:</th>
                                                    <td>120 minutes</td>
                                                </tr>
                                                <tr>
                                                    <th>Marks:</th>
                                                    <td>100</td>
                                                </tr>
                                                <tr>
                                                    <th>Topics:</th>
                                                    <td>English</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Analytical</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Quantitative</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Mathematics</td>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Statistics</td>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Economics</td>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <th>Questions:</th>
                                                    <td></td>
                                                    <td>90</td>
                                                </tr>
                                            </thead>
                                        </table>'>
                                    <img src="../img/four.png"/>
                                    <h1>NAT<sup>TM</sup>-IGS</h1>
                                    <h4>General Science Group</h4>
                                </div>
                            </a>
                            <a href="{{  URL::to ('/selection/ICOM')}}">
                            <div class="col-md-4 text-center" data-toggle="tooltip"  data-html="true" data-placement="bottom" title='<table>
                                            <thead>
                                                <tr>
                                                    <th>Time:</th>
                                                    <td>120 minutes</td>
                                                </tr>
                                                <tr>
                                                    <th>Marks:</th>
                                                    <td>100</td>
                                                </tr>
                                                <tr>
                                                    <th>Topics:</th>
                                                    <td>English</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Analytical</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Quantitative</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Accounting</td>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Commerce</td>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td>Economics</td>
                                                    <td>10</td>
                                                </tr>
                                                <tr>
                                                    <th>Questions:</th>
                                                    <td></td>
                                                    <td>90</td>
                                                </tr>
                                            </thead>
                                        </table>'>
                                    <img src="../img/five.png"/>
                                    <h1>NAT<sup>TM</sup>-ICOM</h1>
                                    <h4>Commerce Group</h4>
                                </div>
                            </a>
                            <div class="col-md-2 text-center"></div>
                            

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
                                    <th>Category</th>
                                    <th>Result</th>
                                    <th>Percent</th>
                                    <th>English</th>
                                    <th>Analytical</th>
                                    <th>Quantitative</th>
                                    <th colspan="3">Subjects</th>
                                    <th>Test Date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                            @if(empty($data))
                                <tr><td colspan="12"><center>Take Your First Test</center></td></tr>
                            @else
                                @foreach ($data as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->subject}}</td>
                                    <td>{{$row->result}}/{{$row->total}}</td>
                                    <td>{{$row->percent}}%</td>
                                    <td>{{$row->EnglishScore}}</td>
                                    <td>{{$row->AnalyticalScore}}</td>
                                    <td>{{$row->QuantitativeScore}}</td>

                                    @if($row->subject == 'NAT-IE')
                                        <td>{{$row->subjectScore1}} (Physics)</td>
                                        <td>{{$row->subjectScore2}} (Chemistry)</td>
                                        <td>{{$row->subjectScore3}} (Maths)</td>
                                    @elseif($row->subject == 'NAT-IM')
                                        <td>{{$row->subjectScore1}} (Physics)</td>
                                        <td>{{$row->subjectScore2}} (Chemistry)</td>
                                        <td>{{$row->subjectScore3}} (Bio)</td>
                                    @elseif($row->subject == 'NAT-ICS')
                                        <td>{{$row->subjectScore1}} (Physics)</td>
                                        <td>{{$row->subjectScore2}} (Computer)</td>
                                        <td>{{$row->subjectScore3}} (Maths)</td>
                                    @elseif($row->subject == 'NAT-IGS')
                                        <td>{{$row->subjectScore1}} (Maths)</td>
                                        <td>{{$row->subjectScore2}} (Statistics)</td>
                                        <td>{{$row->subjectScore3}} (Economics)</td>
                                    @elseif($row->subject == 'NAT-ICOM')
                                        <td>{{$row->subjectScore1}} (Accounting)</td>
                                        <td>{{$row->subjectScore2}} (Commerce)</td>
                                        <td>{{$row->subjectScore3}} (Economics)</td>
                                    @endif

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

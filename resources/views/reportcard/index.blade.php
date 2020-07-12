@extends('layouts.app')

@section('content')

    <!-- <div class="row" id="container" style="width: 700px; height: 400px;">

    </div> -->
    <br />
    <center><img src="../img/svg_icon/5.png"/></center>
    <h3 align="center">Results</h3>
    <!-- <h4 align="center">Take Personality Test & Find Out Which Field of Study Suits You</h4><br /> -->
    <h4 align="center">Your Progress So Far</h4><br/>
        
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Personality</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 text-center" id="container5" style="height: 300px;">

                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Selection</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 text-center" id="container3" style="height: 300px;">

                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Diagnostic</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 text-center" id="container4" style="height: 300px;">

                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">SSC</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 text-center" id="container1" style="height: 300px;">

                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">HSSC</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 text-center" id="container2" style="height: 300px;">

                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>










    <!-- past -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Personality</div>

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
                                        <th>Result</th>
                                        <th>Conventional</th>
                                        <th>Enterprising</th>
                                        <th>Social</th>
                                        <th>Artistic</th>
                                        <th>Investigative</th>
                                        <th>Realistic</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                @if(empty($dataPersonality))
                                    <tr><td colspan="8"><center>Take Your First Test</center></td></tr>
                                @else
                                    @foreach ($dataPersonality as $row)
                                    <tr>
                                        <td>{{$row->pid}}</td>
                                        <td>{{$row->result}}</td>
                                        <td>{{$row->conventional}}</td>
                                        <td>{{$row->enterprising}}</td>
                                        <td>{{$row->social}}</td>
                                        <td>{{$row->artistic}}</td>
                                        <td>{{$row->investigative}} </td>
                                        <td>{{$row->realistic}} </td>
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

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Selection</div>

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
                                @if(empty($dataSelection))
                                    <tr><td colspan="12"><center>Take Your First Test</center></td></tr>
                                @else
                                    @foreach ($dataSelection as $row)
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

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Diagnostic</div>

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
                                @if(empty($dataDiagnostic))
                                    <tr><td colspan="6"><center>Take Your First Test</center></td></tr>
                                @else
                                    @foreach ($dataDiagnostic as $row)
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

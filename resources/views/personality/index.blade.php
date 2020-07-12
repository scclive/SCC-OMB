@extends('layouts.app')

@section('content')

    <!-- <div class="row" id="container" style="width: 700px; height: 400px;">

    </div> -->
    <br />
    <center><img src="../img/svg_icon/4.png"/></center>
        <h3 align="center">Personality Test</h3>
        <!-- <h4 align="center">Take Personality Test & Find Out Which Field of Study Suits You</h4><br /> -->
        <h4 align="center">Your Personality Determine Which Field of Study Suits You</h4><br />
        
    <div class="row lastresult">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Your Lastest Result</div>

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
                <div class="panel-heading">Characteristics</div>
                <div class="panel-body">
                    <div class="row">
                    <div id="growContainer" >
                        <div class="grow" style="background-color:#FFF7E5;" >
                            <center>
                            <img style="width:40px; padding-top:20px;" src="{{  URL::to ('/img/conventional.png')}}"/>
                            <h3 style="padding-left:20px; padding-right:20px;">Conventional – Organizers</h3>
                            <p style="padding-left:20px; padding-right:20px;">This type of people is logical, efficient, well-organized, thorough, and detail oriented. They are careful and like to give structure to what they do. Practical tasks, quantitative measurements, and structured environments are the fields they are outstanding in.</p>
                            </center>
                        </div>
                        <div class="grow" style="background-color:#FFEFCC;">
                        
                            <center>
                            <img style="width:40px; padding-top:20px;" src="{{  URL::to ('/img/enterprising.png')}}"/>
                            <h3 style="padding-left:20px; padding-right:20px;">Enterprising – Persuaders</h3>
                            <p style="padding-left:20px; padding-right:20px;">People who present this feature are adventurous, ambitious, assertive, energetic, optimistic, and motivational. They become great leaders, are good at engaging with people and inspire others to follow them. They are not afraid to take risks or to play the central role in what they do.</p>
                            </center>
                        </div>
                        <div class="grow" style="background-color:#FFE8B2;">
                            <center>
                            <img style="width:40px; padding-top:20px;" src="{{  URL::to ('/img/social.png')}}"/>
                            <h3 style="padding-left:20px; padding-right:20px;">Social – Helpers</h3>
                            <p style="padding-left:20px; padding-right:20px;">This type of people is kind, generous, cooperative, patient, caring, helpful, empathetic, and friendly. They find it essential to help others and they value collaborations a lot.</p>
                            </center>
                        </div>
                        <div class="grow" style="background-color:#FFE099;">
                            <center>
                            <img style="width:40px; padding-top:20px;" src="{{  URL::to ('/img/artistic.png')}}"/>
                            <h3 style="padding-left:20px; padding-right:20px;">Artistic – Creators</h3>
                            <p style="padding-left:20px; padding-right:20px;">People of this type are creative, intuitive, sensitive, expressive, original, innovative, and spontaneous. They are eager to create something new and beautiful and leave a mark on many people’s minds with their creations.</p>
                            </center>
                        </div>
                        <div class="grow" style="background-color:#FFD97F;">
                            <center>
                            <img style="width:40px; padding-top:20px;" src="{{  URL::to ('/img/investigative.png')}}"/>
                            <h3 style="padding-left:20px; padding-right:20px;">Investigative – Thinkers</h3>
                            <p style="padding-left:20px; padding-right:20px;">This type of people is usually formed out of thinkers; intellectual, curious, systematic, rational, analytical, and logical. They want to know everything about the world around them and they ask a lot of questions, which they then love solving and investigating.</p>
                            </center>
                        </div>
                        <div class="grow" style="background-color:#FFD166;">
                            <center>
                            <img style="width:40px; padding-top:20px;" src="{{  URL::to ('/img/realistic.png')}}"/>
                            <h3 style="padding-left:20px; padding-right:20px;">Realistic – Doers</h3>
                            <p style="padding-left:20px; padding-right:20px;">People with this main characteristic are independent, stable, persistent, practical, down-to-earth, athletic, and physical. They think straight and they don't hesitate before doing something.</p>
                            </center>
                        </div>

                        <!-- <div class="grow" style="background-color:#E5F2FF;" >
                            <center>
                            <img style="width:40px; padding-top:20px;" src="{{  URL::to ('/img/conventional.png')}}"/>
                            <h3 style="padding-left:20px; padding-right:20px;">Conventional – Organizers</h3>
                            <p style="padding-left:20px; padding-right:20px;">This type of people is logical, efficient, well-organized, thorough, and detail oriented. They are careful and like to give structure to what they do. Practical tasks, quantitative measurements, and structured environments are the fields they are outstanding in.</p>
                            </center>
                        </div>
                        <div class="grow" style="background-color:#CCE5FF;">
                        
                            <center>
                            <img style="width:40px; padding-top:20px;" src="{{  URL::to ('/img/enterprising.png')}}"/>
                            <h3 style="padding-left:20px; padding-right:20px;">Enterprising – Persuaders</h3>
                            <p style="padding-left:20px; padding-right:20px;">People who present this feature are adventurous, ambitious, assertive, energetic, optimistic, and motivational. They become great leaders, are good at engaging with people and inspire others to follow them. They are not afraid to take risks or to play the central role in what they do.</p>
                            </center>
                        </div>
                        <div class="grow" style="background-color:#B2D8FF;">
                            <center>
                            <img style="width:40px; padding-top:20px;" src="{{  URL::to ('/img/social.png')}}"/>
                            <h3 style="padding-left:20px; padding-right:20px;">Social – Helpers</h3>
                            <p style="padding-left:20px; padding-right:20px;">This type of people is kind, generous, cooperative, patient, caring, helpful, empathetic, and friendly. They find it essential to help others and they value collaborations a lot.</p>
                            </center>
                        </div>
                        <div class="grow" style="background-color:#99CCFF;">
                            <center>
                            <img style="width:40px; padding-top:20px;" src="{{  URL::to ('/img/artistic.png')}}"/>
                            <h3 style="padding-left:20px; padding-right:20px;">Artistic – Creators</h3>
                            <p style="padding-left:20px; padding-right:20px;">People of this type are creative, intuitive, sensitive, expressive, original, innovative, and spontaneous. They are eager to create something new and beautiful and leave a mark on many people’s minds with their creations.</p>
                            </center>
                        </div>
                        <div class="grow" style="background-color:#7FBFFF;">
                            <center>
                            <img style="width:40px; padding-top:20px;" src="{{  URL::to ('/img/investigative.png')}}"/>
                            <h3 style="padding-left:20px; padding-right:20px;">Investigative – Thinkers</h3>
                            <p style="padding-left:20px; padding-right:20px;">This type of people is usually formed out of thinkers; intellectual, curious, systematic, rational, analytical, and logical. They want to know everything about the world around them and they ask a lot of questions, which they then love solving and investigating.</p>
                            </center>
                        </div>
                        <div class="grow" style="background-color:#66B2FF;">
                            <center>
                            <img style="width:40px; padding-top:20px;" src="{{  URL::to ('/img/realistic.png')}}"/>
                            <h3 style="padding-left:20px; padding-right:20px;">Realistic – Doers</h3>
                            <p style="padding-left:20px; padding-right:20px;">People with this main characteristic are independent, stable, persistent, practical, down-to-earth, athletic, and physical. They think straight and they don't hesitate before doing something.</p>
                            </center>
                        </div> -->
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Take A New Test</div>
                    <div class="panel-body">
                        <div class="row">
                            <a href="{{  URL::to ('/personality/test')}}">
                                <div class="col-md-12 text-center">
                                    <img src="../img/addnew.png"/>
                                    <h1>Take Personality Test</h1>
                                </div>
                            </a>

                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Your Past Tests</div>
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
                            @if(empty($data))
                                <tr><td colspan="8"><center>Take Your First Test</center></td></tr>
                            @else
                                @foreach ($data as $row)
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
    
@endsection

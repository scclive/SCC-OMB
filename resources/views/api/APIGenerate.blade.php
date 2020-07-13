@extends('layouts.app')

@section('content')


    <br>
    <br>
    <br>
    <br>
    <br>
    
    <div id="content2" class="container-fluid" style="padding-left: 30px;">
        <!-- header -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel-body">

                    <div class="row header" style="padding-left:0px; border: 6px solid orange; height:300px;">
                        <div class="row">
                            <div class="col-sm-4 text-center">
                                <img style="width:100px; padding-top:40px;" src="{{  URL::to ('/img/notebook.png')}}"/> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 text-center align-items-center" style="height:150px; vertical-align: middle;">
                                <div class="col-sm-12 text-center" style="color: #000;">
                                    <h3 style="color: #ffffff;  text-shadow: 3px 3px 3px #000000">Student Career Consultant <b style="color: #ff5e13; text-shadow: 0px 0px 0px #FF0000"> SCC</b></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- intro -->
        <div class="row">
            <div class="col-sm-12" style="padding-left: 50px; padding-right:50px;">

                    <div class="row" style="border: 6px solid white;">
                        <div class="row">
                        
                            <div class="col-1 text-center" style="height:150px; vertical-align: middle;">
                                <img style="width:100px;" src="{{  URL::to ('/img/recommend.png')}}"/> 
                            </div>

                            <!-- <center><div style="padding-left: 20px;"><div class="col-1 text-center" style=" margin: 0px auto; border-top: 2px solid black; width: 80%; height: 2px;  position:absolute;"> </div></div></center> -->

                            <div class="col-1 text-center align-items-center" style="color: #000; height:150px; vertical-align: middle;">
                                <center><h3><b style="color: #ff5e13;"> SCC</b><br><b>Assessment <br>Report</b></h3></center>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h2>{{$dataProfile}}</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <h4>
                                    Dear {{$dataProfile}}, <br><br>
                                </h4>
                                <h4 class="text-center">
                                    Congratulations in taking your first step into choosing a career that suits you best. And thank you for entrusting us for helping you make it.
                                    We hope that the following report will find you with insights that will be useful in making the best decision about your undergraduate degree and thus your future.
                                    <br>
                                    <br>
                                    The following report is comprosed of sections that will provide you with comprehensive results of your personlaity, subjects that you excels at and the probablity of you scoring an admission in subsequent institution(s).
                                    <br>
                                    <br>
                                    <br>
                                    All the best,
                                    <br>
                                    <br>
                                    Team Student Career Consultant <br><b style="color: #ff5e13;"> SCC</b>
                                    <br>
                                    <br>
                                    <br>
                                </h4>
                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                        
                    </div>
            </div>
        </div>
        
        <!-- framework -->
        <div class="row">
            <div class="col-sm-12" style="padding-left: 50px; padding-right:50px;">
                <div class="panel-body">

                    <div class="row" style="border: 6px solid white; border-top-color: #f7d881;">
                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4 text-center align-items-center">
                                <center><h1>Framework</h1></center>
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                        <div class="row text-center">
                            <div class="col-sm-3">
                                <h2>Personality<h2>
                                <h4>6 Personality Types - Who You Are</h4>
                            </div>
                            <div class="col-sm-3">
                                <h2>Past Record<h2>
                                <h4>How well did you perform in your previous academic record</h4>
                            </div>
                            <div class="col-sm-3">
                                <h2>Entry Tests<h2>
                                <h4>Did you meet the requirements for passing the exams required for undergrad schools</h4>
                            </div>
                            <div class="col-sm-3">
                                <h2>Strong Subjects<h2>
                                <h4>What are the areas where you excell at</h4>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- personality -->
        <div style="display:block;">
            <div class="row">
                <div class="col-sm-12" style="padding-left: 50px; padding-right:50px;">
                    <div class="panel-body">

                        <div class="row headerpersonality" style=" border: 6px solid orange;">
                            
                            <div class="row">
                                <div class="col-sm-8"></div>
                                <div class="col-sm-4 text-center">
                                    <img style="width:100px; padding-top:40px;" src="{{  URL::to ('/img/svg_icon/4.png')}}"/> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8"></div>
                                <div class="col-sm-4 text-center align-items-center" style="height:150px; vertical-align: middle;">
                                    <div class="col-sm-12 text-center" style="color: #000;">
                                        <h3>Personlity <br><b style="color: #ff5e13;"> 6 Personality Types</b></h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row" style="padding-left: 50px; padding-right:50px;">
                    <div class="col-sm-12">
                        <h4>Our personality is what makes us unique individuals. 
                        In this section the type of personality you own will be analyzed.
                        <br>
                        <br>
                        Our personalities are thought to be long term, stable, and not easily changed.
                        That is the reason why it's so important to know enough about your own personality
                        because the pattern of behaviors and characteristics that can help predict and explain individual's behavior.
                        </h4>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="row text-center" style="padding-left: 170px; padding-right:170px;">
                    <div class="col-2">
                        <img style="width:60px; padding-top:20px;" src="{{  URL::to ('/img/conventional.png')}}"/>
                    </div>
                    <div class="col-2">
                        <img style="width:60px; padding-top:20px;" src="{{  URL::to ('/img/enterprising.png')}}"/>
                    </div>
                    <div class="col-2">
                        <img style="width:60px; padding-top:20px;" src="{{  URL::to ('/img/social.png')}}"/>
                    </div>
                    <div class="col-2">
                        <img style="width:60px; padding-top:20px;" src="{{  URL::to ('/img/artistic.png')}}"/>
                    </div>
                    <div class="col-2">
                        <img style="width:60px; padding-top:20px;" src="{{  URL::to ('/img/investigative.png')}}"/>
                    </div>
                    <div class="col-2">
                        <img style="width:60px; padding-top:20px;" src="{{  URL::to ('/img/realistic.png')}}"/>
                    </div>
                    <br>
                    <br>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-12" style="padding-left: 50px; padding-right:50px;">
                    <div class="panel-body">

                        <div class="row" style="border: 6px solid white; border-top-color: #f7d881;">
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4 text-center align-items-center">
                                    <center><h1>Personality</h1></center>
                                </div>
                                <div class="col-sm-4"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4>
                                    According to Dr. Krishnamurthy Kavirayani personality refers to the individuals' characteristic behavioral interaction with environment. 
                                    It refers to the long-standing traits and patterns that propel individuals to consistently think, feel, and behave in specific ways. 
                                    <br>
                                    <br>
                                    Combined with your level of maturity, experience and ego strengths 
                                    (the way you deal with stress and maintain stability), personality plays a large role in the decisions you make and the process by which you make them.
                                    Comprised of hundreds of different individual qualities called traits, personality defines how you respond to others and the world around you. When a group of traits forms a cluster, a personality type results. Types are the broad, 
                                    differentiated category results that are measured by personality assessments.
                                    <br>
                                    <br>
                                    Below is the chart that maps your personaliy according to the RIASEC model which categorizes you from one
                                    or more from a total of siz personality types.
                                    <br>
                                    <br>
                                    </h4>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="padding-left: 100px; padding-right:100px;">
                <div class="col-sm-12" style="border: 6px solid white; border-top-color: #f7d881;">
                    <div class="row" >
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4 text-center align-items-center">
                            <center><h1>Your Scores</h1></center>
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center" id="container5" style="height: 400px; padding-left: 60px;">

                </div>
            </div>

            
            @foreach($dataPersonalityTop as $key => $value)
                @if($key == 'realistic')
                    <!-- realistic -->
                    <div class="row">
                        <div class="col-sm-12" style="">
                            <div class="panel-body">

                                <div class="row" style="border: 6px solid white; border-top-color: #f7d881;">
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-1" style="border: 6px solid black; border-right-color: white;">
                                            <h1>{{++$countPersonality}}</h1>
                                        </div>
                                        <div class="col-sm-11  align-items-center" style="border: 6px solid black; border-left-color: white; border-top-color: white;" >
                                            <center><h1> Leading Personality Type</h1></center>
                                        </div>
                                    </div>
                                    
                                    <br>
                                    <br>
                                    <br>
                                    <div class="row text-center">
                                        <div class="col-sm-12">
                                            <img style="height:78.3px;" src="{{  URL::to ('/img/realistic.png')}}"/>
                                        </div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-sm-12">
                                            <h1> Realistic </h1>
                                        </div>
                                    </div>

                                    <div class="row text-center">
                                        <div class="col-sm-6">
                                            <h2> Realistic Personality Type </h2>
                                            <div class="row text-center">
                                                <div class="col-sm-12">
                                                    <h4>
                                                        People with this main characteristic are independent, stable, persistent, 
                                                        practical, down-to-earth, athletic, and physical. They think straight and 
                                                        they don't hesitate before doing something.

                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h2> Key skills </h2>
                                            <div class="row text-center">
                                                <div class="col-sm-12">
                                                    <h4>
                                                        Using and operating tools, equipment and machinery, designing, building, repairing, 
                                                        maintaining, working manually, measuring, working in detail, driving, moving, caring for 
                                                        animals, working with plants
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h2>Suggested Occupations</h2>
                                            <div class="row" style="padding-left:40px;">
                                                <div class="col-sm-12">
                                                    <h4>
                                                        <li>Pilot</li> 
                                                        <li>farmer</li> 
                                                        <li>horticulturalist</li> 
                                                        <li> builder</li> 
                                                        <li> engineer</li> 
                                                        <li> armed services personnel</li> 
                                                        <li> mechanic</li> 
                                                        <li> upholsterer</li> 
                                                        <li> electrician</li> 
                                                        <li> computer technologist</li> 
                                                        <li> park ranger</li> 
                                                        <li> sportsperson</li>

                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h2>Suggested Majors</h2>
                                            <div class="row" style="padding-left:40px;">
                                                <div class="col-sm-12">
                                                    <h4>
                                                        <li>English</li> 
                                                        <li> Maths</li> 
                                                        <li> Science</li> 
                                                        <li> Workshop</li> 
                                                        <li> Technology</li> 
                                                        <li> Computing</li> 
                                                        <li> Business Studies</li> 
                                                        <li> Agriculture</li> 
                                                        <li> Horticulture</li> 
                                                        <li> Physical Education</li>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        @if(!empty($dbrealistic))
                            <div class="row text-center">
                                <div class="col-sm-12">
                                    <img style="width:55px;" src="{{  URL::to ('/img/database.png')}}"/>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-sm-12">
                                    <h1> Suggested Programs </h1>
                                </div>
                            </div>
                            <div class="table-responsive"  style="">
                                <table class="sortable table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Institute</th>
                                            <th>Program</th>
                                            <th>Dep Fee (Rs)</th>
                                            <th>Dep Addmision Deadline </th>
                                            <th>Rank </th>
                                    
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                        @foreach ($dbrealistic as $dep)
                                            <tr>
                                                <td>{{$dep->City_Name}}</td>
                                                <td>{{$dep->Dep_Name}}
                                                <td>{{$dep->Dep_fees}}</td>
                                                <td>{{$dep->Dep_AddmDeadline}}</td>
                                                <td>{{$dep->Uni_Rank}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif


                    </div>
                @endif
                @if($key == 'enterprising')
                    <!-- enterprising -->
                    <div class="row">
                        <div class="col-sm-12" style="">
                            <div class="panel-body">

                                <div class="row" style="border: 6px solid white; border-top-color: #f7d881;">
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-1" style="border: 6px solid black; border-right-color: white;">
                                            <h1>{{++$countPersonality}}</h1>
                                        </div>
                                        <div class="col-sm-11  align-items-center" style="border: 6px solid black; border-left-color: white; border-top-color: white;" >
                                            <center><h1> Leading Personality Type</h1></center>
                                        </div>
                                    </div>
                                    
                                    <br>
                                    <br>
                                    <br>
                                    <div class="row text-center">
                                        <div class="col-sm-12">
                                            <img style="height:78.3px;" src="{{  URL::to ('/img/enterprising.png')}}"/>
                                        </div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-sm-12">
                                            <h1> Enterprising </h1>
                                        </div>
                                    </div>

                                    <div class="row text-center">
                                        <div class="col-sm-6">
                                            <h2> Enterprising Personality Type </h2>
                                            <div class="row text-center">
                                                <div class="col-sm-12">
                                                    <h4>
                                                        People who present this feature are adventurous, ambitious, assertive, energetic, optimistic, 
                                                        and motivational. They become great leaders, are good at engaging with people and inspire 
                                                        others to follow them. They are not afraid to take risks or to play the central role 
                                                        in what they do.
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h2> Key skills </h2>
                                            <div class="row text-center">
                                                <div class="col-sm-12">
                                                    <h4>
                                                        Selling, promoting and persuading, developing ideas, public speaking, managing, organising, leading and captaining, computing, planning
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h2>Suggested Occupations</h2>
                                            <div class="row" style="padding-left:40px;">
                                                <div class="col-sm-12">
                                                    <h4>
                                                        <li>Salesperson</li> 
                                                        <li>lawyer</li> 
                                                        <li>politician</li> 
                                                        <li> accountant</li> 
                                                        <li> business owner</li> 
                                                        <li> executive or manager</li> 
                                                        <li> travel agent</li> 
                                                        <li> music or sports promoter</li> 

                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h2>Suggested Majors</h2>
                                            <div class="row" style="padding-left:40px;">
                                                <div class="col-sm-12">
                                                    <h4>
                                                        <li>English</li> 
                                                        <li> Maths</li> 
                                                        <li> Business Studies</li> 
                                                        <li> Accounting</li> 
                                                        <li> Economics</li> 
                                                        <li> Social Studies</li> 
                                                        <li> Drama</li> 
                                                        <li> Computing</li> 
                                                        <li> Text Information Management</li> 
                                                        <li> Languages</li>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(!empty($dbenterprising))
                            <div class="row text-center">
                                <div class="col-sm-12">
                                    <img style="width:55px;" src="{{  URL::to ('/img/database.png')}}"/>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-sm-12">
                                    <h1> Suggested Programs </h1>
                                </div>
                            </div>
                            <div class="table-responsive"  style="">
                                <table class="sortable table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Institute</th>
                                            <th>Program</th>
                                            <th>Dep Fee (Rs)</th>
                                            <th>Dep Addmision Deadline </th>
                                            <th>Rank </th>
                                    
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                        @foreach ($dbenterprising as $dep)
                                            <tr>
                                                <td>{{$dep->City_Name}}</td>
                                                <td>{{$dep->Dep_Name}}
                                                <td>{{$dep->Dep_fees}}</td>
                                                <td>{{$dep->Dep_AddmDeadline}}</td>
                                                <td>{{$dep->Uni_Rank}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                @endif
                @if($key == 'investigative')
                    <!-- investigative -->
                    <div class="row">
                        <div class="col-sm-12" style="">
                            <div class="panel-body">

                                <div class="row" style="border: 6px solid white; border-top-color: #f7d881;">
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-1" style="border: 6px solid black; border-right-color: white;">
                                            <h1>{{++$countPersonality}}</h1>
                                        </div>
                                        <div class="col-sm-11  align-items-center" style="border: 6px solid black; border-left-color: white; border-top-color: white;" >
                                            <center><h1> Leading Personality Type</h1></center>
                                        </div>
                                    </div>
                                    
                                    <br>
                                    <br>
                                    <br>
                                    <div class="row text-center">
                                        <div class="col-sm-12">
                                            <img style="height:78.3px;" src="{{  URL::to ('/img/investigative.png')}}"/>
                                        </div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-sm-12">
                                            <h1> Investigative </h1>
                                        </div>
                                    </div>

                                    <div class="row text-center">
                                        <div class="col-sm-6">
                                            <h2> Investigative Personality Type </h2>
                                            <div class="row text-center">
                                                <div class="col-sm-12">
                                                    <h4>
                                                        This type of people is usually formed out of thinkers; intellectual, curious, systematic, 
                                                        rational, analytical, and logical. They want to know everything about the world 
                                                        around them and they ask a lot of questions, which they then love solving and investigating.
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h2> Key skills </h2>
                                            <div class="row text-center">
                                                <div class="col-sm-12">
                                                    <h4>
                                                        Thinking analytically and logically, computing, communicating by writing and speaking, designing, formulating, calculating, diagnosing, experimenting, investigating
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h2>Suggested Occupations</h2>
                                            <div class="row" style="padding-left:40px;">
                                                <div class="col-sm-12">
                                                    <h4>
                                                        <li>Science</li> 
                                                        <li>research</li> 
                                                        <li>medical and health occupations</li> 
                                                        <li> chemist</li> 
                                                        <li> marine scientist</li> 
                                                        <li> forestry technician</li> 
                                                        <li> medical or agricultural laboratory technician</li> 
                                                        <li> zoologist</li> 
                                                        <li> dentist</li> 
                                                        <li> doctor</li> 

                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h2>Suggested Majors</h2>
                                            <div class="row" style="padding-left:40px;">
                                                <div class="col-sm-12">
                                                    <h4>
                                                        <li>English</li> 
                                                        <li> Maths</li> 
                                                        <li> Science</li> 
                                                        <li> Computing</li> 
                                                        <li> Technology</li>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(!empty($dbinvestigative))
                            <div class="row text-center">
                                <div class="col-sm-12">
                                    <img style="width:55px;" src="{{  URL::to ('/img/database.png')}}"/>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-sm-12">
                                    <h1> Suggested Programs </h1>
                                </div>
                            </div>
                            <div class="table-responsive"  style="">
                                <table class="sortable table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Institute</th>
                                            <th>Program</th>
                                            <th>Dep Fee (Rs)</th>
                                            <th>Dep Addmision Deadline </th>
                                            <th>Rank </th>
                                    
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                        @foreach ($dbinvestigative as $dep)
                                            <tr>
                                                <td>{{$dep->City_Name}}</td>
                                                <td>{{$dep->Dep_Name}}
                                                <td>{{$dep->Dep_fees}}</td>
                                                <td>{{$dep->Dep_AddmDeadline}}</td>
                                                <td>{{$dep->Uni_Rank}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                @endif
                @if($key == 'artistic')
                    <!-- artistic -->
                    <div class="row">
                        <div class="col-sm-12" style="">
                            <div class="panel-body">

                                <div class="row" style="border: 6px solid white; border-top-color: #f7d881;">
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-1" style="border: 6px solid black; border-right-color: white;">
                                            <h1>{{++$countPersonality}}</h1>
                                        </div>
                                        <div class="col-sm-11  align-items-center" style="border: 6px solid black; border-left-color: white; border-top-color: white;" >
                                            <center><h1> Leading Personality Type</h1></center>
                                        </div>
                                    </div>
                                    
                                    <br>
                                    <br>
                                    <br>
                                    <div class="row text-center">
                                        <div class="col-sm-12">
                                            <img style="height:78.3px;" src="{{  URL::to ('/img/artistic.png')}}"/>
                                        </div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-sm-12">
                                            <h1> Artistic </h1>
                                        </div>
                                    </div>

                                    <div class="row text-center">
                                        <div class="col-sm-6">
                                            <h2> Artistic Personality Type </h2>
                                            <div class="row text-center">
                                                <div class="col-sm-12">
                                                    <h4>
                                                        People of this type are creative, intuitive, sensitive, expressive, 
                                                        original, innovative, and spontaneous. They are eager to 
                                                        create something new and beautiful and leave a mark on many 
                                                        people’s minds with their creations.
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h2> Key skills </h2>
                                            <div class="row text-center">
                                                <div class="col-sm-12">
                                                    <h4>
                                                        Expressing artistically or physically, speaking, writing, singing, performing, 
                                                        designing, presenting, planning, composing, playing, dancing
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h2>Suggested Occupations</h2>
                                            <div class="row" style="padding-left:40px;">
                                                <div class="col-sm-12">
                                                    <h4>
                                                        <li>Artist</li> 
                                                        <li>illustrator</li> 
                                                        <li>photographer</li> 
                                                        <li> signwriter</li> 
                                                        <li> composer</li> 
                                                        <li> singer</li> 
                                                        <li> instrument player</li> 
                                                        <li> dancer</li> 
                                                        <li> actor</li> 
                                                        <li> reporter</li> 
                                                        <li> writer</li> 
                                                        <li> editor</li> 
                                                        <li> advertiser</li> 
                                                        <li> hairdresser</li> 
                                                        <li> fashion designer</li> 

                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h2>Suggested Majors</h2>
                                            <div class="row" style="padding-left:40px;">
                                                <div class="col-sm-12">
                                                    <h4>
                                                        <li>English</li> 
                                                        <li> Social Studies</li> 
                                                        <li> Music</li> 
                                                        <li> Drama</li> 
                                                        <li> Art</li>
                                                        <li> Graphic Design</li>
                                                        <li> Computing</li>
                                                        <li> ABusiness Studiesrt</li>
                                                        <li> Languages</li>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(!empty($dbartistic))
                            <div class="row text-center">
                                <div class="col-sm-12">
                                    <img style="width:55px;" src="{{  URL::to ('/img/database.png')}}"/>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-sm-12">
                                    <h1> Suggested Programs </h1>
                                </div>
                            </div>
                            <div class="table-responsive"  style="">
                                <table class="sortable table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Institute</th>
                                            <th>Program</th>
                                            <th>Dep Fee (Rs)</th>
                                            <th>Dep Addmision Deadline </th>
                                            <th>Rank </th>
                                    
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                        @foreach ($dbartistic as $dep)
                                            <tr>
                                                <td>{{$dep->City_Name}}</td>
                                                <td>{{$dep->Dep_Name}}
                                                <td>{{$dep->Dep_fees}}</td>
                                                <td>{{$dep->Dep_AddmDeadline}}</td>
                                                <td>{{$dep->Uni_Rank}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                @endif
                @if($key == 'social')
                    <!-- social -->
                    <div class="row">
                        <div class="col-sm-12" style="">
                            <div class="panel-body">

                                <div class="row" style="border: 6px solid white; border-top-color: #f7d881;">
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-1" style="border: 6px solid black; border-right-color: white;">
                                            <h1>{{++$countPersonality}}</h1>
                                        </div>
                                        <div class="col-sm-11  align-items-center" style="border: 6px solid black; border-left-color: white; border-top-color: white;" >
                                            <center><h1> Leading Personality Type</h1></center>
                                        </div>
                                    </div>
                                    
                                    <br>
                                    <br>
                                    <br>
                                    <div class="row text-center">
                                        <div class="col-sm-12">
                                            <img style="height:78.3px;" src="{{  URL::to ('/img/social.png')}}"/>
                                        </div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-sm-12">
                                            <h1> Social </h1>
                                        </div>
                                    </div>

                                    <div class="row text-center">
                                        <div class="col-sm-6">
                                            <h2> Social Personality Type </h2>
                                            <div class="row text-center">
                                                <div class="col-sm-12">
                                                    <h4>
                                                        This type of people is kind, generous, cooperative, patient, caring, helpful, 
                                                        empathetic, and friendly. They find it essential to help others and they 
                                                        value collaborations a lot.
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h2> Key skills </h2>
                                            <div class="row text-center">
                                                <div class="col-sm-12">
                                                    <h4>
                                                        Communicating orally or in writing, caring and supporting, training, meeting, 
                                                        greeting, assisting, teaching, informing, interviewing, coaching
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h2>Suggested Occupations</h2>
                                            <div class="row" style="padding-left:40px;">
                                                <div class="col-sm-12">
                                                    <h4>
                                                        <li>Teacher</li> 
                                                        <li>nurse</li> 
                                                        <li>nurse aide</li> 
                                                        <li> counsellor</li> 
                                                        <li> police officer</li> 
                                                        <li> social worker</li> 
                                                        <li> salesperson</li> 
                                                        <li> customer service officer</li> 
                                                        <li> waiter</li> 
                                                        <li> secretary</li> 

                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h2>Suggested Majors</h2>
                                            <div class="row" style="padding-left:40px;">
                                                <div class="col-sm-12">
                                                    <h4>
                                                        <li>English</li> 
                                                        <li> Social Studies</li> 
                                                        <li> Maths</li> 
                                                        <li> Science</li> 
                                                        <li> Health</li>
                                                        <li> Physical Education</li>
                                                        <li> Art</li>
                                                        <li> Computing</li>
                                                        <li> Business Studies</li>
                                                        <li> Languages</li>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(!empty($dbsocial))
                            <div class="row text-center">
                                <div class="col-sm-12">
                                    <img style="width:55px;" src="{{  URL::to ('/img/database.png')}}"/>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-sm-12">
                                    <h1> Suggested Programs </h1>
                                </div>
                            </div>
                            <div class="table-responsive"  style="">
                                <table class="sortable table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Institute</th>
                                            <th>Program</th>
                                            <th>Dep Fee (Rs)</th>
                                            <th>Dep Addmision Deadline </th>
                                            <th>Rank </th>
                                    
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                        @foreach ($dbsocial as $dep)
                                            <tr>
                                                <td>{{$dep->City_Name}}</td>
                                                <td>{{$dep->Dep_Name}}
                                                <td>{{$dep->Dep_fees}}</td>
                                                <td>{{$dep->Dep_AddmDeadline}}</td>
                                                <td>{{$dep->Uni_Rank}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                @endif
                @if($key == 'conventional')
                    <!-- conventional -->
                    <div class="row">
                        <div class="col-sm-12" style="">
                            <div class="panel-body">

                                <div class="row" style="border: 6px solid white; border-top-color: #f7d881;">
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-1" style="border: 6px solid black; border-right-color: white;">
                                            <h1>{{++$countPersonality}}</h1>
                                        </div>
                                        <div class="col-sm-11  align-items-center" style="border: 6px solid black; border-left-color: white; border-top-color: white;" >
                                            <center><h1> Leading Personality Type</h1></center>
                                        </div>
                                    </div>
                                    
                                    <br>
                                    <br>
                                    <br>
                                    <div class="row text-center">
                                        <div class="col-sm-12">
                                            <img style="height:78.3px;" src="{{  URL::to ('/img/conventional.png')}}"/>
                                        </div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-sm-12">
                                            <h1> Conventional </h1>
                                        </div>
                                    </div>

                                    <div class="row text-center">
                                        <div class="col-sm-6">
                                            <h2> Conventional Personality Type </h2>
                                            <div class="row text-center">
                                                <div class="col-sm-12">
                                                    <h4>
                                                        This type of people is logical, efficient, well-organized, thorough, and detail oriented. 
                                                        They are careful and like to give structure to what they do. Practical tasks, 
                                                        quantitative measurements, and structured environments are the fields they are outstanding in.
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h2> Key skills </h2>
                                            <div class="row text-center">
                                                <div class="col-sm-12">
                                                    <h4>
                                                        Computing and keyboarding, recording and keeping records, paying attention to detail, meeting and greeting, doing calculations, handling money, organising, arranging, working independently
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h2>Suggested Occupations</h2>
                                            <div class="row" style="padding-left:40px;">
                                                <div class="col-sm-12">
                                                    <h4>
                                                        <li>Secretary</li> 
                                                        <li>receptionist</li> 
                                                        <li>office worker</li> 
                                                        <li> librarian</li> 
                                                        <li> bank clerk</li> 
                                                        <li> computer operator</li> 
                                                        <li> stores and dispatch clerk</li> 

                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h2>Suggested Majors</h2>
                                            <div class="row" style="padding-left:40px;">
                                                <div class="col-sm-12">
                                                    <h4>
                                                        <li>English</li> 
                                                        <li> Maths</li> 
                                                        <li> Business Studies</li> 
                                                        <li> Accounting</li> 
                                                        <li> Economics</li> 
                                                        <li> Computing</li>
                                                        <li> Text Information Management</li>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(!empty($dbconventional))
                            <div class="row text-center">
                                <div class="col-sm-12">
                                    <img style="width:55px;" src="{{  URL::to ('/img/database.png')}}"/>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-sm-12">
                                    <h1> Suggested Programs </h1>
                                </div>
                            </div>
                            <div class="table-responsive"  style="">
                                <table class="sortable table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Institute</th>
                                            <th>Program</th>
                                            <th>Dep Fee (Rs)</th>
                                            <th>Dep Addmision Deadline </th>
                                            <th>Rank </th>
                                    
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                        @foreach ($dbconventional as $dep)
                                            <tr>
                                                <td>{{$dep->City_Name}}</td>
                                                <td>{{$dep->Dep_Name}}
                                                <td>{{$dep->Dep_fees}}</td>
                                                <td>{{$dep->Dep_AddmDeadline}}</td>
                                                <td>{{$dep->Uni_Rank}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                @endif
            @endforeach
            
        </div>

        <!-- past record -->
        <div style="display:block;">
            <div class="row">
                <div class="col-sm-12" style="padding-left: 50px; padding-right:50px;">
                    <div class="panel-body">

                        <div class="row headerpastrecord" style="border: 6px solid orange;">
                            
                            <div class="row">
                                <div class="col-sm-4 text-center">
                                    <img style="width:100px; padding-top:40px;" src="{{  URL::to ('/img/academics.png')}}"/> 
                                </div>
                                <div class="col-sm-8"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 text-center align-items-center" style="height:150px; vertical-align: middle;">
                                    <div class="col-sm-12 text-center" style="color: #000;">
                                        <h3>Past Performance <br><b style="color: #ff5e13;"> SSC & HSSC Records</b></h3>
                                    </div>
                                </div>
                                <div class="col-sm-8"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row" style="padding-left: 100px; padding-right:100px;">
                    <div class="col-sm-12">
                        <h4>Your past performances tell something about your interest and as well as the areas your
                        are most inclined to. 
                        Up untill Undergraduate studies you have 12 years worth of education and that is something to 
                        keep in mind while you decide your next course of action that will last most likely for years.

                        <br>
                        <br>
                        On top of that the most important record are the 10<sup>th</sup> and 12<sup>th</sup> certifications of your education.
                        The field you chose and the subjects you performed well in can determine what you'll most likely to take your next step in.

                        </h4>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="row text-center" style="padding-left: 100px; padding-right:100px;">
                    <div class="col-sm-2">
                    </div>
                    <div class="col-sm-4">
                        <img style="width:60px; padding-top:20px;" src="{{  URL::to ('/img/campus.png')}}"/>
                        <h2>SSC</h2>
                    </div>
                    <div class="col-sm-4">
                        <img style="width:60px; padding-top:20px;" src="{{  URL::to ('/img/campusTwo.png')}}"/>
                        <h2>HSSC</h2>
                    </div>
                    <div class="col-sm-2">
                    </div>
                    <br>
                    <br>
                </div>
                <div class="row" style="padding-left: 100px; padding-right:100px;">
                    <div class="col-sm-12">
                        <h4>
                            Below is displayed your past 10 and 12 years performance repectively and the breakdown of subjects you performed best.
                        </h4>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center" id="container1" style="height: 400px;">

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12" style="padding-left: 100px; padding-right:100px;">
                        <div class="panel-body">

                            <div class="row" style="border: 6px solid white; border-top-color: #f7d881;">
                                <div class="row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4 text-center align-items-center">
                                        <img style="width:60px; padding-top:20px;" src="{{  URL::to ('/img/icons8-circled-menu-64Unfilled.png')}}"/>
                                    </div>
                                    <div class="col-sm-4"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3  text-center">
                                        <h1>SSC<h1>
                                        <h2>{{$dataSSCType}}</h2>
                                    </div>
                                    <div class="col-sm-3  text-center">
                                        <h1>Track<h1>
                                        <h2>{{$dataSSCTrack}}</h2>
                                    </div>
                                    <div class="col-sm-3  text-center">
                                        <h1>%<h1>
                                        <h2>{{$dataSSCTotal}}</h2>
                                        </div>
                                    <div class="col-sm-3">
                                        <h3>Top Three</h3>
                                        @foreach($dataSSCTop as $key => $value)
                                            <li>{{$key}} ({{$value}}%)</li>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                        </div>
                    </div>
                    @if(!empty($dbssc))
                        <div class="row text-center">
                            <div class="col-sm-12">
                                <img style="width:55px;" src="{{  URL::to ('/img/database.png')}}"/>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-sm-12">
                                <h1> Suggested Programs </h1>
                            </div>
                        </div>
                        <div class="table-responsive"  style="">
                            <table class="sortable table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Institute</th>
                                        <th>Program</th>
                                        <th>Dep Fee (Rs)</th>
                                        <th>Dep Addmision Deadline </th>
                                        <th>Rank </th>
                                
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    @foreach ($dbssc as $dep)
                                        <tr>
                                            <td>{{$dep->City_Name}}</td>
                                            <td>{{$dep->Dep_Name}}
                                            <td>{{$dep->Dep_fees}}</td>
                                            <td>{{$dep->Dep_AddmDeadline}}</td>
                                            <td>{{$dep->Uni_Rank}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>

                <div class="row">
                    <div class="col-sm-12" style="padding-left: 100px; padding-right:100px;">
                        <div class="panel-body">
                            <div class="row" style="border: 6px solid white; border-top-color: #f7d881;">
                                <div class="col-sm-12"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-sm-12 text-center" id="container2" style="height: 400px; padding-left: 100px; padding-right:100px;">
                    
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12" style="padding-left: 100px; padding-right:100px;">
                        <div class="panel-body">

                            <div class="row" style="border: 6px solid white; border-top-color: #f7d881;">
                                <div class="row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4 text-center align-items-center">
                                        <img style="width:60px; padding-top:20px;" src="{{  URL::to ('/img/icons8-circled-menu-64Unfilled.png')}}"/>
                                    </div>
                                    <div class="col-sm-4"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3  text-center">
                                        <h1>HSSC<h1>
                                        <h2>{{$dataHSSCType}}</h2>
                                    </div>
                                    <div class="col-sm-3  text-center">
                                        <h1>Track<h1>
                                        <h2>{{$dataHSSCTrack}}</h2>
                                    </div>
                                    <div class="col-sm-3  text-center">
                                        <h1>%<h1>
                                        <h2>{{$dataHSSCTotal}}</h2>
                                        </div>
                                    <div class="col-sm-3">
                                        <h3>Top Three</h3>
                                        @foreach($dataHSSCTop as $key => $value)
                                            <li>{{$key}} ({{$value}}%)</li>
                                        @endforeach
                                    </div>
                                </div>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                    @if(!empty($dbhssc))
                            <div class="row text-center">
                                <div class="col-sm-12">
                                    <img style="width:55px;" src="{{  URL::to ('/img/database.png')}}"/>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-sm-12">
                                    <h1> Suggested Programs </h1>
                                </div>
                            </div>
                            <div class="table-responsive"  style="">
                                <table class="sortable table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Institute</th>
                                            <th>Program</th>
                                            <th>Dep Fee (Rs)</th>
                                            <th>Dep Addmision Deadline </th>
                                            <th>Rank </th>
                                    
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                        @foreach ($dbhssc as $dep)
                                            <tr>
                                                <td>{{$dep->City_Name}}</td>
                                                <td>{{$dep->Dep_Name}}
                                                <td>{{$dep->Dep_fees}}</td>
                                                <td>{{$dep->Dep_AddmDeadline}}</td>
                                                <td>{{$dep->Uni_Rank}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                </div>

            </div>
        </div>

        <!-- entry test -->
        <div style="display:block;">
            <div class="row">
                <div class="col-sm-12" style="padding-left: 50px; padding-right:50px;">
                    <div class="panel-body">

                        <div class="row headerentrytest" style=" border: 6px solid orange;">
                            
                            <div class="row">
                                <div class="col-sm-8"></div>
                                <div class="col-sm-4 text-center">
                                    <img style="width:100px; padding-top:40px;" src="{{  URL::to ('/img/svg_icon/3.png')}}"/> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8"></div>
                                <div class="col-sm-4 text-center align-items-center" style="height:150px; vertical-align: middle;">
                                    <div class="col-sm-12 text-center" style="color: #000;">
                                        <h3>Entry Tests <br><b style="color: #ff5e13;">Required Admission Exams</b></h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row" style="padding-left: 100px; padding-right:100px;">
                    <div class="col-sm-12">
                        <h4>
                            Most admission requires you to pass a certain exams which tests your minimum abilities 
                            that assess you wheather you are up the mark to enter into the institution's environement, 
                            potential and calibre.
                        <br>
                        <br>
                            One of the most common admission exams is the National Testing System's or NTS's National Assessment Test
                            or NAT<sup>TM</sup>. These are categorized into sections and types that let you assess your knowledge in the domain you have taken.

                        </h4>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12" style="padding-left: 100px; padding-right:100px;">
                        <div class="panel-body">
                            <div class="row" style="border: 6px solid white; border-top-color: #f7d881;">
                                <div class="col-sm-12"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center" style="padding-left: 100px; padding-right:100px;">
                    <div class="col-sm-12">
                        <h2>
                            Below is displayed your last NAT taken and its scores' breakdown.
                        </h2>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center" id="container3" style="height: 400px; padding-left: 50px; padding-right:50px;">

                    </div>
                </div>
                <br>
                @if(!empty($dbselection))
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <img style="width:55px;" src="{{  URL::to ('/img/database.png')}}"/>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <h1> Suggested Institution(s) </h1>
                        </div>
                    </div>
                    <div class="table-responsive"  style="">
                        <table class="sortable table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Institute</th>
                                    <th>Dep Fee (Rs)</th>
                                    <th>Dep Addmision Deadline </th>
                                    <th>Rank </th>
                            
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                @foreach ($dbselection as $dep)
                                    <tr>
                                        <td>{{$dep->City_Name}}</td>
                                        <td>~ {{$dep->Dep_fees}}</td>
                                        <td>{{$dep->Dep_AddmDeadline}}</td>
                                        <td>{{$dep->Uni_Rank}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif

            </div>
        </div>

        <!-- strong subjects -->
        <div style="display:block;">
            <div class="row">
                <div class="col-sm-12" style="padding-left: 50px; padding-right:50px;">
                    <div class="panel-body">

                        <div class="row headerstrongsubjects" style=" border: 6px solid orange;">
                            
                            <div class="row">
                                <div class="col-sm-4 text-center">
                                    <img style="width:100px; padding-top:40px;" src="{{  URL::to ('/img/svg_icon/2.png')}}"/> 
                                </div>
                                <div class="col-sm-8"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 text-center align-items-center" style="height:150px; vertical-align: middle;">
                                    <div class="col-sm-12 text-center" style="color: #000;">
                                        <h3>Strong Subjects <br><b style="color: #ff5e13;">Areas Where You Excell</b></h3>
                                    </div>
                                </div>
                                <div class="col-sm-8"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row" style="padding-left: 100px; padding-right:100px;">
                    <div class="col-sm-12">
                        <h4>
                            This section will examine your tests on various tests in specific subjects. The assessment helps put down
                            your strong subjects. The three minimum required subjects include Verbal, Analytical and Quantitative along with 
                            other subjects you took.
                        <br>
                        <br>
                            The subsequent sections of this report will give the details of these tests, their  results and the possible career choices and institutions.                    
                        </h4>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12" style="padding-left: 100px; padding-right:100px;">
                        <div class="panel-body">
                            <div class="row" style="border: 6px solid white; border-top-color: #f7d881;">
                                <div class="col-sm-12"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center" style="padding-left: 100px; padding-right:100px;">
                    <div class="col-sm-12">
                        <h2>
                            Below is displayed your subject tests taken and its scores' breakdown.
                        </h2>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center" id="container4" style="height: 400px;">

                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-sm-12" style="padding-left: 100px; padding-right:100px;">
                        <div class="panel-body">

                            <div class="row" style="border: 6px solid white; border-top-color: #f7d881;">
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-sm-1" style="border: 6px solid black;">
                                        <h1>1</h1>
                                    </div>
                                    <div class="col-sm-10  align-items-center" style="border: 6px solid black; border-left-color: white;" >
                                        <center><h1>Verbal Reasoning</h1></center>
                                    </div>
                                </div>
                                
                                <br>
                                <br>
                                <br>
                                <div class="row text-center">
                                    <div class="col-sm-12">
                                        <img style="height:78.3px;" src="{{  URL::to ('/img/english.png')}}"/>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <h2 class="text-center"> Verbal Reasoning </h2>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="row text-center">
                                                Verbal reasoning is a test designed to assess English comprehension. 
                                                It may include making deductions from text, word meanings and more, but the 
                                                most common format is a passage of text with multiple-choice questions below.
                                                </h4>
                                                <h4>
                                                <br>
                                                <br>
                                                Verbal tests evaluate your ability to:
                                                <br>
                                                <br>
                                                <li>Spell words correctly</li>
                                                <li>Use accurate grammar</li>
                                                <li>Understand analogies</li>
                                                <li>Analyse detailed written information</li>

                                                </h4>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-8 text-center">
                                        <h2> Your Score </h2>
                                        <div class="row">
                                            <div class="col-sm-12 text-center" id="container6" style="height: 400px;">

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6  text-center">
                                        <h2>Score Description</h2>
                                        <div class="row" style="padding-left:40px;">
                                            <div class="col-sm-12">

                                                <table class="table table-bordered">
                                                    <thead>
                                                        <h4>
                                                            <tr >
                                                                <th scope="col">Low:</th>
                                                                <td>0-34</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col"> Medium:</th>
                                                                <td>35-69</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col">High:</th>
                                                                <td>70-100</td>
                                                            </tr>
                                                        </h4>
                                                    </thead>
                                                </table>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <h2 class="text-center" >Suggested Careers</h2>
                                        <div class="row" style="padding-left:70px;">
                                            <div class="col-sm-12">
                                                <h4>
                                                    <li>Judges</li> 
                                                    <li> Celebrity agents</li> 
                                                    <li> Mediators</li> 
                                                    <li> Account collectors</li> 
                                                    <li> Financial managers</li> 
                                                    <li> Brokerage clerks</li> 
                                                    <li> Social workers</li> 
                                                    <li> Concierges</li> 
                                                    <li> HR managers</li> 
                                                    <li> Actors</li>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12" style="padding-left: 100px; padding-right:100px;">
                        <div class="panel-body">

                            <div class="row" style="border: 6px solid white; border-top-color: #f7d881;">
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-sm-1" style="border: 6px solid black;">
                                        <h1>2</h1>
                                    </div>
                                    <div class="col-sm-10  align-items-center" style="border: 6px solid black; border-left-color: white;" >
                                        <center><h1>Quantitative Reasoning</h1></center>
                                    </div>
                                </div>
                                
                                <br>
                                <br>
                                <br>
                                <div class="row text-center">
                                    <div class="col-sm-12">
                                        <img style="height:78.3px;" src="{{  URL::to ('/img/quantitative.png')}}"/>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <h2 class="text-center"> Quantitative Reasoning </h2>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="row text-center">
                                                    The ability to think quantitatively clearly plays a central role in undergraduate education. 
                                                    Quantitative Reasoning requires students to think critically and apply basic mathematics and statistics skills to interpret 
                                                    data, draw conclusions, and solve problems within a disciplinary or interdisciplinary context
                                                </h4>
                                                <h4>
                                                <br>
                                                <br>
                                                    Quantitative Reasoning can be found in areas such as health, economics, politics, science, engineering, social science, and even the arts. 
                                                <br>
                                                <br>
                                                

                                                </h4>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-8 text-center">
                                        <h2> Your Score </h2>
                                        <div class="row">
                                            <div class="col-sm-12 text-center" id="container7" style="height: 400px;">

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6  text-center">
                                        <h2>Score Description</h2>
                                        <div class="row" style="padding-left:40px;">
                                            <div class="col-sm-12">

                                                <table class="table table-bordered">
                                                    <thead>
                                                        <h4>
                                                            <tr>
                                                                <th scope="col">Low:</th>
                                                                <td>0-34</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col"> Medium:</th>
                                                                <td>35-69</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col">High:</th>
                                                                <td>70-100</td>
                                                            </tr>
                                                        </h4>
                                                    </thead>
                                                </table>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <h2 class="text-center" >Suggested Careers</h2>
                                        <div class="row" style="padding-left:70px;">
                                            <div class="col-sm-12">
                                                <h4>
                                                    <li>accountant</li> 
                                                    <li> actuary</li> 
                                                    <li> programmer</li> 
                                                    <li> engineer</li> 
                                                    <li> doctor</li> 
                                                    <li> lawyer</li> 
                                                    <li> statistician</li> 
                                                    <li> banking</li> 
                                                    <li> mathematician</li> 
                                                    <li> systems analyst</li> 
                                                    <li>space/aircraft industry</li> 
                                                    <li> numerical analyst</li>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12" style="padding-left: 100px; padding-right:100px;">
                        <div class="panel-body">

                            <div class="row" style="border: 6px solid white; border-top-color: #f7d881;">
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-sm-1" style="border: 6px solid black;">
                                        <h1>3</h1>
                                    </div>
                                    <div class="col-sm-10 align-items-center" style="border: 6px solid black; border-left-color: white;" >
                                        <center><h1>Analytical Reasoning</h1></center>
                                    </div>
                                </div>
                                
                                <br>
                                <br>
                                <br>
                                <div class="row text-center">
                                    <div class="col-sm-12">
                                        <img style="height:78.3px;" src="{{  URL::to ('/img/analytical.png')}}"/>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <h2 class="text-center"> Analytical Reasoning </h2>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="row text-center">
                                                    Analytical reasoning tests assess a candidate’s ability to study information and apply 
                                                    logic to find patterns or make inferences. 
                                                    People use analysis to scrutinise speech, documents, diagrams, charts and graphs, and gather 
                                                    the most relevant information. Those with strong analytical skills will consider how key 
                                                    elements within that information relate to one another, and are more likely to notice crucial 
                                                    patterns and details.
                                                </h4>
                                                <h4>
                                                <br>
                                                <br>
                                                    <h3 class="row text-center">Recruiters use analytical reasoning tests to evaluate inductive and deductive skills in potential employees.</h3>
                                                <br>
                                                <br>
                                                <li>Deductive reasoning is the process of reaching a logical conclusion based on one or more given statements, or premises.</li>
                                                <li>Inductive reasoning involves taking specific information and making predictions based on that.</li>

                                                </h4>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-8 text-center">
                                        <h2> Your Score </h2>
                                        <div class="row">
                                            <div class="col-sm-12 text-center" id="container8" style="height: 400px;">

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6  text-center">
                                        <h2>Score Description</h2>
                                        <div class="row" style="padding-left:40px;">
                                            <div class="col-sm-12">

                                                <table class="table table-bordered">
                                                    <thead>
                                                        <h4>
                                                            <tr>
                                                                <th scope="col">Low:</th>
                                                                <td>0-34</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col"> Medium:</th>
                                                                <td>35-69</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col">High:</th>
                                                                <td>70-100</td>
                                                            </tr>
                                                        </h4>
                                                    </thead>
                                                </table>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <h2 class="text-center" >Suggested Careers</h2>
                                        <div class="row" style="padding-left:70px;">
                                            <div class="col-sm-12">
                                                <h4>
                                                    <li>Business Analyst</li> 
                                                    <li> Accountant</li> 
                                                    <li> Criminologist</li> 
                                                    <li> Manager</li> 
                                                    <li> Data Analyst</li> 
                                                    <li> Statistician</li> 
                                                    <li> Marketing Analyst</li> 
                                                    <li> Legal  Secretary</li> 
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12" style="padding-left: 100px; padding-right:100px;">
                        <div class="panel-body">
                            <div class="row" style="border: 6px solid white; border-top-color: #f7d881;">
                            </div>
                        </div>
                    </div>
                </div>

                @if(!empty($dbdiagnostic))
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <img style="width:55px;" src="{{  URL::to ('/img/database.png')}}"/>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <h1> Suggested Institution(s) </h1>
                        </div>
                    </div>
                    <div class="table-responsive"  style="">
                        <table class="sortable table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Institute</th>
                                    <th>Program</th>
                                    <th>Dep Fee (Rs)</th>
                                    <th>Dep Addmision Deadline </th>
                                    <th>Rank </th>
                            
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                @foreach ($dbdiagnostic as $dep)
                                    <tr>
                                        <td>{{$dep->City_Name}}</td>
                                        <td>{{$dep->Dep_Name}}</td>
                                        <td>~ {{$dep->Dep_fees}}</td>
                                        <td>{{$dep->Dep_AddmDeadline}}</td>
                                        <td>{{$dep->Uni_Rank}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif

                

            </div>
        </div>

        <!-- footer -->
        <div class="row">
            <br>
            <div class="col-sm-12">
                <div class="panel-body">

                    <div class="row footer" style=" border: 6px solid orange; border-top: 6px solid orange; height:200px;">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <img style="width:85px; padding-top:45px;" src="{{  URL::to ('/img/recommend.png')}}"/> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <img style="width:85px; padding-top:40px;" src="{{  URL::to ('/img/notebook.png')}}"/> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center align-items-center" style="height:150px; vertical-align: middle;">
                                <div class="col-sm-12 text-center" style="color: #000;">
                                    <h4>Student Career Consultant <br><b style="color: #ff5e13;"> SCC</b> © 2020</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        
        </div>
    </div>

@stop

@section('javascript')
    
@endsection
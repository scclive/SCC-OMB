@extends('layouts.app')

@section('content')
    <center><img src="{{URL::to ('/img/campus.png')}}"/></center>
    <h3 align="center"><img style="width: 30px;" src="{{URL::to ('/img/icons8-circled-menu-64Unfilled.png')}}"/> | A-Levels</h3><br />
    <h4 align="center">Complete Your Transcript </h4><br />

    
    {!! Form::open(['method' => 'POST', 'url' => ['/academics/hssc/alevels/store']]) !!}
    <div id="main" class="panel panel-default">
        <h3 class="page-title">Add/Remove Subjects</h3>
        
        
            <div class="row">
                <div class="col-xs-12 form-group">

                    @if(!empty($data))
                        <select id="subjects" class="form-control ">
                            <option value="none">Select Subjects</option>
                            <option value="accounting">Accounting</option>
                            <option value="aICT">AICT</option>
                            <option value="art">Art</option>
                            <option value="biology">Biology</option>
                            <option value="businessStudies">Business Studies</option>
                            <option value="chemistry">Chemistry</option>
                            <option value="computerScience">Computer Science</option>
                            <option value="economics">Economics</option>
                            <option value="englishLanguage">English Language</option>
                            <option value="englishLiterature">English Literature</option>
                            <option value="environmentalManagement">Environmental Management</option>
                            <option value="globalPerspectives">Global Perspectives</option>
                            <option value="governmentPolitics">Government Politics</option>
                            <option value="history">History</option>
                            <option value="law">Law</option>
                            <option value="mathematics">Mathematics</option>
                            <option value="mathematicsFurther">Mathematics Further</option>
                            <option value="mediaStudies">Media Studies</option>
                            <option value="physics">Physics</option>
                            <option value="psychology">Psychology</option>
                            <option value="sociology">Sociology</option>
                            <option value="urdu">urdu</option>
                        </select>
                        <br>

                        @if($data[0]->accounting != 'null')
                            <script>$("#subjects option[value=accounting]").hide();</script>
                            <div style="display:block;" id="accounting">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="accounting" class="control-label">Accounting</label>
                                <input class="form-control " placeholder="" name="accounting" type="text" id="accounting" value="{{$data[0]->accounting}}">
                                <br>
                            </div>
                        @else
                            <div style="display:none;" id="accounting">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="accounting" class="control-label">Accounting</label>
                                <input class="form-control " placeholder="" name="accounting" type="text" id="accounting" value="null">
                                <br>
                            </div>
                        @endif



                        @if($data[0]->aICT != 'null')
                            <script>$("#subjects option[value=aICT]").hide();</script>
                            <div style="display:block;" id="aICT">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="aICT" class="control-label">AICT</label>
                                <input class="form-control " placeholder="" name="aICT" type="text" id="aICT" value="{{$data[0]->aICT}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="aICT">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="aICT" class="control-label">AICT</label>
                                <input class="form-control " placeholder="" name="aICT" type="text" id="aICT" value="null">
                                <br>
                            </div>
                        @endif


                        @if($data[0]->art != 'null')
                            <script>$("#subjects option[value=art]").hide();</script>
                            <div style="display:block;" id="art">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="art" class="control-label">Art</label>
                                <input class="form-control " placeholder="" name="art" type="text" id="art" value="{{$data[0]->art}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="art">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="art" class="control-label">Art</label>
                                <input class="form-control " placeholder="" name="art" type="text" id="art" value="null">
                                <br>
                            </div>
                        @endif


                        @if($data[0]->biology != 'null')
                            <script>$("#subjects option[value=biology]").hide();</script>
                            <div style="display:block;" id="biology">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="biology" class="control-label">Biology</label>
                                <input class="form-control " placeholder="" name="biology" type="text" id="biology" value="{{$data[0]->biology}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="biology">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="biology" class="control-label">Biology</label>
                                <input class="form-control " placeholder="" name="biology" type="text" id="biology" value="null">
                                <br>
                            </div>
                        @endif

                        @if($data[0]->businessStudies != 'null')
                            <script>$("#subjects option[value=businessStudies]").hide();</script>
                            <div style="display:block;" id="businessStudies">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="businessStudies" class="control-label">Business Studies</label>
                                <input class="form-control " placeholder="" name="businessStudies" type="text" id="businessStudies" value="{{$data[0]->businessStudies}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="businessStudies">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="businessStudies" class="control-label">Business Studies</label>
                                <input class="form-control " placeholder="" name="businessStudies" type="text" id="businessStudies" value="null">
                                <br>
                            </div>
                        @endif

                        @if($data[0]->chemistry != 'null')
                            <script>$("#subjects option[value=chemistry]").hide();</script>
                            <div style="display:block;" id="chemistry">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="chemistry" class="control-label">Chemistry</label>
                                <input class="form-control " placeholder="" name="chemistry" type="text" id="chemistry" value="{{$data[0]->chemistry}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="chemistry">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="chemistry" class="control-label">Chemistry</label>
                                <input class="form-control " placeholder="" name="chemistry" type="text" id="chemistry" value="null">
                                <br>
                            </div>
                        @endif

                        @if($data[0]->computerScience != 'null')
                            <script>$("#subjects option[value=computerScience]").hide();</script>
                            <div style="display:block;" id="computerScience">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="computerScience" class="control-label">Computer Science</label>
                                <input class="form-control " placeholder="" name="computerScience" type="text" id="computerScience" value="{{$data[0]->computerScience}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="computerScience">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="computerScience" class="control-label">Computer Science</label>
                                <input class="form-control " placeholder="" name="computerScience" type="text" id="computerScience" value="null">
                                <br>
                            </div>
                        @endif

                        @if($data[0]->economics != 'null')
                            <script>$("#subjects option[value=economics]").hide();</script>
                            <div style="display:block;" id="economics">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="economics" class="control-label">Economics</label>
                                <input class="form-control " placeholder="" name="economics" type="text" id="economics" value="{{$data[0]->economics}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="economics">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="economics" class="control-label">Economics</label>
                                <input class="form-control " placeholder="" name="economics" type="text" id="economics" value="null">
                                <br>
                            </div>
                        @endif

                        @if($data[0]->englishLanguage != 'null')
                            <script>$("#subjects option[value=englishLanguage]").hide();</script>
                            <div style="display:block;" id="englishLanguage">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="englishLanguage" class="control-label">English Language</label>
                                <input class="form-control " placeholder="" name="englishLanguage" type="text" id="englishLanguage" value="{{$data[0]->englishLanguage}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="englishLanguage">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="englishLanguage" class="control-label">English Language</label>
                                <input class="form-control " placeholder="" name="englishLanguage" type="text" id="englishLanguage" value="null">
                                <br>
                            </div>
                        @endif

                        @if($data[0]->englishLiterature != 'null')
                            <script>$("#subjects option[value=englishLiterature]").hide();</script>
                            <div style="display:block;" id="englishLiterature">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="englishLiterature" class="control-label">English Literature</label>
                                <input class="form-control " placeholder="" name="englishLiterature" type="text" id="englishLiterature" value="{{$data[0]->englishLiterature}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="englishLiterature">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="englishLiterature" class="control-label">English Literature</label>
                                <input class="form-control " placeholder="" name="englishLiterature" type="text" id="englishLiterature" value="null">
                                <br>
                            </div>
                        @endif

                        @if($data[0]->environmentalManagement != 'null')
                            <script>$("#subjects option[value=environmentalManagement]").hide();</script>
                            <div style="display:block;" id="environmentalManagement">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="environmentalManagement" class="control-label">Environmental Management</label>
                                <input class="form-control " placeholder="" name="environmentalManagement" type="text" id="environmentalManagement" value="{{$data[0]->environmentalManagement}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="environmentalManagement">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="environmentalManagement" class="control-label">Environmental Management</label>
                                <input class="form-control " placeholder="" name="environmentalManagement" type="text" id="environmentalManagement" value="null">
                                <br>
                            </div>
                        @endif

                        @if($data[0]->globalPerspectives != 'null')
                            <script>$("#subjects option[value=globalPerspectives]").hide();</script>
                            <div style="display:block;" id="globalPerspectives">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="globalPerspectives" class="control-label">Global Perspectives</label>
                                <input class="form-control " placeholder="" name="globalPerspectives" type="text" id="globalPerspectives" value="{{$data[0]->globalPerspectives}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="globalPerspectives">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="globalPerspectives" class="control-label">Global Perspectives</label>
                                <input class="form-control " placeholder="" name="globalPerspectives" type="text" id="globalPerspectives" value="null">
                                <br>
                            </div>
                        @endif

                        @if($data[0]->governmentPolitics != 'null')
                            <script>$("#subjects option[value=governmentPolitics]").hide();</script>
                            <div style="display:block;" id="governmentPolitics">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="governmentPolitics" class="control-label">Government Politics</label>
                                <input class="form-control " placeholder="" name="governmentPolitics" type="text" id="governmentPolitics" value="{{$data[0]->governmentPolitics}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="governmentPolitics">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="governmentPolitics" class="control-label">Government Politics</label>
                                <input class="form-control " placeholder="" name="governmentPolitics" type="text" id="governmentPolitics" value="null">
                                <br>
                            </div>
                        @endif

                        @if($data[0]->history != 'null')
                            <script>$("#subjects option[value=history]").hide();</script>
                            <div style="display:block;" id="history">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="history" class="control-label">History</label>
                                <input class="form-control " placeholder="" name="history" type="text" id="history" value="{{$data[0]->history}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="history">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="history" class="control-label">History</label>
                                <input class="form-control " placeholder="" name="history" type="text" id="history" value="null">
                                <br>
                            </div>
                        @endif

                        @if($data[0]->law != 'null')
                            <script>$("#subjects option[value=law]").hide();</script>
                            <div style="display:block;" id="law">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="law" class="control-label">Law</label>
                                <input class="form-control " placeholder="" name="law" type="text" id="law" value="{{$data[0]->law}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="law">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="law" class="control-label">Law</label>
                                <input class="form-control " placeholder="" name="law" type="text" id="law" value="null">
                                <br>
                            </div>
                        @endif

                        @if($data[0]->mathematics != 'null')
                            <script>$("#subjects option[value=mathematics]").hide();</script>
                            <div style="display:block;" id="mathematics">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="mathematics" class="control-label">Mathematics</label>
                                <input class="form-control " placeholder="" name="mathematics" type="text" id="mathematics" value="{{$data[0]->mathematics}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="mathematics">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="mathematics" class="control-label">Mathematics</label>
                                <input class="form-control " placeholder="" name="mathematics" type="text" id="mathematics" value="null">
                                <br>
                            </div>
                        @endif

                        @if($data[0]->mathematicsFurther != 'null')
                            <script>$("#subjects option[value=mathematicsFurther]").hide();</script>
                            <div style="display:block;" id="mathematicsFurther">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="mathematicsFurther" class="control-label">Mathematics Further</label>
                                <input class="form-control " placeholder="" name="mathematicsFurther" type="text" id="mathematicsFurther" value="{{$data[0]->mathematicsFurther}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="mathematicsFurther">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="mathematicsFurther" class="control-label">Mathematics Further</label>
                                <input class="form-control " placeholder="" name="mathematicsFurther" type="text" id="mathematicsFurther" value="null">
                                <br>
                            </div>
                        @endif

                        @if($data[0]->mediaStudies != 'null')
                            <script>$("#subjects option[value=mediaStudies]").hide();</script>
                            <div style="display:block;" id="mediaStudies">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="mediaStudies" class="control-label">Media Studies</label>
                                <input class="form-control " placeholder="" name="mediaStudies" type="text" id="mediaStudies" value="{{$data[0]->mediaStudies}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="mediaStudies">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="mediaStudies" class="control-label">Media Studies</label>
                                <input class="form-control " placeholder="" name="mediaStudies" type="text" id="mediaStudies" value="null">
                                <br>
                            </div>
                        @endif

                        @if($data[0]->physics != 'null')
                            <script>$("#subjects option[value=physics]").hide();</script>
                            <div style="display:block;" id="physics">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="physics" class="control-label">Physics</label>
                                <input class="form-control " placeholder="" name="physics" type="text" id="physics" value="{{$data[0]->physics}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="physics">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="physics" class="control-label">Physics</label>
                                <input class="form-control " placeholder="" name="physics" type="text" id="physics" value="null">
                                <br>
                            </div>
                        @endif

                        @if($data[0]->psychology != 'null')
                            <script>$("#subjects option[value=psychology]").hide();</script>
                            <div style="display:block;" id="psychology">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="psychology" class="control-label">Psychology</label>
                                <input class="form-control " placeholder="" name="psychology" type="text" id="psychology" value="{{$data[0]->psychology}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="psychology">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="psychology" class="control-label">Psychology</label>
                                <input class="form-control " placeholder="" name="psychology" type="text" id="psychology" value="null">
                                <br>
                            </div>
                        @endif

                        @if($data[0]->sociology != 'null')
                            <script>$("#subjects option[value=sociology]").hide();</script>
                            <div style="display:block;" id="sociology">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="sociology" class="control-label">Sociology</label>
                                <input class="form-control " placeholder="" name="sociology" type="text" id="sociology" value="{{$data[0]->sociology}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="sociology">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="sociology" class="control-label">Sociology</label>
                                <input class="form-control " placeholder="" name="sociology" type="text" id="sociology" value="null">
                                <br>
                            </div>
                        @endif

                        @if($data[0]->urdu != 'null')
                            <script>$("#subjects option[value=urdu]").hide();</script>
                            <div style="display:block;" id="urdu">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="urdu" class="control-label">Urdu</label>
                                <input class="form-control " placeholder="" name="urdu" type="text" id="urdu" value="{{$data[0]->urdu}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="urdu">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="urdu" class="control-label">Urdu</label>
                                <input class="form-control " placeholder="" name="urdu" type="text" id="urdu" value="null">
                                <br>
                            </div>
                        @endif

                    @else
                        <select id="subjects" class="form-control ">
                            <option value="none">Select Subjects</option>
                            <option value="accounting">Accounting</option>
                            <option value="aICT">AICT</option>
                            <option value="art">Art</option>
                            <option value="biology">Biology</option>
                            <option value="businessStudies">Business Studies</option>
                            <option value="chemistry">Chemistry</option>
                            <option value="computerScience">Computer Science</option>
                            <option value="economics">Economics</option>
                            <option value="englishLanguage">English Language</option>
                            <option value="englishLiterature">English Literature</option>
                            <option value="environmentalManagement">Environmental Management</option>
                            <option value="globalPerspectives">Global Perspectives</option>
                            <option value="governmentPolitics">Government Politics</option>
                            <option value="history">History</option>
                            <option value="law">Law</option>
                            <option value="mathematics">Mathematics</option>
                            <option value="mathematicsFurther">Mathematics Further</option>
                            <option value="mediaStudies">Media Studies</option>
                            <option value="physics">Physics</option>
                            <option value="psychology">Psychology</option>
                            <option value="sociology">Sociology</option>
                            <option value="urdu">urdu</option>
                        </select>
                        <br>

                        <div style="display:none;" id="accounting">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="accounting" class="control-label">Accounting</label>
                            <input class="form-control " placeholder="" name="accounting" type="text" id="accounting" value="null">
                            <br>
                        </div>
                        
                        <div style="display:none;" id="aICT">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="aICT" class="control-label">AICT</label>
                            <input class="form-control " placeholder="" name="aICT" type="text" id="aICT" value="null">
                            <br>
                        </div>
                        
                        <div style="display:none;" id="art">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="art" class="control-label">Art</label>
                            <input class="form-control " placeholder="" name="art" type="text" id="art" value="null">
                            <br>
                        </div>
                        
                        <div style="display:none;" id="biology">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="biology" class="control-label">Biology</label>
                            <input class="form-control " placeholder="" name="biology" type="text" id="biology" value="null">
                            <br>
                        </div>
                        
                        <div style="display:none;" id="businessStudies">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="businessStudies" class="control-label">Business Studies</label>
                            <input class="form-control " placeholder="" name="businessStudies" type="text" id="businessStudies" value="null">
                            <br>
                        </div>
                        
                        <div style="display:none;" id="chemistry">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="chemistry" class="control-label">Chemistry</label>
                            <input class="form-control " placeholder="" name="chemistry" type="text" id="chemistry" value="null">
                            <br>
                        </div>
                        
                        <div style="display:none;" id="computerScience">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="computerScience" class="control-label">Computer Science</label>
                            <input class="form-control " placeholder="" name="computerScience" type="text" id="computerScience" value="null">
                            <br>
                        </div>
                        
                        <div style="display:none;" id="economics">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="economics" class="control-label">Economics</label>
                            <input class="form-control " placeholder="" name="economics" type="text" id="economics" value="null">
                            <br>
                        </div>
                        
                        <div style="display:none;" id="englishLanguage">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="englishLanguage" class="control-label">English Language</label>
                            <input class="form-control " placeholder="" name="englishLanguage" type="text" id="englishLanguage" value="null">
                            <br>
                        </div>
                        
                        <div style="display:none;" id="englishLiterature">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="englishLiterature" class="control-label">English Literature</label>
                            <input class="form-control " placeholder="" name="englishLiterature" type="text" id="englishLiterature" value="null">
                            <br>
                        </div>
                        
                        <div style="display:none;" id="environmentalManagement">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="environmentalManagement" class="control-label">Environmental Management</label>
                            <input class="form-control " placeholder="" name="environmentalManagement" type="text" id="environmentalManagement" value="null">
                            <br>
                        </div>
                        
                        <div style="display:none;" id="globalPerspectives">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="globalPerspectives" class="control-label">Global Perspectives</label>
                            <input class="form-control " placeholder="" name="globalPerspectives" type="text" id="globalPerspectives" value="null">
                            <br>
                        </div>
                        
                        <div style="display:none;" id="governmentPolitics">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="governmentPolitics" class="control-label">Government Politics</label>
                            <input class="form-control " placeholder="" name="governmentPolitics" type="text" id="governmentPolitics" value="null">
                            <br>
                        </div>
                        
                        <div style="display:none;" id="history">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="history" class="control-label">History</label>
                            <input class="form-control " placeholder="" name="history" type="text" id="history" value="null">
                            <br>
                        </div>
                        
                        <div style="display:none;" id="law">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="law" class="control-label">Law</label>
                            <input class="form-control " placeholder="" name="law" type="text" id="law" value="null">
                            <br>
                        </div>
                        
                        <div style="display:none;" id="mathematics">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="mathematics" class="control-label">Mathematics</label>
                            <input class="form-control " placeholder="" name="mathematics" type="text" id="mathematics" value="null">
                            <br>
                        </div>
                        
                        <div style="display:none;" id="mathematicsFurther">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="mathematicsFurther" class="control-label">MathematicsFurther</label>
                            <input class="form-control " placeholder="" name="mathematicsFurther" type="text" id="mathematicsFurther" value="null">
                            <br>
                        </div>
                        
                        <div style="display:none;" id="mediaStudies">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="mediaStudies" class="control-label">Media Studies</label>
                            <input class="form-control " placeholder="" name="mediaStudies" type="text" id="mediaStudies" value="null">
                            <br>
                        </div>
                        
                        <div style="display:none;" id="physics">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="physics" class="control-label">Physics</label>
                            <input class="form-control " placeholder="" name="physics" type="text" id="physics" value="null">
                            <br>
                        </div>
                        
                        <div style="display:none;" id="psychology">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="psychology" class="control-label">Psychology</label>
                            <input class="form-control " placeholder="" name="psychology" type="text" id="psychology" value="null">
                            <br>
                        </div>
                        
                        <div style="display:none;" id="sociology">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="sociology" class="control-label">Sociology</label>
                            <input class="form-control " placeholder="" name="sociology" type="text" id="sociology" value="null">
                            <br>
                        </div>
                        
                        <div style="display:none;" id="urdu">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="urdu" class="control-label">Urdu</label>
                            <input class="form-control " placeholder="" name="urdu" type="text" id="urdu" value="null">
                            <br>
                        </div>
                        
                        
            


                    @endif
                
                </div>
            </div>
            <label for="track" class="control-label" style="display:none;">Track</label>
            <input class="form-control " placeholder="" name="track" type="text" id="option2" value="" style="display:none;">

    </div>

    {!! Form::submit(trans('quickadmin.save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop


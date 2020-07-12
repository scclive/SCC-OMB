@extends('layouts.app')

@section('content')
    <center><img src="{{URL::to ('/img/campus.png')}}"/></center>
    <h3 align="center"><img style="width: 30px;" src="{{URL::to ('/img/icons8-circled-menu-64Unfilled.png')}}"/> | O-Levels</h3><br />
    <h4 align="center">Complete Your Transcript </h4><br />

    
    {!! Form::open(['method' => 'POST', 'url' => ['/academics/ssc/olevels/store']]) !!}
    <div id="main" class="panel panel-default">
        <h3 class="page-title">Add/Remove Subjects</h3>
        
        
            <div class="row">
                <div class="col-xs-12 form-group">

                    @if(!empty($data))
                        <select id="subjects" class="form-control ">
                            <option value="none">Select Subjects</option>
                            <option value="art">Art</option>
                            <option value="biology">Biology</option>
                            <option value="businessStudies">Business Studies</option>
                            <option value="chemistry">Chemistry</option>
                            <option value="computerStudies">Computer Studies</option>
                            <option value="economics">Economics</option>
                            <option value="englishLanguage">English Language</option>
                            <option value="islamiyat">Islamiyat</option>
                            <option value="mathematicsAdditional">Mathematics Additional</option>
                            <option value="mathematicsD">Mathematic sD</option>
                            <option value="pakistanStudies">Pakistan Studies</option>
                            <option value="religiousStudies">Religious Studies</option>
                            <option value="sociology">Sociology</option>
                            <option value="urduFirstLanguage">Urdu First Language</option>
                            <option value="urduSecondLanguage">Urdu Second Language</option>
                        </select>
                        <br>

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
                                <label for="businessStudies" class="control-label">Business Studie</label>
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



                        @if($data[0]->computerStudies != 'null')
                            <script>$("#subjects option[value=computerStudies]").hide();</script>
                            <div style="display:block;" id="computerStudies">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="computerStudies" class="control-label">Computer Studies</label>
                                <input class="form-control " placeholder="" name="computerStudies" type="text" id="computerStudies" value="{{$data[0]->computerStudies}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="computerStudies">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="computerStudies" class="control-label">Computer Studies</label>
                                <input class="form-control " placeholder="" name="computerStudies" type="text" id="computerStudies" value="null">
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



                        @if($data[0]->islamiyat != 'null')
                            <script>$("#subjects option[value=islamiyat]").hide();</script>
                            <div style="display:block;" id="islamiyat">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="islamiyat" class="control-label">Islamiyat</label>
                                <input class="form-control " placeholder="" name="islamiyat" type="text" id="islamiyat" value="{{$data[0]->islamiyat}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="islamiyat">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="islamiyat" class="control-label">Islamiyat</label>
                                <input class="form-control " placeholder="" name="islamiyat" type="text" id="islamiyat" value="null">
                                <br>
                            </div>
                        @endif



                        @if($data[0]->mathematicsAdditional != 'null')
                            <script>$("#subjects option[value=mathematicsAdditional]").hide();</script>
                            <div style="display:block;" id="mathematicsAdditional">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="mathematicsAdditional" class="control-label">Mathematics Additional</label>
                                <input class="form-control " placeholder="" name="mathematicsAdditional" type="text" id="mathematicsAdditional" value="{{$data[0]->mathematicsAdditional}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="mathematicsAdditional">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="mathematicsAdditional" class="control-label">Mathematics Additional</label>
                                <input class="form-control " placeholder="" name="mathematicsAdditional" type="text" id="mathematicsAdditional" value="null">
                                <br>
                            </div>
                        @endif



                        @if($data[0]->mathematicsD != 'null')
                            <script>$("#subjects option[value=mathematicsD]").hide();</script>
                            <div style="display:block;" id="mathematicsD">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="mathematicsD" class="control-label">Mathematics D</label>
                                <input class="form-control " placeholder="" name="mathematicsD" type="text" id="mathematicsD" value="{{$data[0]->mathematicsD}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="mathematicsD">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="mathematicsD" class="control-label">Mathematics D</label>
                                <input class="form-control " placeholder="" name="mathematicsD" type="text" id="mathematicsD" value="null">
                                <br>
                            </div>
                        @endif



                        @if($data[0]->pakistanStudies != 'null')
                            <script>$("#subjects option[value=pakistanStudies]").hide();</script>
                            <div style="display:block;" id="pakistanStudies">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="pakistanStudies" class="control-label">Pakistan Studies</label>
                                <input class="form-control " placeholder="" name="pakistanStudies" type="text" id="pakistanStudies" value="{{$data[0]->pakistanStudies}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="pakistanStudies">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="pakistanStudies" class="control-label">Pakistan Studies</label>
                                <input class="form-control " placeholder="" name="pakistanStudies" type="text" id="pakistanStudies" value="null">
                                <br>
                            </div>
                        @endif



                        @if($data[0]->religiousStudies != 'null')
                            <script>$("#subjects option[value=religiousStudies]").hide();</script>
                            <div style="display:block;" id="religiousStudies">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="religiousStudies" class="control-label">Religious Studies</label>
                                <input class="form-control " placeholder="" name="religiousStudies" type="text" id="religiousStudies" value="{{$data[0]->religiousStudies}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="religiousStudies">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="religiousStudies" class="control-label">Religious Studies</label>
                                <input class="form-control " placeholder="" name="religiousStudies" type="text" id="religiousStudies" value="null">
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



                        @if($data[0]->urduFirstLanguage != 'null')
                            <script>$("#subjects option[value=urduFirstLanguage]").hide();</script>
                            <div style="display:block;" id="urduFirstLanguage">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="urduFirstLanguage" class="control-label">Urdu First Language</label>
                                <input class="form-control " placeholder="" name="urduFirstLanguage" type="text" id="urduFirstLanguage" value="{{$data[0]->urduFirstLanguage}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="urduFirstLanguage">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="urduFirstLanguage" class="control-label">Urdu First Language</label>
                                <input class="form-control " placeholder="" name="urduFirstLanguage" type="text" id="urduFirstLanguage" value="null">
                                <br>
                            </div>
                        @endif



                        @if($data[0]->urduSecondLanguage != 'null')
                            <script>$("#subjects option[value=urduSecondLanguage]").hide();</script>
                            <div style="display:block;" id="urduSecondLanguage">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="urduSecondLanguage" class="control-label">Urdu Second Language</label>
                                <input class="form-control " placeholder="" name="urduSecondLanguage" type="text" id="urduSecondLanguage" value="{{$data[0]->urduSecondLanguage}}">
                                <br>
                            </div>
                        @else
                            
                            <div style="display:none;" id="urduSecondLanguage">
                                <span class="btn btn-danger x" style="float:right;">X</span>
                                <label for="urduSecondLanguage" class="control-label">Urdu Second Language</label>
                                <input class="form-control " placeholder="" name="urduSecondLanguage" type="text" id="urduSecondLanguage" value="null">
                                <br>
                            </div>
                        @endif


                        

                    @else
                    <select id="subjects" class="form-control ">
                            <option value="none">Select Subjects</option>
                            <option value="art">Art</option>
                            <option value="biology">Biology</option>
                            <option value="businessStudies">Business Studies</option>
                            <option value="chemistry">Chemistry</option>
                            <option value="computerStudies">Computer Studies</option>
                            <option value="economics">Economics</option>
                            <option value="englishLanguage">English Language</option>
                            <option value="islamiyat">Islamiyat</option>
                            <option value="mathematicsAdditional">Mathematics Additional</option>
                            <option value="mathematicsD">Mathematic sD</option>
                            <option value="pakistanStudies">Pakistan Studies</option>
                            <option value="religiousStudies">Religious Studies</option>
                            <option value="sociology">Sociology</option>
                            <option value="urduFirstLanguage">Urdu First Language</option>
                            <option value="urduSecondLanguage">Urdu Second Language</option>
                        </select>
                        <br>

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

                        <div style="display:none;" id="computerStudies">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="computerStudies" class="control-label">Computer Studies</label>
                            <input class="form-control " placeholder="" name="computerStudies" type="text" id="computerStudies" value="null">
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

                        <div style="display:none;" id="islamiyat">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="islamiyat" class="control-label">Islamiyat</label>
                            <input class="form-control " placeholder="" name="islamiyat" type="text" id="islamiyat" value="null">
                            <br>
                        </div>

                        <div style="display:none;" id="mathematicsAdditional">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="mathematicsAdditional" class="control-label">Mathematics Additional</label>
                            <input class="form-control " placeholder="" name="mathematicsAdditional" type="text" id="mathematicsAdditional" value="null">
                            <br>
                        </div>

                        <div style="display:none;" id="mathematicsD">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="mathematicsD" class="control-label">Mathematics D</label>
                            <input class="form-control " placeholder="" name="mathematicsD" type="text" id="mathematicsD" value="null">
                            <br>
                        </div>

                        <div style="display:none;" id="pakistanStudies">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="pakistanStudies" class="control-label">Pakistan Studies</label>
                            <input class="form-control " placeholder="" name="pakistanStudies" type="text" id="pakistanStudies" value="null">
                            <br>
                        </div>

                        <div style="display:none;" id="religiousStudies">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="religiousStudies" class="control-label">Religious Studies</label>
                            <input class="form-control " placeholder="" name="religiousStudies" type="text" id="religiousStudies" value="null">
                            <br>
                        </div>

                        <div style="display:none;" id="sociology">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="sociology" class="control-label">Sociology</label>
                            <input class="form-control " placeholder="" name="sociology" type="text" id="sociology" value="null">
                            <br>
                        </div>

                        <div style="display:none;" id="urduFirstLanguage">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="urduFirstLanguage" class="control-label">Urdu First Language</label>
                            <input class="form-control " placeholder="" name="urduFirstLanguage" type="text" id="urduFirstLanguage" value="null">
                            <br>
                        </div>

                        <div style="display:none;" id="urduSecondLanguage">
                            <span class="btn btn-danger x" style="float:right;">X</span>
                            <label for="urduSecondLanguage" class="control-label">Urdu Second Language</label>
                            <input class="form-control " placeholder="" name="urduSecondLanguage" type="text" id="urduSecondLanguage" value="null">
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


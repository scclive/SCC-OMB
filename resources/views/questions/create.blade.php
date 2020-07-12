@extends('layouts.app')

@section('content')
    

    <div id="mySidebar" class="sidebar">
        <a  class="closebtn closeNav">×</a>
        <button  style="margin-left:5px;" class="btn btn-success showunread" type="button">Show Unread</button>
        <button  class="btn btn-success showread" type="button">Show Read</button>
        <button  class="btn btn-success showprocessed" type="button">Show Processed</button>
        <button  class="btn btn-success showall" type="button">All</button>
        
    </div>
    <div id="mySidebar2" class="sidebar">
        <a  class="closebtn closeNav2">×</a>
        <div id="success" class="row">

        </div>
        
    </div>
 
    
    <div id="main" class="panel panel-default">
        <h3 class="page-title">@lang('quickadmin.questions.title')</h3>
        {!! Form::open(['method' => 'POST', 'route' => ['questions.store']]) !!}
        <div class="row" >
            <div class="col-xs-12 form-group">
                <div id="rowimage" class="openbtn openNav" style="background-color: #ffa98a;">☰ Open Image View</div>
            </div>
        </div>
        <div class="panel-heading">
            @lang('quickadmin.create')
        </div>
        
        <div class="panel-body">
            
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('topic_id', 'Topic*', ['class' => 'control-label']) !!}
                    {!! Form::select('topic_id', $topics, old('topic_id'), ['class' => 'form-control', 'onchange' => 'scheduleA.call(this, event)']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('topic_id'))
                        <p class="help-block">
                            {{ $errors->first('topic_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row personality_ref" style="Display:none;">
                <div class="col-xs-12 form-group">
                    <label for="personality_ref" class="control-label">Personality Reference*</label>
                    <select class="form-control" id="personality_ref" name="personality_ref">
                        <option value="N/A" selected="selected">Please select</option>
                        <option value="conventional">Conventional</option>
                        <option value="enterprising">Enterprising</option>
                        <option value="social">Social</option>
                        <option value="artistic ">Artistic </option>
                        <option value="investigative">Investigative</option>
                        <option value="realistic">Realistic</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('question_text', 'Question text*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('question_text', old('question_text'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>


                    
                    Special Characters
                    <div class="panel-body">
                        <div class="row">
                            <div class="col btn btn-primary" style="margin-left:5px; width:40px;">
                                <div class="sample" 
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += 'x<sup>n</sup>'" >
                                    x<sup>n</sup>
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '<font>&#223;</font>'" >
                                    <font>&#223;</font>
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&frac12;'" >
                                    &frac12;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '<font>&#216;</font>'" >
                                    <font>&#216;</font>
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&deg;'" >
                                    &deg;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '<font>&micro;</font>'" >
                                    <font>&micro;</font>
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&plusmn;'" >
                                    &plusmn;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&infin;'" >
                                    &infin;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '<font>&#195;</font>'" >
                                    <font>&#195;</font>
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&pound;'" >
                                    &pound;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&yen;'" >
                                    &yen;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&lambda;'" >
                                    &lambda;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&phi;'" >
                                    &phi;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&larr;'" >
                                    &larr;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&rarr;'" >
                                    &rarr;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&harr;'" >
                                    &harr;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&lArr;'" >
                                    &lArr;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&rArr;'" >
                                    &rArr;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&hArr;'" >
                                    &hArr;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&forall;'" >
                                    &forall;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&exist;'" >
                                    &exist;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&isin;'" >
                                    &isin;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&notin;'" >
                                    &notin;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&prod;'" >
                                    &prod;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&sum;'" >
                                    &sum;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&radic;'" >
                                    &radic;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&prop;'" >
                                    &prop;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&cap;'" >
                                    &cap;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&cup;'" >
                                    &cup;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&int;'" >
                                    &int;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&ne;'" >
                                    &ne;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&le;'" >
                                    &le;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&ge;'" >
                                    &ge;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&sub;'" >
                                    &sub;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&sup;'" >
                                    &sup;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&nsub;'" >
                                    &nsub;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&sube;'" >
                                    &sube;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&supe;'" >
                                    &supe;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&oplus;'" >
                                    &oplus;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&otimes;'" >
                                    &otimes;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&fnof;'" >
                                    &fnof;
                                </div>
                            </div>
                            <div class="col btn btn-primary" style="width:40px;">
                                <div class="sample"
                                    type="button" 
                                    onclick="document.getElementById('question_text').value += '&Delta;'" >
                                    &Delta;
                                </div>
                            </div>
                        </div>
                    </div>

                    @if($errors->has('question_text'))
                        <p class="help-block">
                            {{ $errors->first('question_text') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row" >
                <div class="col-xs-12 form-group">
                    <div id="rowimage2" class="openbtn openNav2" style="background-color: #ffa98a;">ADD IMAGE</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group ">
                    <div class="questiondiv">
                    </div>
                    <div id="btn">
                        <input type='button' id="crop" value='CROP'>
                    </div>
                    <div>
                        <img src="#" id="cropped_img" style="display: none;">
                    </div>
                    <div >
                        <input id="remove" type='button' id="crop"  class="btn btn-danger" value='REMOVE'>
                    </div>
                </div>
            </div>

            

            <div class="row imagemetadata" style="display:none;">
                <div class="col-xs-12 form-group">
                    {!! Form::label('iamge_metadata', 'Image Metadata', ['class' => 'control-label']) !!}
                    {!! Form::text('OCR_id', old('OCR_id'), ['class' => 'form-control OCR_id', 'placeholder' => 'ID']) !!}
                    {!! Form::text('x', old('x'), ['class' => 'form-control x', 'placeholder' => 'x', ]) !!}
                    {!! Form::text('y', old('y'), ['class' => 'form-control y', 'placeholder' => 'y']) !!}
                    {!! Form::text('w', old('w'), ['class' => 'form-control w', 'placeholder' => 'w']) !!}
                    {!! Form::text('h', old('h'), ['class' => 'form-control h', 'placeholder' => 'h']) !!}
                    {!! Form::text('url', old('url'), ['class' => 'form-control URL', 'placeholder' => 'URL']) !!}
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('option1', 'Option #1', ['class' => 'control-label']) !!}
                    {!! Form::text('option1', old('option1'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('option1'))
                        <p class="help-block">
                            {{ $errors->first('option1') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('option2', 'Option #2', ['class' => 'control-label']) !!}
                    {!! Form::text('option2', old('option2'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('option2'))
                        <p class="help-block">
                            {{ $errors->first('option2') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('option3', 'Option #3', ['class' => 'control-label']) !!}
                    {!! Form::text('option3', old('option3'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('option3'))
                        <p class="help-block">
                            {{ $errors->first('option3') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('option4', 'Option #4', ['class' => 'control-label']) !!}
                    {!! Form::text('option4', old('option4'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('option4'))
                        <p class="help-block">
                            {{ $errors->first('option4') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('option5', 'Option #5', ['class' => 'control-label']) !!}
                    {!! Form::text('option5', old('option5'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('option5'))
                        <p class="help-block">
                            {{ $errors->first('option5') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row optionsDiv">
                <div class="col-xs-12 form-group">
                    {!! Form::label('correct', 'Correct', ['class' => 'control-label']) !!}
                    {!! Form::select('correct', $correct_options, old('correct'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('correct'))
                        <p class="help-block">
                            {{ $errors->first('correct') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row codeDiv">
                <div class="col-xs-12 form-group">
                    {!! Form::label('code_snippet', 'Code snippet', ['class' => 'control-label']) !!}
                    {!! Form::textarea('code_snippet', old('code_snippet'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('code_snippet'))
                        <p class="help-block">
                            {{ $errors->first('code_snippet') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row answerDiv">
                <div class="col-xs-12 form-group">
                    {!! Form::label('answer_explanation', 'Answer explanation*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('answer_explanation', old('answer_explanation'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('answer_explanation'))
                        <p class="help-block">
                            {{ $errors->first('answer_explanation') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row infoDiv">
                <div class="col-xs-12 form-group">
                    {!! Form::label('more_info_link', 'More info link', ['class' => 'control-label']) !!}
                    {!! Form::text('more_info_link', old('more_info_link'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('more_info_link'))
                        <p class="help-block">
                            {{ $errors->first('more_info_link') }}
                        </p>
                    @endif
                </div>
            </div>
            

        </div>
    </div>

    {!! Form::submit(trans('quickadmin.save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop


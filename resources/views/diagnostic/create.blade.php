@extends('layouts.app')

@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        
        {!! Form::open(['method' => 'POST', 'url' => ['/report']]) !!}
            <div class="modal-content">
                <div class="modal-header">
                    <h1>we try to fix issue as soon as possible </h1>
                </div>
                <div class="form-group responsible ">
                    <p class="QidModal"></p>
                    <label for="message-text" class="col-form-label">Select option:</label>
                    <select id="ddselect">
                        <option value="" selected disable>--select option--</option>
                            <option value="Question not understandable">Question not understandable</option>
                            <option value=" Irrelevant Question"> Irrelevant Question</option>
                            <option value="Missing Option">Missing Option</option>
                            <option value="Options Not understandable">Options Not understandable</option>
                    </select>
                    </br>
                    </br>
                    <!-- <label for="message-text" class="col-form-label">Selected Option</label> -->
                    <!-- <input type="text" value="" id="rMessage" id="txtresults" name="rMessage"> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <div class="btn btn-warning">Submit</div>
                </div>
            </div>
        {!! Form::close() !!}
        </div>
    </div>

     <!-- Success -->
     <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #62bf7b; ">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Question Reported!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-lite" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> 






    <center><h3 class="page-title">New Diagnostic Test</h3></center>
    <div style="position: sticky; top: 50px; float:right;">Time Remaining: <span id="time"><b>55:00</b></span> minutes!</div>

    {!! Form::open(['method' => 'POST', 'url' => ['/diagnostic/store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Answer These {{$questionCount}} Questions; Subject: <b>{{$subject}}</b>
        </div>
        <?php //dd($questions) ?>
    @if(count($questions) > 0)
        <div class="panel-body">
        <?php $i = 1; ?>
        @foreach($questions as $question)
            @if ($i > 1) <hr /> @endif
            <div class="row">
                <div class="col-xs-12 form-group">
                    <div class="form-group questiondiv">
                        <strong>Question {{ $i }}.<br />{!! nl2br($question->question_text) !!}</strong>

                        @if ($question->question_image != '')
                            <div class="question_image"><img style="width:auto; height: auto;" src="{{  URL::to ('/images/crop')}}/{!! $question->question_image !!}"/></div>
                        @endif
                        @if ($question->code_snippet != '')
                            <div class="code_snippet">{!! $question->code_snippet !!}</div>
                        @endif

                        <input
                            type="hidden"
                            name="questions[{{ $i }}]"
                            value="{{ $question->id }}">

                            <div>
                                <p class="Qid" style="display:none;">{{ $question->id }}</p>
                                <button type="button" class="btn btn-primary report" data-toggle="modal" data-target="#exampleModal" >Report</button>
                            
                            </div>
                        @foreach($question->options as $option)
                            <br>
                            <label class="radio-inline">
                                <input
                                    type="radio"
                                    name="answers[{{ $question->id }}]"
                                    value="{{ $option->id }}">
                                {{ $option->option }}
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>
        <?php $i++; ?>
        @endforeach
        </div>
    @endif
        <div style="display: none;">
            <label for="option1" class="control-label">Subject</label>
            <input class="form-control " placeholder="" name="option1" type="text" id="option1" value="{{$subject}}" readonly>
            <label for="option2" class="control-label">Questions</label>
            <input class="form-control " placeholder="" name="option2" type="text" id="option2" value="{{$questionCount}}" readonly>
        </div>
    </div>

   

    <div class="btn btn-danger">SUBMIT</div>
    {!! Form::submit(trans('quickadmin.submit_quiz'), ['class' => 'btn hiddensubmit' ]) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent
    <script src="{{ url('quickadmin/js') }}/timepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
    <script>
        $('.datetime').datetimepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}",
            timeFormat: "hh:mm:ss"
        });
    </script>
     <script >
            var displayselect = '';
            var $Qid = 0;
            var thisreport;
            $("#ddselect").change(function(){
                displayselect=$("#ddselect option:selected").text();
                $("#txtresults").val(displayselect);
            })

            $(".report").click(function(){
                thisreport = $(this);
                Qid = $(this).closest('div').find('.Qid').html();
            })

            $(".btn-warning").click(function(e){


                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                // alert(displayselect + ": " + Qid);
                $.ajax({
                    type:'GET',
                    url:'/report/'+Qid+'/'+displayselect,
                    success:function(data){
                        document.getElementsByClassName('btn-secondary')[0].click();
                        $(thisreport).attr('disabled', true);
                    },
                    error: function() {
                        alert("Something happened! Try again later!");
                    }
                });
            });

    </script>

@stop

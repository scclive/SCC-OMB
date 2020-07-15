@extends('layouts.app')

@section('content')
    <center><h5 style="padding: 8px; background: #ededed;" class="" >Tell us how would you like the following activities?</h5></center>
    {!! Form::open(['method' => 'POST', 'url' => ['/APIpersonality/store']]) !!}

    <div class="panel panel-default">
        <?php //dd($questions) ?>
        @if(count($questions) > 0)
            <div class="panel-body">
            <?php $i = 1; ?>
            <input name="userid" value="{{$id}}" style="display:none;">
            @foreach($questions as $question)
                @if ($i > 1) @endif
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <div class="form-group questiondiv">
                            <b style="color: #1f0d0b;">Q{{ $i }}</b><br /><b style="color: #f25440;">{!! nl2br($question->question_text) !!}</b>

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
                            @foreach($question->options as $option)
                                <br>
                                <label class="radio-inline" style="border-left: 2px solid #7acaff;">
                                    <div style="padding-left: 5px;">
                                        <input
                                            type="radio"
                                            name="answers[{{ $question->id }}]"
                                            value="{{ $option->id }}">
                                        {{ $option->option }}
                                    </div>
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
            <?php $i++; ?>
            @endforeach
            </div>
        @endif
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

@stop

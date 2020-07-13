<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('Index.head')
</head>

<body>


    @include('Index.header')
    

    <!-- service_area_start -->
    <div class="service_area">
        <br><br><br><br><br>
        <div class="container">

        <center><h3 class="page-title">New Personality Quiz</h3></center>
    {!! Form::open(['method' => 'POST', 'url' => ['/per/store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Answer These 60 Questions; Tell us how would you like the following activities?
        </div>
        <?php //dd($questions) ?>
        @if(count($questions) > 0)
            <div class="panel-body ">
            <?php $i = 1; ?>
            @foreach($questions as $question)
                @if ($i > 1) <hr /> @endif
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <div class="form-group questiondiv ">
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
                            @foreach($question->options as $option)
                                <br>
                                <label class="radio-inline custom-radio">
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
    </div>
    <div class="btn btn-danger">SUBMIT</div>
    {!! Form::submit(trans('quickadmin.submit_quiz'), ['class' => 'btn hiddensubmit',  'style' => 'display:none;']) !!}
    {!! Form::close() !!}


        </div>
    </div>
    <!-- service_area_end -->

	

    @include('Index.footer')

</body>

</html>
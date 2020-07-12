@extends('layouts.app')

@section('content')
    <br />
    <center><img src="../img/analysis.png"/></center>
        <h3 align="center">@lang('quickadmin.questions.title')</h3>
        <!-- <h4 align="center">Take Personality Test & Find Out Which Field of Study Suits You</h4><br /> -->
        <h4 align="center">Manage Question's Base</h4><br />
    <div class="row lastresult">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Total Questions Overview</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4 text-center" >
                                <div style="vertical-align: middle; text-align: center; padding-top:200px;">
                                    <h3 style="vertical-align: middle; text-align: center; ">Total Questions:</h3>
                                    <h1 style="vertical-align: middle; text-align: center; color: #9acff9; font-size: 50px;">{{$total}}</h1>
                                </div>
                            </div>
                            <div class="col-md-8 text-center" id="container" style="height: 500px;">

                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <p>
        <a href="{{ route('questions.create') }}" class="btn btn-success">@lang('quickadmin.add_new')</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.list')
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($questions) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>@lang('quickadmin.questions.fields.topic')</th>
                        <th>@lang('quickadmin.questions.fields.question-text')</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($questions) > 0)
                        @foreach ($questions as $question)
                            <tr data-entry-id="{{ $question->id }}">
                                <td></td>
                                <td>{{ $question->topic->title or '' }}</td>
                                <td>{!! $question->question_text !!}</td>
                                <td>
                                    <a href="{{ route('questions.show',[$question->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.view')</a>
                                    <a href="{{ route('questions.edit',[$question->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.edit')</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.are_you_sure")."');",
                                        'route' => ['questions.destroy', $question->id])) !!}
                                    {!! Form::submit(trans('quickadmin.delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7">@lang('quickadmin.no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('questions.mass_destroy') }}';
    </script>
@endsection
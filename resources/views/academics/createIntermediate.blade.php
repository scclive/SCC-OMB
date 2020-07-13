@extends('layouts.app')

@section('content')
    <center><img src="{{URL::to ('/img/campusTwo.png')}}"/></center>
    <h3 align="center"><img style="width: 30px;" src="{{URL::to ('/img/icons8-circled-menu-64.png')}}"/> | Intermediate</h3><br />
    <h4 align="center">Complete Your Transcript </h4><br />

    
{!! Form::open(['method' => 'POST', 'url' => ['/academics/hssc/intermediate/store']]) !!}
    <div id="main" class="panel panel-default">
        <h3 class="page-title">HSSC: Track - {{$track}}</h3>
        
        
            <div class="row">
                <div class="col-xs-12 form-group">

                    @if(!empty($data))
                        @if($track == 'Pre-Med')
                            <label for="english" class="control-label">English(/200)</label>
                            <input type="number" class="form-control " placeholder="" name="english" type="text" id="option1" value="{{$data[0]->english}}" min="0" max="200" >

                            <label for="urdu" class="control-label">Urdu(/200)</label>
                            <input type="number" class="form-control " placeholder="" name="urdu" type="text" id="option2" value="{{$data[0]->urdu}}" min="0" max="200">

                            <label for="islamiyat_Ethics" class="control-label">Islamiyat Ethics(/50)</label>
                            <input type="number" class="form-control " placeholder="" name="islamiyat_Ethics" type="text" id="option2" value="{{$data[0]->islamiyat_Ethics}}" min="0" max="50">

                            <label for="pakistan_Studies" class="control-label">Pakistan Studies(/50)</label>
                            <input type="number" class="form-control " placeholder="" name="pakistan_Studies" type="text" id="option2" value="{{$data[0]->pakistan_Studies}}" min="0" max="200">

                            <label for="mathematics" class="control-label" style="display: none;">Mathematics(/200)</label>
                            <input type="number" class="form-control " placeholder=""  style="display: none;" name="mathematics" type="text" id="option2" value="{{$data[0]->mathematics}}" min="0" max="200">

                            <label for="physics" class="control-label">Physics(/200)</label>
                            <input type="number" class="form-control " placeholder="" name="physics" type="text" id="option2" value="{{$data[0]->physics}}" min="0" max="200">

                            <label for="chemistry" class="control-label">Chemistry(/200)</label>
                            <input type="number" class="form-control " placeholder="" name="chemistry" type="text" id="option2" value="{{$data[0]->chemistry}}" min="0" max="200">

                            <label for="biology" class="control-label">Biology(/200)</label>
                            <input type="number" class="form-control " placeholder="" name="biology" type="text" id="option2" value="{{$data[0]->biology}}" min="0" max="200">

                            <label for="computer" class="control-label" style="display: none;">Computer(/200)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="computer" type="text" id="option2" value="{{$data[0]->computer}}" min="0" max="200">

                            <label for="statistics" class="control-label" style="display: none;">Statistics(/200)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="statistics" type="text" id="option2" value="{{$data[0]->statistics}}" min="0" max="200">
                            
                            <label for="economics" class="control-label" style="display: none;">Economics(/200)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="economics" type="text" id="option2" value="{{$data[0]->economics}}" min="0" max="200">

                        @elseif($track == 'Pre-Engineering')
                            <label for="english" class="control-label">English(/200)</label>
                            <input type="number" class="form-control " placeholder="" name="english" type="text" id="option1" value="{{$data[0]->english}}" min="0" max="200">

                            <label for="urdu" class="control-label">Urdu(/200)</label>
                            <input type="number" class="form-control " placeholder="" name="urdu" type="text" id="option2" value="{{$data[0]->urdu}}" min="0" max="200">

                            <label for="islamiyat_Ethics" class="control-label">Islamiyat Ethics(/50)</label>
                            <input type="number" class="form-control " placeholder="" name="islamiyat_Ethics" type="text" id="option2" value="{{$data[0]->islamiyat_Ethics}}" min="0" max="50">

                            <label for="pakistan_Studies" class="control-label">Pakistan Studies(/50)</label>
                            <input type="number" class="form-control " placeholder="" name="pakistan_Studies" type="text" id="option2" value="{{$data[0]->pakistan_Studies}}" min="0" max="50">

                            <label for="mathematics" class="control-label">Mathematics(/200)</label>
                            <input type="number" class="form-control " placeholder="" name="mathematics" type="text" id="option2" value="{{$data[0]->mathematics}}" min="0" max="200">

                            <label for="physics" class="control-label">Physics(/200)</label>
                            <input type="number" class="form-control " placeholder="" name="physics" type="text" id="option2" value="{{$data[0]->physics}}" min="0" max="200">

                            <label for="chemistry" class="control-label">Chemistry(/200)</label>
                            <input type="number" class="form-control " placeholder="" name="chemistry" type="text" id="option2" value="{{$data[0]->chemistry}}" min="0" max="200">

                            <label for="biology" class="control-label" style="display: none;">Biology(/200)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="biology" type="text" id="option2" value="{{$data[0]->biology}}" min="0" max="200">

                            <label for="computer" class="control-label" style="display: none;">Computer(/200)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="computer" type="text" id="option2" value="{{$data[0]->computer}}" min="0" max="200">

                            <label for="statistics" class="control-label" style="display: none;">Statistics(/200)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="statistics" type="text" id="option2" value="{{$data[0]->statistics}}" min="0" max="200">
                            
                            <label for="economics" class="control-label" style="display: none;">Economics(/200)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="economics" type="text" id="option2" value="{{$data[0]->economics}}" min="0" max="200">

                        @elseif($track == 'ICS')
                            <label for="english" class="control-label">English(/200)</label>
                            <input type="number" class="form-control " placeholder="" name="english" type="text" id="english" value="{{$data[0]->english}}" min="0" max="200" >

                            <label for="urdu" class="control-label">Urdu(/200)</label>
                            <input type="number" class="form-control " placeholder="" name="urdu" type="text" id="urdu" value="{{$data[0]->urdu}}" min="0" max="200">

                            <label for="islamiyat_Ethics" class="control-label">Islamiyat Ethics(/50)</label>
                            <input type="number" class="form-control " placeholder="" name="islamiyat_Ethics" type="text" id="islamiyat_Ethics" value="{{$data[0]->islamiyat_Ethics}}" min="0" max="50">

                            <label for="pakistan_Studies" class="control-label">Pakistan Studies(/50)</label>
                            <input type="number" class="form-control " placeholder="" name="pakistan_Studies" type="text" id="pakistan_Studies" value="{{$data[0]->pakistan_Studies}}" min="0" max="50">

                            <label for="mathematics" class="control-label">Mathematics(/200)</label>
                            <input type="number" class="form-control " placeholder="" name="mathematics" type="text" id="mathematics" value="{{$data[0]->mathematics}}" min="0" max="200">

                            <label for="chemistry" class="control-label" style="display: none;">Chemistry(/200)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="chemistry" type="text" id="option2" value="{{$data[0]->chemistry}}" min="0" max="200">

                            <label for="biology" class="control-label" style="display: none;">Biology(/200)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="biology" type="text" id="option2" value="{{$data[0]->biology}}" min="0" max="200">

                            <label for="computer" class="control-label">Computer(/200)</label>
                            <input type="number" class="form-control " placeholder="" name="computer" type="text" id="option2" value="{{$data[0]->computer}}" min="0" max="200">

                            <br>
                            <br>
                            <select id="subjects" class="form-control ">
                                <option value="none" selected>Select Subjects</option>
                                <option value="physics">Physics</option>
                                <option value="statistics">Statistics</option>
                                <option value="economics">Economics</option>
                            </select>
                            <br>
                            
                                <div id="physics" style="display: @if($data[0]->physics != '' && $data[0]->physics != 'null') block @else none @endif;">
                                    <label for="physics" class="control-label physics" style="display: block;">Physics(/200)</label>
                                    <input type="number" class="form-control physics" placeholder=""  name="physics" type="text" id="physics" value="{{$data[0]->physics}}" style="display: block;" min="0" max="200">
                                </div>
                            
                                <div id="statistics" style="display: @if($data[0]->statistics != '' && $data[0]->statistics != 'null') block @else none @endif;">
                                    <label for="statistics" class="control-label Statistics" style="display: block ;">Statistics(/200)</label>
                                    <input type="number" class="form-control Statistics" placeholder="" style="display: block;" name="statistics" type="text" id="statistics" value="{{$data[0]->statistics}}" min="0" max="200">
                                </div>
                            
                                <div id="economics" style="display: @if($data[0]->economics != '' && $data[0]->economics != 'null') block @else none @endif;">
                                    <label for="economics" class="control-label Economics" style="display: block;">Economics(/200)</label>
                                    <input type="number" class="form-control Economics" placeholder="" style="display: block;" name="economics" type="text" id="economics" value="{{$data[0]->economics}}" min="0" max="200">
                                </div>
                            

                            
                            
                            
                        @endif

                    @else
                        @if($track == 'Pre-Med')
                            <label for="english" class="control-label">English(/200)</label>
                            <input type="number" class="form-control " placeholder="" name="english" type="text" id="option1" value="" min="0" max="200">

                            <label for="urdu" class="control-label">Urdu(/200)</label>
                            <input type="number" class="form-control " placeholder="" name="urdu" type="text" id="option2" value="" min="0" max="200">

                            <label for="islamiyat_Ethics" class="control-label">Islamiyat Ethics(/50)</label>
                            <input type="number" class="form-control " placeholder="" name="islamiyat_Ethics" type="text" id="option2" value="" min="0" max="50">

                            <label for="pakistan_Studies" class="control-label">Pakistan Studies(/50)</label>
                            <input type="number" class="form-control " placeholder="" name="pakistan_Studies" type="text" id="option2" value="" min="0" max="50">

                            <label for="mathematics" class="control-label" style="display: none;">Mathematics(/200)</label>
                            <input type="number" class="form-control " placeholder=""  style="display: none;" name="mathematics" type="text" id="option2" value="" min="0" max="200">

                            <label for="physics" class="control-label">Physics(/200)</label>
                            <input type="number" class="form-control " placeholder="" name="physics" type="text" id="option2" value="" min="0" max="200">

                            <label for="chemistry" class="control-label">Chemistry(/200)</label>
                            <input type="number" class="form-control " placeholder="" name="chemistry" type="text" id="option2" value="" min="0" max="200">

                            <label for="biology" class="control-label">Biology(/200)</label>
                            <input type="number" class="form-control " placeholder="" name="biology" type="text" id="option2" value="" min="0" max="200">

                            <label for="computer" class="control-label" style="display: none;">Computer(/200)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="computer" type="text" id="option2" value="" min="0" max="200">

                            <label for="statistics" class="control-label" style="display: none;">Statistics(/200)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="statistics" type="text" id="option2" value="" min="0" max="200">
                            
                            <label for="economics" class="control-label" style="display: none;">Economics(/200)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="economics" type="text" id="option2" value="" min="0" max="200">

                        @elseif($track == 'Pre-Engineering')
                            <label for="english" class="control-label">English(/200)</label>
                            <input type="number" class="form-control " placeholder="" name="english" type="text" id="option1" value="" min="0" max="200">

                            <label for="urdu" class="control-label">Urdu(/200)</label>
                            <input type="number" class="form-control " placeholder="" name="urdu" type="text" id="option2" value="" min="0" max="200">

                            <label for="islamiyat_Ethics" class="control-label">Islamiyat Ethics(/50)</label>
                            <input type="number" class="form-control " placeholder="" name="islamiyat_Ethics" type="text" id="option2" value="" min="0" max="50">

                            <label for="pakistan_Studies" class="control-label">Pakistan Studies(/50)</label>
                            <input type="number" class="form-control " placeholder="" name="pakistan_Studies" type="text" id="option2" value="" min="0" max="50">

                            <label for="mathematics" class="control-label">Mathematics(/200)</label>
                            <input type="number" class="form-control " placeholder="" name="mathematics" type="text" id="option2" value="" min="0" max="200">

                            <label for="physics" class="control-label">Physics(/200)</label>
                            <input type="number" class="form-control " placeholder="" name="physics" type="text" id="option2" value="" min="0" max="200">

                            <label for="chemistry" class="control-label">Chemistry(/200)</label>
                            <input type="number" class="form-control " placeholder="" name="chemistry" type="text" id="option2" value="" min="0" max="200">

                            <label for="biology" class="control-label" style="display: none;">Biology(/200)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="biology" type="text" id="option2" value="" min="0" max="200">

                            <label for="computer" class="control-label" style="display: none;">Computer(/200)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="computer" type="text" id="option2" value="" min="0" max="200">

                            <label for="statistics" class="control-label" style="display: none;">Statistics(/200)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="statistics" type="text" id="option2" value="" min="0" max="200">
                            
                            <label for="economics" class="control-label" style="display: none;">Economics(/200)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="economics" type="text" id="option2" value="" min="0" max="200">
                        

                        @elseif($track == 'ICS')

                            <label for="english" class="control-label">English(/200)</label>
                            <input type="number" class="form-control " placeholder="" name="english" type="text" id="option1" value="" min="0" max="200">

                            <label for="urdu" class="control-label">Urdu(/200)</label>
                            <input type="number" class="form-control " placeholder="" name="urdu" type="text" id="option2" value="" min="0" max="200">

                            <label for="islamiyat_Ethics" class="control-label">Islamiyat Ethics(/50)</label>
                            <input type="number" class="form-control " placeholder="" name="islamiyat_Ethics" type="text" id="option2" value="" min="0" max="50">

                            <label for="pakistan_Studies" class="control-label">Pakistan Studies(/50)</label>
                            <input type="number" class="form-control " placeholder="" name="pakistan_Studies" type="text" id="option2" value="" min="0" max="50">

                            <label for="mathematics" class="control-label">Mathematics(/200)</label>
                            <input type="number" class="form-control " placeholder="" name="mathematics" type="text" id="option2" value="" min="0" max="200">

                            <label for="chemistry" class="control-label" style="display: none;">Chemistry(/200)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="chemistry" type="text" id="option2" value="">

                            <label for="biology" class="control-label" style="display: none;">Biology(/200)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="biology" type="text" id="option2" value="" min="0" max="200">

                            <label for="computer" class="control-label">Computer(/200)</label>
                            <input type="number" class="form-control " placeholder="" name="computer" type="text" id="option2" value="" min="0" max="200">

                            <br>
                            <br>
                            <select id="subjects" class="form-control ">
                                <option value="none">Select Subjects</option>
                                <option value="physics">Physics</option>
                                <option value="statistics">Statistics</option>
                                <option value="economics">Economics</option>
                            </select>
                            <br>

                            <div id="physics" style="display: none;">
                                <label for="physics" class="control-label Physics">Physics(/200)</label>
                                <input type="number" class="form-control Physics" placeholder="" name="physics" type="text" id="physics" value="null" min="0" max="200">
                            </div>

                            <div id="statistics" style="display: none;">
                                <label for="statistics" class="control-label Statistics">Statistics(/200)</label>
                                <input type="number" class="form-control Statistics" placeholder="" name="statistics" type="text" id="statistics" value="null" min="0" max="200">
                            </div>

                            <div id="economics" style="display: none;">
                                <label for="economics" class="control-label Economics">Economics(/200)</label>
                                <input type="number" class="form-control Economics" placeholder="" name="economics" type="text" id="economics" value="null" min="0" max="200">
                            </div>
                        @endif
                    @endif
                
                </div>
            </div>
            <label for="track" class="control-label" style="display:none;">Track</label>
            <input  class="form-control " placeholder="" name="track" type="text" id="option2" value="{{$track}}" style="display:none;">

    </div>

    {!! Form::submit(trans('quickadmin.save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop


@extends('layouts.app')

@section('content')
    <center><img src="{{URL::to ('/img/campus.png')}}"/></center>
    <h3 align="center"><img style="width: 30px;" src="{{URL::to ('/img/icons8-circled-menu-64.png')}}"/> | Matric</h3><br />
    <h4 align="center">Complete Your Transcript </h4><br />

    
{!! Form::open(['method' => 'POST', 'url' => ['/academics/ssc/matriculation/store']]) !!}
    <div id="main" class="panel panel-default">
        <h3 class="page-title">SSC: Track - {{$track}}</h3>
        
        
            <div class="row">
                <div class="col-xs-12 form-group">

                    @if(!empty($data))
                        @if($track == 'Medical')
                            <label for="english" class="control-label">English(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="english" type="text" id="option1" value="{{$data[0]->english}}" min="0" max="150" >

                            <label for="urdu" class="control-label">Urdu(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="urdu" type="text" id="option2" value="{{$data[0]->urdu}}" min="0" max="150">

                            <label for="islamiyat_Ethics" class="control-label">Islamiyat Ethics(/75)</label>
                            <input type="number" class="form-control " placeholder="" name="islamiyat_Ethics" type="text" id="option2" value="{{$data[0]->islamiyat_Ethics}}" min="0" max="75">

                            <label for="pakistan_Studies" class="control-label">Pakistan Studies(/75)</label>
                            <input type="number" class="form-control " placeholder="" name="pakistan_Studies" type="text" id="option2" value="{{$data[0]->pakistan_Studies}}" min="0" max="75">

                            <label for="mathematics" class="control-label">Mathematics(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="mathematics" type="text" id="option2" value="{{$data[0]->mathematics}}" min="0" max="150">

                            <label for="physics" class="control-label">Physics(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="physics" type="text" id="option2" value="{{$data[0]->physics}}" min="0" max="150">

                            <label for="chemistry" class="control-label">Chemistry(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="chemistry" type="text" id="option2" value="{{$data[0]->chemistry}}" min="0" max="150">

                            <label for="biology" class="control-label">Biology(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="biology" type="text" id="option2" value="{{$data[0]->biology}}" min="0" max="150">

                            <label for="computer" class="control-label" style="display: none;">Computer(/150)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="computer" type="text" id="option2" value="{{$data[0]->computer}}" min="0" max="150">

                            <label for="general_sciences" class="control-label" style="display: none;">General Sciences(/150)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="general_sciences" type="text" id="option2" value="{{$data[0]->general_sciences}}" min="0" max="150">
                            
                            <label for="economics" class="control-label" style="display: none;">Economics(/150)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="economics" type="text" id="option2" value="{{$data[0]->economics}}" min="0" max="150">

                            <label for="business_studies" class="control-label" style="display: none;">Business_ Studies(/150)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="business_studies" type="text" id="option2" value="{{$data[0]->business_studies}}" min="0" max="150">

                        @elseif($track == 'Engineering')
                            <label for="english" class="control-label">English(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="english" type="text" id="option1" value="{{$data[0]->english}}" min="0" max="150">

                            <label for="urdu" class="control-label">Urdu(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="urdu" type="text" id="option2" value="{{$data[0]->urdu}}" min="0" max="150">

                            <label for="islamiyat_Ethics" class="control-label">Islamiyat Ethics(/75)</label>
                            <input type="number" class="form-control " placeholder="" name="islamiyat_Ethics" type="text" id="option2" value="{{$data[0]->islamiyat_Ethics}}" min="0" max="75">

                            <label for="pakistan_Studies" class="control-label">Pakistan Studies(/75)</label>
                            <input type="number" class="form-control " placeholder="" name="pakistan_Studies" type="text" id="option2" value="{{$data[0]->pakistan_Studies}}" min="0" max="75">

                            <label for="mathematics" class="control-label">Mathematics(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="mathematics" type="text" id="option2" value="{{$data[0]->mathematics}}" min="0" max="150">

                            <label for="physics" class="control-label">Physics(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="physics" type="text" id="option2" value="{{$data[0]->physics}}" min="0" max="150">

                            <label for="chemistry" class="control-label">Chemistry(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="chemistry" type="text" id="option2" value="{{$data[0]->chemistry}}" min="0" max="150">

                            <label for="biology" class="control-label" style="display: none;">Biology(/150)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="biology" type="text" id="option2" value="{{$data[0]->biology}}" min="0" max="150">

                            <label for="computer" class="control-label" >Computer(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="computer" type="text" id="option2" value="{{$data[0]->computer}}" min="0" max="150">

                            <label for="general_sciences" class="control-label" style="display: none;">General Sciences(/150)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="general_sciences" type="text" id="option2" value="{{$data[0]->general_sciences}}" min="0" max="150">
                            
                            <label for="economics" class="control-label" style="display: none;">Economics(/150)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="economics" type="text" id="option2" value="{{$data[0]->economics}}" min="0" max="150">

                            <label for="business_studies" class="control-label" style="display: none;">Business_ Studies(/150)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="business_studies" type="text" id="option2" value="{{$data[0]->business_studies}}" min="0" max="150">

                        @elseif($track == 'Humanities')
                            <label for="english" class="control-label">English(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="english" type="text" id="option1" value="{{$data[0]->english}}" min="0" max="150">

                            <label for="urdu" class="control-label">Urdu(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="urdu" type="text" id="option2" value="{{$data[0]->urdu}}" min="0" max="150">

                            <label for="islamiyat_Ethics" class="control-label">Islamiyat Ethics(/75)</label>
                            <input type="number" class="form-control " placeholder="" name="islamiyat_Ethics" type="text" id="option2" value="{{$data[0]->islamiyat_Ethics}}" min="0" max="75">

                            <label for="pakistan_Studies" class="control-label">Pakistan Studies(/75)</label>
                            <input type="number" class="form-control " placeholder="" name="pakistan_Studies" type="text" id="option2" value="{{$data[0]->pakistan_Studies}}" min="0" max="75">

                            <label for="mathematics" class="control-label">Mathematics(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="mathematics" type="text" id="option2" value="{{$data[0]->mathematics}}" min="0" max="150">

                            <label for="physics" class="control-label" style="display: none;">Physics(/150)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="physics" type="text" id="option2" value="{{$data[0]->physics}}" min="0" max="150">

                            <label for="chemistry" class="control-label" style="display: none;">Chemistry(/150)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="chemistry" type="text" id="option2" value="{{$data[0]->chemistry}}" min="0" max="150">

                            <label for="biology" class="control-label" style="display: none;">Biology(/150)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="biology" type="text" id="option2" value="{{$data[0]->biology}}" min="0" max="150">

                            <label for="computer" class="control-label" style="display: none;">Computer(/150)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="computer" type="text" id="option2" value="{{$data[0]->computer}}" min="0" max="150">

                            <label for="general_sciences" class="control-label">General Sciences(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="general_sciences" type="text" id="option2" value="{{$data[0]->general_sciences}}" min="0" max="150">
                            
                            <label for="economics" class="control-label">Economics(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="economics" type="text" id="option2" value="{{$data[0]->economics}}" min="0" max="150">

                            <label for="business_studies" class="control-label">Business_ Studies(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="business_studies" type="text" id="option2" value="{{$data[0]->business_studies}}" min="0" max="150">
                        @endif

                    @else
                        @if($track == 'Medical')
                            <label for="english" class="control-label">English(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="english" type="text" id="option1" value="" min="0" max="150" >

                            <label for="urdu" class="control-label">Urdu(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="urdu" type="text" id="option2" value="" min="0" max="150">

                            <label for="islamiyat_Ethics" class="control-label">Islamiyat Ethics(/75)</label>
                            <input type="number" class="form-control " placeholder="" name="islamiyat_Ethics" type="text" id="option2" value="" min="0" max="150">

                            <label for="pakistan_Studies" class="control-label">Pakistan Studies(/75)</label>
                            <input type="number" class="form-control " placeholder="" name="pakistan_Studies" type="text" id="option2" value="" min="0" max="150">

                            <label for="mathematics" class="control-label">Mathematics(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="mathematics" type="text" id="option2" value="" min="0" max="150">

                            <label for="physics" class="control-label">Physics(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="physics" type="text" id="option2" value="" min="0" max="150">

                            <label for="chemistry" class="control-label">Chemistry(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="chemistry" type="text" id="option2" value="" min="0" max="150">

                            <label for="biology" class="control-label">Biology(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="biology" type="text" id="option2" value="" min="0" max="150">

                            <label for="computer" class="control-label" style="display: none;">Computer(/150)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="computer" type="text" id="option2" value="" min="0" max="150">

                            <label for="general_sciences" class="control-label" style="display: none;">General Sciences(/150)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="general_sciences" type="text" id="option2" value="" min="0" max="150">
                            
                            <label for="economics" class="control-label" style="display: none;">Economics(/150)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="economics" type="text" id="option2" value="" min="0" max="150">

                            <label for="business_studies" class="control-label" style="display: none;">Business_ Studies(/150)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="business_studies" type="text" id="option2" value="" min="0" max="150">

                        @elseif($track == 'Engineering')
                            <label for="english" class="control-label">English(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="english" type="text" id="option1" value="" min="0" max="150">

                            <label for="urdu" class="control-label">Urdu(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="urdu" type="text" id="option2" value="" min="0" max="150">

                            <label for="islamiyat_Ethics" class="control-label">Islamiyat Ethics(/75)</label>
                            <input type="number" class="form-control " placeholder="" name="islamiyat_Ethics" type="text" id="option2" value="" min="0" max="75">

                            <label for="pakistan_Studies" class="control-label">Pakistan Studies(/75)</label>
                            <input type="number" class="form-control " placeholder="" name="pakistan_Studies" type="text" id="option2" value="" min="0" max="75">

                            <label for="mathematics" class="control-label">Mathematics(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="mathematics" type="text" id="option2" value="" min="0" max="150">

                            <label for="physics" class="control-label">Physics(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="physics" type="text" id="option2" value="" min="0" max="150">

                            <label for="chemistry" class="control-label">Chemistry(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="chemistry" type="text" id="option2" value="" min="0" max="150">

                            <label for="biology" class="control-label" style="display: none;">Biology(/150)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="biology" type="text" id="option2" value="" min="0" max="150">

                            <label for="computer" class="control-label" >Computer(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="computer" type="text" id="option2" value="" min="0" max="150">

                            <label for="general_sciences" class="control-label" style="display: none;">General Sciences(/150)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="general_sciences" type="text" id="option2" value="" min="0" max="150">
                            
                            <label for="economics" class="control-label" style="display: none;">Economics(/150)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="economics" type="text" id="option2" value="" min="0" max="150">

                            <label for="business_studies" class="control-label" style="display: none;">Business_ Studies(/150)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="business_studies" type="text" id="option2" value="" min="0" max="150">

                        @elseif($track == 'Humanities')
                            <label for="english" class="control-label">English(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="english" type="text" id="option1" value="" min="0" max="150">

                            <label for="urdu" class="control-label">Urdu(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="urdu" type="text" id="option2" value="" min="0" max="150">

                            <label for="islamiyat_Ethics" class="control-label">Islamiyat Ethics(/75)</label>
                            <input type="number" class="form-control " placeholder="" name="islamiyat_Ethics" type="text" id="option2" value="" min="0" max="75">

                            <label for="pakistan_Studies" class="control-label">Pakistan Studies(/75)</label>
                            <input type="number" class="form-control " placeholder="" name="pakistan_Studies" type="text" id="option2" value="" min="0" max="75">

                            <label for="mathematics" class="control-label">Mathematics(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="mathematics" type="text" id="option2" value="" min="0" max="150">

                            <label for="physics" class="control-label" style="display: none;">Physics(/150)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="physics" type="text" id="option2" value="" min="0" max="150">

                            <label for="chemistry" class="control-label" style="display: none;">Chemistry(/150)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="chemistry" type="text" id="option2" value="" min="0" max="150">

                            <label for="biology" class="control-label" style="display: none;">Biology(/150)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="biology" type="text" id="option2" value="" min="0" max="150">

                            <label for="computer" class="control-label" style="display: none;">Computer(/150)</label>
                            <input type="number" class="form-control " placeholder="" style="display: none;" name="computer" type="text" id="option2" value="" min="0" max="150">

                            <label for="general_sciences" class="control-label">General Sciences(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="general_sciences" type="text" id="option2" value="" min="0" max="150">
                            
                            <label for="economics" class="control-label">Economics(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="economics" type="text" id="option2" value="" min="0" max="150">

                            <label for="business_studies" class="control-label">Business_ Studies(/150)</label>
                            <input type="number" class="form-control " placeholder="" name="business_studies" type="text" id="option2" value="" min="0" max="150">
                        @endif
                    @endif
                
                </div>
            </div>
            <label for="track" class="control-label" style="display:none;">Track</label>
            <input class="form-control " placeholder="" name="track" type="text" id="option2" value="{{$track}}" style="display:none;">

    </div>

    {!! Form::submit(trans('quickadmin.save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop


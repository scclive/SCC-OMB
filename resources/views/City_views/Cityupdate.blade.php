@extends('layouts.app')

@section('content')
<div class="panel panel-default"><h3 align="center">{{ $university->Uni_Name }}<span id="total_records"></span></h3>
<div class="panel panel-default"><h5 align="center">Update Campus Information  <span id="total_records"></span></h5>
<div class="container-fluid">
 
    <form method="POST"  action="{{  URL::to ('/City_update_request',"$city_request->City_id")}}">
 
        {{ csrf_field() }}
 
        <div class="form-group  col-md-12">
            <label  ><b>Campus Name</b></label>
            <input class="form-control" type="text" id="City_Name" name="City_Name" placeholder="Campus Name" value="{{ $city_request->City_Name }}" Readonly>
 
        </div>


        <div class="form-group  col-md-3">
            <label  ><b>City</b></label>
            <input class="form-control" type="text" id="Campus_City" name="Campus_City" placeholder="City" value="{{ $city_request->Campus_City }}" >
    
        </div>

      


      <div class="form-group  col-md-3">
          <label  ><b>Phone No</b></label>
          <input class="form-control" type="text" name="Campus_Phone" placeholder="Campus Phone No." value="{{ $city_request->Campus_Phone }}">
 
      </div>
      <div class="form-group  col-md-3">
          <label><b>Email</b></label>
          <input class="form-control" type="email" name="Campus_Email" placeholder="Campus Email" value="{{ $city_request->Campus_Email }}">
 
      </div>
      <div class="form-group  col-md-3">
          <label  ><b>URL</b></label>
          <input class="form-control" type="text" name="Campus_Url" placeholder="Campus Url" value="{{ $city_request->Campus_Url }}">
 
      </div>
      <div class="form-group  col-md-12">
          <label  ><b>Uni ID</b></label>
          <input class="form-control" type="text" name="Uni_id" placeholder="Uni ID  " value="{{ $city_request->Uni_id }}" readonly>
 
      </div>
      <div class="form-group  col-md-12">
          <label  ><b>Campus ID</b></label>
          <input class="form-control" type="text" name="Campus_id" placeholder="Uni ID  " value="{{ $city_request->City_id }}" readonly>
 
      </div>
      <div class="form-group  col-md-12">
 
            <input class="form-control" type="submit" value="Update ">
 
      </div>
 
    </form>  
 
 </div>   
 </div>
 @endsection
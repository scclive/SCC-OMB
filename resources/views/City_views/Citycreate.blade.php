@extends('layouts.app')

@section('content')
<div class="panel panel-default"><h3 align="center">Add Campus  <span id="total_records"></span></h3>
<div class="container-fluid">
 
    <form method="POST"  action="{{  URL::to ('/City_Store')}}">
 
        {{ csrf_field() }}
 
        <div class="form-group">
          <label >Campus City</label>
          <input class="form-control" type="text" name="Campus_City" placeholder="Campus City">
 
      </div>
      <div class="form-group">
          <label >Campus City</label>
          <input class="form-control" type="text" name="Campus_Phone" placeholder="Campus Phone No.">
 
      </div>
      <div class="form-group">
          <label >Campus City</label>
          <input class="form-control" type="text" name="Campus_Email" placeholder="Campus Email">
 
      </div>
      <div class="form-group">
          <label >Campus City</label>
          <input class="form-control" type="text" name="Campus_Url" placeholder="Campus Url">
 
      </div>
      <div class="form-group">
          <label >Uni ID</label>
          <input class="form-control" type="text" name="Uni_id" placeholder="Uni ID  ">
 
      </div>
      <div class="form-group">
 
            <input class="form-control" type="submit" value="Add ">
 
      </div>
 
    </form>  
 
 </div>   
 
 @endsection
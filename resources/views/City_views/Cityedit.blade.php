@extends('layouts.app')

@section('content')
<div class="panel panel-default"><h3 align="center">{{ $university->Uni_Name }}<span id="total_records"></span></h3>
<div class="panel panel-default"><h5 align="center">Add A New Campus <span id="total_records"></span></h5>
 
<div class="container-fluid">
 
    <form method="POST"  action="{{  URL::to ('/City_Store')}}">
 
        {{ csrf_field() }}
 
       
        <div class="form-group  col-md-12">
            <label  ><b>Campus Name</b></label>
            <input class="form-control" type="text" id="City_Name" name="City_Name" placeholder="Campus Name" readonly>
    
        </div >

        <div class="panel-body">
            <div class="row">

                <div class="col-md-3">
                    <div class="form-group">
                        <label  ><b>City</b></label>
                        <input class="form-control" type="text" id="Campus_City" name="Campus_City" placeholder="City">
                
                    </div >
                </div>
                <div class="col-md-3" >
                    <div class="form-group">
                        <label  ><b>Campus Phone No.</b></label>
                        <input class="form-control" type="text" name="Campus_Phone" placeholder="Campus Phone No." value="{{ $university->Uni_Phone }}">
                
                    </div>
                </div>
                <div class="col-md-3" >
                    <div class="form-group">
                        <label for="inputEmail4" ><b>Campus Email</b></label>
                        <input class="form-control" type="email" name="Campus_Email" placeholder="Campus Email" value="{{ $university->Uni_Email }}">
                
                    </div>
                </div>
                <div class="col-md-3" >
                    <div class="form-group">
                        <label  ><b>Campus Url</b></label>
                        <input class="form-control" type="text" name="Campus_Url" placeholder="Campus Url" value="{{ $university->Uni_Url }}">
                
                    </div>
                </div>
                <div class="col-md-12" >
                    <div class="form-group">
                        <label  ><b>Uni ID</b></label>
                        <input class="form-control" type="text" name="Uni_id" placeholder="Uni ID" value="{{ $city }}" readonly> 
                
                    </div>
                </div>
                <div class="col-md-12" >
                    <div class="form-group">
                            <input style="background :green"class="form-control" type="submit" value="Add ">
                
                    </div>
                </div>
 

            </div>
        </div>
    </form>  
 
 </div>   
 @endsection
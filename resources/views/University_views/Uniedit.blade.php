@extends('layouts.app')

@section('content')
<!-- <center><img src="../img/campusTwo.png"/></center>
  <h3 align="center">Universites Admin Control</h3><br /> -->
      <div class="panel panel-default"><h3 align="center">{{$university->Uni_Name}}<span id="total_records"></span></h3>
      <div class="panel panel-default"><h5 align="center">Edit University Details<span id="total_records"></span></h5>
      <div class="container-fluid">
<!--action="{{  URL::to ('/University_Store')}}"    -->
    <form method="POST" action="{{  URL::to ('/Uni_update',"$university->Uni_id")}}">
    <!-- University_Store
    '/Uni_update',$university->id -->
 
        {{ csrf_field() }}
 
        <div class="form-group col-md-12">
          <label  ><b>University Name</b></label>
          <input class="form-control"    type="text" name="Uni_Name" placeholder="University Name" value="{{$university->Uni_Name}}">
 
      </div>
      
      <div class="form-group col-md-4">
            <label  ><b>Phone No</b></label>
            <input class="form-control"    name="Uni_Phone" placeholder="University Phone"   value="{{ $university->Uni_Phone }}">
 
      </div>
      <div class="form-group col-md-4">
            <label  ><b>Email</b></label>
            <input type="email" class="form-control"    name="Uni_Email" placeholder="University Email"   value="{{ $university->Uni_Email }}">
 
      </div>
      
      <div class="col-md-4">
            <label for="Uni_Sector" class="control-label"><b>Sector</b></label>
                  <select id="Uni_Sector" name="Uni_Sector" class="form-control ">
                        @if($university->Uni_Sector == 'Public')
                        <option value="Public" selected>Public</option>
                        @else
                        <option value="Public">Public</option>
                        @endif
                        @if($university->Uni_Sector == 'Private')
                        <option value="Private" selected>Private</option>
                        @else
                        <option value="Private">Private</option>
                        @endif
                  </select>
            <br>
      </div>


      <div  class="form-group col-md-4">
            <label  ><b>Main Campus</b></label>
            <!--  -->
            <input class="form-control"  name="Uni_Main" placeholder="Main Campus"  value="{{ $university->Uni_Main }}" >
 
      </div>
      <div  class="form-group col-md-8">
            <label  ><b>Address </b></label>
            <input class="form-control"  name="Uni_Address" placeholder="Address"   value="{{ $university->Uni_Address }}" >
 
      </div>


      <div class="form-group  col-md-4">
            <label  ><b>University Url</b></label>
            <input class="form-control"    name="Uni_Url" placeholder="URL"   value="{{ $university->Uni_Url }}">
 
      </div>


      <div class="form-group  col-md-4">
            <label  ><b>Rank</b></label>
            <input class="form-control"    name="Uni_Rank" placeholder="Rank"   value="{{ $university->Uni_Rank }}">
      
      </div>
     
      <div class="form-group col-md-4">
            <label  ><b>University Files</b></label>
            <input class="form-control"    name="Uni_Files" placeholder="University Files" value="{{ $university->Uni_Files }}">
 
      </div>
      <!-- <div>
            <label  ><b>University Tags</b></label>
            <input class="form-control"    name="Uni_Tags" placeholder="University Tags"value={{ $university->Uni_Tags }}>
 
      </div> -->

      <div class="form-group col-md-12">
 
            <input class="form-control btn-danger" type="submit" value="Save">
 
      </div>
 
    </form>  
 
 </div>   
 
 @endsection
@extends('layouts.app')

@section('content')

 <div class="panel panel-default"><h3 align="center">Add New University <span id="total_records"></span></h3>
<div class="container-fluid">

    <form method="POST" action="{{  URL::to ('/University_Store')}}">
 
        {{ csrf_field() }}
 
        
       <div class="form-group  col-md-12">
          <label  ><b>University Name</b></label>
          <input class="form-control"     type="text" name="Uni_Name" placeholder="University Name"  required>
         <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            -->
      </div>
      
      <div  class="form-group  col-md-4">
            <label  ><b>University Phone</b></label>
            <!--  -->
            <input class="form-control"  name="Uni_Phone" placeholder="Phone No" type="tel"  >
 
      </div>
      <div  class="form-group  col-md-4">
            <label  ><b>University Email</b></label>
            <input class="form-control" type="email"  name="Uni_Email" placeholder="Email"  >
 
      </div>



      <div  class="form-group  col-md-4">
            <label  ><b>Main Campus</b></label>
            <!--  -->
            <input class="form-control"  name="Uni_Main" placeholder="Main Campus"   >
 
      </div>
      <div  class="form-group  col-md-8">
            <label  ><b> Address </b></label>
            <input class="form-control"  name="Uni_Address" placeholder="Address"  >
 
      </div>


      <div class="col-md-4">
            <label for="Uni_Sector" class="control-label"><b>Sector</b></label>
                  <select id="Uni_Sector" name="Uni_Sector" class="form-control">
                        <option value="Public">Public</option>
                        <option value="Private" selected>Private</option>
                  </select>
            <br>
      </div>

      <div  class="form-group  col-md-4">
            <label  ><b>University Url</b></label>
            <input class="form-control"  name="Uni_Url" placeholder="Url"      >
 
      </div>
      <div  class="form-group  col-md-4">
            <label  ><b>University Rank</b></label>
            <input type="number" class="form-control"  name="Uni_Rank" placeholder="Rank" pattern="[1-100]{100}"  min="1" max="100" >
 
      </div>


      
      
      <div  class="form-group  col-md-4">
            <label  ><b>University Files</b></label>
            <input class="form-control"  name="Uni_Files" placeholder="University Files"  >
 
      </div>
      <!-- <div  class="form-group">
            <label  ><b>University Tags</b></label>
            <input class="form-control"  name="Uni_Tags" placeholder="University Tags">
 
      </div> -->

      <div  class="form-group  col-md-12">
 
            <input class="form-control btn-danger"  type="submit" value="Save">
 
      </div>
 
    </form>  
 
 </div>   

      
 @endsection
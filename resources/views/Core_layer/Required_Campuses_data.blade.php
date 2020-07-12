@extends('layouts.app')

@section('content')

<br />

  <center><img src="../img/campusthree.png"/></center>
  <h3 align="center">University Campuses Admin Control</h3><br />

   <div class="panel panel-default">
    <div class="panel-heading">Search Campuses Data</div>
    <div class="panel-body">
     <div class="form-group">
     
      <input type="text" name="search" id="search" class="form-control" placeholder="Search Department Data" />
     </div>



<h3 align="center">Campus Data  <span id="total_records"></span></h3>
<div class="table-responsive">
@if(session('error'))
     <span class="alert alert-success" role="alert">
         <strong style="color : red">{{ session('error') }}</strong>
     </span>
@endif

<table class="sortable table table-striped table-bordered">
       <thead>
        <tr>
          <th>ID</th>
          <th>Campus City </th>
          <th>City Name </th>
          <th>Campus Phone</th>
          <th>Campus Email </th>
          <th>Campus URL </th>
          <th>Uni ID</th>
          <th colspan = 4>ACTIONS</th>
        
        </tr>
       </thead>
       <tbody id="myTable">
          @foreach ($city as $cty)
            <tr>
              <td>{{$cty->City_id}}</td>
              <td>{{$cty->Campus_City}}</td>
              <td>{{$cty->City_Name}}</td>
              <td>{{$cty->Campus_Phone}}</td>
              <td>{{$cty->Campus_Email}}</td>
              <td>{{$cty->Campus_Url}}</td>
              <td>{{$cty->Uni_id}} </td>
              <td>
                <a href="{{ URL::to ('CorelayerController_Dep',$cty->City_id)}}" class='btn btn-info' >View Department</a>
            </td>
              <td>
                <form action="{{  URL::to ('/Department',$cty->City_id)}}" >
                  <button class="btn btn-success" type="submit">ADD Department</button>
                </form>
              </td>
              <td>
                <a href="{{ URL::to ('City_edit_request',$cty->City_id)}}" class="btn btn-primary" >Edit</a>
              </td>
              <td>
                <form action="{{  URL::to ('/City_Delete',$cty->City_id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
  </div>

 


  </div>
</div>
<script>
$(document).ready(function(){
  $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#campuse_data tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
@endsection


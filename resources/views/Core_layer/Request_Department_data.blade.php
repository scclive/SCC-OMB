@extends('layouts.app')

@section('content')
<br />
  <center><img src="../img/departments.png"/></center>
  <h3 align="center">Departments Admin Control</h3><br />
  <div class="panel panel-default">
    <div class="panel-heading">Search Departments Data</div>
    <div class="panel-body">
     <div class="form-group">
     
      <input type="text" name="search" id="myInput" class="form-control" placeholder="Search Departments Data" />
     </div>
     
     
      
      <div class="table-responsive">
      <table class="sortable table table-striped table-bordered">
       <thead>
        <tr>
          <th>ID</th>
          <th>Dep Name</th>
          <th>Tags </th>
          <th>Dep Fee (Rs)</th>
          <th>Prev Agg</th>
          <th>SSC Agg</th>
          <th>HSSC Agg</th>
          <th>NTS Agg</th>
          <th>Dep Addmision Deadline </th>
          <th>Dep Test Type</th>
          <th colspan = 2>ACTIONS</th>
       
        </tr>
       </thead>
       <tbody id="myTable">
          @foreach ($departments as $dep)
          <tr>
            <td>{{$dep->	Dep_id}}</td>
            <td>{{$dep->	Dep_Name}}</td>
            <td>{{$dep->Dep_Tags}}</td>
            <td>{{$dep->Dep_fees}} </td>
            <td>{{$dep->Dep_PrevAggr}}</td>
            <td>{{$dep->Dep_AggrMatric}}</td>
            <td>{{$dep->Dep_AggrHssc}}</td>
            <td>{{$dep->Dep_AggrNts}}</td>
            <td>{{$dep->Dep_AddmDeadline}}</td>
            <td>{{$dep->Dep_TestName}}</td>
            <td>
                <a href="{{ URL::to ('/Dep_edit_request',$dep->Dep_id)}}" class="btn btn-primary" >Edit</a>
            </td>
            <td>
              <form action="{{  URL::to ('/Dep_Delete',$dep->Dep_id)}}" method="post">
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
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

@endsection
@extends('layouts.app')

@section('content')
<br />
  <center><img src="../img/campusTwo.png"/></center>
  <h3 align="center">Universites Admin Control</h3><br />
  <div class="panel panel-default">
    <div class="panel-heading">Search University Data</div>
    <div class="panel-body">
      <div class="form-group">
        <input type="text" name="search" id="search" class="form-control" placeholder="Search Universities Data" />
      </div>
     
     
      <h3 align="center">Total Institutions : <span id="total_records"> </span></h3>
      @if(session('error'))
     <span class="alert alert-success" role="alert">
         <strong style="color : red">{{ session('error') }}</strong>
     </span>
      @endif
      <h3 align="right"><a href="University_views/Unicreate" class ="btn btn-success"> Add University</a></h1>
      <div class="table-responsive">
      <table class="sortable table table-striped table-bordered" id="table">
       <thead>
        <tr>
          <th>ID</th>
          <th>University Name</th>
          <th>Phone No.</th>
          <th>Email</th>
          <th>Sector</th>
          <th>Main Campus</th>
          <th>Address</th>
          <th>Url</th>
          <th>Rank</th>
          <th>Files</th>
          <th>Total Campuses</th>
          <th>Total Departments</th>
          <th colspan = 4>ACTIONS</th>
       
        </tr>
       </thead>
       <tbody>
        <!-- University Data from AJAX Query -->
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

 fetch_university_data();
//  $('#myTable').DataTable();

 function fetch_university_data(query = '')
 {
  $.ajax({
   url:"{{ route('index.action') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
    // var newTableObject = document.getElementById(myTable);
    // sorttable.makeSortable(newTableObject);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_university_data(query);
 });
});
</script>

@endsection
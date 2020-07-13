<!DOCTYPE html>
<html lang="en">

  <head>
    @include('Index.head')
  </head>

  <body>


    
    @include('Index.header')
      

      
    <br><br><br><br><br><br><br><br><br>
    <div class="container">
      <div class="col-12">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6" style="opacity: 0.9;">
            <center>
              <img style="width:48px;" src="{{ url('') }}/img/svg_icon/1.png"/>
              <h6 >Discover Universities</h6>
            </center>
          </div>
        </div>
        <br><br><br>
        <div class="row">
          <div class="col-md-2"></div>

          <div class="col-md-2" style="opacity: 0.5;">
            <a href="/UIdetails">
              <center>
                <img style="width:48px;" src="../img/campusTwo.png"/>
                <h4 >Universities </h4>
              </center>
            </a>
          </div>
          <div class="col-md-4">
            <center>
              <img src="../img/campusthree.png"/>
              <h2>Campuses </h2>
            </center>
          </div>
          <div class="col-md-2" style="opacity: 0.5;">
            <a href="/DPAll">
              <center>
                <img  style="width:48px;" src="../img/departments.png"/>
                <h34 >Departments</h4>
              </center>
            </a>
          </div>

          <div class="col-md-2"></div>
        </div>
      </div>
      
      
      <br />

      
      <h3 align="center">All Campuses</h3><br />

      <div class="panel panel-default">
        <div class="panel-heading">Search Campuses Data</div>
        <div class="panel-body">
        <div class="form-group">
          <input type="text" id="search" class="form-control" placeholder="Search Department Data" />
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
              <tbody id="mytable">
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
                        <a href="{{ URL::to ('DPdetails',$cty->City_id)}}" class='btn btn-secondary' >View Department</a>
                      </td>
                    </tr>
                  @endforeach
              </tbody>
            </table>
        </div>
      </div>
    </div>


    @include('Index.footer')



    <script>
      $(document).ready(function(){
        $("#search").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#mytable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
    </script>




      
  </body>

</html>



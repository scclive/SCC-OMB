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
            <a href="/CPAll">
              <center>
                <img  style="width:48px;" src="../img/campusthree.png"/>
                <h34 >Campuses</h4>
              </center>
            </a>
          </div>
          <div class="col-md-4">
            <center>
              <img src="../img/departments.png"/>
              <h2>Departments </h2>
            </center>
          </div>
          <div class="col-md-2" style="opacity: 0.5;">
            <a href="/UIdetails">
              <center>
                <img style="width:48px;" src="../img/campusTwo.png"/>
                <h4 >Universities </h4>
              </center>
            </a>
          </div>

          <div class="col-md-2"></div>
        </div>
      </div>
      
      
      <br />

      
      <h3 align="center">{{$campus->City_Name}}</h3><br />

      <br />
        <div class="panel panel-default">
          <div class="panel-body">
          <div class="form-group">
          
            <input type="text" name="search" id="search" class="form-control" placeholder="Search University Data" />
          </div>
          
          
          <!--  <h3 align="center">Total Data : <span id="total_records"> </span></h3> -->
      <div class="table-responsive">
      @if(session('error'))
          <span class="alert alert-success" role="alert">
              <strong style="color : red">{{ session('error') }}</strong>
          </span>
      @endif

            <table class="table table-striped table-bordered">
          <theadc >
              <tr>
                
              
                <td>Dep Name</td>
                <td>Dep Tags </td>
                <!-- <td>Dep Update time</td> -->
                <td>Dep Previous Agg</td>
                <td>DEp Matric Agg</td>
                <td>Dep HSSC Agg</td>
                <td>Dep NTS agg</td>
                <td>Dep Addmision Deadline </td>
                <td>Dep Test Type</td>
              
                <!-- <td colspan = 2>Actions</td> -->
              </tr>
          </thead>
          <tbody id="dep_data">

          @foreach ($departments as $dep)
              <tr>
                  <td>{{$dep->	Dep_Name}}</td>
                  <td>{{$dep->Dep_Tags}}</td>
                  <!-- <td>{{$dep->Dep_UpdateDate}} </td> -->
                  <td>{{$dep->Dep_PrevAggr}}</td>
                  <td>{{$dep->Dep_AggrMatric}}</td>
                  <td>{{$dep->Dep_AggrHssc}}</td>
                  <td>{{$dep->Dep_AggrNts}}</td>
                  <td>{{$dep->Dep_AddmDeadline}}</td>
                  <td>{{$dep->Dep_TestName}}</td>
                  
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
          $("#dep_data tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
    </script>




      
  </body>

</html>





















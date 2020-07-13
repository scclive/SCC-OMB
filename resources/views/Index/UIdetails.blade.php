  
<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- @include('index.head') -->
  </head>

  <body>


    <!-- @include('index.header') -->
      

      

      
    <br><br><br><br><br><br><br><br><br>
    <div class="container">
      <div class="col-12">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6" style="opacity: 0.9;">
            <center>
              <img style="width:48px;" src="img/svg_icon/1.png"/>
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
                <img style="width:48px;" src="../img/campusthree.png"/>
                <h4 >Campuses </h4>
              </center>
            </a>
          </div>

          <div class="col-md-4">
            <center>
              <img src="../img/campusTwo.png"/>
              <h2>Universities </h2>
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
      
      
      <div class="panel panel-default service_area">
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
                  <button type="button" class="btn btn-primary report" data-toggle="modal" data-target="#exampleModal" >Suggestion</button>

          <div class="table-responsive">
          <table class="sortable table table-striped table-bordered" id="table">
            <thead>
              <tr>
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
                <th colspan = 1>View Campuses</th>
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
      <div>
      <!-- @include('index.suggestion') -->
      </div>
    </div>


      


      

    
      


      


      


        @include('index.footer')
    
      


      

    
      


      


      


        @include('index.footer')


      <script>
        $(document).ready(function(){

          fetch_university_data();
          //  $('#myTable').DataTable();

          function fetch_university_data(query = ''){
            $.ajax({
              url:"{{ route('UIdetails.action') }}",
              method:'GET',
              data:{query:query},
              dataType:'json',
              success:function(data){
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




      <script src="js/vendor/modernizr-3.5.0.min.js"></script>
      <script src="js/vendor/jquery-1.12.4.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/isotope.pkgd.min.js"></script>
      <script src="js/ajax-form.js"></script>
      <script src="js/waypoints.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>
      <script src="js/imagesloaded.pkgd.min.js"></script>
      <script src="js/scrollIt.js"></script>
      <script src="js/jquery.scrollUp.min.js"></script>
      <script src="js/wow.min.js"></script>
      <script src="js/nice-select.min.js"></script>
      <script src="js/jquery.slicknav.min.js"></script>
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/plugins.js"></script>
      <script src="js/gijgo.min.js"></script>
      <script src="js/slick.min.js"></script>
      <!--contact js-->
      <script src="js/contact.js"></script>
      <script src="js/jquery.ajaxchimp.min.js"></script>
      <script src="js/jquery.form.js"></script>
      <script src="js/jquery.validate.min.js"></script>
      <script src="js/mail-script.js"></script>

      <script src="js/main.js"></script>
  </body>

</html>












































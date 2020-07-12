<!doctype html>
<html class="no-js" lang="zxx">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 --> <!--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 --></head>
<body>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        
        
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Your feedback is highly appreciated &#128578; </h3>
                </div>
                <div class="form-group responsible ">
                    <p class="QidModal"></p>
                            <div class="form-group responsible">
                               <!--  <h4 for="message-text" >Suggestion</h4> -->
                                <!-- <input type="text" class="form-control"  id="sugcom"> -->
                                <h4 for="sugcom">Suggestion</h4>
                                <select class="form-control form-control-lg" id="sugcom">
                                    <option  selected disable>--select option--</option>
                                    <option value="Complaint">Complaint</option>
                                    <option value=" Suggestion"> Suggestion</option>
                                </select>
                            </div>
                    
                            <div class="form-group responsible">
                                <h4 for="comment">Comment:</h4>
                                <textarea class="form-control" rows="5" id="sugcomtext"></textarea>
                            </div>
                    <!-- <input type="text"  id="sugcomtext"> -->
                    </br>
                
                    <!-- <label for="message-text" class="col-form-label">Selected Option</label> -->
                    <!-- <input type="text" value="" id="rMessage" id="txtresults" name="rMessage"> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-lite" data-dismiss="modal">Close</button>
                    <div class="btn btn-warning" id="save" type="submit">Submit</div>
                </div>
            </div>
            
        </div>
    </div>

     <!-- Success -->
     <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #62bf7b; ">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Question Reported!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-lite" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<script>
    $('#save').click(function(){
        var sugcom = $('#sugcom').val();
        var sugcomtext = $('#sugcomtext').val();
        /*    e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }); */

        $.ajax({
            type:'GET',
            url:'/suggestion/'+sugcom+'/'+sugcomtext,
            success:function(data){
                document.getElementsByClassName('btn-lite')[0].click();
                $("#exampleModal2").modal();
            },
            
        });
    });
    


</script>
   
</body>

</html> 
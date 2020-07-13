


    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
    <script src="{{ url('quickadmin/js') }}/bootstrap.min.js"></script>
    <script src="{{ url('quickadmin/js') }}/main.js"></script>


    <script>
        window._token = '{{ csrf_token() }}';
    </script>

    @auth
        <script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-base.min.js" type="text/javascript"></script>
        <script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-core.min.js"></script>
        <script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-cartesian.min.js"></script>
        <script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-mekko.min.js"></script>
        <script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-polar.min.js"></script>
        <script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-core.min.js"></script>
        <script src="https://cdn.anychart.com/releases/8.7.1/js/anychart-pareto.min.js"></script>
    @endauth

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/3.2/select2.min.js" defer></script>


@if (\Request::is('profile/photo'))
@else
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

        $('[data-toggle="tooltip"]').tooltip();
        $(".side-nav .collapse").on("hide.bs.collapse", function() {                   
            $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
        });
        $('.side-nav .collapse').on("show.bs.collapse", function() {                        
            $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");        
        });
    </script>
@endif



@if (\Request::is('Crawler/Universities'))


    <script type="text/javascript">
        //script for Universities Crawler

        $(".btn-warning").click(function(e){

            //jQuery($(this)).html('<i class="fa fa-refresh fa-lg fa-spin" style="color: #ffffff;"></i>');

            e.preventDefault();
            var numbers = document.getElementsByClassName('btn-submit');

            var arrayLength = numbers.length;
            for (var i = 0; i < arrayLength; i++) {
                //console.log(numbers[i]);
                document.getElementsByClassName('btn-submit')[i].click();
                //sleep(1000);
            }
            //jQuery($(this)).html('<a class ="btn btn-warning">PUSH ALL</a>');
            window.location.reload(false); 
            
        });
        function sleep(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
        }



        function formAJAX(btn){
            var $form = $(btn).closest('[action]');
            var str = $form.find('[name=Uni_Name]').val();


            alert(str);

            // $.post($form.attr('action'), str, function(data){
            //     alert(str);
            // });

            // var name = $("input[name=name]").val();
            // var password = $("input[name=password]").val();
            // var email = $("input[name=email]").val();
            // $.ajax({
            //     type:'POST',
            //     url:'/ajaxRequest',
            //     data:{name:name, password:password, email:email},
            //     success:function(data){
            //         alert(data.success);
            //     }
            // });







            $.ajax({
                type: 'POST',
                url: '{{URL::to('/')}}/University_Store',
                data:{Uni_Name:str},
                dataType:'JSON',
                success: function(data) {
                    alert(str);
                    //var obj = jQuery.parseJSON(data);
                },
                error: function() {
                    alert('error handling here');
                }
            });
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(".btn-submit").click(function(e){
            e.preventDefault();

            
            var $tr = $(this).closest("tr");
            var $form = $(this).closest('[action]');
            var Uni_Name = $form.find('[name=Uni_Name]').val();
            var Uni_Phone = $form.find('input[name=Uni_Phone]').val();
            var Uni_Email = $form.find('input[name=Uni_Email]').val();
            var Uni_Sector = $form.find('input[name=Uni_Sector]').val();
            var Uni_Main = $form.find('input[name=Uni_Main]').val();
            var Uni_Address = $form.find('input[name=Uni_Address]').val();
            var Uni_Rank = $form.find('input[name=Uni_Rank]').val();
            var Uni_Url = $form.find('input[name=Uni_Url]').val();
            var Uni_Files = $form.find('input[name=Uni_Files]').val();
            //alert(Uni_Name+Uni_Phone+Uni_Email+Uni_Sector+Uni_Main+Uni_Address+Uni_Rank+Uni_Url+Uni_Files);
            $.ajax({
                type:'POST',
                url:'/University_Store',
                data: {Uni_Name:Uni_Name, Uni_Phone:Uni_Phone, Uni_Email:Uni_Email, Uni_Sector:Uni_Sector, Uni_Main:Uni_Main, Uni_Address:Uni_Address, Uni_Rank:Uni_Rank, Uni_Url:Uni_Url, Uni_Files:Uni_Files},
                success:function(data){
                    //alert(data.success);
                    //$("#getCodeModal").modal('show');
                    //document.getElementById("exampleModal").style.display = "block";
                    //$('#myModal').modal('show');
                    //BootstrapDialog.alert('I want banana!')
                    $("#exampleModal").modal();
                    
                    $tr.find(".btn").removeClass('btn-success');
                    $tr.find(".btn").addClass('btn-primary');
                    $tr.find(".btn").text('UPDATE');
                },
                error: function() {
                    $("#exampleModal2").modal();
                }
            });
        });
    </script>
@endif


@if (\Request::is('Crawler/UniversitiesRank'))


    <script type="text/javascript">
        //script for Universities Crawler


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".btn-primary").click(function(e){

            e.preventDefault();
            
            var $tr = $(this).closest("tr");
            var Uni_Name = $tr.find('[name=Uni_Name]').text();
            var Uni_Rank = $tr.find('[name=Uni_Rank]').text();

            $.ajax({
                type:'POST',
                url:'/University_Store_Rank',
                data: {Uni_Name:Uni_Name, Uni_Rank:Uni_Rank},
                success:function(data){
                    $("#exampleModal").modal();
                    
                    $tr.find(".btn").removeClass('btn-primary');
                    $tr.find(".btn").addClass('btn-info');
                    $tr.find(".btn").text('UPDATE Rank');

                },
                error: function() {
                    $("#exampleModal2").modal();
                }
            });
        });
    </script>
@endif


@if (\Request::is('OCR/UploadNew'))
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    //script for ocr image upload

        // var frm = $('#contactForm1');
        // $(".btn-success").click(function(e){
        //     alert("asdsad");
        //     $.ajax({
        //         type: frm.attr('method'),
        //         url: '/OCR/upload',
        //         beforeSend:function(){
        //             $('#success').empty();
        //             $('.progress-bar').text('0%');
        //             $('.progress-bar').css('width', '0%');
        //         },
        //         uploadProgress:function(event, position, total, percentComplete){
        //             $('.progress-bar').text(percentComplete + '0%');
        //             $('.progress-bar').css('width', percentComplete + '0%');
        //         },
        //         success:function(data)
        //         {
        //             if(data.success)
        //             {
        //                 $('#success').html('<div class="text-success text-center"><b>'+data.success+'</b></div><br /><br />');
        //                 $('#success').append(data.image);
        //                 $('.progress-bar').text('Uploaded');
        //                 $('.progress-bar').css('width', '100%');
        //             }
        //         }
        //     });
        // });


        $(document).ready(function(){
            $('form').ajaxForm({
                beforeSend:function(){
                    //$('#success').empty();
                    $('.progress-bar').text('0%');
                    $('.progress-bar').css('width', '0%');
                },
                uploadProgress:function(event, position, total, percentComplete){
                    $('.progress-bar').text(percentComplete + '0%');
                    $('.progress-bar').css('width', percentComplete + '0%');
                },
                success:function(data)
                {
                    if(data.success)
                    {
                        $('#text-success').empty();
                        $('#success').html('<div id="text-success" class="text-success text-center"><b>'+data.success+'<br /><br /></b></div>'+document.getElementById('success').innerHTML);
                        $('#success').append(data.image);

                        

                        $('.progress-bar').text('Uploaded');
                        $('.progress-bar').css('width', '100%');
                    }
                },
                error: function() {
                    alert("Error");
                }
            });
        });
    </script>
@endif


@if (\Request::is('OCR/Images'))
    <script>
        //Delete Ocr Image
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(".btn-submit").click(function(e){
            e.preventDefault();

            var $tr = $(this).closest("tr");
            var $OCR_id = $(this).closest("tr")
                        .find(".OCR_id")
                        .text(); 
            var temp = $OCR_id;
            jQuery($tr.find(".btn-submit")).html('<i class="fa fa-refresh fa-lg fa-spin" style="color: #ffffff;"></i>');

            $.ajax({
                type:'POST',
                url:'/OCR/Images/delete',
                data: {OCR_id:temp},
                success:function(data){

                    //alert("Success");
                    //alert(data.success);

                    $tr.find('td').fadeOut(700,function() {
                                $tr.remove();
                    });
                    $("#exampleModal").modal();

                },
                error: function() {

                    //alert("Failed");
                    $("#exampleModal2").modal();
                }
            });
        });

        //ToggleRead
        $(".read").click(function(e){
            e.preventDefault();

            var $tr = $(this).closest("tr");
            var $OCR_id = $(this).closest("tr")
                        .find(".OCR_id")
                        .text();
            var $Image_Traversed = $(this).closest("tr")
                        .find(".Image_Traversed")
                        .text();

            var temp = $OCR_id;
            var temp2 = $Image_Traversed;

            $.ajax({
                type:'POST',
                url:'/OCR/Images/toggleRead',
                data: {OCR_id:temp, Image_Traversed:temp2},
                success:function(data){
                    //document.getElementById('Image_Traversed').textContent = "lalala";
                    
                    // $('#toptitle').text(function(i, oldText) {
                    //     return oldText === 'Profil' ? 'New word' : oldText;
                    // });
                    
                    if($Image_Traversed == "Read"){
                        $tr.find(".Image_Traversed").text("Unread");

                        $tr.find(".read").removeClass('btn-secondary');
                        $tr.find(".read").addClass('btn-success');
                        $tr.find(".read").text('Mark Read');


                    }else{
                        $tr.find(".Image_Traversed").text("Read");

                        $tr.find(".read").removeClass('btn-success');
                        $tr.find(".read").addClass('btn-secondary');
                        $tr.find(".read").text('Mark Unread');
                    }
                    
                    $("#exampleModa3").modal();

                },
                error: function() {

                    $("#exampleModal2").modal();
                }
            });
        });
    </script>
@endif


@if (\Request::is('OCR/Conversion'))
    <script>
        //Delete Ocr Image
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        //Process
        $(".process").click(function(e){
            e.preventDefault();
            
            var $tr = $(this).closest("tr");
            var $OCR_id = $(this).closest("tr")
                        .find(".OCR_id")
                        .text();
            var $process = $(this).closest("tr")
                        .find(".process")
                        .text();

            var temp = $OCR_id;
            var temp2 = $process;

            jQuery($tr.find(".process")).html('<i class="fa fa-refresh fa-lg fa-spin" style="color: #ffffff;"></i>');

            $.ajax({
                type:'POST',
                url:'/OCR/Conversion/Process',
                data: {OCR_id:temp},
                success:function(data){



                    var formData = new FormData();
                    //formData.append("file", file);
                    formData.append("url", "https://ohhmybug.com/images/"+data.Image_Dir);
                    formData.append("language"   , "eng");
                    formData.append("apikey"  , "dc0ec62bdc88957");
                    formData.append("isOverlayRequired", true);
                    //Send OCR Parsing request asynchronously
                    jQuery.ajax({
                        url: 'https://api.ocr.space/parse/image',
                        data: formData,
                        dataType: 'json',
                        cache: false,
                        contentType: false,
                        processData: false,
                        type: 'POST',
                        success: function (ocrParsedResult) {
                            
                            //Get the parsed results, exit code and error message and details
                            var parsedResults = ocrParsedResult["ParsedResults"];
                            var ocrExitCode = ocrParsedResult["OCRExitCode"];
                            var isErroredOnProcessing = ocrParsedResult["IsErroredOnProcessing"];
                            var errorMessage = ocrParsedResult["ErrorMessage"];
                            var errorDetails = ocrParsedResult["ErrorDetails"];
                            var processingTimeInMilliseconds = ocrParsedResult["ProcessingTimeInMilliseconds"];
                            //If we have got parsed results, then loop over the results to do something
                            if (parsedResults!= null) {
                                //Loop through the parsed results
                                $.each(parsedResults, function (index, value) {
                                    var exitCode = value["FileParseExitCode"];
                                    var parsedText = value["ParsedText"];
                                    var errorMessage = value["ParsedTextFileName"];
                                    var errorDetails = value["ErrorDetails"];
                                    var textOverlay = value["TextOverlay"];
                                    var pageText = '';
                                    switch (+exitCode) {
                                        case 1:
                                        pageText = parsedText;
                                        break;
                                        case 0:
                                        case -10:
                                        case -20:
                                        case -30:
                                        case -99:
                                        default:
                                        pageText += "Error: " + errorMessage;
                                        break;
                                    }
                                    //alert("pageText: "+pageText);
                                    //$('#success').html('<textarea rows="30" id="text-success" class="form-control">'+pageText+'</textarea>');

                                    var count = 0;
                                    $.each(textOverlay["Lines"], function (index, value) {
                                        var newword = '';
                                        $.each(value["Words"], function (index, value) {
                                            var position = '<i  class="text-justify" style="margin-top:'+value["Top"]/100+'px;'+'margin-left:'+value["Left"]/100+'px; width:'+value["Width"]/100+'px; height:'+value["Height"]/100+'px;">'+value["WordText"]+'</i>'
                                            newword = newword + position;
                                        });
                                        //$('#success').html(document.getElementById('success').innerHTML+'<div id="newline" style = "text-align: justify; text-justify: inter-word;"><p class="text-justify">'+newword+'</p></div>');
                                    
                                    });
                                        
                                    $.ajax({
                                        type:'POST',
                                        url:'/OCR/Conversion/Process/Success',
                                        data: {OCR_id:temp, Image_Conversion:pageText},
                                        success:function(){
                                            $tr.find(".Image_Conversion").text(pageText);
                                            if($process == "Processed"){
                                                $tr.find(".process").removeClass('btn-info');
                                                $tr.find(".process").addClass('btn-warning');
                                                $tr.find(".process").text('Process');

                                            }else{
                                                $tr.find(".process").removeClass('btn-warning');
                                                $tr.find(".process").addClass('btn-info');
                                                $tr.find(".process").text('Processed');
                                                $tr.find(".process").attr('disabled', true);
                                            }
                                            $("#exampleModal").modal();


                                        },
                                        error: function() {
                                            $("#exampleModal2").modal();
                                            if($process == "Processed"){
                                                $tr.find(".process").removeClass('btn-warning');
                                                $tr.find(".process").addClass('btn-info');
                                                $tr.find(".process").text('Processed');

                                            }else{
                                                $tr.find(".process").removeClass('btn-info');
                                                $tr.find(".process").addClass('btn-warning');
                                                $tr.find(".process").text('Process');
                                            }   
                                        }
                                    });

                                    
                                });
                            }
                        },
                        error: function() {
                            
                            $("#exampleModal2").modal();
                            if($process == "Processed"){
                                $tr.find(".process").removeClass('btn-warning');
                                $tr.find(".process").addClass('btn-info');
                                $tr.find(".process").text('Processed');

                            }else{
                                $tr.find(".process").removeClass('btn-info');
                                $tr.find(".process").addClass('btn-warning');
                                $tr.find(".process").text('Process');
                            }             
                        }
                    });
                 
                },
                error: function() {

                    $("#exampleModal2").modal();
                    if($process == "Processed"){
                        $tr.find(".process").removeClass('btn-warning');
                        $tr.find(".process").addClass('btn-info');
                        $tr.find(".process").text('Processed');

                    }else{
                        $tr.find(".process").removeClass('btn-info');
                        $tr.find(".process").addClass('btn-warning');
                        $tr.find(".process").text('Process');
                    }
                }
            });
        });





        $(".read").click(function(e){
            e.preventDefault();

            var $tr = $(this).closest("tr");
            var $OCR_id = $(this).closest("tr")
                        .find(".OCR_id")
                        .text();
            var $Image_Traversed = $(this).closest("tr")
                        .find(".read")
                        .text();

            var temp = $OCR_id;
            var temp2;
            if($Image_Traversed == "Mark Unread"){
                temp2 = "Read";
            }else{
                temp2 = "Unread";
            }

            $.ajax({
                type:'POST',
                url:'/OCR/Images/toggleRead',
                data: {OCR_id:temp, Image_Traversed:temp2},
                success:function(data){

                    if(temp2 == "Read"){
                        $tr.find(".read").removeClass('btn-secondary');
                        $tr.find(".read").addClass('btn-success');
                        $tr.find(".read").text('Mark Read');


                    }else{
                        $tr.find(".read").removeClass('btn-success');
                        $tr.find(".read").addClass('btn-secondary');
                        $tr.find(".read").text('Mark Unread');
                    }
                    
                    $("#exampleModa3").modal();

                },
                error: function() {

                    $("#exampleModal4").modal();
                }
            });
        });
    </script>
@endif


@if (\Request::is('questions/create'))
    <script>
        //image view only
        $(".openNav").click(function(e){
            document.getElementById("mySidebar").style.width = "40%";
            document.getElementById("main").style.marginRight = "50%";
            $('#mySidebar').append('<iframe style="width:100%; height:99%;" src="{{URL::to('/')}}/questions/images/all"></iframe>');
            document.getElementById("rowimage").style.pointerEvents = "none";
            $("#rowimage").css("background-color", "#cfafa3");

        });
        $(".showunread").click(function(e){
            $("iframe").remove(); 
            $('#mySidebar').append('<iframe style="width:100%; height:99%;" src="{{URL::to('/')}}/questions/images/unread"></iframe>');
            document.getElementById("rowimage").style.pointerEvents = "none";
            $("#rowimage").css("background-color", "#cfafa3");
        });
        $(".showread").click(function(e){
            $("iframe").remove(); 
            $('#mySidebar').append('<iframe style="width:100%; height:99%;" src="{{URL::to('/')}}/questions/images/read"></iframe>');
            document.getElementById("rowimage").style.pointerEvents = "none";
            $("#rowimage").css("background-color", "#cfafa3");
        });
        $(".showprocessed").click(function(e){
            $("iframe").remove(); 
            $('#mySidebar').append('<iframe style="width:100%; height:99%;" src="{{URL::to('/')}}/questions/images/processed"></iframe>');
            document.getElementById("rowimage").style.pointerEvents = "none";
            $("#rowimage").css("background-color", "#cfafa3");
        });
        $(".showall").click(function(e){
            $("iframe").remove(); 
            $('#mySidebar').append('<iframe style="width:100%; height:99%;" src="{{URL::to('/')}}/questions/images/all"></iframe>');
            document.getElementById("rowimage").style.pointerEvents = "none";
            $("#rowimage").css("background-color", "#cfafa3");
        });

        $(".closeNav").click(function(e){
            $("iframe").remove(); 
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginRight= "0";
            document.getElementById("rowimage").style.pointerEvents = "auto";
            $("#rowimage").css("background-color", "#ffa98a");
        });

        // function openNav() {
        //     document.getElementById("mySidebar").style.width = "250px";
        //     document.getElementById("main").style.marginRight = "250px";
        // }

        // function closeNav() {
        //     document.getElementById("mySidebar").style.width = "0";
        //     document.getElementById("main").style.marginRight= "0";
        // }


    </script>


    <script>

        //add image
        $("#remove").hide();
        $("#success").on("click", ".imagecropselect", function(){

            var id = $(this).closest('div').text();
            var img = $(this).closest('img').attr('src');
            var $image = '<img id="cropbox" class="img" style="width: 100%;">';
            $(".questiondiv").html($image);
            $("#cropbox").attr('src', img);
            var size;
            $('#cropbox').Jcrop({
                aspectRatio: 0,
                onSelect: function(c){
                    size = {x:c.x,y:c.y,w:c.w,h:c.h};   
                    $("#crop").css("visibility", "visible"); 
                    $("#remove").css("visibility", "visible");
                    $("#remove").show();
                }
            });
            $("#remove").click(function(){

                $(".jcrop-tracker").hide();
                $(".jcrop-keymgr").hide();
                $(".img").hide();
                $(".jcrop-holder").hide();
                $(".imagemetadata").hide();
                $("#cropbox").hide();
                $("#remove").hide();

                $(".OCR_id").attr('value', '');
                $(".OCR_id").attr("readonly", true)

                $(".x").attr('value', '');
                $(".x").attr("readonly", true)

                $(".y").attr('value', '');
                $(".y").attr("readonly", true)

                $(".w").attr('value', '');
                $(".w").attr("readonly", true)

                $(".h").attr('value', '');
                $(".h").attr("readonly", true)

                $(".URL").attr('value', '');
                $(".URL").attr("readonly", true)

                // $("#cropped_img").show();
                // $("#cropped_img").attr('src','/questions/crop/'+size.x+'/'+size.y+'/'+size.w+'/'+size.h+'/'+img+'/'+id);
            });

            $("#crop").click(function(){
                var img = $("#cropbox").attr('src');
                $(".imagemetadata").show();
                $(".OCR_id").attr('value', id);
                $(".OCR_id").attr("readonly", true)

                $(".x").attr('value', size.x);
                $(".x").attr("readonly", true)

                $(".y").attr('value', size.y);
                $(".y").attr("readonly", true)

                $(".w").attr('value', size.w);
                $(".w").attr("readonly", true)

                $(".h").attr('value', size.h);
                $(".h").attr("readonly", true)

                $(".URL").attr('value', img);
                $(".URL").attr("readonly", true)

            });

        });









        $(".openNav2").click(function(e){
            document.getElementById("mySidebar2").style.width = "25%";
            document.getElementById("main").style.marginRight = "30%";
            document.getElementById("rowimage2").style.pointerEvents = "none";
            $("#rowimage2").css("background-color", "#cfafa3");
            $.ajax({
                type:'GET',
                url:'/questions/chooseImage',
                success:function(data){
                    $('#success').append(data.image);




                },
                error: function() {
                }
            });
        });

        
        

        $(".closeNav2").click(function(e){
            document.getElementById("mySidebar2").style.width = "0";
            document.getElementById("main").style.marginRight= "0";
            document.getElementById("rowimage2").style.pointerEvents = "auto";
            $("#rowimage2").css("background-color", "#ffa98a");
        });

    </script>


    <script>

        function scheduleA(event) {
            //alert(this.options[this.selectedIndex].text);
            if(this.options[this.selectedIndex].text=="Personality"){
                //alert(this.options[this.selectedIndex].text);
                $(".openNav").hide();
                $(".optionsDiv").hide();
                $(".openNav2").hide();
                $(".codeDiv").hide();
                $(".answerDiv").hide();
                $(".infoDiv").hide();
                $(".personality_ref").show();

                $("#option1").attr('value', 'I Love It');
                $("#option1").attr("readonly", true)
                $("#option2").attr('value', 'Could be interesting');
                $("#option2").attr("readonly", true)
                $("#option3").attr('value', 'Unsure');
                $("#option3").attr("readonly", true)
                $("#option4").attr('value', 'Rahter Not');
                $("#option4").attr("readonly", true)
                $("#option5").attr('value', 'I hate it');
                $("#option5").attr("readonly", true)

            }else{
                $(".openNav").show();
                $(".optionsDiv").show();
                $(".openNav2").show();
                $(".codeDiv").show();
                $(".answerDiv").show();
                $(".infoDiv").show();
                $(".personality_ref").hide();

                $("#option1").attr('value', '');
                $("#option1").attr("readonly", false)
                $("#option2").attr('value', '');
                $("#option2").attr("readonly", false)
                $("#option3").attr('value', '');
                $("#option3").attr("readonly", false)
                $("#option4").attr('value', '');
                $("#option4").attr("readonly", false)
                $("#option5").attr('value', '');
                $("#option5").attr("readonly", false)
            }
        }

    </script>

@endif


@if (\Request::is('questions/images/*'))
    <script>
        //Delete Ocr Image
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        //Process
        $(".process").click(function(e){
            e.preventDefault();
            
            var $tr = $(this).closest("div");
            var $OCR_id = $(this).closest("div")
                        .find(".OCR_id")
                        .text();

            var $process = $(this).closest("div")
                        .find(".process")
                        .text();

            var temp = $OCR_id;
            var temp2 = $process;

            jQuery($tr.find(".process")).html('<i class="fa fa-refresh fa-lg fa-spin" style="color: #ffffff;"></i>');

            $.ajax({
                type:'POST',
                url:'/OCR/Conversion/Process',
                data: {OCR_id:temp},
                success:function(data){



                    var formData = new FormData();
                    //formData.append("file", file);
                    formData.append("url", "https://ohhmybug.com/images/"+data.Image_Dir);
                    formData.append("language"   , "eng");
                    formData.append("apikey"  , "dc0ec62bdc88957");
                    formData.append("isOverlayRequired", true);
                    //Send OCR Parsing request asynchronously
                    jQuery.ajax({
                        url: 'https://api.ocr.space/parse/image',
                        data: formData,
                        dataType: 'json',
                        cache: false,
                        contentType: false,
                        processData: false,
                        type: 'POST',
                        success: function (ocrParsedResult) {
                            
                            //Get the parsed results, exit code and error message and details
                            var parsedResults = ocrParsedResult["ParsedResults"];
                            var ocrExitCode = ocrParsedResult["OCRExitCode"];
                            var isErroredOnProcessing = ocrParsedResult["IsErroredOnProcessing"];
                            var errorMessage = ocrParsedResult["ErrorMessage"];
                            var errorDetails = ocrParsedResult["ErrorDetails"];
                            var processingTimeInMilliseconds = ocrParsedResult["ProcessingTimeInMilliseconds"];
                            //If we have got parsed results, then loop over the results to do something
                            if (parsedResults!= null) {
                                //Loop through the parsed results
                                $.each(parsedResults, function (index, value) {
                                    var exitCode = value["FileParseExitCode"];
                                    var parsedText = value["ParsedText"];
                                    var errorMessage = value["ParsedTextFileName"];
                                    var errorDetails = value["ErrorDetails"];
                                    var textOverlay = value["TextOverlay"];
                                    var pageText = '';
                                    switch (+exitCode) {
                                        case 1:
                                        pageText = parsedText;
                                        break;
                                        case 0:
                                        case -10:
                                        case -20:
                                        case -30:
                                        case -99:
                                        default:
                                        pageText += "Error: " + errorMessage;
                                        break;
                                    }
                                    //alert("pageText: "+pageText);
                                    //$('#success').html('<textarea rows="30" id="text-success" class="form-control">'+pageText+'</textarea>');

                                    var count = 0;
                                    $.each(textOverlay["Lines"], function (index, value) {
                                        var newword = '';
                                        $.each(value["Words"], function (index, value) {
                                            var position = '<i  class="text-justify" style="margin-top:'+value["Top"]/100+'px;'+'margin-left:'+value["Left"]/100+'px; width:'+value["Width"]/100+'px; height:'+value["Height"]/100+'px;">'+value["WordText"]+'</i>'
                                            newword = newword + position;
                                        });
                                        //$('#success').html(document.getElementById('success').innerHTML+'<div id="newline" style = "text-align: justify; text-justify: inter-word;"><p class="text-justify">'+newword+'</p></div>');
                                    
                                    });
                                        
                                    $.ajax({
                                        type:'POST',
                                        url:'/OCR/Conversion/Process/Success',
                                        data: {OCR_id:temp, Image_Conversion:pageText},
                                        success:function(){
                                            $tr.find(".Image_Conversion").text(pageText);
                                            if($process == "Processed"){
                                                $tr.find(".process").removeClass('btn-info');
                                                $tr.find(".process").addClass('btn-warning');
                                                $tr.find(".process").text('Process');

                                            }else{
                                                $tr.find(".process").removeClass('btn-warning');
                                                $tr.find(".process").addClass('btn-info');
                                                $tr.find(".process").text('Processed');
                                                $tr.find(".process").attr('disabled', true);
                                            }
                                            $("#exampleModal").modal();


                                        },
                                        error: function() {
                                            $("#exampleModal2").modal();
                                            if($process == "Processed"){
                                                $tr.find(".process").removeClass('btn-warning');
                                                $tr.find(".process").addClass('btn-info');
                                                $tr.find(".process").text('Processed');

                                            }else{
                                                $tr.find(".process").removeClass('btn-info');
                                                $tr.find(".process").addClass('btn-warning');
                                                $tr.find(".process").text('Process');
                                            }   
                                        }
                                    });

                                    
                                });
                            }
                        },
                        error: function() {
                            
                            $("#exampleModal2").modal();
                            if($process == "Processed"){
                                $tr.find(".process").removeClass('btn-warning');
                                $tr.find(".process").addClass('btn-info');
                                $tr.find(".process").text('Processed');

                            }else{
                                $tr.find(".process").removeClass('btn-info');
                                $tr.find(".process").addClass('btn-warning');
                                $tr.find(".process").text('Process');
                            }             
                        }
                    });
                 
                },
                error: function() {

                    $("#exampleModal2").modal();
                    if($process == "Processed"){
                        $tr.find(".process").removeClass('btn-warning');
                        $tr.find(".process").addClass('btn-info');
                        $tr.find(".process").text('Processed');

                    }else{
                        $tr.find(".process").removeClass('btn-info');
                        $tr.find(".process").addClass('btn-warning');
                        $tr.find(".process").text('Process');
                    }
                }
            });
        });





        $(".read").click(function(e){
            e.preventDefault();

            var $tr = $(this).closest("div");
            var $OCR_id = $(this).closest("div")
                        .find(".OCR_id")
                        .text();
            var $Image_Traversed = $(this).closest("div")
                        .find(".read")
                        .text();

            var temp = $OCR_id;
            var temp2;
            if($Image_Traversed == "Mark Unread"){
                temp2 = "Read";
            }else{
                temp2 = "Unread";
            }

            $.ajax({
                type:'POST',
                url:'/OCR/Images/toggleRead',
                data: {OCR_id:temp, Image_Traversed:temp2},
                success:function(data){

                    if(temp2 == "Read"){
                        $tr.find(".read").removeClass('btn-secondary');
                        $tr.find(".read").addClass('btn-success');
                        $tr.find(".read").text('Mark Read');


                    }else{
                        $tr.find(".read").removeClass('btn-success');
                        $tr.find(".read").addClass('btn-secondary');
                        $tr.find(".read").text('Mark Unread');
                    }
                    
                    $("#exampleModa3").modal();

                },
                error: function() {

                    $("#exampleModal4").modal();
                }
            });
        });
    </script>
@endif


@if (\Request::is('personality/test') || \Request::is('diagnostic/*')|| \Request::is('selection/*'))
    <script>
        //checks if all questions ticked
        $(".btn-danger").click(function(e){
            var $questions = $(".questiondiv");
            if($questions.find("input:radio:checked").length === $questions.length) {
                document.getElementsByClassName('hiddensubmit')[0].click();
            }else{
                alert("Fill out all questions!");
            }
        });

        


    </script>
@endif

@if (\Request::is('APIpersonality/test/*') || \Request::is('APIdiagnostic/test/*') || \Request::is('APIselection/test/*'))
    <script>
        //checks if all questions ticked
        $(".btn-danger").click(function(e){
            var $questions = $(".questiondiv");
            if($questions.find("input:radio:checked").length === $questions.length) {
                document.getElementsByClassName('hiddensubmit')[0].click();
                Android.showToast("Processing...");
                Android.result();
            }else{
                Android.showToast("Fill out all questions!");
                // alert("Fill out all questions!");
            }
        });

        


    </script>
@endif


@if(\Request::is('personality') || \Request::is('APIPersonality/result/*'))
    @if($conventional == -1){
        <script defer>
            $(".lastresult").hide();
        </script>
    }
    @endif
@endif


@if (\Request::is('academics'))
    <script>
        //Delete Ocr Image
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $(".sscButton").click(function(e){
            $(".ssc").show();
            $(".hssc").hide();
            $(".sscTrack").hide();
            $(".hsscTrack").hide();
            
        });

        $(".hsscButton").click(function(e){
            $(".ssc").hide();
            $(".hssc").show();
            $(".sscTrack").hide();
            $(".hsscTrack").hide();

        });

        $(".X").click(function(e){
            $(".ssc").hide();
            $(".hssc").hide();
            $(".sscTrack").hide();
            $(".hsscTrack").hide();

        });

        $(".Matriculation").click(function(e){
            $(".sscTrack").show();

        });

        $(".XsscTrack").click(function(e){
            $(".sscTrack").hide();
        });
        
        $(".Intermediate").click(function(e){
            $(".hsscTrack").show();

        });

        $(".XhsscTrack").click(function(e){
            $(".hsscTrack").hide();
        });
        
    </script>
@endif


@if (\Request::is('academics/ssc/olevels') || \Request::is('academics/hssc/alevels'))
    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#subjects").change(function() {
            
            if($("#subjects").val()!="none"){

                $("#subjects option[value="+$("#subjects").val()+"]").hide();
                $("body").find("input#"+    $("#subjects").val()       ).val('');
                $("body").find("input#"+    $("#subjects").val()       ).attr('value', '');
                $("#"+$("#subjects").val()).show();
                $("#subjects").val("none");

            }

        });

        $(".x").click(function() {
            var $tr = $(this).closest("div").attr("id");
            $("body").find("input#"+    $tr       ).attr('value', 'null');
            $("body").find("input#"+    $tr       ).val('null');
            $("#"+$tr).hide();
            $("#subjects option[value="+$tr+"]").show();
        });


        
    </script>
@endif


@if (\Request::is('academics/hssc/intermediate/ICS')))
    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#subjects").change(function() {
            
            if($("#subjects").val()!="none"){
                if($("#subjects").val() =="physics"){
                    $("body").find("div#physics").show();
                    $("body").find("div#economics").hide();
                    $("body").find("div#statistics").hide();
                    
                    // $("body").find("input#"+    $("#subjects").val()       ).val('');
                    // $("body").find("input#"+    $("#subjects").val()       ).attr('value', '');

                    $("body").find("input#physics"       ).val('');
                    $("body").find("input#physics"       ).attr('value', '');
                    $("body").find("input#economics"       ).val('');
                    $("body").find("input#economics"       ).attr('value', '');
                    $("body").find("input#statistics"       ).val('');
                    $("body").find("input#statistics"       ).attr('value', '');

                }else if($("#subjects").val()=="economics"){
                    $("body").find("div#physics").hide();
                    $("body").find("div#economics").show();
                    $("body").find("div#statistics").hide();

                    $("body").find("input#physics"       ).val('');
                    $("body").find("input#physics"       ).attr('value', '');
                    $("body").find("input#economics"       ).val('');
                    $("body").find("input#economics"       ).attr('value', '');
                    $("body").find("input#statistics"       ).val('');
                    $("body").find("input#statistics"       ).attr('value', '');
                    
                }else if($("#subjects").val()=="statistics"){
                    $("body").find("div#physics").hide();
                    $("body").find("div#economics").hide();
                    $("body").find("div#statistics").show();

                    $("body").find("input#physics"       ).val('');
                    $("body").find("input#physics"       ).attr('value', '');
                    $("body").find("input#economics"       ).val('');
                    $("body").find("input#economics"       ).attr('value', '');
                    $("body").find("input#statistics"       ).val('');
                    $("body").find("input#statistics"       ).attr('value', '');
                }
            }

        });


        
    </script>
@endif


@if (\Request::is('profile'))
    @if($data[0]->city != '')
        <script>
            $("#city").val("{{$data[0]->city}}").change();
        </script>
    @endif
@endif


@if (\Request::is('profile/password'))
    
    <script type="text/javascript">


        
        $(".submit").click(function(e){

            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var password = $("body").find("input#password").val();
            var newpassword = $("body").find("input#newpassword").val();
            var newpassword2 = $("body").find("input#newpassword2").val();

            if(newpassword != newpassword2){
                $(".message").text('New Password Does Not Match!');
                $("#exampleModal").modal();
            }
            else{
                $.ajax({
                    type:'POST',
                    url:'/profile/password/check',
                    data: {password:password, newpassword:newpassword},
                    success:function(data){
                        if(data.password == 0){
                            $(".message").text('Wrong Current Password');
                            $("#exampleModal").modal();
                        }
                        else if(data.newpassword == 0){
                            $(".message").text('New Password Can Not Be Current Password');
                            $("#exampleModal").modal();
                        } else{
                            // window.location.href = '../';
                            $('#logout').submit();
                        }


                    },
                    error: function() {
                        $(".message").text('Something Went Wrong!')
                        $("#exampleModal").modal();
                    }
                });
            }
        });
    </script>
@endif


@if (\Request::is('profile/photo'))
    
    <script type="text/javascript">
        $( document ).ready(function() {
            $("#remove").hide();
            $("#crop").hide();
            $(".btn-danger").hide();
        });

        var loadFile = function(event) {
            var image = document.getElementById('output');
            // image.src = URL.createObjectURL(event.target.files[0]);

            var $image = '<img id="cropbox" class="img" style="width: 100%; height:100%;">';
            $(".questiondiv").html($image);
            $("#cropbox").attr('src', URL.createObjectURL(event.target.files[0]));
            $('#cropbox').Jcrop({
                aspectRatio: 0,
                onSelect: function(c){
                    size = {x:c.x,y:c.y,w:c.w,h:c.h};   
                    $("#crop").css("visibility", "visible"); 
                    $("#crop").show();
                    $("#remove").css("visibility", "visible");
                    $("#remove").show();
                }
            });

            $("#remove").click(function(){
                $(".jcrop-tracker").hide();
                $(".jcrop-keymgr").hide();
                $(".img").hide();
                $(".jcrop-holder").hide();
                $(".imagemetadata").hide();
                $("#cropbox").hide();
                $("#remove").hide();
                $("#crop").hide();
                $(".btn-danger").hide();

                $(".x").attr('value', '');
                $(".x").attr("readonly", true)

                $(".y").attr('value', '');
                $(".y").attr("readonly", true)

                $(".w").attr('value', '');
                $(".w").attr("readonly", true)

                $(".h").attr('value', '');
                $(".h").attr("readonly", true)

                $(".URL").attr('value', '');
                $(".URL").attr("readonly", true)
            });
        
            $("#crop").click(function(){
                $(".btn-danger").show();
                var img = $("#cropbox").attr('src');
                $(".imagemetadata").show();

                $(".x").attr('value', size.x);
                $(".x").attr("readonly", true)

                $(".y").attr('value', size.y);
                $(".y").attr("readonly", true)

                $(".w").attr('value', size.w);
                $(".w").attr("readonly", true)

                $(".h").attr('value', size.h);
                $(".h").attr("readonly", true)

                $(".URL").attr('value', img);
                $(".URL").attr("readonly", true)

            });
        };
        
        

    </script>
@endif

@if (\Request::is('Department/*') || \Request::is('Dep_edit_request/*'))
    <script type="text/javascript">

        $('input[type=checkbox]').change(function(){
            if($(this).is(':checked')) {
                if($("#tags").val() == ''){
                    var text = $("#tags").val();
                    $("#tags").val(text + $(this).val());
                }else{
                    var text = $("#tags").val();
                    $("#tags").val(text + ", " + $(this).val());
                }
            } else {
                var text = $("#tags").val();
                var ret = text.replace($(this).val() + ', ' ,'');
                var ret = ret.replace($(this).val() ,'');
                $("#tags").val(ret);
            }
        });




    </script>
@endif

@if (\Request::is('generate') || \Request::is('APIgenerate/*'))
    <script>

        $('#downloadPDF').click(function () {
            // $(".page-header").remove();
            // $("#content2").css("width", "100%");
            

            var element = document.getElementById('content2');
            html2pdf().set({
                pagebreak: { mode: 'avoid-all', before: '#page2el' }
            }).from(element).save();

            // var worker = html2pdf().from(element).outputImg();
            // html2pdf(element);

            // var opt = {
            //     margin:       1,
            //     filename:     'myfile.pdf',
            //     image:        { type: 'jpeg', quality: 0.98 },
            //     html2canvas:  { scale: 2 },
            //     jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
            // };

            // New Promise-based usage:
            // html2pdf().set(opt).from(element).save();

            
        });
    </script>
@endif

@yield('javascript')
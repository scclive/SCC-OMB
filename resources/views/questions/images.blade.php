<!DOCTYPE html>
<html lang="en">

<head>

    @include('partials.head')
    @include('partials.javascripts')

    
    <script>

        @if(Auth::user()->isAdmin())
            @if(\Request::is('home')|| \Request::is('dashboard'))
                anychart.onDocumentLoad(function () {
                    // create data
                    var data = [
                    ["Users", {{ $users }}],
                    ["Personality Qs", 0],
                    ["Diag+Entry Qs", {{ $questions }}],
                    ["Tests Taken", {{ $quizzes }}],
                    ["Average Score", {{ number_format($average, 2) }} / 10],
                    ["Admins", {{ $admins }}]
                    ];

                    // create a chart
                    chart = anychart.column();

                    // create a column series and set the data
                    var series = chart.column(data);
                    chart.title("At a Glance");
                    // set the container element 
                    chart.container("container");

                    chart.animation(true, 800);
                    // initiate chart display
                    chart.draw();
                    
                    document.getElementsByClassName('anychart-credits-text')[0].style.visibility = 'hidden';
                    document.getElementsByClassName('anychart-credits')[0].style.visibility = 'hidden';
                    
                    document.getElementsByClassName('btn-success')[0].style.visibility = 'hidden';
                });
            @endif
        @endif

        @if (\Request::is('Department_views/Depcreate')|| \Request::is('Department/*'))
            
            
            $(function(){
                
                $("#e1").select2();
                $("#checkbox").click(function(){
                    if($("#checkbox").is(':checked') ){
                        $("#e1 > option").prop("selected","selected");
                        $("#e1").trigger("change");
                    }else{
                        $("#e1 > option").removeAttr("selected");
                        $("#e1").trigger("change");
                    }
                });
                $("#button").click(function(){
                    $value=$("#e1").val();
                    /*   alert($("#e1").val()); */
                    document.getElementById("tags").value =$value ;
                });
            });
        @endif

/* '*' expecting any number  */
        @if (\Request::is('Dep_edit/*'))
            
            
            $(function(){
                
                $("#e1").select2();
                $("#checkbox").click(function(){
                    if($("#checkbox").is(':checked') ){
                        $("#e1 > option").prop("selected","selected");
                        $("#e1").trigger("change");
                    }else{
                        $("#e1 > option").removeAttr("selected");
                        $("#e1").trigger("change");
                    }
                });
                $("#button").click(function(){
                    $value=$("#e1").val();
                    /*   alert($("#e1").val()); */
                    document.getElementById("tags").value =$value ;
                });
            });
        @endif
    </script>

    <!-- script for sortable tables -->
    <script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js" defer></script>

    
    


            
    

</head>

<body class="page-header-fixed" >

    @forelse($ocrData as $image)
        <div class="eachimage" style="margin-bottom:20px;">
            <p name="OCR_id" class="OCR_id">{{$image->OCR_id}}</p>
            <img style="width: 100%;" src="{{  URL::to ('/images')}}/{{ $image->Image_Dir}}"/>
            <textarea rows="10" cols="50" id="Image_Conversion" name="Image_Conversion" class="form-control Image_Conversion">{{$image->Image_Conversion}}</textarea>
            @if($image->Image_Traversed == 'Unread')
                <button  style="margin-left:0px; width:100%;" class="btn btn-success read col-md-5" type="button">Mark Read</button>
                @else
                <button  style="margin-left:0px; width:100%;" class="btn btn-secondary read col-md-5" type="button">Mark Unread</button>
            @endif
            @if($image->Image_Text == 'Unprocessed')
                <button  style="margin-left:0px; width:100%;" class="btn btn-warning process col-md-5" type="button">Process</button>
                @else
                <button  style="margin-left:0px; width:100%;" class="btn btn-info process col-md-5" type="button" disabled>Processed</button>
            @endif
        </div>
    @empty
        No data found
    @endforelse 

    
</body>

@include('partials.javascripts')
</html>
@extends('layouts.app')

@section('content')

    <!-- <div class="row" id="container" style="width: 700px; height: 400px;">

    </div> -->
    <br />
    @if(Auth::user()->isAdmin())
    <center><img src="../img/font.png"/></center>
        <h3 align="center">Optical Character Recognition</h3>
        <h4 align="center">Convert Image to Text of Past Papers for Questions' Database</h4><br />
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Select Operations</div>

                <div class="panel-body">
                    <div class="row">
                    @if(Auth::user()->isAdmin())
                        <a href="{{  URL::to ('/OCR/UploadNew')}}">
                            <div class="col-md-4 text-center">
                                <img src="../img/upload.png"/>
                                <h1>Upload New Image</h1>
                            </div>
                        </a>
                        <a href="{{  URL::to ('/OCR/Images')}}">
                            <div class="col-md-4 text-center">
                                <img src="../img/layout.png"/>
                                <h1>Image View</h1>
                            </div>
                        </a>
                        <a href="{{  URL::to ('/OCR/Conversion')}}">
                            <div class="col-md-4 text-center">
                                <img src="../img/data.png"/>
                                <h1>Image Conversion</h1>
                            </div>
                        </a>
                    @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection


@extends('layouts.app')

@section('content')
<div class="container-fliud">    
        <center><img src="../img/upload.png"/></center>
        <h3 align="center">Optical Character Recognition</h3>
        <h4 align="center">Upload New Image to Extract Text</h4><br />
    <br />
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Upload Captured Images</h3>
        </div>
        <div class="panel-body">
            <br />
            <form id="contactForm1" method="post" action="{{ route('upload') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <ul class="page-sidebar-menu">
                        Instructions:
                        <li style="margin-left: 20px;">File type should .JPG or .PNG</li>
                        <li style="margin-left: 20px;">File should be under 1MB in size</li>
                    </ul>
                    <br/>
                    <div class="col-md-2" align="right"><h4>Select Images</h4></div>
                    <div class="col-md-6">
                        <input type="file" name="file[]" id="file" accept="image/*" multiple />
                    </div>
                    <div align="right" class="col-md-2">
                        <input type="submit" name="upload" value="Upload" class="btn btn-success" />
                    </div>
                </div>
            </form>
            <br />
            <div class="progress">
                <div class="progress-bar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                    0%
                </div>
            </div>
            <br />
            
            <br />
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Recent Images</h3>
        </div>
        <div class="panel-body">
            <br />
            <div id="success" class="row">

            </div>
            <br />
        </div>
    </div>
  </div>


@endsection

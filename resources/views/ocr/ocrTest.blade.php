
@extends('layouts.app')

@section('content')
  <div class="container-fliud">    
        <center><img src="../img/data.png"/></center>
        <h3 align="center">Optical Character Recognition</h3>
        <h4 align="center">Image Conversion</h4><br />
        <br />
    

        <div>
            <img src="{{  URL::to ('/images/393279924.jpg')}}" id="cropbox" class="img" /><br />
        </div>
        <div id="btn">
            <input type='button' id="crop" value='CROP'>
        </div>
        <div>
            <img src="#" id="cropped_img" style="display: none;">
        </div>



  </div>


@endsection

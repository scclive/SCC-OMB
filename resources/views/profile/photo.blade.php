@extends('layouts.app')

@section('content')
    
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header" style="background-color: #d15858; ">
                <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Failed</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body message">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-lite" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
 
    <center><img style="width:50px;" src="../img/password.png"/></center>
    <h3 align="center">Profile Picture</h3>
    <a href="/profile"><div class="btn btn-default" style="float:right">Go Back</div></a>

    {!! Form::open(['method' => 'POST', 'url' => ['/profile/photo/save'], 'enctype'=>'multipart/form-data']) !!}
        <div id="main" class="panel panel-default">
            <h3 class="page-title">New Photo</h3>

                <!-- <input type="file" name="photo" id="photo" accept="image/*"/> -->
                <input type="file"  accept="image/*" name="file" id="file"  onchange="loadFile(event)" style="display: none;">
                <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
                <!-- <p><img id="output" width="100%" /></p> -->

                <div class="row">
                    <div class="col-xs-12 form-group ">
                        <div class="questiondiv">
                        </div>
                        <div id="btn">
                            <input type='button' id="crop" value='CROP'>
                        </div>
                        <div>
                            <img src="#" id="cropped_img" style="display: none;">
                        </div>
                        <div >
                            <input id="remove" type='button' id="crop"  class="btn btn-danger" value='REMOVE'>
                        </div>
                    </div>
                </div>
                <div class="row imagemetadata" style="display:none;">
                <div class="col-xs-12 form-group">
                    {!! Form::label('iamge_metadata', 'Image Metadata', ['class' => 'control-label']) !!}
                    {!! Form::text('x', old('x'), ['class' => 'form-control x', 'placeholder' => 'x', ]) !!}
                    {!! Form::text('y', old('y'), ['class' => 'form-control y', 'placeholder' => 'y']) !!}
                    {!! Form::text('w', old('w'), ['class' => 'form-control w', 'placeholder' => 'w']) !!}
                    {!! Form::text('h', old('h'), ['class' => 'form-control h', 'placeholder' => 'h']) !!}
                    {!! Form::text('url', old('url'), ['class' => 'form-control URL', 'placeholder' => 'URL']) !!}
                    
                </div>
            </div>

            
        </div>
    <!-- <div class="btn btn-danger submit">SUBMIT</div> -->
    <!-- <input type="submit" class="btn btn-danger submit" value="SUBMIT"> -->
    {!! Form::submit(trans('quickadmin.save'), ['class' => 'btn btn-danger']) !!}
    <!-- {!! Form::close() !!}
@stop


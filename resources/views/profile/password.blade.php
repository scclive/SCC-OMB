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
    <h3 align="center">Change Password</h3>
    <a href="/profile"><div class="btn btn-default" style="float:right">Go Back</div></a>

    <!-- {!! Form::open(['method' => 'POST', 'url' => ['/profile/password/check']]) !!} -->
        <div id="main" class="panel panel-default">
            <h3 class="page-title">Password</h3>
            <form method="POST" action="/profile">
                <label for="password" class="control-label">Current Password</label>
                <input class="form-control " placeholder="" name="password" type="password" id="password" value="">
                <br>


                <label for="newpassword" class="control-label">New Password</label>
                <input class="form-control " placeholder="" name="newpassword" type="password" id="newpassword" value="">
                <br>


                <label for="newpassword2" class="control-label">Re-enter New Password</label>
                <input class="form-control " placeholder="" name="newpassword2" type="password" id="newpassword2" value="">
                <br>

            
        </div>
    <div class="btn btn-danger submit">SUBMIT</div>
    <!-- <input type="submit" class="btn btn-danger submit" value="SUBMIT"> -->
    <!-- {!! Form::submit(trans('quickadmin.save'), ['class' => 'btn btn-danger']) !!} -->
    <!-- {!! Form::close() !!} -->
@stop


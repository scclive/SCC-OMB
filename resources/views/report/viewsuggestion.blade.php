@extends('layouts.app')

@section('content')
 <!-- {{ $suggestion }}  -->
    <center><img style="width:50px;" src="../img/suggestions.png"/></center>
    <h3 align="center">Feedback</h3>
    <h4 align="center">Users' Suggestions & Complaints</h4>
    <br>
    <br>
          @foreach ($suggestion as $data)
            <div class=container-fluid>
                <div class="form-group col-md-1">
                    <label for="">User ID </label> 
                    <input class="form-control" name="Qid" value="{{$data->uid}}" readonly></input>
                </div>
                <div class="form-group  col-md-2">
                    <label for="">Type</label>
                    <input class="form-control" name="rMessage" value="{{$data->sugcom}}" readonly></input>
                </div>
                <div class="form-group  col-md-3">
                    <label for="">Comments</label> 
                    <textarea class="form-control" name="rMessage" value="{{$data->sugcomtext}}" readonly>{{$data->sugcomtext}}</textarea> 
                </div>
                <div class="form-group  col-md-3">
                    <label for="">User Email</label> 
                    <input class="form-control" name="rMessage" value="{{$data->userdetails->email}}" readonly></input> 
                </div>
                
            </div>
        @endforeach
        
@endsection
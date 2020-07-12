@extends('layouts.app')

@section('content')
<!-- <h1>Report Section</h1> -->
<!-- {{ $reports }} -->
        <br />
        <center><img src="../img/warn.png"/></center>
        <h3 align="center">Repoted Questions</h3>
        <br />
        <br />

          @foreach ($reports as $data)
            <form method="POST" action="{{  URL::to ('/updateReportstatus', "$data->rid")}}">
            {{ csrf_field() }}
            <div class="form-group col-md-2">
            <label for="">Question ID</label> 
                <input class="form-control" name="Qid" value="{{$data->Qid}}" readonly></input>
                </div>
                <div class="form-group  col-md-3">
                    <label for="">User Email</label> 
                    <input class="form-control" name="rMessage" value="{{$data->userdetails->email}}" readonly></input> 
                </div>
                <div class="form-group  col-md-3">
            <label for="">Report Message</label>
                <input class="form-control" name="rMessage" value="{{$data->rMessage}}" readonly></input>
                </div>
            <div class="form-group  col-md-2">
            <label for="">Report Status</label> 
                    <select class="form-control"  name="rStatus" id="ddselect">
                        <option class="form-control" value="{{$data->rStatus}}">{{$data->rStatus}}</option>
                        <option class="form-control" value="Resolved">Resolved</option>
                        <option class="form-control" value="UnResolved">UnResolved</option>
                    </select>
                </div>

                <!-- <label for="">Report Status</label> -->
                <!-- <input value="{{$data->rStatus}}"></input> -->
            <div class="form-group  col-md-2">
            <label for="">Update</label>
            <button  class="form-control btn btn-primary" type="submit">Submit</button>
                </div>
                
            </form>
          @endforeach
        
@endsection
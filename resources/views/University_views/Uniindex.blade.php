@extends('layouts.app')

@section('content')
<div class="panel-body">
<div class="col-sm-12">
<div class="panel panel-default"><h3 align="center">University Data <span id="total_records"></span></h3>
<div class="panel-heading">Search University Data</div> 

  <table class="table table-striped table-bordered">
    <thead>
        <tr>
          <td>Uni ID</td>
          <td>University Name</td>
          <td>Ph No. </td>
          <td>Email address</td>
          <td>Sector</td>
          <td>Uni Url</td>
          <!-- <td>uni Tags</td> -->
          <td>uni files</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach ($university as $uni)
        <tr>
             <td>{{$uni->Uni_id}}</td>
            <td>{{$uni->Uni_Name}}</td>
            <td>{{$uni->Uni_Phone}} </td>
            <td>{{$uni->Uni_Email}}</td>
            <td>{{$uni->Uni_Sector}}</td>
            <td>{{$uni->Uni_Url}}</td>
            <!-- <td>{{$uni->Uni_Tags}}</td> -->
            <td>{{$uni->Uni_Files}}</td>
            <td>
            <form action="{{ URL::to ('Uni_edit',$uni->Uni_id)}}" >
                  
                  <button class="btn btn-danger" type="submit">Edit </button>
                  
                </form>
              <!--  <a href="{{ URL::to ('Uni_edit',$uni->id)}}" class="btn btn-primary" >Edit</a> -->
            </td>
            <td>
                <form action="{{  URL::to ('/Delete',$uni->Uni_id)}}" >
                 
                  <button class="btn btn-danger" type="submit">Delete</button>

                  
                  
                </form>
            </td>
            <td>
                <form action="{{  URL::to ('/Campus',$uni->Uni_id)}}" >
                  
                  <button class="btn btn-danger" type="submit">ADD Campus</button>
                  
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
</div>

 
@endsection
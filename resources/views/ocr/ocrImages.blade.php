
@extends('layouts.app')

@section('content')
  <div class="container-fliud">    
        <center><img src="../img/layout.png"/></center>
        <h3 align="center">Optical Character Recognition</h3>
        <h4 align="center">Image View</h4><br />
     <br />
     <!-- Modal -->
    <!-- Success Delete-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header" style="background-color: #62bf7b; ">
            <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Success</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Image have been deleted!
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-lite" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
    <!-- Failure Delete-->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header" style="background-color: #d15858; ">
                <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Failed</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Something Went Wrong!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-lite" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    <!-- Success ToggleRead-->
    <div class="modal fade" id="exampleModa3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header" style="background-color: #aa66cc; ">
            <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Success</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Read/Unread Toggled!
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-lite" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
     <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Uploaded Images</h3>
            </div>
            <div class="panel-body">
                <br />
                @if(!empty($ocrData))
                    <div class="table-responsive">
                        <table class="sortable table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Processing State</th>
                                    <th>Read/Unread</th>
                                    <th>Uploaded</th>
                                    <th colspan = 2>ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                @forelse($ocrData as $image)
                                    <tr action="/OCR/Images/delete">
                                        <td name="OCR_id" class="OCR_id">{{$image->OCR_id}}</td>
                                        <td><img style="width: 300px;" src="{{  URL::to ('/images')}}/{{ $image->Image_Dir}}"/></td>
                                        <td>{{$image->Image_Text }}</td>
                                        <td id="Image_Traversed" name="Image_Traversed" class="Image_Traversed">{{$image->Image_Traversed}}</td>
                                        <td>{{$image->created_at }}</td>
                                        <td>
                                            @if($image->Image_Traversed == 'Unread')
                                                <button class="btn btn-success read" type="button">Mark Read</button>
                                                @else
                                                <button class="btn btn-secondary read" type="button">Mark Unread</button>
                                            @endif
                                        </td>
                                        <td>
                                            <button class="btn btn-danger btn-submit" type="button">Delete</button>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr>No data found</tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>






                   
                @endif
                <br />
            </div>
        </div>
  </div>


@endsection

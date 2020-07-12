
@extends('layouts.app')

@section('content')
  <div class="container-fliud">    
        <center><img src="../img/data.png"/></center>
        <h3 align="center">Optical Character Recognition</h3>
        <h4 align="center">Image Conversion</h4><br />
     <br />
     <!-- Modal -->
    <!-- Success Process-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header" style="background-color: #89c4f4; ">
            <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Success</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Image Processed Successfully!
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-lite" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
    <!-- Failure Process-->
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
                Please make sure:<br/>
                <li style="margin-left: 20px;">You are connected to Internet</li>
                <li style="margin-left: 20px;">File type is .JPG or .PNG</li>
                <li style="margin-left: 20px;">File is under 1MB in size</li>
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
                <div class="modal-header" style="background-color: #62bf7b; ">
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
    <!-- Success ToggleRead-->
    <div class="modal fade" id="exampleModa4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #d15858; ">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Something went wrong!
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
                                    <th>Text</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                @forelse($ocrData as $image)
                                    <tr action="/OCR/Images/delete">
                                        <td style="width: 10px;" name="OCR_id" class="OCR_id">{{$image->OCR_id}}</td>
                                        <td><img style="width: 300px;" class="image" id="image" src="{{  URL::to ('/images')}}/{{ $image->Image_Dir}}"/></td>
                                        <td><textarea rows="30" cols="50" id="Image_Conversion" name="Image_Conversion" class="form-control Image_Conversion">{{$image->Image_Conversion}}</textarea></td>
                                        <td>
                                            @if($image->Image_Traversed == 'Unread')
                                                <button class="btn btn-success read" type="button">Mark Read</button>
                                                @else
                                                <button class="btn btn-secondary read" type="button">Mark Unread</button>
                                            @endif
                                        </td>
                                        <td>
                                            @if($image->Image_Text == 'Unprocessed')
                                                <button class="btn btn-warning process" type="button">Process</button>
                                                @else
                                                <button class="btn btn-info process" type="button" disabled>Processed</button>
                                            @endif
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

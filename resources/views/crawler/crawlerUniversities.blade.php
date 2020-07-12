@extends('layouts.app')

@section('content')
<br/>
    @if(Auth::user()->isAdmin())
    <center><img src="../img/malware.png"/></center>
    <h3 align="center"><img style="width: 30px;" src="../img/campusTwo.png"/> | Universities</h3><br />
    <h4 align="center">http://pastic.gov.pk </h4><br />

    <!-- Modal -->
    <!-- Success -->
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
            Database have been updated!
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-lite" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
    <!-- Failure -->
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

    @endif
    <?php
        
        include('php/simple_html_dom.php'); 
        $html = file_get_html('http://pastic.gov.pk/database-universities.aspx');
        

    // width: 100%;
    // table-layout: fixed;
    // border-collapse: collapse;


        echo'<div class="panel panel-default">';
            echo'<div class="panel-body">';
            //echo '<div align="right" class ="btn btn-danger">Browser May Become Slow & Unstable</div>';
            // echo '<blockquote class="blockquote-reverse">
            // <kbd>Browser May Become Slow & Unstable!</<kbd>';
            echo '<h3 align="right"><a class ="btn btn-warning">PUSH ALL (Unstable)</a></h1>';
            



                echo'<div class="table-responsive">';
                    $count=0;
                    $UniCount=0;
                    echo '<table style="width:100%" class="table table-striped table-bordered sortable" id="table">';
                        echo '<thead>
                                <tr>
                                    <th>#</th>
                                    <th >University Name</th>
                                    <th>Sector</th>
                                    <th>Main Campus</th>
                                    <th>Address</th>
                                    <th>Phone No.</th>
                                    <th>Email</th>
                                    <th>Url</th>
                                    <th>Rank</th>
                                    <th>Files</th>
                                    <th>Action</th>
                                </tr>';
                        echo '</thead>';

                        echo '<tbody>';
                            foreach($html->find('table tbody tr') as $tr) {
                                $UniCount++;
                                $Uni_Name = "";
                                $data = "";

                                echo '<tr action="/University_Store">';
                                echo '<td name="serial">'.$UniCount.'</td>';
                                foreach($tr->find('td') as $t) {
                                    $count++;
                                    if($count==1){
                                        $Uni_Name=$t->plaintext;
                                        $data = DB::table('universities')->where('Uni_Name', '=', $Uni_Name)->get();
                                        //echo '<td><textarea wrap="soft" rows="20" cols="200" class="form-control" type="text" name="Uni_Name" value="'.$Uni_Name.'"> '.$Uni_Name.'</textarea></td>';
                                        echo '<td ><textarea rows="1" col="500"    style="overflow: auto;"  type="text" name="Uni_Name" value="'.$t->plaintext.'">'.$t->plaintext.'</textarea></td>';
                                    }

                                    if($count==2)
                                    echo '<td><input size="5" class="form-control" type="text" name="Uni_Sector" value="'.$t->plaintext.'"></td>';

                                    if($count==3)
                                    echo '<td><input size="8" class="form-control" type="text" name="Uni_Main" value="'.$t->plaintext.'"></td>';

                                    if($count==4)
                                    echo '<td><input size="20" class="form-control"  type="text" name="Uni_Address" value="'.$t->plaintext.'"></td>';

                                    if($count==5)
                                    echo '<td><input size="20" class="form-control col-md-3" type="text" name="Uni_Phone" value="'.$t->plaintext.'"></td>';

                                    if($count==6){
                                        
                                        $temp = $t->plaintext;
                                        //echo '<input class="form-control col-md-9" type="text" name="first_OI" value="'.$temp.'">';

                                        $email= substr($temp, 7, strpos($temp,"Fax")-9);
                                        echo '<td><input size="20" class="form-control col-md-9" type="text"  name="Uni_Email" value="'.$email.'"></td>';

                                        $url= substr($temp, strpos($temp,"URL")+4, strlen($temp));
                                        echo '<td><input size="20" class="form-control col-md-9" type="text" name="Uni_Url" value="'.$url.'"></td>';
                                        echo '<td><input size="1" class="form-control col-md-9" type="text" name="Uni_Rank" value="0"></td>';
                                        echo '<td><input size="2" class="form-control col-md-9" type="text" name="Uni_Files" value="N/A"></td>';
                                        // echo '<td><a href="/Campus/$row->Uni_id" class="btn btn-success">PUSH</a></td>';
                                        // echo '<td><button class="btn btn-success" type="button" onclick="formAJAX(this)">PUSH</button></td>';
                                        if($data->count()!=0){
                                            echo '<td><button class="btn btn-primary btn-submit" type="button">UPDATE</button></td>';
                                        }else{
                                            echo '<td><button class="btn btn-success btn-submit" type="button">PUSH</button></td>';
                                        }
                                    }
                                }
                                
                                    
                                

                                echo '</div>';
                                echo '</tr>';

                                //$data = DB::table('universities')->where('Uni_Name', '=', $Uni_Name)->get();
                                if($data->count()!=0){
                                    foreach($data as $row) {
                                        echo '<tr><td><img src="/img/database24.png"/></td>';
                                        echo '<td>'.$row->Uni_Name.'</td>';
                                        echo '<td style="padding-left: 20px;">'.$row->Uni_Sector.'</td>';
                                        echo '<td style="padding-left: 20px;">'.$row->Uni_Main.'</td>';
                                        echo '<td style="padding-left: 20px;">'.$row->Uni_Address.'</td>';
                                        echo '<td style="padding-left: 20px;">'.$row->Uni_Phone.'</td>';
                                        echo '<td style="padding-left: 20px;">'.$row->Uni_Email.'</td>';
                                        echo '<td style="padding-left: 20px;">'.$row->Uni_Url.'</td>';
                                        echo '<td style="padding-left: 20px;">'.$row->Uni_Rank.'</td>';
                                        echo '<td style="padding-left: 20px;">'.$row->Uni_Files.'</td>';
                                        echo '<td></td></tr>';
                                    }
                                }


                                $count=0;
                            }
                        echo '</tbody>';
                    echo '</table>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    ?>
@endsection
@extends('layouts.app')

@section('content')
    <br/>
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
    @if(Auth::user()->isAdmin())
        <center><img src="../img/malware.png"/></center>
        <h3 align="center"><img style="width: 30px;" src="../img/rank.png"/> | Universities Ranking</h3><br />
        <h4 align="center">https://www.4icu.org </h4><br />
    @endif
    <?php   include('php/simple_html_dom.php'); ?>
    <?php $html = file_get_html('https://www.4icu.org/pk/'); ?>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="table-responsive">
                <?php $count=0; ?> 
                <table  style="width:100%" class="sortable table table-striped table-bordered" id="table">
                    <thead>
                        <tr>
                            <th>University Rank</th>
                            <th>University Name</th>
                            <th>Main Campus</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php 
                            foreach($html->find('table tbody tr') as $tr) {
                                $count++;
                                if($count==174){
                                    break;
                                }
                                $tempcount = 0;
                                $rank = 0;
                                $name = "";
                                $town = "";
                                $data;

                                foreach($tr->find('td') as $t) {
                                    $tempcount++;
                                    if($tempcount==1){
                                        $rank = $t->innertext;
                                        echo '<td >'.$rank.'</td>';
                                    }
                                    elseif($tempcount==2){
                                        $name = $t->innertext;
                                        echo '<td>'.$name.'</td>';

                                        foreach($t->find('a') as $z) {
                                            $name = $z->innertext;
                                        }
                                    }
                                    elseif($tempcount==3){
                                        $town = $t->innertext;
                                        if(strpos($town, ".") !== false){
                                            $town= substr($town, 0, strpos($town,"."));
                                            echo '<td>'.$town.'</td>';

                                            $name = str_replace("'", "\'", $name);
                                            $data = DB::select( DB::raw("SELECT * FROM universities WHERE Uni_Name = '$name' and Uni_Main = '$town'") );
                                            if(count($data)==0){
                                                echo '<td>'."NO ENTRY IN DB".'<br/>(Push University Info Before Updating Rank)'.'</td>';
                                            }
                                        }else{
                                            echo '<td>'.$town.'</td>';

                                            $name = str_replace("'", "\'", $name);
                                            $data = DB::select( DB::raw("SELECT * FROM universities WHERE Uni_Name = '$name' and Uni_Main = '$town'") );
                                            if(count($data)==0){
                                                echo '<td>'."NO ENTRY IN DB".'<br/>(Push University Info Before Updating Rank)'.'</td>';
                                            }
                                        }
                                    }
                                    
                                    
                                    
                                } 
                                echo '</tr>';

                                

                                foreach($data as $row) {
                                    echo '<tr><td ><img src="/img/database24.png"/> &nbspBEST MATCH</td>';
                                    echo '<td name="Uni_Name">'.$row->Uni_Name.'</td>';
                                    echo '<td >'.$row->Uni_Main.'</td>';
                                    if($row->Uni_Rank == 0){
                                        echo '<td class="current" >CURRENT: '.$row->Uni_Rank.' &nbsp<button class="btn btn-primary btn-submit" type="button">PUSH Rank</button></td>';
                                    }else{
                                        echo '<td class="current" >CURRENT: '.$row->Uni_Rank.' &nbsp<button class="btn btn-primary btn-info" type="button">UPDATE Rank</button></td>';
                                    }
                                    echo '<td name="Uni_Rank">'.$rank.'</td>';
                                    echo '</tr>';
                                    
                                    
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
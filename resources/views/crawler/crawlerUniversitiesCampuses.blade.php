@extends('layouts.app')

@section('content')

    <?php   include('php/simple_html_dom.php'); ?>
    <?php $html = file_get_html('https://www.hec.gov.pk/english/universities/Pages/DAIs/HEC-recognized-Campuses.aspx'); ?>
    
    <center><img src="../img/malware.png"/></center>
    <h3 align="center"><img style="width: 30px;" src="../img/campusthree24.png"/> | Campuses List</h3><br />
    <h4 align="center">https://www.hec.gov.pk </h4><br />

    <div class="panel panel-default">
        <div class="panel-body">
            <div id="ctl00_PlaceHolderMain_ctl01__ControlWrapper_RichHtmlField" class="ms-rtestate-field" style="display:inline" aria-labelledby="ctl00_PlaceHolderMain_ctl01_label">
                <span class="ms-rteThemeForeColor-5-4">Higher Education Commission only recognizes the campuses of Public and Private sector Universities/Degree Awarding Institutes listed here&#58;</span>
            </div>  
            <div class="table-responsive">  
                <table  style="width:100%" class="sortable table table-striped table-bordered" id="table">  
                    <tbody>      
                        <?php 
                            echo '<thead>
                            <tr>
                                <th>S.No</th>
                                <th >University/DAI</th>
                                <th>Campuses Location</th>
                                
                            </tr>';
                            echo '</thead>';
                            echo '<tbody>';
                            $temp=0;
                            foreach($html->find('table tbody tr') as $tr) {
                                $tempcount=0;
                                foreach($tr->find('td') as $t) {
                                    if ($temp<3) {
                                            $temp++;
                                            break;
                                    }else{
                                        $tempcount++;
                                        if($tempcount==1){
                                            $store=$t->innertext;
                                            echo '<tr><td>'.$store.'</td>';
                                        } elseif($tempcount==2){ 
                                            $store=$t->innertext;
                                            echo '<td>'.$store.'</td>';
                                        }elseif ($tempcount==3) {
                                            $store=$t->innertext;
                                            echo '<td>'.$store.'</td></tr>';
                                        }
                                    }
                                }
                            }
                        ?> 
                    </tbody>              
                </table>
            </div>
        </div>
    </div>
      
                     

@endsection
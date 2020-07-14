<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Test;
use App\TestAnswer;
use App\Topic;
use App\Question;
use App\QuestionsOption;
use App\Department;
use App\Http\Requests\StoreTestRequest;

class RecommendationsController extends Controller
{
    public function index(){
        if (Auth::guest()) return redirect('login');
        $dataProfile2 = DB::table('users')->where('id', '=', Auth::id())->get();
        $dataPersonality = DB::table('personality')->where('user_id', '=', Auth::id())->get();
        $dataDiagnostic = DB::table('tests')
            ->orderBy('created_at', 'desc')
            ->where('user_id', '=', Auth::id())
            ->where('subject', 'NOT LIKE', 'NAT-%')
            ->get();
            $dataDiagnostic2 = DB::table('tests')
                ->orderBy('created_at', 'desc')
                ->where('user_id', '=', Auth::id())
                ->where('subject', 'NOT LIKE', 'NAT-%')
                ->where('subject', '=', 'English')
                ->get();
            $dataDiagnostic3 = DB::table('tests')
                ->orderBy('created_at', 'desc')
                ->where('user_id', '=', Auth::id())
                ->where('subject', 'NOT LIKE', 'NAT-%')
                ->where('subject', '=', 'Analytical')
                ->get();
            $dataDiagnostic4 = DB::table('tests')
                ->orderBy('created_at', 'desc')
                ->where('user_id', '=', Auth::id())
                ->where('subject', 'NOT LIKE', 'NAT-%')
                ->where('subject', '=', 'Quantitative')
                ->get();
        $dataSelection = DB::table('tests')
            ->orderBy('created_at', 'desc')
            ->where('user_id', '=', Auth::id())
            ->where('subject', 'LIKE', 'NAT-%')
            ->get();

        if($dataProfile2[0]->city != '' && $dataProfile2[0]->firstname != '') $dataProfile = true;
        else $dataProfile = false;
        if($dataProfile2[0]->ssc != '' && $dataProfile2[0]->hssc != '') $dataAcademic = true;
        else $dataAcademic = false;
        if(count($dataPersonality) != 0) $dataPersonality = true;
        else $dataPersonality = false;
        if(count($dataDiagnostic) != 0 && count($dataDiagnostic2) != 0
            && count($dataDiagnostic3) != 0 && count($dataDiagnostic4) != 0) $dataDiagnostic = true;
        else $dataDiagnostic = false;
        if(count($dataSelection) != 0) $dataSelection = true;
        else $dataSelection = false;
        

        return view('recommendations.index', compact('data', 'dataProfile', 'dataAcademic', 'dataPersonality', 'dataDiagnostic', 'dataSelection'));
    }

    public function APIindex($id){
        $dataProfile2 = DB::table('users')->where('id', '=', $id)->get();
        $dataPersonality = DB::table('personality')->where('user_id', '=', $id)->get();
        $dataDiagnostic = DB::table('tests')
            ->orderBy('created_at', 'desc')
            ->where('user_id', '=', $id)
            ->where('subject', 'NOT LIKE', 'NAT-%')
            ->get();
            $dataDiagnostic2 = DB::table('tests')
                ->orderBy('created_at', 'desc')
                ->where('user_id', '=', $id)
                ->where('subject', 'NOT LIKE', 'NAT-%')
                ->where('subject', '=', 'English')
                ->get();
            $dataDiagnostic3 = DB::table('tests')
                ->orderBy('created_at', 'desc')
                ->where('user_id', '=', $id)
                ->where('subject', 'NOT LIKE', 'NAT-%')
                ->where('subject', '=', 'Analytical')
                ->get();
            $dataDiagnostic4 = DB::table('tests')
                ->orderBy('created_at', 'desc')
                ->where('user_id', '=', $id)
                ->where('subject', 'NOT LIKE', 'NAT-%')
                ->where('subject', '=', 'Quantitative')
                ->get();
        $dataSelection = DB::table('tests')
            ->orderBy('created_at', 'desc')
            ->where('user_id', '=', $id)
            ->where('subject', 'LIKE', 'NAT-%')
            ->get();

        if($dataProfile2[0]->city != '' && $dataProfile2[0]->firstname != '') $dataProfile = true;
        else $dataProfile = false;
        if($dataProfile2[0]->ssc != '' && $dataProfile2[0]->hssc != '') $dataAcademic = true;
        else $dataAcademic = false;
        if(count($dataPersonality) != 0) $dataPersonality = true;
        else $dataPersonality = false;
        if(count($dataDiagnostic) != 0 && count($dataDiagnostic2) != 0
            && count($dataDiagnostic3) != 0 && count($dataDiagnostic4) != 0) $dataDiagnostic = true;
        else $dataDiagnostic = false;
        if(count($dataSelection) != 0) $dataSelection = true;
        else $dataSelection = false;
        
        $response = array();
        $response['dataProfile'] = $dataProfile;
        $response['dataAcademic'] = $dataAcademic;
        $response['dataPersonality'] = $dataPersonality;
        $response['dataDiagnostic'] = $dataDiagnostic;
        $response['dataSelection'] = $dataSelection;
        echo json_encode($response);
        
    }

    public function generate(){
        if (Auth::guest()) return redirect('login');
        $dataProfile2 = DB::table('users')->where('id', '=', Auth::id())->get();
        $dataPersonality = DB::table('personality')->where('user_id', '=', Auth::id())->get();
        $dataDiagnostic = DB::table('tests')
            ->orderBy('created_at', 'desc')
            ->where('user_id', '=', Auth::id())
            ->where('subject', 'NOT LIKE', 'NAT-%')
            ->get();
        $dataSelection = DB::table('tests')
            ->orderBy('created_at', 'desc')
            ->where('user_id', '=', Auth::id())
            ->where('subject', 'LIKE', 'NAT-%')
            ->get();

        if($dataProfile2[0]->city != '') $dataProfile = true;
        else $dataProfile = false;
        if($dataProfile2[0]->ssc != '' && $dataProfile2[0]->hssc != '') $dataAcademic = true;
        else $dataAcademic = false;
        if(count($dataPersonality) != 0) $dataPersonality = true;
        else $dataPersonality = false;
        if(count($dataDiagnostic) != 0) $dataDiagnostic = true;
        else $dataDiagnostic = false;
        if(count($dataSelection) != 0) $dataSelection = true;
        else $dataSelection = false;
        if (!$dataProfile || !$dataAcademic || !$dataPersonality || !$dataDiagnostic || !$dataSelection) return redirect('recommendations');




        //academics
        $dataAcademic = DB::table('users')->where('id', '=', Auth::id())->get();
        $dataSSC = '';
        $dataSSCType = '';
        $dataSSCTrack = '';
        $dataSSCTop = array();
        $dataSSCTotal = 0;

        $dataHSSC = '';
        $dataHSSCType = '';
        $dataHSSCTrack = '';
        $dataHSSCTop = array();
        $dataHSSCTotal = 0;

        if($dataAcademic[0]->ssc != ''){
            if($dataAcademic[0]->ssc == 'matric'){
                $dataSSCType = "Matric";
                $dataSSC= DB::table('matric')->where('uid', '=', Auth::id())->get();
                $dataSSCTrack = $dataSSC[0]->track;
                if($dataSSCTrack == 'Medical'){
                    $dataSSCTop = array(
                        "english" => intval(($dataSSC[0]->english/150)*100),
                        "urdu" => intval(($dataSSC[0]->urdu/150)*100),
                        "islamiyat_Ethics" => intval(($dataSSC[0]->islamiyat_Ethics/75)*100),
                        "mathematics" => intval(($dataSSC[0]->mathematics/150)*100),
                        "physics" => intval(($dataSSC[0]->physics/150)*100),
                        "chemistry" => intval(($dataSSC[0]->chemistry/150)*100),
                        "biology" => intval(($dataSSC[0]->biology/150)*100)
                    );
                    $count = 0;
                    foreach ($dataSSCTop as $key => $value) {
                        $dataSSCTotal = $dataSSCTotal + $value;
                        $count++;
                    }
                    $dataSSCTotal = intval($dataSSCTotal/$count);
                    arsort($dataSSCTop);
                    $dataSSCTop = array_slice($dataSSCTop, 0, 3);

                }elseif($dataSSCTrack == 'Engineering'){
                    $dataSSCTop = array(
                        "english" => intval(($dataSSC[0]->english/150)*100),
                        "urdu" => intval(($dataSSC[0]->urdu/150)*100),
                        "islamiyat_Ethics" => intval(($dataSSC[0]->islamiyat_Ethics/75)*100),
                        "mathematics" => intval(($dataSSC[0]->mathematics/150)*100),
                        "physics" => intval(($dataSSC[0]->physics/150)*100),
                        "chemistry" => intval(($dataSSC[0]->chemistry/150)*100),
                        "computer" => intval(($dataSSC[0]->computer/150)*100)
                    );
                    $count = 0;
                    foreach ($dataSSCTop as $key => $value) {
                        $dataSSCTotal = $dataSSCTotal + $value;
                        $count++;
                    }
                    $dataSSCTotal = intval($dataSSCTotal/$count);
                    arsort($dataSSCTop);
                    $dataSSCTop = array_slice($dataSSCTop, 0, 3);
                }elseif($dataSSCTrack == 'Humanities'){
                    $dataSSCTop = array(
                        "english" => intval(($dataSSC[0]->english/150)*100),
                        "urdu" => intval(($dataSSC[0]->urdu/150)*100),
                        "islamiyat_Ethics" => intval(($dataSSC[0]->islamiyat_Ethics/75)*100),
                        "mathematics" => intval(($dataSSC[0]->mathematics/150)*100),
                        "general_sciences Sciences" => intval(($dataSSC[0]->general_sciences/150)*100),
                        "economics" => intval(($dataSSC[0]->economics/150)*100),
                        "Business business_studies" => intval(($dataSSC[0]->business_studies/150)*100)
                    );
                    $count = 0;
                    foreach ($dataSSCTop as $key => $value) {
                        $dataSSCTotal = $dataSSCTotal + $value;
                        $count++;
                    }
                    $dataSSCTotal = intval($dataSSCTotal/$count);
                    arsort($dataSSCTop);
                    $dataSSCTop = array_slice($dataSSCTop, 0, 3);
                }
                arsort($dataSSCTop);

                // echo "<table>";
                //     foreach ($dataSSCTop as $key => $value) {
                //             echo "<tr>";
                //             echo "<td>$key</td>"; // Get index.
                //             echo "<td>$value</td>"; // Get value.
                //             echo "</tr>";
                        
                //     }
                // echo "</table>";                
                
            }elseif($dataAcademic[0]->ssc == 'olevels'){
                $dataSSCType = "O-Levels";
                $dataSSC= DB::table('olevels')->where('uid', '=', Auth::id())->get();
                $dataSSCTrack = "N/A";

                if($dataSSC[0]->art != 'null'){
                    $array2 = array("art" => $dataSSC[0]->art);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);       
                }
                if($dataSSC[0]->biology != 'null'){
                    $array2 = array("biology" => $dataSSC[0]->biology);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);
                    $dataSSCTrack = "Biology";
                }
                if($dataSSC[0]->businessStudies != 'null'){
                    $array2 = array("businessStudies" => $dataSSC[0]->businessStudies);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);    
                }
                if($dataSSC[0]->chemistry != 'null'){
                    $array2 = array("chemistry" => $dataSSC[0]->chemistry);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);
                }
                if($dataSSC[0]->computerStudies != 'null'){
                    $array2 = array("computerStudies" => $dataSSC[0]->computerStudies);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);
                    $dataSSCTrack = "Computer";   
                }
                if($dataSSC[0]->economics != 'null'){
                    $array2 = array("economics" => $dataSSC[0]->economics);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);      
                }
                if($dataSSC[0]->englishLanguage != 'null'){
                    $array2 = array("englishLanguage" => $dataSSC[0]->englishLanguage);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);       
                }
                if($dataSSC[0]->islamiyat != 'null'){
                    $array2 = array("islamiyat" => $dataSSC[0]->islamiyat);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);       
                }
                if($dataSSC[0]->mathematicsAdditional != 'null'){
                    $array2 = array("mathematicsAdditional" => $dataSSC[0]->mathematicsAdditional);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);       
                }
                if($dataSSC[0]->mathematicsD != 'null'){
                    $array2 = array("mathematicsD" => $dataSSC[0]->mathematicsD);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);  
                    $dataSSCTrack = "Mathematics";         
                }
                if($dataSSC[0]->pakistanStudies != 'null'){
                    $array2 = array("pakistanStudies" => $dataSSC[0]->pakistanStudies);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);       
                }
                if($dataSSC[0]->religiousStudies != 'null'){
                    $array2 = array("religiousStudies" => $dataSSC[0]->religiousStudies);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);    
                }
                if($dataSSC[0]->sociology != 'null'){
                    $array2 = array("sociology" => $dataSSC[0]->sociology);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);      
                }
                if($dataSSC[0]->urduFirstLanguage != 'null'){
                    $array2 = array("urduFirstLanguage" => $dataSSC[0]->urduFirstLanguage);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);      
                }
                if($dataSSC[0]->urduSecondLanguage != 'null'){
                    $array2 = array("urduSecondLanguage" => $dataSSC[0]->urduSecondLanguage);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);    
                }

                // echo "<table>";
                // foreach ($dataSSCTop as $key => $value) {
                //     echo "<tr>";
                //     echo "<td>$key</td>"; // Get index.
                //     echo "<td>$value</td>"; // Get value.
                //     echo "</tr>";
                // }
                // echo "</table>";  
                
                $count = 0;
                foreach ($dataSSCTop as $key => $value) {
                    $dataSSCTotal = $dataSSCTotal + $value;
                    $count++;
                }
                $dataSSCTotal = intval($dataSSCTotal/$count);
                arsort($dataSSCTop);
                $dataSSCTop = array_slice($dataSSCTop, 0, 3);
                
            }
        }

        if($dataAcademic[0]->hssc != ''){
            if($dataAcademic[0]->hssc == 'hssc'){
                $dataHSSCType = "Intermediate";
                $dataHSSC= DB::table('hssc')->where('uid', '=', Auth::id())->get();
                $dataHSSCTrack = $dataHSSC[0]->track;
                if($dataHSSCTrack == 'Pre-Med'){
                    $dataHSSCTop = array(
                        "english" => intval(($dataHSSC[0]->english/200)*100),
                        "urdu" => intval(($dataHSSC[0]->urdu/200)*100),
                        "islamiyat_Ethics" => intval(($dataHSSC[0]->islamiyat_Ethics/50)*100),
                        "pakistan_Studies" => intval(($dataHSSC[0]->pakistan_Studies/20)*100),
                        "physics" => intval(($dataHSSC[0]->physics/200)*100),
                        "chemistry" => intval(($dataHSSC[0]->chemistry/200)*100),
                        "biology" => intval(($dataHSSC[0]->biology/200)*100)
                    );
                    
                    $count = 0;
                    foreach ($dataHSSCTop as $key => $value) {
                        $dataHSSCTotal = $dataHSSCTotal + $value;
                        $count++;
                    }
                    $dataHSSCTotal = intval($dataHSSCTotal/$count);
                    arsort($dataHSSCTop);
                    $dataHSSCTop = array_slice($dataHSSCTop, 0, 3);

                }elseif($dataHSSCTrack == 'Pre-Engineering'){
                    $dataHSSCTop = array(
                        "english" => intval(($dataHSSC[0]->english/200)*100),
                        "urdu" => intval(($dataHSSC[0]->urdu/200)*100),
                        "islamiyat_Ethics" => intval(($dataHSSC[0]->islamiyat_Ethics/50)*100),
                        "pakistan_Studies" => intval(($dataHSSC[0]->pakistan_Studies/50)*100),
                        "physics" => intval(($dataHSSC[0]->physics/200)*100),
                        "chemistry" => intval(($dataHSSC[0]->chemistry/200)*100),
                        "mathematics" => intval(($dataHSSC[0]->mathematics/200)*100)
                    );
                    
                    $count = 0;
                    foreach ($dataHSSCTop as $key => $value) {
                        $dataHSSCTotal = $dataHSSCTotal + $value;
                        $count++;
                    }
                    $dataHSSCTotal = intval($dataHSSCTotal/$count);
                    arsort($dataHSSCTop);
                    $dataHSSCTop = array_slice($dataHSSCTop, 0, 3);
                }elseif($dataHSSCTrack == 'ICS'){
                    if($dataHSSC[0]->physics != 'null'){
                        $dataHSSCTop = array(
                            "english" => intval(($dataHSSC[0]->english/200)*100),
                            "urdu" => intval(($dataHSSC[0]->urdu/200)*100),
                            "islamiyat_Ethics" => intval(($dataHSSC[0]->islamiyat_Ethics/50)*100),
                            "pakistan_Studies" => intval(($dataHSSC[0]->pakistan_Studies/50)*100),
                            "mathematics" => intval(($dataHSSC[0]->mathematics/200)*100),
                            "physics" => intval(($dataHSSC[0]->physics/200)*100),
                            "computer" => intval(($dataHSSC[0]->computer/200)*100)
                        );
                    
                        $count = 0;
                        foreach ($dataHSSCTop as $key => $value) {
                            $dataHSSCTotal = $dataHSSCTotal + $value;
                            $count++;
                        }
                        $dataHSSCTotal = intval($dataHSSCTotal/$count);
                        arsort($dataHSSCTop);
                        $dataHSSCTop = array_slice($dataHSSCTop, 0, 3);

                    }elseif($dataHSSC[0]->statistics != 'null'){
                        $dataHSSCTop = array(
                            "english" => intval(($dataHSSC[0]->english/200)*100),
                            "urdu" => intval(($dataHSSC[0]->urdu/200)*100),
                            "islamiyat_Ethics" => intval(($dataHSSC[0]->islamiyat_Ethics/50)*100),
                            "pakistan_Studies" => intval(($dataHSSC[0]->pakistan_Studies/50)*100),
                            "mathematics" => intval(($dataHSSC[0]->mathematics/200)*100),
                            "statistics" => intval(($dataHSSC[0]->statistics/200)*100),
                            "computer" => intval(($dataHSSC[0]->computer/200)*100)
                        );
                    
                        $count = 0;
                        foreach ($dataHSSCTop as $key => $value) {
                            $dataHSSCTotal = $dataHSSCTotal + $value;
                            $count++;
                        }
                        $dataHSSCTotal = intval($dataHSSCTotal/$count);
                        arsort($dataHSSCTop);
                        $dataHSSCTop = array_slice($dataHSSCTop, 0, 3);

                    }elseif($dataHSSC[0]->economics != 'null'){
                        $dataHSSCTop = array(
                            "english" => intval(($dataHSSC[0]->english/200)*100),
                            "urdu" => intval(($dataHSSC[0]->urdu/200)*100),
                            "islamiyat_Ethics" => intval(($dataHSSC[0]->islamiyat_Ethics/50)*100),
                            "pakistan_Studies" => intval(($dataHSSC[0]->pakistan_Studies/50)*100),
                            "mathematics" => intval(($dataHSSC[0]->mathematics/200)*100),
                            "economics" => intval(($dataHSSC[0]->economics/200)*100),
                            "computer" => intval(($dataHSSC[0]->computer/200)*100)
                        );
                        
                    
                        $count = 0;
                        foreach ($dataHSSCTop as $key => $value) {
                            $dataHSSCTotal = $dataHSSCTotal + $value;
                            $count++;
                        }
                        $dataHSSCTotal = intval($dataHSSCTotal/$count);
                        arsort($dataHSSCTop);
                        $dataHSSCTop = array_slice($dataHSSCTop, 0, 3);
                    }
                    

                }

                // echo "<table>";
                //     foreach ($dataSSCTop as $key => $value) {
                //             echo "<tr>";
                //             echo "<td>$key</td>"; // Get index.
                //             echo "<td>$value</td>"; // Get value.
                //             echo "</tr>";
                        
                //     }
                // echo "</table>";         


            }elseif($dataAcademic[0]->hssc == 'alevels'){
                $dataHSSCType = "A-Levels";
                $dataHSSC= DB::table('alevels')->where('uid', '=', Auth::id())->get();
                $dataHSSCTrack = "N/A";

                if($dataHSSC[0]->accounting != 'null'){
                    $array2 = array("accounting" => $dataHSSC[0]->accounting);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);
                    $dataHSSCTrack = "Business";              
                }
                if($dataHSSC[0]->aICT != 'null'){
                    $array2 = array("aICT" => $dataHSSC[0]->aICT);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                }
                if($dataHSSC[0]->art != 'null'){
                    $array2 = array("art" => $dataHSSC[0]->art);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                }
                if($dataHSSC[0]->biology != 'null'){
                    $array2 = array("biology" => $dataHSSC[0]->biology);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                    $dataHSSCTrack = "Biology";     
                }
                if($dataHSSC[0]->businessStudies != 'null'){
                    $array2 = array("businessStudies" => $dataHSSC[0]->businessStudies);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);     
                    $dataHSSCTrack = "Business";      
                }
                if($dataHSSC[0]->chemistry != 'null'){
                    $array2 = array("chemistry" => $dataHSSC[0]->chemistry);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                }
                if($dataHSSC[0]->computerScience != 'null'){
                    $array2 = array("computerScience" => $dataHSSC[0]->computerScience);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);  
                    $dataHSSCTrack = "Computer";         
                }
                if($dataHSSC[0]->economics != 'null'){
                    $array2 = array("economics" => $dataHSSC[0]->economics);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);    
                    $dataHSSCTrack = "Business";        
                }
                if($dataHSSC[0]->englishLanguage != 'null'){
                    $array2 = array("englishLanguage" => $dataHSSC[0]->englishLanguage);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                }
                if($dataHSSC[0]->englishLiterature != 'null'){
                    $array2 = array("englishLiterature" => $dataHSSC[0]->englishLiterature);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                }
                if($dataHSSC[0]->environmentalManagement != 'null'){
                    $array2 = array("environmentalManagement" => $dataHSSC[0]->environmentalManagement);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                }
                if($dataHSSC[0]->globalPerspectives != 'null'){
                    $array2 = array("globalPerspectives" => $dataHSSC[0]->globalPerspectives);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                }
                if($dataHSSC[0]->governmentPolitics != 'null'){
                    $array2 = array("governmentPolitics" => $dataHSSC[0]->governmentPolitics);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                }
                if($dataHSSC[0]->history != 'null'){
                    $array2 = array("history" => $dataHSSC[0]->history);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                }
                if($dataHSSC[0]->law != 'null'){
                    $array2 = array("law" => $dataHSSC[0]->law);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2); 
                    $dataHSSCTrack = "Law";           
                }
                if($dataHSSC[0]->mathematics != 'null'){
                    $array2 = array("mathematics" => $dataHSSC[0]->mathematics);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);     
                    $dataHSSCTrack = "Mathematics";       
                }
                if($dataHSSC[0]->mathematicsFurther != 'null'){
                    $array2 = array("mathematicsFurther" => $dataHSSC[0]->mathematicsFurther);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);       
                    $dataHSSCTrack = "Mathematics";         
                }
                if($dataHSSC[0]->mediaStudies != 'null'){
                    $array2 = array("mediaStudies" => $dataHSSC[0]->mediaStudies);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                }
                if($dataHSSC[0]->physics != 'null'){
                    $array2 = array("physics" => $dataHSSC[0]->physics);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                }
                if($dataHSSC[0]->psychology != 'null'){
                    $array2 = array("psychology" => $dataHSSC[0]->psychology);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                }
                if($dataHSSC[0]->sociology != 'null'){
                    $array2 = array("sociology" => $dataHSSC[0]->sociology);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                }
                if($dataHSSC[0]->urdu != 'null'){
                    $array2 = array("urdu" => $dataHSSC[0]->urdu);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                }
                
                $count = 0;
                foreach ($dataHSSCTop as $key => $value) {
                    $dataHSSCTotal = $dataHSSCTotal + $value;
                    $count++;
                }
                $dataHSSCTotal = intval($dataHSSCTotal/$count);
                arsort($dataHSSCTop);
                $dataHSSCTop = array_slice($dataHSSCTop, 0, 3);
            }
        }


        //diagnostic
        $dataDiagnostic = DB::table('tests')
        ->orderBy('created_at', 'desc')
        ->where('user_id', '=', Auth::id())
        ->where('subject', 'NOT LIKE', 'NAT-%')
        ->get();

        $EnglishDiagnostic = 0;
        $AnalyticalDiagnostic = 0;
        $QuantitativeDiagnostic = 0;
        $PhysicsDiagnostic = 0;
        $ChemistryDiagnostic = 0;
        $MathematicsDiagnostic = 0;
        $BiologyDiagnostic = 0;
        $ComputerDiagnostic = 0;
        $StatisticsDiagnostic = 0;
        $EconomicsDiagnostic = 0;
        $AccountingDiagnostic = 0;
        $CommerceDiagnostic = 0;

        if($dataDiagnostic->count() != 0){
            $EnglishDiagnostic = Test::where('user_id', '=', Auth::id())->where('subject', '=', 'English')->avg('percent');
            $AnalyticalDiagnostic = Test::where('user_id', '=', Auth::id())->where('subject', '=', 'Analytical')->avg('percent');
            $QuantitativeDiagnostic = Test::where('user_id', '=', Auth::id())->where('subject', '=', 'Quantitative')->avg('percent');
            $PhysicsDiagnostic = Test::where('user_id', '=', Auth::id())->where('subject', '=', 'Physics')->avg('percent');
            $ChemistryDiagnostic = Test::where('user_id', '=', Auth::id())->where('subject', '=', 'Chemistry')->avg('percent');
            $MathematicsDiagnostic = Test::where('user_id', '=', Auth::id())->where('subject', '=', 'Mathematics')->avg('percent');
            $BiologyDiagnostic = Test::where('user_id', '=', Auth::id())->where('subject', '=', 'Biology')->avg('percent');
            $ComputerDiagnostic = Test::where('user_id', '=', Auth::id())->where('subject', '=', 'Computer')->avg('percent');
            $StatisticsDiagnostic = Test::where('user_id', '=', Auth::id())->where('subject', '=', 'Statistics')->avg('percent');
            $EconomicsDiagnostic = Test::where('user_id', '=', Auth::id())->where('subject', '=', 'Economics')->avg('percent');
            $AccountingDiagnostic = Test::where('user_id', '=', Auth::id())->where('subject', '=', 'Accounting')->avg('percent');
            $CommerceDiagnostic = Test::where('user_id', '=', Auth::id())->where('subject', '=', 'Commerce')->avg('percent');
            
        }else{
            $dataDiagnostic ='';
        }
        // $EnglishDiagnostic = 70;
        // $QuantitativeDiagnostic = 70;
        // $AnalyticalDiagnostic = 70;




        //personality
        $dataPersonality = -1;
        $result=-1;
        $conventional = -1;
        $enterprising = -1;
        $social = -1;
        $artistic = -1;
        $investigative = -1;
        $realistic = -1;

        $dataPersonality = DB::table('personality')
        ->orderBy('created_at', 'desc')
        ->where('user_id', '=', Auth::id())
        ->get();
        $dataPersonalityTop;
        $countPersonality = 0;

        if($dataPersonality->count() != 0){
            $result = strtoupper($dataPersonality[0]->result);
            $conventional = $dataPersonality[0]->conventional;
            $enterprising = $dataPersonality[0]->enterprising;
            $social = $dataPersonality[0]->social;
            $artistic = $dataPersonality[0]->artistic;
            $investigative = $dataPersonality[0]->investigative;
            $realistic = $dataPersonality[0]->realistic;


            $dataPersonalityTop = array(
                "conventional" => intval($dataPersonality[0]->conventional),
                "enterprising" => intval($dataPersonality[0]->enterprising),
                "social" => intval($dataPersonality[0]->social),
                "artistic" => intval($dataPersonality[0]->artistic),
                "investigative" => intval($dataPersonality[0]->investigative),
                "realistic" => intval($dataPersonality[0]->realistic)
            );
            arsort($dataPersonalityTop);
            $dataPersonalityTop = array_slice($dataPersonalityTop, 0, 3);
        }
        

        //selection
        $dataSelection = DB::table('tests')
        ->orderBy('created_at', 'desc')
        ->where('user_id', '=', Auth::id())
        ->where('subject', 'LIKE', 'NAT-%')
        ->get();

        $subject = '';
        $English = 0;
        $Analytical = 0;
        $Quantitative = 0;
        $subjectScore1 = 0;
        $subjectScore2 = 0;
        $subjectScore3 = 0;

        if($dataSelection->count() != 0){
            $subject = Test::select('subject')->where('user_id', '=', Auth::id())->where('subject', 'LIKE', 'NAT-%')->orderBy('created_at', 'desc')->get()[0]->subject;
            $English = Test::select('EnglishScore')->where('user_id', '=', Auth::id())->where('subject', 'LIKE', 'NAT-%')->orderBy('created_at', 'desc')->get()[0]->EnglishScore;
            $Analytical = Test::select('AnalyticalScore')->where('user_id', '=', Auth::id())->where('subject', 'LIKE', 'NAT-%')->orderBy('created_at', 'desc')->get()[0]->AnalyticalScore;
            $Quantitative = Test::select('QuantitativeScore')->where('user_id', '=', Auth::id())->where('subject', 'LIKE', 'NAT-%')->orderBy('created_at', 'desc')->get()[0]->QuantitativeScore;

            $subjectScore1 = Test::select('subjectScore1')->where('user_id', '=', Auth::id())->where('subject', 'LIKE', 'NAT-%')->orderBy('created_at', 'desc')->get()[0]->subjectScore1;
            $subjectScore2 = Test::select('subjectScore2')->where('user_id', '=', Auth::id())->where('subject', 'LIKE', 'NAT-%')->orderBy('created_at', 'desc')->get()[0]->subjectScore2;
            $subjectScore3 = Test::select('subjectScore3')->where('user_id', '=', Auth::id())->where('subject', 'LIKE', 'NAT-%')->orderBy('created_at', 'desc')->get()[0]->subjectScore3;
        }else{
            $dataSelection ='';
        }




        //profile
        $dataProfile;
        $dataProfile2 = DB::table('users')->where('id', '=', Auth::id())->get();
        if($dataProfile2[0]->firstname != '') $dataProfile = ucfirst($dataProfile2[0]->firstname);
        else $dataProfile = ucfirst($dataProfile2[0]->name);
        if($dataProfile2[0]->gender == 'Male') $dataProfile = "Mr. ".$dataProfile;
        elseif ($dataProfile2[0]->gender == 'Female') $dataProfile = "Ms. ".$dataProfile;


        //queries
        //personality
        $dbrealistic = DB::table('universities')
            ->join('cities', 'cities.Uni_id', '=', 'universities.Uni_id')
            ->join('departments', 'departments.City_id', '=', 'cities.City_id')
            ->orwhere('Dep_Name', 'LIKE', '%Applied%')
            ->orwhere('Dep_Name', 'LIKE', '%Agriculture%')
            ->orwhere('Dep_Name', 'LIKE', '%Engineering%')
            ->groupBy('departments.Dep_Name')
            ->limit(5)
            ->get();
            
            // ->orderBy('universities.Uni_Rank', 'ASC')
            // echo count($dbrealistic);
            // print_r( $dbrealistic);

            // foreach($dbrealistic as $dep){
            //     echo $dep->Dep_id;
            //     echo $dep->Dep_Name;
            //     echo $dep->Dep_Tags;
            //     echo $dep->Dep_fees;
            //     echo $dep->Dep_PrevAggr;
            //     echo $dep->Dep_AggrMatric;
            //     echo $dep->Dep_AggrHssc;
            //     echo $dep->Dep_AggrNts;
            //     echo $dep->Dep_AddmDeadline;
            //     echo $dep->Dep_TestName;
            // }
        $dbenterprising = DB::table('universities')
            ->join('cities', 'cities.Uni_id', '=', 'universities.Uni_id')
            ->join('departments', 'departments.City_id', '=', 'cities.City_id')
            ->orwhere('Dep_Name', 'LIKE', '%Business%')
            ->orwhere('Dep_Name', 'LIKE', '%Accounting%')
            ->orwhere('Dep_Name', 'LIKE', '%Finance%')
            ->orwhere('Dep_Name', 'LIKE', '%Language%')
            ->groupBy('departments.Dep_Name')
            ->orderBy('universities.Uni_Rank', 'DESC')
            ->limit(5)
            ->get();
        $dbinvestigative = DB::table('universities')
            ->join('cities', 'cities.Uni_id', '=', 'universities.Uni_id')
            ->join('departments', 'departments.City_id', '=', 'cities.City_id')
            ->orwhere('Dep_Tags', 'LIKE', '%Medicin%')
            ->orwhere('Dep_Name', 'LIKE', '%Applied%')
            ->orwhere('Dep_Name', 'LIKE', '%Computer%')
            ->orwhere('Dep_Name', 'LIKE', '%Engineering%')
            ->groupBy('departments.Dep_Name')
            ->orderBy('universities.Uni_Rank', 'DESC')
            ->limit(5)
            ->get(); 
        $dbartistic = DB::table('universities')
            ->join('cities', 'cities.Uni_id', '=', 'universities.Uni_id')
            ->join('departments', 'departments.City_id', '=', 'cities.City_id')
            ->orwhere('Dep_Tags', 'LIKE', '%Arts%')
            ->groupBy('departments.Dep_Name')
            ->orderBy('universities.Uni_Rank', 'DESC')
            ->limit(5)
            ->get();
        $dbconventional = DB::table('universities')
            ->join('cities', 'cities.Uni_id', '=', 'universities.Uni_id')
            ->join('departments', 'departments.City_id', '=', 'cities.City_id')
            ->orwhere('Dep_Tags', 'LIKE', '%Management%')
            ->groupBy('departments.Dep_Name')
            ->orderBy('universities.Uni_Rank', 'ASC')
            ->limit(5)
            ->get();
        $dbsocial = DB::table('universities')
            ->join('cities', 'cities.Uni_id', '=', 'universities.Uni_id')
            ->join('departments', 'departments.City_id', '=', 'cities.City_id')
            ->orwhere('Dep_Tags', 'LIKE', '%Social%')
            ->orwhere('Dep_Tags', 'LIKE', '%Law%')
            ->groupBy('departments.Dep_Name')
            ->orderBy('universities.Uni_Rank', 'DESC')
            ->limit(5)
            ->get();
        
        

        //past record
        //ssc
        $countpast = 0;
        $top1;
        $top2;
        $top3;
        foreach($dataSSCTop as $key => $val){
            ++$countpast;
            // echo $key;
            // echo " ";
            if($countpast==1) $top1 = $key;
            if($countpast==2) $top2 = $key;
            if($countpast==3) $top3 = $key;
        }
        $dbssc = DB::table('universities')
            ->join('cities', 'cities.Uni_id', '=', 'universities.Uni_id')
            ->join('departments', 'departments.City_id', '=', 'cities.City_id')
            ->orwhere('Dep_Tags', 'LIKE', '%'.$top1.'%')
            ->orwhere('Dep_Tags', 'LIKE', '%'.$top2.'%')
            ->orwhere('Dep_Tags', 'LIKE', '%'.$top3.'%')
            ->orwhere('Dep_Name', 'LIKE', '%'.$top1.'%')
            ->orwhere('Dep_Name', 'LIKE', '%'.$top2.'%')
            ->orwhere('Dep_Name', 'LIKE', '%'.$top3.'%')
            ->groupBy('departments.Dep_Name')
            ->orderBy('universities.Uni_Rank', 'DESC')
            ->limit(5)
            ->get();
        //hssc
        $countpast = 0;
        $top1;
        $top2;
        $top3;
        foreach($dataHSSCTop as $key => $val){
            ++$countpast;
            // echo $key;
            // echo " ";
            if($countpast==1) $top1 = $key;
            if($countpast==2) $top2 = $key;
            if($countpast==3) $top3 = $key;
        }
        $dbhssc = DB::table('universities')
            ->join('cities', 'cities.Uni_id', '=', 'universities.Uni_id')
            ->join('departments', 'departments.City_id', '=', 'cities.City_id')
            ->orwhere('Dep_Tags', 'LIKE', '%'.$top1.'%')
            ->orwhere('Dep_Tags', 'LIKE', '%'.$top2.'%')
            ->orwhere('Dep_Tags', 'LIKE', '%'.$top3.'%')
            ->orwhere('Dep_Name', 'LIKE', '%'.$top1.'%')
            ->orwhere('Dep_Name', 'LIKE', '%'.$top2.'%')
            ->orwhere('Dep_Name', 'LIKE', '%'.$top3.'%')
            ->groupBy('departments.Dep_Name')
            ->orderBy('universities.Uni_Rank', 'DESC')
            ->limit(5)
            ->get();
        //selection
        $dbselection = DB::table('universities')
            ->join('cities', 'cities.Uni_id', '=', 'universities.Uni_id')
            ->join('departments', 'departments.City_id', '=', 'cities.City_id')
            ->where('Dep_AggrNts', '<=', $dataSelection[0]->percent)
            // ->orwhere('Dep_Tags', 'LIKE', '%'.$top2.'%')
            ->groupBy('universities.Uni_id')
            ->orderBy('universities.Uni_Rank', 'DESC')
            ->limit(5)
            ->get();
        //diagnostic
        $top1;
        $top2;
        $top3;
        foreach($dataDiagnostic as $key){
            if($key->subject != '' && $key->subject == 'English' && $key->percent >= 70) $top1 = "Social";
            if($key->subject != '' && $key->subject == 'Analytical' && $key->percent >= 70) $top2 = "Computer";
            if($key->subject != '' && $key->subject == 'Quantitative' && $key->percent >= 70) $top3 = "Engineering";
        }
        $dbdiagnostic = DB::table('universities')
            ->join('cities', 'cities.Uni_id', '=', 'universities.Uni_id')
            ->join('departments', 'departments.City_id', '=', 'cities.City_id')
            ->orwhere('Dep_Tags', 'LIKE', '%'.$top1.'%')
            ->orwhere('Dep_Name', 'LIKE', '%'.$top1.'%')

            ->orwhere('Dep_Tags', 'LIKE', '%'.$top2.'%')
            ->orwhere('Dep_Name', 'LIKE', '%'.$top2.'%')

            ->orwhere('Dep_Tags', 'LIKE', '%'.$top3.'%')
            ->orwhere('Dep_Name', 'LIKE', '%'.$top3.'%')
            ->groupBy('departments.City_id')
            ->orderBy('universities.Uni_Rank', 'DESC')
            ->limit(8)
            ->get();
            
        
        return view('recommendations.generate', compact(
            'dataProfile',
            'dataAcademic', 'dataSSC', 'dataHSSC',  
            'dataSSCType', 'dataSSCTrack', 'dataSSCTop', 'dataSSCTotal', 'dataHSSCType', 'dataHSSCTrack', 'dataHSSCTop', 'dataHSSCTotal',
            'dataDiagnostic', 'EnglishDiagnostic', 'AnalyticalDiagnostic', 'QuantitativeDiagnostic', 'PhysicsDiagnostic', 'ChemistryDiagnostic', 'MathematicsDiagnostic', 'BiologyDiagnostic', 'ComputerDiagnostic', 'StatisticsDiagnostic', 'EconomicsDiagnostic', 'AccountingDiagnostic', 'CommerceDiagnostic', 
            'dataPersonality', 'dataPersonalityTop', 'countPersonality', 'result', 'conventional', 'enterprising', 'social', 'artistic', 'investigative', 'realistic',
            'dataSelection', 'English', 'Analytical', 'Quantitative', 'subjectScore1', 'subjectScore2', 'subjectScore3', 'subject',
            'dbrealistic', 'dbenterprising', 'dbinvestigative', 'dbartistic', 'dbconventional', 'dbsocial',
            'dbssc', 'dbhssc',
            'dbselection',
            'dbdiagnostic'
            ));
    
            


        
    }

    public function APIgenerate($id){
        $dataProfile2 = DB::table('users')->where('id', '=', $id)->get();
        $dataPersonality = DB::table('personality')->where('user_id', '=', $id)->get();
        $dataDiagnostic = DB::table('tests')
            ->orderBy('created_at', 'desc')
            ->where('user_id', '=', $id)
            ->where('subject', 'NOT LIKE', 'NAT-%')
            ->get();
        $dataSelection = DB::table('tests')
            ->orderBy('created_at', 'desc')
            ->where('user_id', '=', $id)
            ->where('subject', 'LIKE', 'NAT-%')
            ->get();

        if($dataProfile2[0]->city != '') $dataProfile = true;
        else $dataProfile = false;
        if($dataProfile2[0]->ssc != '' && $dataProfile2[0]->hssc != '') $dataAcademic = true;
        else $dataAcademic = false;
        if(count($dataPersonality) != 0) $dataPersonality = true;
        else $dataPersonality = false;
        if(count($dataDiagnostic) != 0) $dataDiagnostic = true;
        else $dataDiagnostic = false;
        if(count($dataSelection) != 0) $dataSelection = true;
        else $dataSelection = false;
        if (!$dataProfile || !$dataAcademic || !$dataPersonality || !$dataDiagnostic || !$dataSelection) return redirect('recommendations');




        //academics
        $dataAcademic = DB::table('users')->where('id', '=', $id)->get();
        $dataSSC = '';
        $dataSSCType = '';
        $dataSSCTrack = '';
        $dataSSCTop = array();
        $dataSSCTotal = 0;

        $dataHSSC = '';
        $dataHSSCType = '';
        $dataHSSCTrack = '';
        $dataHSSCTop = array();
        $dataHSSCTotal = 0;

        if($dataAcademic[0]->ssc != ''){
            if($dataAcademic[0]->ssc == 'matric'){
                $dataSSCType = "Matric";
                $dataSSC= DB::table('matric')->where('uid', '=', $id)->get();
                $dataSSCTrack = $dataSSC[0]->track;
                if($dataSSCTrack == 'Medical'){
                    $dataSSCTop = array(
                        "english" => intval(($dataSSC[0]->english/150)*100),
                        "urdu" => intval(($dataSSC[0]->urdu/150)*100),
                        "islamiyat_Ethics" => intval(($dataSSC[0]->islamiyat_Ethics/75)*100),
                        "mathematics" => intval(($dataSSC[0]->mathematics/150)*100),
                        "physics" => intval(($dataSSC[0]->physics/150)*100),
                        "chemistry" => intval(($dataSSC[0]->chemistry/150)*100),
                        "biology" => intval(($dataSSC[0]->biology/150)*100)
                    );
                    $count = 0;
                    foreach ($dataSSCTop as $key => $value) {
                        $dataSSCTotal = $dataSSCTotal + $value;
                        $count++;
                    }
                    $dataSSCTotal = intval($dataSSCTotal/$count);
                    arsort($dataSSCTop);
                    $dataSSCTop = array_slice($dataSSCTop, 0, 3);

                }elseif($dataSSCTrack == 'Engineering'){
                    $dataSSCTop = array(
                        "english" => intval(($dataSSC[0]->english/150)*100),
                        "urdu" => intval(($dataSSC[0]->urdu/150)*100),
                        "islamiyat_Ethics" => intval(($dataSSC[0]->islamiyat_Ethics/75)*100),
                        "mathematics" => intval(($dataSSC[0]->mathematics/150)*100),
                        "physics" => intval(($dataSSC[0]->physics/150)*100),
                        "chemistry" => intval(($dataSSC[0]->chemistry/150)*100),
                        "computer" => intval(($dataSSC[0]->computer/150)*100)
                    );
                    $count = 0;
                    foreach ($dataSSCTop as $key => $value) {
                        $dataSSCTotal = $dataSSCTotal + $value;
                        $count++;
                    }
                    $dataSSCTotal = intval($dataSSCTotal/$count);
                    arsort($dataSSCTop);
                    $dataSSCTop = array_slice($dataSSCTop, 0, 3);
                }elseif($dataSSCTrack == 'Humanities'){
                    $dataSSCTop = array(
                        "english" => intval(($dataSSC[0]->english/150)*100),
                        "urdu" => intval(($dataSSC[0]->urdu/150)*100),
                        "islamiyat_Ethics" => intval(($dataSSC[0]->islamiyat_Ethics/75)*100),
                        "mathematics" => intval(($dataSSC[0]->mathematics/150)*100),
                        "general_sciences Sciences" => intval(($dataSSC[0]->general_sciences/150)*100),
                        "economics" => intval(($dataSSC[0]->economics/150)*100),
                        "Business business_studies" => intval(($dataSSC[0]->business_studies/150)*100)
                    );
                    $count = 0;
                    foreach ($dataSSCTop as $key => $value) {
                        $dataSSCTotal = $dataSSCTotal + $value;
                        $count++;
                    }
                    $dataSSCTotal = intval($dataSSCTotal/$count);
                    arsort($dataSSCTop);
                    $dataSSCTop = array_slice($dataSSCTop, 0, 3);
                }
                arsort($dataSSCTop);

                // echo "<table>";
                //     foreach ($dataSSCTop as $key => $value) {
                //             echo "<tr>";
                //             echo "<td>$key</td>"; // Get index.
                //             echo "<td>$value</td>"; // Get value.
                //             echo "</tr>";
                        
                //     }
                // echo "</table>";                
                
            }elseif($dataAcademic[0]->ssc == 'olevels'){
                $dataSSCType = "O-Levels";
                $dataSSC= DB::table('olevels')->where('uid', '=', $id)->get();
                $dataSSCTrack = "N/A";

                if($dataSSC[0]->art != 'null'){
                    $array2 = array("art" => $dataSSC[0]->art);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);       
                }
                if($dataSSC[0]->biology != 'null'){
                    $array2 = array("biology" => $dataSSC[0]->biology);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);
                    $dataSSCTrack = "Biology";
                }
                if($dataSSC[0]->businessStudies != 'null'){
                    $array2 = array("businessStudies" => $dataSSC[0]->businessStudies);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);    
                }
                if($dataSSC[0]->chemistry != 'null'){
                    $array2 = array("chemistry" => $dataSSC[0]->chemistry);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);
                }
                if($dataSSC[0]->computerStudies != 'null'){
                    $array2 = array("computerStudies" => $dataSSC[0]->computerStudies);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);
                    $dataSSCTrack = "Computer";   
                }
                if($dataSSC[0]->economics != 'null'){
                    $array2 = array("economics" => $dataSSC[0]->economics);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);      
                }
                if($dataSSC[0]->englishLanguage != 'null'){
                    $array2 = array("englishLanguage" => $dataSSC[0]->englishLanguage);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);       
                }
                if($dataSSC[0]->islamiyat != 'null'){
                    $array2 = array("islamiyat" => $dataSSC[0]->islamiyat);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);       
                }
                if($dataSSC[0]->mathematicsAdditional != 'null'){
                    $array2 = array("mathematicsAdditional" => $dataSSC[0]->mathematicsAdditional);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);       
                }
                if($dataSSC[0]->mathematicsD != 'null'){
                    $array2 = array("mathematicsD" => $dataSSC[0]->mathematicsD);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);  
                    $dataSSCTrack = "Mathematics";         
                }
                if($dataSSC[0]->pakistanStudies != 'null'){
                    $array2 = array("pakistanStudies" => $dataSSC[0]->pakistanStudies);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);       
                }
                if($dataSSC[0]->religiousStudies != 'null'){
                    $array2 = array("religiousStudies" => $dataSSC[0]->religiousStudies);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);    
                }
                if($dataSSC[0]->sociology != 'null'){
                    $array2 = array("sociology" => $dataSSC[0]->sociology);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);      
                }
                if($dataSSC[0]->urduFirstLanguage != 'null'){
                    $array2 = array("urduFirstLanguage" => $dataSSC[0]->urduFirstLanguage);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);      
                }
                if($dataSSC[0]->urduSecondLanguage != 'null'){
                    $array2 = array("urduSecondLanguage" => $dataSSC[0]->urduSecondLanguage);
                    $dataSSCTop = array_merge($dataSSCTop, $array2);    
                }

                // echo "<table>";
                // foreach ($dataSSCTop as $key => $value) {
                //     echo "<tr>";
                //     echo "<td>$key</td>"; // Get index.
                //     echo "<td>$value</td>"; // Get value.
                //     echo "</tr>";
                // }
                // echo "</table>";  
                
                $count = 0;
                foreach ($dataSSCTop as $key => $value) {
                    $dataSSCTotal = $dataSSCTotal + $value;
                    $count++;
                }
                $dataSSCTotal = intval($dataSSCTotal/$count);
                arsort($dataSSCTop);
                $dataSSCTop = array_slice($dataSSCTop, 0, 3);
                
            }
        }

        if($dataAcademic[0]->hssc != ''){
            if($dataAcademic[0]->hssc == 'hssc'){
                $dataHSSCType = "Intermediate";
                $dataHSSC= DB::table('hssc')->where('uid', '=', $id)->get();
                $dataHSSCTrack = $dataHSSC[0]->track;
                if($dataHSSCTrack == 'Pre-Med'){
                    $dataHSSCTop = array(
                        "english" => intval(($dataHSSC[0]->english/200)*100),
                        "urdu" => intval(($dataHSSC[0]->urdu/200)*100),
                        "islamiyat_Ethics" => intval(($dataHSSC[0]->islamiyat_Ethics/50)*100),
                        "pakistan_Studies" => intval(($dataHSSC[0]->pakistan_Studies/20)*100),
                        "physics" => intval(($dataHSSC[0]->physics/200)*100),
                        "chemistry" => intval(($dataHSSC[0]->chemistry/200)*100),
                        "biology" => intval(($dataHSSC[0]->biology/200)*100)
                    );
                    
                    $count = 0;
                    foreach ($dataHSSCTop as $key => $value) {
                        $dataHSSCTotal = $dataHSSCTotal + $value;
                        $count++;
                    }
                    $dataHSSCTotal = intval($dataHSSCTotal/$count);
                    arsort($dataHSSCTop);
                    $dataHSSCTop = array_slice($dataHSSCTop, 0, 3);

                }elseif($dataHSSCTrack == 'Pre-Engineering'){
                    $dataHSSCTop = array(
                        "english" => intval(($dataHSSC[0]->english/200)*100),
                        "urdu" => intval(($dataHSSC[0]->urdu/200)*100),
                        "islamiyat_Ethics" => intval(($dataHSSC[0]->islamiyat_Ethics/50)*100),
                        "pakistan_Studies" => intval(($dataHSSC[0]->pakistan_Studies/50)*100),
                        "physics" => intval(($dataHSSC[0]->physics/200)*100),
                        "chemistry" => intval(($dataHSSC[0]->chemistry/200)*100),
                        "mathematics" => intval(($dataHSSC[0]->mathematics/200)*100)
                    );
                    
                    $count = 0;
                    foreach ($dataHSSCTop as $key => $value) {
                        $dataHSSCTotal = $dataHSSCTotal + $value;
                        $count++;
                    }
                    $dataHSSCTotal = intval($dataHSSCTotal/$count);
                    arsort($dataHSSCTop);
                    $dataHSSCTop = array_slice($dataHSSCTop, 0, 3);
                }elseif($dataHSSCTrack == 'ICS'){
                    if($dataHSSC[0]->physics != 'null'){
                        $dataHSSCTop = array(
                            "english" => intval(($dataHSSC[0]->english/200)*100),
                            "urdu" => intval(($dataHSSC[0]->urdu/200)*100),
                            "islamiyat_Ethics" => intval(($dataHSSC[0]->islamiyat_Ethics/50)*100),
                            "pakistan_Studies" => intval(($dataHSSC[0]->pakistan_Studies/50)*100),
                            "mathematics" => intval(($dataHSSC[0]->mathematics/200)*100),
                            "physics" => intval(($dataHSSC[0]->physics/200)*100),
                            "computer" => intval(($dataHSSC[0]->computer/200)*100)
                        );
                    
                        $count = 0;
                        foreach ($dataHSSCTop as $key => $value) {
                            $dataHSSCTotal = $dataHSSCTotal + $value;
                            $count++;
                        }
                        $dataHSSCTotal = intval($dataHSSCTotal/$count);
                        arsort($dataHSSCTop);
                        $dataHSSCTop = array_slice($dataHSSCTop, 0, 3);

                    }elseif($dataHSSC[0]->statistics != 'null'){
                        $dataHSSCTop = array(
                            "english" => intval(($dataHSSC[0]->english/200)*100),
                            "urdu" => intval(($dataHSSC[0]->urdu/200)*100),
                            "islamiyat_Ethics" => intval(($dataHSSC[0]->islamiyat_Ethics/50)*100),
                            "pakistan_Studies" => intval(($dataHSSC[0]->pakistan_Studies/50)*100),
                            "mathematics" => intval(($dataHSSC[0]->mathematics/200)*100),
                            "statistics" => intval(($dataHSSC[0]->statistics/200)*100),
                            "computer" => intval(($dataHSSC[0]->computer/200)*100)
                        );
                    
                        $count = 0;
                        foreach ($dataHSSCTop as $key => $value) {
                            $dataHSSCTotal = $dataHSSCTotal + $value;
                            $count++;
                        }
                        $dataHSSCTotal = intval($dataHSSCTotal/$count);
                        arsort($dataHSSCTop);
                        $dataHSSCTop = array_slice($dataHSSCTop, 0, 3);

                    }elseif($dataHSSC[0]->economics != 'null'){
                        $dataHSSCTop = array(
                            "english" => intval(($dataHSSC[0]->english/200)*100),
                            "urdu" => intval(($dataHSSC[0]->urdu/200)*100),
                            "islamiyat_Ethics" => intval(($dataHSSC[0]->islamiyat_Ethics/50)*100),
                            "pakistan_Studies" => intval(($dataHSSC[0]->pakistan_Studies/50)*100),
                            "mathematics" => intval(($dataHSSC[0]->mathematics/200)*100),
                            "economics" => intval(($dataHSSC[0]->economics/200)*100),
                            "computer" => intval(($dataHSSC[0]->computer/200)*100)
                        );
                        
                    
                        $count = 0;
                        foreach ($dataHSSCTop as $key => $value) {
                            $dataHSSCTotal = $dataHSSCTotal + $value;
                            $count++;
                        }
                        $dataHSSCTotal = intval($dataHSSCTotal/$count);
                        arsort($dataHSSCTop);
                        $dataHSSCTop = array_slice($dataHSSCTop, 0, 3);
                    }
                    

                }

                // echo "<table>";
                //     foreach ($dataSSCTop as $key => $value) {
                //             echo "<tr>";
                //             echo "<td>$key</td>"; // Get index.
                //             echo "<td>$value</td>"; // Get value.
                //             echo "</tr>";
                        
                //     }
                // echo "</table>";         


            }elseif($dataAcademic[0]->hssc == 'alevels'){
                $dataHSSCType = "A-Levels";
                $dataHSSC= DB::table('alevels')->where('uid', '=', $id)->get();
                $dataHSSCTrack = "N/A";

                if($dataHSSC[0]->accounting != 'null'){
                    $array2 = array("accounting" => $dataHSSC[0]->accounting);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);
                    $dataHSSCTrack = "Business";              
                }
                if($dataHSSC[0]->aICT != 'null'){
                    $array2 = array("aICT" => $dataHSSC[0]->aICT);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                }
                if($dataHSSC[0]->art != 'null'){
                    $array2 = array("art" => $dataHSSC[0]->art);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                }
                if($dataHSSC[0]->biology != 'null'){
                    $array2 = array("biology" => $dataHSSC[0]->biology);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                    $dataHSSCTrack = "Biology";     
                }
                if($dataHSSC[0]->businessStudies != 'null'){
                    $array2 = array("businessStudies" => $dataHSSC[0]->businessStudies);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);     
                    $dataHSSCTrack = "Business";      
                }
                if($dataHSSC[0]->chemistry != 'null'){
                    $array2 = array("chemistry" => $dataHSSC[0]->chemistry);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                }
                if($dataHSSC[0]->computerScience != 'null'){
                    $array2 = array("computerScience" => $dataHSSC[0]->computerScience);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);  
                    $dataHSSCTrack = "Computer";         
                }
                if($dataHSSC[0]->economics != 'null'){
                    $array2 = array("economics" => $dataHSSC[0]->economics);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);    
                    $dataHSSCTrack = "Business";        
                }
                if($dataHSSC[0]->englishLanguage != 'null'){
                    $array2 = array("englishLanguage" => $dataHSSC[0]->englishLanguage);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                }
                if($dataHSSC[0]->englishLiterature != 'null'){
                    $array2 = array("englishLiterature" => $dataHSSC[0]->englishLiterature);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                }
                if($dataHSSC[0]->environmentalManagement != 'null'){
                    $array2 = array("environmentalManagement" => $dataHSSC[0]->environmentalManagement);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                }
                if($dataHSSC[0]->globalPerspectives != 'null'){
                    $array2 = array("globalPerspectives" => $dataHSSC[0]->globalPerspectives);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                }
                if($dataHSSC[0]->governmentPolitics != 'null'){
                    $array2 = array("governmentPolitics" => $dataHSSC[0]->governmentPolitics);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                }
                if($dataHSSC[0]->history != 'null'){
                    $array2 = array("history" => $dataHSSC[0]->history);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                }
                if($dataHSSC[0]->law != 'null'){
                    $array2 = array("law" => $dataHSSC[0]->law);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2); 
                    $dataHSSCTrack = "Law";           
                }
                if($dataHSSC[0]->mathematics != 'null'){
                    $array2 = array("mathematics" => $dataHSSC[0]->mathematics);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);     
                    $dataHSSCTrack = "Mathematics";       
                }
                if($dataHSSC[0]->mathematicsFurther != 'null'){
                    $array2 = array("mathematicsFurther" => $dataHSSC[0]->mathematicsFurther);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);       
                    $dataHSSCTrack = "Mathematics";         
                }
                if($dataHSSC[0]->mediaStudies != 'null'){
                    $array2 = array("mediaStudies" => $dataHSSC[0]->mediaStudies);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                }
                if($dataHSSC[0]->physics != 'null'){
                    $array2 = array("physics" => $dataHSSC[0]->physics);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                }
                if($dataHSSC[0]->psychology != 'null'){
                    $array2 = array("psychology" => $dataHSSC[0]->psychology);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                }
                if($dataHSSC[0]->sociology != 'null'){
                    $array2 = array("sociology" => $dataHSSC[0]->sociology);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                }
                if($dataHSSC[0]->urdu != 'null'){
                    $array2 = array("urdu" => $dataHSSC[0]->urdu);
                    $dataHSSCTop = array_merge($dataHSSCTop, $array2);      
                }
                
                $count = 0;
                foreach ($dataHSSCTop as $key => $value) {
                    $dataHSSCTotal = $dataHSSCTotal + $value;
                    $count++;
                }
                $dataHSSCTotal = intval($dataHSSCTotal/$count);
                arsort($dataHSSCTop);
                $dataHSSCTop = array_slice($dataHSSCTop, 0, 3);
            }
        }


        //diagnostic
        $dataDiagnostic = DB::table('tests')
        ->orderBy('created_at', 'desc')
        ->where('user_id', '=', $id)
        ->where('subject', 'NOT LIKE', 'NAT-%')
        ->get();

        $EnglishDiagnostic = 0;
        $AnalyticalDiagnostic = 0;
        $QuantitativeDiagnostic = 0;
        $PhysicsDiagnostic = 0;
        $ChemistryDiagnostic = 0;
        $MathematicsDiagnostic = 0;
        $BiologyDiagnostic = 0;
        $ComputerDiagnostic = 0;
        $StatisticsDiagnostic = 0;
        $EconomicsDiagnostic = 0;
        $AccountingDiagnostic = 0;
        $CommerceDiagnostic = 0;

        if($dataDiagnostic->count() != 0){
            $EnglishDiagnostic = Test::where('user_id', '=', $id)->where('subject', '=', 'English')->avg('percent');
            $AnalyticalDiagnostic = Test::where('user_id', '=', $id)->where('subject', '=', 'Analytical')->avg('percent');
            $QuantitativeDiagnostic = Test::where('user_id', '=', $id)->where('subject', '=', 'Quantitative')->avg('percent');
            $PhysicsDiagnostic = Test::where('user_id', '=', $id)->where('subject', '=', 'Physics')->avg('percent');
            $ChemistryDiagnostic = Test::where('user_id', '=', $id)->where('subject', '=', 'Chemistry')->avg('percent');
            $MathematicsDiagnostic = Test::where('user_id', '=', $id)->where('subject', '=', 'Mathematics')->avg('percent');
            $BiologyDiagnostic = Test::where('user_id', '=', $id)->where('subject', '=', 'Biology')->avg('percent');
            $ComputerDiagnostic = Test::where('user_id', '=', $id)->where('subject', '=', 'Computer')->avg('percent');
            $StatisticsDiagnostic = Test::where('user_id', '=', $id)->where('subject', '=', 'Statistics')->avg('percent');
            $EconomicsDiagnostic = Test::where('user_id', '=', $id)->where('subject', '=', 'Economics')->avg('percent');
            $AccountingDiagnostic = Test::where('user_id', '=', $id)->where('subject', '=', 'Accounting')->avg('percent');
            $CommerceDiagnostic = Test::where('user_id', '=', $id)->where('subject', '=', 'Commerce')->avg('percent');
            
        }else{
            $dataDiagnostic ='';
        }
        // $EnglishDiagnostic = 70;
        // $QuantitativeDiagnostic = 70;
        // $AnalyticalDiagnostic = 70;




        //personality
        $dataPersonality = -1;
        $result=-1;
        $conventional = -1;
        $enterprising = -1;
        $social = -1;
        $artistic = -1;
        $investigative = -1;
        $realistic = -1;

        $dataPersonality = DB::table('personality')
        ->orderBy('created_at', 'desc')
        ->where('user_id', '=', $id)
        ->get();
        $dataPersonalityTop;
        $countPersonality = 0;

        if($dataPersonality->count() != 0){
            $result = strtoupper($dataPersonality[0]->result);
            $conventional = $dataPersonality[0]->conventional;
            $enterprising = $dataPersonality[0]->enterprising;
            $social = $dataPersonality[0]->social;
            $artistic = $dataPersonality[0]->artistic;
            $investigative = $dataPersonality[0]->investigative;
            $realistic = $dataPersonality[0]->realistic;


            $dataPersonalityTop = array(
                "conventional" => intval($dataPersonality[0]->conventional),
                "enterprising" => intval($dataPersonality[0]->enterprising),
                "social" => intval($dataPersonality[0]->social),
                "artistic" => intval($dataPersonality[0]->artistic),
                "investigative" => intval($dataPersonality[0]->investigative),
                "realistic" => intval($dataPersonality[0]->realistic)
            );
            arsort($dataPersonalityTop);
            $dataPersonalityTop = array_slice($dataPersonalityTop, 0, 3);
        }
        

        //selection
        $dataSelection = DB::table('tests')
        ->orderBy('created_at', 'desc')
        ->where('user_id', '=', $id)
        ->where('subject', 'LIKE', 'NAT-%')
        ->get();

        $subject = '';
        $English = 0;
        $Analytical = 0;
        $Quantitative = 0;
        $subjectScore1 = 0;
        $subjectScore2 = 0;
        $subjectScore3 = 0;

        if($dataSelection->count() != 0){
            $subject = Test::select('subject')->where('user_id', '=', $id)->where('subject', 'LIKE', 'NAT-%')->orderBy('created_at', 'desc')->get()[0]->subject;
            $English = Test::select('EnglishScore')->where('user_id', '=', $id)->where('subject', 'LIKE', 'NAT-%')->orderBy('created_at', 'desc')->get()[0]->EnglishScore;
            $Analytical = Test::select('AnalyticalScore')->where('user_id', '=', $id)->where('subject', 'LIKE', 'NAT-%')->orderBy('created_at', 'desc')->get()[0]->AnalyticalScore;
            $Quantitative = Test::select('QuantitativeScore')->where('user_id', '=', $id)->where('subject', 'LIKE', 'NAT-%')->orderBy('created_at', 'desc')->get()[0]->QuantitativeScore;

            $subjectScore1 = Test::select('subjectScore1')->where('user_id', '=', $id)->where('subject', 'LIKE', 'NAT-%')->orderBy('created_at', 'desc')->get()[0]->subjectScore1;
            $subjectScore2 = Test::select('subjectScore2')->where('user_id', '=', $id)->where('subject', 'LIKE', 'NAT-%')->orderBy('created_at', 'desc')->get()[0]->subjectScore2;
            $subjectScore3 = Test::select('subjectScore3')->where('user_id', '=', $id)->where('subject', 'LIKE', 'NAT-%')->orderBy('created_at', 'desc')->get()[0]->subjectScore3;
        }else{
            $dataSelection ='';
        }




        //profile
        $dataProfile;
        $dataProfile2 = DB::table('users')->where('id', '=', $id)->get();
        if($dataProfile2[0]->firstname != '') $dataProfile = ucfirst($dataProfile2[0]->firstname);
        else $dataProfile = ucfirst($dataProfile2[0]->name);
        if($dataProfile2[0]->gender == 'Male') $dataProfile = "Mr. ".$dataProfile;
        elseif ($dataProfile2[0]->gender == 'Female') $dataProfile = "Ms. ".$dataProfile;


        //queries
        //personality
        $dbrealistic = DB::table('universities')
            ->join('cities', 'cities.Uni_id', '=', 'universities.Uni_id')
            ->join('departments', 'departments.City_id', '=', 'cities.City_id')
            ->orwhere('Dep_Name', 'LIKE', '%Applied%')
            ->orwhere('Dep_Name', 'LIKE', '%Agriculture%')
            ->orwhere('Dep_Name', 'LIKE', '%Engineering%')
            ->groupBy('departments.Dep_Name')
            ->limit(5)
            ->get();
            
            // ->orderBy('universities.Uni_Rank', 'ASC')
            // echo count($dbrealistic);
            // print_r( $dbrealistic);

            // foreach($dbrealistic as $dep){
            //     echo $dep->Dep_id;
            //     echo $dep->Dep_Name;
            //     echo $dep->Dep_Tags;
            //     echo $dep->Dep_fees;
            //     echo $dep->Dep_PrevAggr;
            //     echo $dep->Dep_AggrMatric;
            //     echo $dep->Dep_AggrHssc;
            //     echo $dep->Dep_AggrNts;
            //     echo $dep->Dep_AddmDeadline;
            //     echo $dep->Dep_TestName;
            // }
        $dbenterprising = DB::table('universities')
            ->join('cities', 'cities.Uni_id', '=', 'universities.Uni_id')
            ->join('departments', 'departments.City_id', '=', 'cities.City_id')
            ->orwhere('Dep_Name', 'LIKE', '%Business%')
            ->orwhere('Dep_Name', 'LIKE', '%Accounting%')
            ->orwhere('Dep_Name', 'LIKE', '%Finance%')
            ->orwhere('Dep_Name', 'LIKE', '%Language%')
            ->groupBy('departments.Dep_Name')
            ->orderBy('universities.Uni_Rank', 'DESC')
            ->limit(5)
            ->get();
        $dbinvestigative = DB::table('universities')
            ->join('cities', 'cities.Uni_id', '=', 'universities.Uni_id')
            ->join('departments', 'departments.City_id', '=', 'cities.City_id')
            ->orwhere('Dep_Tags', 'LIKE', '%Medicin%')
            ->orwhere('Dep_Name', 'LIKE', '%Applied%')
            ->orwhere('Dep_Name', 'LIKE', '%Computer%')
            ->orwhere('Dep_Name', 'LIKE', '%Engineering%')
            ->groupBy('departments.Dep_Name')
            ->orderBy('universities.Uni_Rank', 'DESC')
            ->limit(5)
            ->get(); 
        $dbartistic = DB::table('universities')
            ->join('cities', 'cities.Uni_id', '=', 'universities.Uni_id')
            ->join('departments', 'departments.City_id', '=', 'cities.City_id')
            ->orwhere('Dep_Tags', 'LIKE', '%Arts%')
            ->groupBy('departments.Dep_Name')
            ->orderBy('universities.Uni_Rank', 'DESC')
            ->limit(5)
            ->get();
        $dbconventional = DB::table('universities')
            ->join('cities', 'cities.Uni_id', '=', 'universities.Uni_id')
            ->join('departments', 'departments.City_id', '=', 'cities.City_id')
            ->orwhere('Dep_Tags', 'LIKE', '%Management%')
            ->groupBy('departments.Dep_Name')
            ->orderBy('universities.Uni_Rank', 'ASC')
            ->limit(5)
            ->get();
        $dbsocial = DB::table('universities')
            ->join('cities', 'cities.Uni_id', '=', 'universities.Uni_id')
            ->join('departments', 'departments.City_id', '=', 'cities.City_id')
            ->orwhere('Dep_Tags', 'LIKE', '%Social%')
            ->orwhere('Dep_Tags', 'LIKE', '%Law%')
            ->groupBy('departments.Dep_Name')
            ->orderBy('universities.Uni_Rank', 'DESC')
            ->limit(5)
            ->get();
        
        

        //past record
        //ssc
        $countpast = 0;
        $top1;
        $top2;
        $top3;
        foreach($dataSSCTop as $key => $val){
            ++$countpast;
            // echo $key;
            // echo " ";
            if($countpast==1) $top1 = $key;
            if($countpast==2) $top2 = $key;
            if($countpast==3) $top3 = $key;
        }
        $dbssc = DB::table('universities')
            ->join('cities', 'cities.Uni_id', '=', 'universities.Uni_id')
            ->join('departments', 'departments.City_id', '=', 'cities.City_id')
            ->orwhere('Dep_Tags', 'LIKE', '%'.$top1.'%')
            ->orwhere('Dep_Tags', 'LIKE', '%'.$top2.'%')
            ->orwhere('Dep_Tags', 'LIKE', '%'.$top3.'%')
            ->orwhere('Dep_Name', 'LIKE', '%'.$top1.'%')
            ->orwhere('Dep_Name', 'LIKE', '%'.$top2.'%')
            ->orwhere('Dep_Name', 'LIKE', '%'.$top3.'%')
            ->groupBy('departments.Dep_Name')
            ->orderBy('universities.Uni_Rank', 'DESC')
            ->limit(5)
            ->get();
        //hssc
        $countpast = 0;
        $top1;
        $top2;
        $top3;
        foreach($dataHSSCTop as $key => $val){
            ++$countpast;
            // echo $key;
            // echo " ";
            if($countpast==1) $top1 = $key;
            if($countpast==2) $top2 = $key;
            if($countpast==3) $top3 = $key;
        }
        $dbhssc = DB::table('universities')
            ->join('cities', 'cities.Uni_id', '=', 'universities.Uni_id')
            ->join('departments', 'departments.City_id', '=', 'cities.City_id')
            ->orwhere('Dep_Tags', 'LIKE', '%'.$top1.'%')
            ->orwhere('Dep_Tags', 'LIKE', '%'.$top2.'%')
            ->orwhere('Dep_Tags', 'LIKE', '%'.$top3.'%')
            ->orwhere('Dep_Name', 'LIKE', '%'.$top1.'%')
            ->orwhere('Dep_Name', 'LIKE', '%'.$top2.'%')
            ->orwhere('Dep_Name', 'LIKE', '%'.$top3.'%')
            ->groupBy('departments.Dep_Name')
            ->orderBy('universities.Uni_Rank', 'DESC')
            ->limit(5)
            ->get();
        //selection
        $dbselection = DB::table('universities')
            ->join('cities', 'cities.Uni_id', '=', 'universities.Uni_id')
            ->join('departments', 'departments.City_id', '=', 'cities.City_id')
            ->where('Dep_AggrNts', '<=', $dataSelection[0]->percent)
            // ->orwhere('Dep_Tags', 'LIKE', '%'.$top2.'%')
            ->groupBy('universities.Uni_id')
            ->orderBy('universities.Uni_Rank', 'DESC')
            ->limit(5)
            ->get();
        //diagnostic
        $top1;
        $top2;
        $top3;
        foreach($dataDiagnostic as $key){
            if($key->subject != '' && $key->subject == 'English' && $key->percent >= 70) $top1 = "Social";
            if($key->subject != '' && $key->subject == 'Analytical' && $key->percent >= 70) $top2 = "Computer";
            if($key->subject != '' && $key->subject == 'Quantitative' && $key->percent >= 70) $top3 = "Engineering";
        }
        $dbdiagnostic = DB::table('universities')
            ->join('cities', 'cities.Uni_id', '=', 'universities.Uni_id')
            ->join('departments', 'departments.City_id', '=', 'cities.City_id')
            ->orwhere('Dep_Tags', 'LIKE', '%'.$top1.'%')
            ->orwhere('Dep_Name', 'LIKE', '%'.$top1.'%')

            ->orwhere('Dep_Tags', 'LIKE', '%'.$top2.'%')
            ->orwhere('Dep_Name', 'LIKE', '%'.$top2.'%')

            ->orwhere('Dep_Tags', 'LIKE', '%'.$top3.'%')
            ->orwhere('Dep_Name', 'LIKE', '%'.$top3.'%')
            ->groupBy('departments.City_id')
            ->orderBy('universities.Uni_Rank', 'DESC')
            ->limit(8)
            ->get();
            
        
        return view('api.APIGenerate', compact(
            'dataProfile',
            'dataAcademic', 'dataSSC', 'dataHSSC',  
            'dataSSCType', 'dataSSCTrack', 'dataSSCTop', 'dataSSCTotal', 'dataHSSCType', 'dataHSSCTrack', 'dataHSSCTop', 'dataHSSCTotal',
            'dataDiagnostic', 'EnglishDiagnostic', 'AnalyticalDiagnostic', 'QuantitativeDiagnostic', 'PhysicsDiagnostic', 'ChemistryDiagnostic', 'MathematicsDiagnostic', 'BiologyDiagnostic', 'ComputerDiagnostic', 'StatisticsDiagnostic', 'EconomicsDiagnostic', 'AccountingDiagnostic', 'CommerceDiagnostic', 
            'dataPersonality', 'dataPersonalityTop', 'countPersonality', 'result', 'conventional', 'enterprising', 'social', 'artistic', 'investigative', 'realistic',
            'dataSelection', 'English', 'Analytical', 'Quantitative', 'subjectScore1', 'subjectScore2', 'subjectScore3', 'subject',
            'dbrealistic', 'dbenterprising', 'dbinvestigative', 'dbartistic', 'dbconventional', 'dbsocial',
            'dbssc', 'dbhssc',
            'dbselection',
            'dbdiagnostic'
            ));
    
            


        
    }

    public function pdf(){
        // This should be your normal HTML page
        // $url = 'http://127.0.0.1:8000/';
        // echo $html = file_get_contents($url);

        // First. Convert all relative image paths to file system paths.
        // Test that the generated path is where your images files are located
        //$html = str_replace("/images", public_path()."/images", $html);

        // Generate PDF file
        // $dompdf = new Pdf();
        // $dompdf->set_paper("A4", "portrait");
        // $dompdf->load_html($html);
        // $dompdf->render();
        // $dompdf->stream('your_invoice_file.pdf');

        // $pdf = Pdf::make('dompdf.wrapper');
        // $pdf->loadHTML();
        // return $pdf->stream();

        // $html = view('index.perindex')->render();

        // return PDF::load('<h1>Hello world</h1>')->show();

    }
}

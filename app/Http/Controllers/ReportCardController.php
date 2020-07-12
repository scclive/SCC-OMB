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
use App\Http\Requests\StoreTestRequest;

class ReportCardController extends Controller
{
    public function index()
    {
        //academics
        $dataAcademic = DB::table('users')->where('id', '=', Auth::id())->get();
        $dataSSC = '';
        $dataHSSC = '';

        if($dataAcademic[0]->ssc != ''){
            if($dataAcademic[0]->ssc == 'matric'){
                $dataSSC= DB::table('matric')->where('uid', '=', Auth::id())->get();
            }elseif($dataAcademic[0]->ssc == 'olevels'){
                $dataSSC= DB::table('olevels')->where('uid', '=', Auth::id())->get();
            }
        }

        if($dataAcademic[0]->hssc != ''){
            if($dataAcademic[0]->hssc == 'hssc'){
                $dataHSSC= DB::table('hssc')->where('uid', '=', Auth::id())->get();
            }elseif($dataAcademic[0]->hssc == 'alevels'){
                $dataHSSC= DB::table('alevels')->where('uid', '=', Auth::id())->get();
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

        if($dataPersonality->count() != 0){
            $result = strtoupper($dataPersonality[0]->result);
            $conventional = $dataPersonality[0]->conventional;
            $enterprising = $dataPersonality[0]->enterprising;
            $social = $dataPersonality[0]->social;
            $artistic = $dataPersonality[0]->artistic;
            $investigative = $dataPersonality[0]->investigative;
            $realistic = $dataPersonality[0]->realistic;
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


        return view('reportcard.index', compact('dataAcademic', 'dataSSC', 'dataHSSC',
        'dataDiagnostic', 'EnglishDiagnostic', 'AnalyticalDiagnostic', 'QuantitativeDiagnostic', 'PhysicsDiagnostic', 'ChemistryDiagnostic', 'MathematicsDiagnostic', 'BiologyDiagnostic', 'ComputerDiagnostic', 'StatisticsDiagnostic', 'EconomicsDiagnostic', 'AccountingDiagnostic', 'CommerceDiagnostic', 
        'dataPersonality', 'result', 'conventional', 'enterprising', 'social', 'artistic', 'investigative', 'realistic',
        'dataSelection', 'English', 'Analytical', 'Quantitative', 'subjectScore1', 'subjectScore2', 'subjectScore3', 'subject'));
    

    }

    public function APIindex($id)
    {
        //academics
        $dataAcademic = DB::table('users')->where('id', '=', $id)->get();
        $dataSSC = '';
        $dataHSSC = '';

        if($dataAcademic->count() != 0){
            if($dataAcademic[0]->ssc != ''){
                if($dataAcademic[0]->ssc == 'matric'){
                    $dataSSC= DB::table('matric')->where('uid', '=', $id)->get();
                }elseif($dataAcademic[0]->ssc == 'olevels'){
                    $dataSSC= DB::table('olevels')->where('uid', '=', $id)->get();
                }
            }
        }

        if($dataAcademic->count() != 0){
            if($dataAcademic[0]->hssc != ''){
                if($dataAcademic[0]->hssc == 'hssc'){
                    $dataHSSC= DB::table('hssc')->where('uid', '=', $id)->get();
                }elseif($dataAcademic[0]->hssc == 'alevels'){
                    $dataHSSC= DB::table('alevels')->where('uid', '=', $id)->get();
                }
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

        if($dataPersonality->count() != 0){
            $result = strtoupper($dataPersonality[0]->result);
            $conventional = $dataPersonality[0]->conventional;
            $enterprising = $dataPersonality[0]->enterprising;
            $social = $dataPersonality[0]->social;
            $artistic = $dataPersonality[0]->artistic;
            $investigative = $dataPersonality[0]->investigative;
            $realistic = $dataPersonality[0]->realistic;
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


        return view('api.APIReportCardindex', compact('dataAcademic', 'dataSSC', 'dataHSSC',
        'dataDiagnostic', 'EnglishDiagnostic', 'AnalyticalDiagnostic', 'QuantitativeDiagnostic', 'PhysicsDiagnostic', 'ChemistryDiagnostic', 'MathematicsDiagnostic', 'BiologyDiagnostic', 'ComputerDiagnostic', 'StatisticsDiagnostic', 'EconomicsDiagnostic', 'AccountingDiagnostic', 'CommerceDiagnostic', 
        'dataPersonality', 'result', 'conventional', 'enterprising', 'social', 'artistic', 'investigative', 'realistic',
        'dataSelection', 'English', 'Analytical', 'Quantitative', 'subjectScore1', 'subjectScore2', 'subjectScore3', 'subject'));
    

    }
}

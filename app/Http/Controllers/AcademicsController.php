<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class AcademicsController extends Controller
{
    public function index()
    {
        $data = DB::table('users')->where('id', '=', Auth::id())->get();
        $dataSSC = '';
        $dataHSSC = '';

        if($data[0]->ssc != ''){
            if($data[0]->ssc == 'matric'){
                $dataSSC= DB::table('matric')->where('uid', '=', Auth::id())->get();
            }elseif($data[0]->ssc == 'olevels'){
                $dataSSC= DB::table('olevels')->where('uid', '=', Auth::id())->get();
            }
        }

        if($data[0]->hssc != ''){
            if($data[0]->hssc == 'hssc'){
                $dataHSSC= DB::table('hssc')->where('uid', '=', Auth::id())->get();
            }elseif($data[0]->hssc == 'alevels'){
                $dataHSSC= DB::table('alevels')->where('uid', '=', Auth::id())->get();
            }
        }


        return view('academics.index', compact('data', 'dataSSC', 'dataHSSC'));
    }

    public function matriculation($track)
    {
        if($track == "Medical" || $track == 'Engineering' || $track == 'Humanities'){
            if($track == "Medical"){
                $data = DB::table('matric')->where('uid', '=', Auth::id())->where('track', '=', 'Medical')->get();
            }if($track == "Engineering"){
                $data = DB::table('matric')->where('uid', '=', Auth::id())->where('track', '=', 'Engineering')->get();
            }if($track == "Humanities"){
                $data = DB::table('matric')->where('uid', '=', Auth::id())->where('track', '=', 'Humanities')->get();
            }
    
            if($data->count() == 0) $data = '';
    
            return view('academics.createMatriculation', compact('data', 'track'));

        }else{
            
            return redirect('/academics');
            exit();
            
        }

    }

    public function matriculationStore(Request $request)
    {

        //echo $request;;
        // return view('academics.index');
        
        if($request->track == "Medical"){

            DB::table('matric')->where('uid', '=', Auth::id())->delete();
            DB::table('matric')->insert([
                [
                'uid' => Auth::id(), 
                'track' => $request->track,
                'english' => $request->english,
                'urdu' => $request->urdu,
                'islamiyat_Ethics' => $request->islamiyat_Ethics,
                'pakistan_Studies' => $request->pakistan_Studies,
                'mathematics' => $request->mathematics,
                'physics' => $request->physics,
                'chemistry' => $request->chemistry,
                'biology' => $request->biology,
                'computer' => 'null',
                'general_sciences' => 'null',
                'economics' => 'null',
                'business_studies' => 'null'
                ]
                
            ]);
            DB::table('users')->where('id', Auth::id())->update(['ssc' => 'matric']);
            DB::table('olevels')->where('uid', '=', Auth::id())->delete();

            

        }elseif($request->track == "Engineering"){
                
            DB::table('matric')->where('uid', '=', Auth::id())->delete();
            DB::table('matric')->insert([
                [
                'uid' => Auth::id(), 
                'track' => $request->track,
                'english' => $request->english,
                'urdu' => $request->urdu,
                'islamiyat_Ethics' => $request->islamiyat_Ethics,
                'pakistan_Studies' => $request->pakistan_Studies,
                'mathematics' => $request->mathematics,
                'physics' => $request->physics,
                'chemistry' => $request->chemistry,
                'biology' => 'null',
                'computer' => $request->computer,
                'general_sciences' => 'null',
                'economics' => 'null',
                'business_studies' => 'null'
                ]
                
            ]);
            DB::table('users')->where('id', Auth::id())->update(['ssc' => 'matric']);
            DB::table('olevels')->where('uid', '=', Auth::id())->delete();

        }elseif($request->track == "Humanities"){
                
            DB::table('matric')->where('uid', '=', Auth::id())->delete();
            DB::table('matric')->insert([
                [
                'uid' => Auth::id(), 
                'track' => $request->track,
                'english' => $request->english,
                'urdu' => $request->urdu,
                'islamiyat_Ethics' => $request->islamiyat_Ethics,
                'pakistan_Studies' => $request->pakistan_Studies,
                'mathematics' => $request->mathematics,
                'physics' => 'null',
                'chemistry' => 'null',
                'biology' => 'null',
                'computer' => 'null',
                'general_sciences' => $request->general_sciences,
                'economics' => $request->economics,
                'business_studies' => $request->business_studies
                ]
                
            ]);
            DB::table('users')->where('id', Auth::id())->update(['ssc' => 'matric']);
            DB::table('olevels')->where('uid', '=', Auth::id())->delete();

        }

        
        return redirect('/academics');;
        exit();
    }

    public function intermediate($track)
    {
        if($track == "Pre-Med" || $track == 'Pre-Engineering' || $track == 'ICS'){
            if($track == "Pre-Med"){
                $data = DB::table('hssc')->where('uid', '=', Auth::id())->where('track', '=', 'Pre-Med')->get();
            }if($track == "Pre-Engineering"){
                $data = DB::table('hssc')->where('uid', '=', Auth::id())->where('track', '=', 'Pre-Engineering')->get();
            }if($track == "ICS"){
                $data = DB::table('hssc')->where('uid', '=', Auth::id())->where('track', '=', 'ICS')->get();
            }
    
            if($data->count() == 0) $data = '';
    
            return view('academics.createIntermediate', compact('data', 'track'));

        }else{
            
            return redirect('/academics');;
            exit();
            
        }
        
    }

    public function intermediateStore(Request $request)
    {
        echo $request->track;
        if($request->track == "Pre-Med"){

            DB::table('hssc')->where('uid', '=', Auth::id())->delete();
            DB::table('hssc')->insert([
                [
                    'uid' => Auth::id(), 
                    'track' => $request->track,
                    'english' => $request->english,
                    'urdu' => $request->urdu,
                    'islamiyat_Ethics' => $request->islamiyat_Ethics,
                    'pakistan_Studies' => $request->pakistan_Studies,
                    'mathematics' => 'null',
                    'physics' => $request->physics,
                    'chemistry' => $request->chemistry,
                    'biology' => $request->biology,
                    'computer' => 'null',
                    'statistics' => 'null',
                    'economics' => 'null',
                ]
                
            ]);
            DB::table('users')->where('id', Auth::id())->update(['hssc' => 'hssc']);
            DB::table('alevels')->where('uid', '=', Auth::id())->delete();

            

        }elseif($request->track == "Pre-Engineering"){
                
            DB::table('hssc')->where('uid', '=', Auth::id())->delete();
            DB::table('hssc')->insert([
                [
                    'uid' => Auth::id(), 
                    'track' => $request->track,
                    'english' => $request->english,
                    'urdu' => $request->urdu,
                    'islamiyat_Ethics' => $request->islamiyat_Ethics,
                    'pakistan_Studies' => $request->pakistan_Studies,
                    'mathematics' => $request->mathematics,
                    'physics' => $request->physics,
                    'chemistry' => $request->chemistry,
                    'biology' => 'null',
                    'computer' => 'null',
                    'statistics' => 'null',
                    'economics' => 'null',
                ]
                
            ]);
            DB::table('users')->where('id', Auth::id())->update(['hssc' => 'hssc']);
            DB::table('alevels')->where('uid', '=', Auth::id())->delete();

        }elseif($request->track == "ICS"){
                
            DB::table('hssc')->where('uid', '=', Auth::id())->delete();
            if($request->physics == '' || $request->physics == 'null') $physics = 'null'; else $physics = $request->physics;
            if($request->statistics == '' || $request->statistics == 'null') $statistics = 'null'; else $statistics = $request->statistics;
            if($request->economics == '' || $request->economics == 'null') $economics = 'null'; else $economics = $request->economics;
            DB::table('hssc')->insert([
                [
                    'uid' => Auth::id(), 
                    'track' => $request->track,
                    'english' => $request->english,
                    'urdu' => $request->urdu,
                    'islamiyat_Ethics' => $request->islamiyat_Ethics,
                    'pakistan_Studies' => $request->pakistan_Studies,
                    'mathematics' => $request->mathematics,
                    'physics' => $physics,
                    'chemistry' => 'null',
                    'biology' => 'null',
                    'computer' => $request->computer,
                    'statistics' => $statistics,
                    'economics' => $economics,
                ]
                
            ]);
            DB::table('users')->where('id', Auth::id())->update(['hssc' => 'hssc']);
            DB::table('alevels')->where('uid', '=', Auth::id())->delete();

        }

        
        return redirect('/academics');;
        exit();
    }

    public function olevels()
    {
        $data = DB::table('olevels')->where('uid', '=', Auth::id())->get();
        if($data->count() != 0){
            return view('academics.createOlevels', compact('data'));
        }else{
            $data = '';
            return view('academics.createOlevels', compact('data'));
            
        }

    }

    public function olevelsStore(Request $request)
    {

        DB::table('olevels')->where('uid', '=', Auth::id())->delete();
        DB::table('olevels')->insert([
            [
                'uid' => Auth::id(), 
                'art' => $request->art,
                'biology' => $request->biology,
                'businessStudies' => $request->businessStudies,
                'chemistry' => $request->chemistry,
                'computerStudies' => $request->computerStudies,
                'economics' => $request->economics,
                'englishLanguage' => $request->englishLanguage,
                'islamiyat' => $request->islamiyat,
                'mathematicsAdditional' => $request->mathematicsAdditional,
                'mathematicsD' => $request->mathematicsD,
                'pakistanStudies' => $request->pakistanStudies,
                'religiousStudies' => $request->religiousStudies,
                'sociology' => $request->sociology,
                'urduFirstLanguage' => $request->urduFirstLanguage,
                'urduSecondLanguage' => $request->urduSecondLanguage
            ]
        ]);

        


        DB::table('users')->where('id', Auth::id())->update(['ssc' => 'olevels']);
        DB::table('matric')->where('uid', '=', Auth::id())->delete();

        
        return redirect('/academics');;
        exit();
    }

    public function alevels()
    {
        $data = DB::table('alevels')->where('uid', '=', Auth::id())->get();
        if($data->count() != 0){
            return view('academics.createAlevels', compact('data'));
        }else{
            $data = '';
            return view('academics.createAlevels', compact('data'));
            
        }

    }

    public function alevelsStore(Request $request)
    {

        DB::table('alevels')->where('uid', '=', Auth::id())->delete();
        DB::table('alevels')->insert([
            [
                'uid' => Auth::id(), 
                'accounting' => $request->accounting,
                'aICT' => $request->aICT,
                'art' => $request->art,
                'biology' => $request->biology,
                'businessStudies' => $request->businessStudies,
                'chemistry' => $request->chemistry,
                'computerScience' => $request->computerScience,
                'economics' => $request->economics,
                'englishLanguage' => $request->englishLanguage,
                'englishLiterature' => $request->englishLiterature,
                'environmentalManagement' => $request->environmentalManagement,
                'globalPerspectives' => $request->globalPerspectives,
                'governmentPolitics' => $request->governmentPolitics,
                'history' => $request->history,
                'law' => $request->law,
                'mathematics' => $request->mathematics,
                'mathematicsFurther' => $request->mathematicsFurther,
                'mediaStudies' => $request->mediaStudies,
                'physics' => $request->physics,
                'psychology' => $request->psychology,
                'sociology' => $request->sociology,
                'urdu' => $request->urdu,
            ]
        ]);


        DB::table('users')->where('id', Auth::id())->update(['hssc' => 'alevels']);
        DB::table('hssc')->where('uid', '=', Auth::id())->delete();

        
        return redirect('/academics');;
        exit();
    }
}
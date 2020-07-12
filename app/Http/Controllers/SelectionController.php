<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Test;
use App\TestAnswer;
use App\Topic;
use App\Question;
use App\QuestionsOption;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTestRequest;

class SelectionController extends Controller
{
    public function index(){

        // if(password_verify('asd123', bcrypt("asd123"))) {
        //     echo "yes3";
        // }
        

        $data = DB::table('tests')
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

        

        if($data->count() != 0){
            $subject = Test::select('subject')->where('user_id', '=', Auth::id())->where('subject', 'LIKE', 'NAT-%')->orderBy('created_at', 'desc')->get()[0]->subject;
            $English = intval(Test::select('EnglishScore')->where('user_id', '=', Auth::id())->where('subject', 'LIKE', 'NAT-%')->orderBy('created_at', 'desc')->get()[0]->EnglishScore);
            $Analytical = intval(Test::select('AnalyticalScore')->where('user_id', '=', Auth::id())->where('subject', 'LIKE', 'NAT-%')->orderBy('created_at', 'desc')->get()[0]->AnalyticalScore);
            $Quantitative = intval(Test::select('QuantitativeScore')->where('user_id', '=', Auth::id())->where('subject', 'LIKE', 'NAT-%')->orderBy('created_at', 'desc')->get()[0]->QuantitativeScore);

            $subjectScore1 = intval(Test::select('subjectScore1')->where('user_id', '=', Auth::id())->where('subject', 'LIKE', 'NAT-%')->orderBy('created_at', 'desc')->get()[0]->subjectScore1);
            $subjectScore2 = intval(Test::select('subjectScore2')->where('user_id', '=', Auth::id())->where('subject', 'LIKE', 'NAT-%')->orderBy('created_at', 'desc')->get()[0]->subjectScore2);
            $subjectScore3 = intval(Test::select('subjectScore3')->where('user_id', '=', Auth::id())->where('subject', 'LIKE', 'NAT-%')->orderBy('created_at', 'desc')->get()[0]->subjectScore3);
            
            
        }else{
            $data ='';
        }

        return view('selection.index', compact('data', 'English', 'Analytical', 'Quantitative', 'subjectScore1', 'subjectScore2', 'subjectScore3', 'subject'));
    }

    public function test($category)
    {


        $subject = $category;
        if($category == "IE"){


            $topicID =  DB::table('topics')->select('id')->where('title', "English")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            $arr = $questions;
            // echo $arr->count();

            $topicID =  DB::table('topics')->select('id')->where('title', "Analytical")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }
                
            $topicID =  DB::table('topics')->select('id')->where('title', "Quantitative")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Physics")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Chemistry")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Mathematics")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }
            $questions = $arr;

            $questionCount = $questions->count();
            foreach ($questions as &$question) {
                $question->options = QuestionsOption::where('question_id', $question->id)->inRandomOrder()->get();
            }
            

            return view('selection.create', compact('questions', 'subject', 'questionCount'));


        }
        elseif($category == "IM"){
            $subject = $category;
            $topicID =  DB::table('topics')->select('id')->where('title', "English")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            $arr = $questions;

            $topicID =  DB::table('topics')->select('id')->where('title', "Analytical")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            
            $topicID =  DB::table('topics')->select('id')->where('title', "Quantitative")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Physics")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Chemistry")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Biology")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }
            $questions = $arr;

            echo $questionCount = $questions->count();
            foreach ($questions as &$question) {
                $question->options = QuestionsOption::where('question_id', $question->id)->inRandomOrder()->get();
            }

            return view('selection.create', compact('questions', 'subject', 'questionCount'));
        }
        elseif($category == "ICS"){
            $subject = $category;
            $topicID =  DB::table('topics')->select('id')->where('title', "English")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            $arr = $questions;

            $topicID =  DB::table('topics')->select('id')->where('title', "Analytical")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            
            $topicID =  DB::table('topics')->select('id')->where('title', "Quantitative")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Physics")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Computer")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Mathematics")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }
            $questions = $arr;

            echo $questionCount = $questions->count();
            foreach ($questions as &$question) {
                $question->options = QuestionsOption::where('question_id', $question->id)->inRandomOrder()->get();
            }

            return view('selection.create', compact('questions', 'subject', 'questionCount'));
        }
        elseif($category == "IGS"){
            $subject = $category;
            $topicID =  DB::table('topics')->select('id')->where('title', "English")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            $arr = $questions;

            $topicID =  DB::table('topics')->select('id')->where('title', "Analytical")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            
            $topicID =  DB::table('topics')->select('id')->where('title', "Quantitative")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Mathematics")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Statistics")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Economics")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }
            $questions = $arr;

            echo $questionCount = $questions->count();
            foreach ($questions as &$question) {
                $question->options = QuestionsOption::where('question_id', $question->id)->inRandomOrder()->get();
            }

            return view('selection.create', compact('questions', 'subject', 'questionCount'));
        }
        elseif($category == "ICOM"){
            $subject = $category;
            $topicID =  DB::table('topics')->select('id')->where('title', "English")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            $arr = $questions;

            $topicID =  DB::table('topics')->select('id')->where('title', "Analytical")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            
            $topicID =  DB::table('topics')->select('id')->where('title', "Quantitative")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Accounting")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Commerce")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Economics")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }
            $questions = $arr;

            echo $questionCount = $questions->count();
            foreach ($questions as &$question) {
                $question->options = QuestionsOption::where('question_id', $question->id)->inRandomOrder()->get();
            }

            return view('selection.create', compact('questions', 'subject', 'questionCount'));
        }
        
        return redirect('selection');
        exit();
    }

    public function store(Request $request)
    {

        $result = 0;

        $test = Test::create([
            'user_id' => Auth::id(),
            'result'  => $result,
            'subject'  => $request->input('option1'),
            'total'  => $request->input('option2'),
            'percent'  => 0,
        ]);
        
        $English =  $Analytical = $Quantitative = $subject1 =  $subject2 = $subject3 = '';
        $EnglishScore =  $AnalyticalScore = $QuantitativeScore = $subjectScore1 =  $subjectScore2 = $subjectScore3 = 0;

        $English =  DB::table('topics')->select('id')->where('title', "English")->get()[0]->id;
        $Analytical =  DB::table('topics')->select('id')->where('title', "Analytical")->get()[0]->id;
        $Quantitative =  DB::table('topics')->select('id')->where('title', "Quantitative")->get()[0]->id;

        if($request->input('option1') == "NAT-IE"){
            $subject1 =  DB::table('topics')->select('id')->where('title', "Physics")->get()[0]->id;
            $subject2 =  DB::table('topics')->select('id')->where('title', "Chemistry")->get()[0]->id;
            $subject3 =  DB::table('topics')->select('id')->where('title', "Mathematics")->get()[0]->id;
        }
        elseif($request->input('option1') == "NAT-IM"){
            $subject1 =  DB::table('topics')->select('id')->where('title', "Physics")->get()[0]->id;
            $subject2 =  DB::table('topics')->select('id')->where('title', "Chemistry")->get()[0]->id;
            $subject3 =  DB::table('topics')->select('id')->where('title', "Biology")->get()[0]->id;
        }
        elseif($request->input('option1') == "NAT-ICS"){
            $subject1 =  DB::table('topics')->select('id')->where('title', "Physics")->get()[0]->id;
            $subject2 =  DB::table('topics')->select('id')->where('title', "Computer")->get()[0]->id;
            $subject3 =  DB::table('topics')->select('id')->where('title', "Mathematics")->get()[0]->id;
        }
        elseif($request->input('option1') == "NAT-IGS"){
            $subject1 =  DB::table('topics')->select('id')->where('title', "Mathematics")->get()[0]->id;
            $subject2 =  DB::table('topics')->select('id')->where('title', "Statistics")->get()[0]->id;
            $subject3 =  DB::table('topics')->select('id')->where('title', "Economics")->get()[0]->id;
        }
        elseif($request->input('option1') == "NAT-ICOM"){
            $subject1 =  DB::table('topics')->select('id')->where('title', "Accounting")->get()[0]->id;
            $subject2 =  DB::table('topics')->select('id')->where('title', "Commerce")->get()[0]->id;
            $subject3 =  DB::table('topics')->select('id')->where('title', "Economics")->get()[0]->id;
        }
         

        foreach ($request->input('questions', []) as $key => $question) {

            $status = 0;

            if ($request->input('answers.'.$question) != null
                && QuestionsOption::find($request->input('answers.'.$question))->correct
            ) {
                $status = 1;
                $result++;
                
            }
            TestAnswer::create([
                'user_id'     => Auth::id(),
                'test_id'     => $test->id,
                'question_id' => $question,
                'option_id'   => $request->input('answers.'.$question),
                'correct'     => $status,
            ]);



            $topic_id = DB::table('questions')->select('topic_id')->where('id', $question)->get()[0]->topic_id;
            if($topic_id == $English && $status == 1){
                //echo DB::table('topics')->select('title')->where('id', $topic_id)->get()[0]->title;
                $EnglishScore += 1;
            }
            elseif($topic_id == $Analytical && $status == 1){
                //echo DB::table('topics')->select('title')->where('id', $topic_id)->get()[0]->title;
                $AnalyticalScore += 1;
            }
            elseif($topic_id == $Quantitative && $status == 1){
                //echo DB::table('topics')->select('title')->where('id', $topic_id)->get()[0]->title;
                $QuantitativeScore += 1;
            }
            elseif($topic_id == $subject1 && $status == 1){
                //echo DB::table('topics')->select('title')->where('id', $topic_id)->get()[0]->title;
                $subjectScore1 += 1;
            }
            elseif($topic_id == $subject2 && $status == 1){
                //echo DB::table('topics')->select('title')->where('id', $topic_id)->get()[0]->title;
                $subjectScore2 += 1;
            }
            elseif($topic_id == $subject3 && $status == 1){
                //echo DB::table('topics')->select('title')->where('id', $topic_id)->get()[0]->title;
                $subjectScore3 += 1;
            }
            
        }
        echo $subjectScore1;
        echo $subjectScore2;
        echo $subjectScore3;

        $test->update(['result' => $result]);
        $test->update(['percent' => ($result/$request->input('option2'))*100]);
        $test->update(['EnglishScore' => $EnglishScore]);
        $test->update(['AnalyticalScore' => $AnalyticalScore]);
        $test->update(['QuantitativeScore' => $QuantitativeScore]);
        $test->update(['subjectScore1' => $subjectScore1]);
        $test->update(['subjectScore2' => $subjectScore2]);
        $test->update(['subjectScore3' => $subjectScore3]);

        return redirect()->route('results.show', [$test->id]);
    }


    public function APItest($id, $category)
    {


        $subject = $category;
        if($category == "IE"){


            $topicID =  DB::table('topics')->select('id')->where('title', "English")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            $arr = $questions;
            // echo $arr->count();

            $topicID =  DB::table('topics')->select('id')->where('title', "Analytical")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }
                
            $topicID =  DB::table('topics')->select('id')->where('title', "Quantitative")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Physics")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Chemistry")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Mathematics")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }
            $questions = $arr;

            $questionCount = $questions->count();
            foreach ($questions as &$question) {
                $question->options = QuestionsOption::where('question_id', $question->id)->inRandomOrder()->get();
            }
            

            return view('api.APISelectioncreate', compact('questions', 'subject', 'questionCount', 'id'));


        }
        elseif($category == "IM"){
            $subject = $category;
            $topicID =  DB::table('topics')->select('id')->where('title', "English")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            $arr = $questions;

            $topicID =  DB::table('topics')->select('id')->where('title', "Analytical")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            
            $topicID =  DB::table('topics')->select('id')->where('title', "Quantitative")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Physics")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Chemistry")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Biology")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }
            $questions = $arr;

            echo $questionCount = $questions->count();
            foreach ($questions as &$question) {
                $question->options = QuestionsOption::where('question_id', $question->id)->inRandomOrder()->get();
            }

            return view('api.APISelectioncreate', compact('questions', 'subject', 'questionCount', 'id'));
        }
        elseif($category == "ICS"){
            $subject = $category;
            $topicID =  DB::table('topics')->select('id')->where('title', "English")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            $arr = $questions;

            $topicID =  DB::table('topics')->select('id')->where('title', "Analytical")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            
            $topicID =  DB::table('topics')->select('id')->where('title', "Quantitative")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Physics")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Computer")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Mathematics")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }
            $questions = $arr;

            echo $questionCount = $questions->count();
            foreach ($questions as &$question) {
                $question->options = QuestionsOption::where('question_id', $question->id)->inRandomOrder()->get();
            }

            return view('api.APISelectioncreate', compact('questions', 'subject', 'questionCount', 'id'));
        }
        elseif($category == "IGS"){
            $subject = $category;
            $topicID =  DB::table('topics')->select('id')->where('title', "English")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            $arr = $questions;

            $topicID =  DB::table('topics')->select('id')->where('title', "Analytical")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            
            $topicID =  DB::table('topics')->select('id')->where('title', "Quantitative")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Mathematics")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Statistics")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Economics")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }
            $questions = $arr;

            echo $questionCount = $questions->count();
            foreach ($questions as &$question) {
                $question->options = QuestionsOption::where('question_id', $question->id)->inRandomOrder()->get();
            }

            return view('api.APISelectioncreate', compact('questions', 'subject', 'questionCount', 'id'));
        }
        elseif($category == "ICOM"){
            $subject = $category;
            $topicID =  DB::table('topics')->select('id')->where('title', "English")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            $arr = $questions;

            $topicID =  DB::table('topics')->select('id')->where('title', "Analytical")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            
            $topicID =  DB::table('topics')->select('id')->where('title', "Quantitative")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(20)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Accounting")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Commerce")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }

            $topicID =  DB::table('topics')->select('id')->where('title', "Economics")->get();
            $topicID = $topicID[0]->id;
            $questions = Question::inRandomOrder()->limit(10)->where('topic_id', $topicID)->get();
            if($questions->count() != 0){
                for($i = 0; $i< $questions->count(); $i++){
                    $arr[] = $questions[$i];
                }
            }
            $questions = $arr;

            echo $questionCount = $questions->count();
            foreach ($questions as &$question) {
                $question->options = QuestionsOption::where('question_id', $question->id)->inRandomOrder()->get();
            }

            return view('api.APISelectioncreate', compact('questions', 'subject', 'questionCount', 'id'));
        }
        
        return redirect('selection');
        exit();
    }

    public function APIstore(Request $request)
    {

        $result = 0;

        $test = Test::create([
            'user_id' => $request->input('userid'),
            'result'  => $result,
            'subject'  => $request->input('option1'),
            'total'  => $request->input('option2'),
            'percent'  => 0,
        ]);
        
        $English =  $Analytical = $Quantitative = $subject1 =  $subject2 = $subject3 = '';
        $EnglishScore =  $AnalyticalScore = $QuantitativeScore = $subjectScore1 =  $subjectScore2 = $subjectScore3 = 0;

        $English =  DB::table('topics')->select('id')->where('title', "English")->get()[0]->id;
        $Analytical =  DB::table('topics')->select('id')->where('title', "Analytical")->get()[0]->id;
        $Quantitative =  DB::table('topics')->select('id')->where('title', "Quantitative")->get()[0]->id;

        if($request->input('option1') == "NAT-IE"){
            $subject1 =  DB::table('topics')->select('id')->where('title', "Physics")->get()[0]->id;
            $subject2 =  DB::table('topics')->select('id')->where('title', "Chemistry")->get()[0]->id;
            $subject3 =  DB::table('topics')->select('id')->where('title', "Mathematics")->get()[0]->id;
        }
        elseif($request->input('option1') == "NAT-IM"){
            $subject1 =  DB::table('topics')->select('id')->where('title', "Physics")->get()[0]->id;
            $subject2 =  DB::table('topics')->select('id')->where('title', "Chemistry")->get()[0]->id;
            $subject3 =  DB::table('topics')->select('id')->where('title', "Biology")->get()[0]->id;
        }
        elseif($request->input('option1') == "NAT-ICS"){
            $subject1 =  DB::table('topics')->select('id')->where('title', "Physics")->get()[0]->id;
            $subject2 =  DB::table('topics')->select('id')->where('title', "Computer")->get()[0]->id;
            $subject3 =  DB::table('topics')->select('id')->where('title', "Mathematics")->get()[0]->id;
        }
        elseif($request->input('option1') == "NAT-IGS"){
            $subject1 =  DB::table('topics')->select('id')->where('title', "Mathematics")->get()[0]->id;
            $subject2 =  DB::table('topics')->select('id')->where('title', "Statistics")->get()[0]->id;
            $subject3 =  DB::table('topics')->select('id')->where('title', "Economics")->get()[0]->id;
        }
        elseif($request->input('option1') == "NAT-ICOM"){
            $subject1 =  DB::table('topics')->select('id')->where('title', "Accounting")->get()[0]->id;
            $subject2 =  DB::table('topics')->select('id')->where('title', "Commerce")->get()[0]->id;
            $subject3 =  DB::table('topics')->select('id')->where('title', "Economics")->get()[0]->id;
        }
         

        foreach ($request->input('questions', []) as $key => $question) {

            $status = 0;

            if ($request->input('answers.'.$question) != null
                && QuestionsOption::find($request->input('answers.'.$question))->correct
            ) {
                $status = 1;
                $result++;
                
            }
            TestAnswer::create([
                'user_id'     => Auth::id(),
                'test_id'     => $test->id,
                'question_id' => $question,
                'option_id'   => $request->input('answers.'.$question),
                'correct'     => $status,
            ]);



            $topic_id = DB::table('questions')->select('topic_id')->where('id', $question)->get()[0]->topic_id;
            if($topic_id == $English && $status == 1){
                //echo DB::table('topics')->select('title')->where('id', $topic_id)->get()[0]->title;
                $EnglishScore += 1;
            }
            elseif($topic_id == $Analytical && $status == 1){
                //echo DB::table('topics')->select('title')->where('id', $topic_id)->get()[0]->title;
                $AnalyticalScore += 1;
            }
            elseif($topic_id == $Quantitative && $status == 1){
                //echo DB::table('topics')->select('title')->where('id', $topic_id)->get()[0]->title;
                $QuantitativeScore += 1;
            }
            elseif($topic_id == $subject1 && $status == 1){
                //echo DB::table('topics')->select('title')->where('id', $topic_id)->get()[0]->title;
                $subjectScore1 += 1;
            }
            elseif($topic_id == $subject2 && $status == 1){
                //echo DB::table('topics')->select('title')->where('id', $topic_id)->get()[0]->title;
                $subjectScore2 += 1;
            }
            elseif($topic_id == $subject3 && $status == 1){
                //echo DB::table('topics')->select('title')->where('id', $topic_id)->get()[0]->title;
                $subjectScore3 += 1;
            }
            
        }
        echo $subjectScore1;
        echo $subjectScore2;
        echo $subjectScore3;

        $test->update(['result' => $result]);
        $test->update(['percent' => ($result/$request->input('option2'))*100]);
        $test->update(['EnglishScore' => $EnglishScore]);
        $test->update(['AnalyticalScore' => $AnalyticalScore]);
        $test->update(['QuantitativeScore' => $QuantitativeScore]);
        $test->update(['subjectScore1' => $subjectScore1]);
        $test->update(['subjectScore2' => $subjectScore2]);
        $test->update(['subjectScore3' => $subjectScore3]);

        return redirect('APIselection/result/'.$request->input('userid'));
        exit();
    }

    public function APISelectionResult($id){
        

        $data = DB::table('tests')
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

        

        if($data->count() != 0){
            $subject = Test::select('subject')->where('user_id', '=', $id)->where('subject', 'LIKE', 'NAT-%')->orderBy('created_at', 'desc')->get()[0]->subject;
            $English = intval(Test::select('EnglishScore')->where('user_id', '=', $id)->where('subject', 'LIKE', 'NAT-%')->orderBy('created_at', 'desc')->get()[0]->EnglishScore);
            $Analytical = intval(Test::select('AnalyticalScore')->where('user_id', '=', $id)->where('subject', 'LIKE', 'NAT-%')->orderBy('created_at', 'desc')->get()[0]->AnalyticalScore);
            $Quantitative = intval(Test::select('QuantitativeScore')->where('user_id', '=', $id)->where('subject', 'LIKE', 'NAT-%')->orderBy('created_at', 'desc')->get()[0]->QuantitativeScore);

            $subjectScore1 = intval(Test::select('subjectScore1')->where('user_id', '=', $id)->where('subject', 'LIKE', 'NAT-%')->orderBy('created_at', 'desc')->get()[0]->subjectScore1);
            $subjectScore2 = intval(Test::select('subjectScore2')->where('user_id', '=', $id)->where('subject', 'LIKE', 'NAT-%')->orderBy('created_at', 'desc')->get()[0]->subjectScore2);
            $subjectScore3 = intval(Test::select('subjectScore3')->where('user_id', '=', $id)->where('subject', 'LIKE', 'NAT-%')->orderBy('created_at', 'desc')->get()[0]->subjectScore3);
            
            
        }else{
            $data ='';
        }

        return view('api.APISelectionResult', compact('data', 'English', 'Analytical', 'Quantitative', 'subjectScore1', 'subjectScore2', 'subjectScore3', 'subject'));
    }
}

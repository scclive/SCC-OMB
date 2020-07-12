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

class DiagnosticController extends Controller
{
    public function index()
    {


        $data = DB::table('tests')
        ->orderBy('created_at', 'desc')
        ->where('user_id', '=', Auth::id())
        ->where('subject', 'NOT LIKE', 'NAT-%')
        ->get();

        $English = 0;
        $Analytical = 0;
        $Quantitative = 0;
        $Physics = 0;
        $Chemistry = 0;
        $Mathematics = 0;
        $Biology = 0;
        $Computer = 0;
        $Statistics = 0;
        $Economics = 0;
        $Accounting = 0;
        $Commerce = 0;

        

        if($data->count() != 0){
            $English = Test::where('user_id', '=', Auth::id())->where('subject', '=', 'English')->avg('percent');
            $Analytical = Test::where('user_id', '=', Auth::id())->where('subject', '=', 'Analytical')->avg('percent');
            $Quantitative = Test::where('user_id', '=', Auth::id())->where('subject', '=', 'Quantitative')->avg('percent');
            $Physics = Test::where('user_id', '=', Auth::id())->where('subject', '=', 'Physics')->avg('percent');
            $Chemistry = Test::where('user_id', '=', Auth::id())->where('subject', '=', 'Chemistry')->avg('percent');
            $Mathematics = Test::where('user_id', '=', Auth::id())->where('subject', '=', 'Mathematics')->avg('percent');
            $Biology = Test::where('user_id', '=', Auth::id())->where('subject', '=', 'Biology')->avg('percent');
            $Computer = Test::where('user_id', '=', Auth::id())->where('subject', '=', 'Computer')->avg('percent');
            $Statistics = Test::where('user_id', '=', Auth::id())->where('subject', '=', 'Statistics')->avg('percent');
            $Economics = Test::where('user_id', '=', Auth::id())->where('subject', '=', 'Economics')->avg('percent');
            $Accounting = Test::where('user_id', '=', Auth::id())->where('subject', '=', 'Accounting')->avg('percent');
            $Commerce = Test::where('user_id', '=', Auth::id())->where('subject', '=', 'Commerce')->avg('percent');
            
        }else{
            $data ='';
        }

        // $Analytical = 
        // $Quantitative = 
        // $Physics = 
        // $Chemistry = 
        // $Mathematics = 
        // $Biology = 
        // $Computer = 
        // $Statistics = 
        // $Economics = 
        // $Accounting = 
        // $Commerce = 10;

        return view('diagnostic.index', compact('data', 'English', 'Analytical', 'Quantitative', 'Physics', 'Chemistry', 'Mathematics', 'Biology', 'Computer', 'Statistics', 'Economics', 'Accounting', 'Commerce'));
    }


    public function test($subject)
    {
        $topicID =  DB::table('topics')->select('id')->where('title', $subject)->get();
        $topicID = $topicID[0]->id;
        $questions = Question::inRandomOrder()->limit(40)->where('topic_id', $topicID)->get();
        $questionCount = $questions->count();
        foreach ($questions as &$question) {
            $question->options = QuestionsOption::where('question_id', $question->id)->inRandomOrder()->get();
        }

        return view('diagnostic.create', compact('questions', 'subject', 'questionCount'));
    }

    public function APItest($id, $subject)
    {
        $topicID =  DB::table('topics')->select('id')->where('title', $subject)->get();
        $topicID = $topicID[0]->id;
        $questions = Question::inRandomOrder()->limit(40)->where('topic_id', $topicID)->get();
        $questionCount = $questions->count();
        foreach ($questions as &$question) {
            $question->options = QuestionsOption::where('question_id', $question->id)->inRandomOrder()->get();
        }

        return view('api.APIDiagnosticcreate', compact('questions', 'subject', 'questionCount', 'id'));
    }

    public function APIstore(Request $request)
    {
        //echo $request->input('option1');

        $result = 0;

        $test = Test::create([
            'user_id' => $request->input('userid'),
            'result'  => $result,
            'subject'  => $request->input('option1'),
            'total'  => $request->input('option2'),
            'percent'  => 0,
        ]);

        foreach ($request->input('questions', []) as $key => $question) {
            $status = 0;

            if ($request->input('answers.'.$question) != null
                && QuestionsOption::find($request->input('answers.'.$question))->correct
            ) {
                $status = 1;
                $result++;
            }
            TestAnswer::create([
                'user_id'     => $request->input('userid'),
                'test_id'     => $test->id,
                'question_id' => $question,
                'option_id'   => $request->input('answers.'.$question),
                'correct'     => $status,
            ]);
        }

        $test->update(['result' => $result]);
        $test->update(['percent' => ($result/$request->input('option2'))*100]);
        return redirect('APIdiagnostic/result/'.$request->input('userid'));
        exit();
        
    }

    public function APIDiagnosticResult($id)
    {


        $data = DB::table('tests')
        ->orderBy('created_at', 'desc')
        ->where('user_id', '=', $id)
        ->where('subject', 'NOT LIKE', 'NAT-%')
        ->get();

        $English = 0;
        $Analytical = 0;
        $Quantitative = 0;
        $Physics = 0;
        $Chemistry = 0;
        $Mathematics = 0;
        $Biology = 0;
        $Computer = 0;
        $Statistics = 0;
        $Economics = 0;
        $Accounting = 0;
        $Commerce = 0;

        

        if($data->count() != 0){
            $English = Test::where('user_id', '=', $id)->where('subject', '=', 'English')->avg('percent');
            $Analytical = Test::where('user_id', '=', $id)->where('subject', '=', 'Analytical')->avg('percent');
            $Quantitative = Test::where('user_id', '=', $id)->where('subject', '=', 'Quantitative')->avg('percent');
            $Physics = Test::where('user_id', '=', $id)->where('subject', '=', 'Physics')->avg('percent');
            $Chemistry = Test::where('user_id', '=', $id)->where('subject', '=', 'Chemistry')->avg('percent');
            $Mathematics = Test::where('user_id', '=', $id)->where('subject', '=', 'Mathematics')->avg('percent');
            $Biology = Test::where('user_id', '=', $id)->where('subject', '=', 'Biology')->avg('percent');
            $Computer = Test::where('user_id', '=', $id)->where('subject', '=', 'Computer')->avg('percent');
            $Statistics = Test::where('user_id', '=', $id)->where('subject', '=', 'Statistics')->avg('percent');
            $Economics = Test::where('user_id', '=', $id)->where('subject', '=', 'Economics')->avg('percent');
            $Accounting = Test::where('user_id', '=', $id)->where('subject', '=', 'Accounting')->avg('percent');
            $Commerce = Test::where('user_id', '=', $id)->where('subject', '=', 'Commerce')->avg('percent');
            
        }else{
            $data ='';
        }

        // $Analytical = 
        // $Quantitative = 
        // $Physics = 
        // $Chemistry = 
        // $Mathematics = 
        // $Biology = 
        // $Computer = 
        // $Statistics = 
        // $Economics = 
        // $Accounting = 
        // $Commerce = 10;

        return view('api.APIDiagnosticResult', compact('data', 'English', 'Analytical', 'Quantitative', 'Physics', 'Chemistry', 'Mathematics', 'Biology', 'Computer', 'Statistics', 'Economics', 'Accounting', 'Commerce'));
    }

    public function store(Request $request)
    {
        //echo $request->input('option1');

        $result = 0;

        $test = Test::create([
            'user_id' => Auth::id(),
            'result'  => $result,
            'subject'  => $request->input('option1'),
            'total'  => $request->input('option2'),
            'percent'  => 0,
        ]);

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
        }

        $test->update(['result' => $result]);
        $test->update(['percent' => ($result/$request->input('option2'))*100]);

        return redirect()->route('results.show', [$test->id]);
    }
}

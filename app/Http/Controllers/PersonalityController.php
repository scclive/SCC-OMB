<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Test;
use App\TestAnswer;
use App\Topic;
use App\Personality;
use App\Question;
use App\QuestionsOption;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTestRequest;

class PersonalityController extends Controller
{

    public function index()
    {

        $data = -1;
        $result=-1;
        $conventional = -1;
        $enterprising = -1;
        $social = -1;
        $artistic = -1;
        $investigative = -1;
        $realistic = -1;

        $data = DB::table('personality')
        ->orderBy('created_at', 'desc')
        ->where('user_id', '=', Auth::id())
        ->get();


        

        if($data->count() != 0){
            $result = strtoupper($data[0]->result);
            $conventional = $data[0]->conventional;
            $enterprising = $data[0]->enterprising;
            $social = $data[0]->social;
            $artistic = $data[0]->artistic;
            $investigative = $data[0]->investigative;
            $realistic = $data[0]->realistic;
        }
        

        return view('personality.index', compact('data', 'result', 'conventional', 'enterprising', 'social', 'artistic', 'investigative', 'realistic'));
    }

    public function test()
    {
        $questions = Question::inRandomOrder()->limit(60)->where('topic_id', 11)->get();
        foreach ($questions as &$question) {
            $question->options = QuestionsOption::where('question_id', $question->id)->get();
        }

        return view('personality.create', compact('questions'));
    }

    public function APItest($id)
    {
        $questions = Question::inRandomOrder()->limit(60)->where('topic_id', 11)->get();
        foreach ($questions as &$question) {
            $question->options = QuestionsOption::where('question_id', $question->id)->get();
        }

        return view('api.APIPersonalitycreate', compact('questions', 'id'));
    }

    public function APIstore(Request $request)
    {
        $result = '';
        $conventional = 30;
        $enterprising = 30;
        $social = 30;
        $artistic = 30;
        $investigative = 30;
        $realistic = 30;


        foreach ($request->input('questions', []) as $key => $question) {

            if ($request->input('answers.'.$question) != null){
                $topic = DB::table('questions')->select('personality_ref')->where('id', '=', $question)->get();
                $personality_ref = $topic[0]->personality_ref;
                $option = $request->input('answers.'.$question);
                $option = DB::table('questions_options')->select('option')->where('id', '=', $option)->get();
                $option = $option[0]->option;
                if($option == "I Love It"){
                    if($personality_ref == "conventional"){
                        $conventional = $conventional + 2;
                    }elseif($personality_ref == "enterprising"){
                        $enterprising = $enterprising + 2;
                    }elseif($personality_ref == "social"){
                        $social = $social + 2;
                    }elseif($personality_ref == "artistic "){
                        $artistic = $artistic + 2;
                    }elseif($personality_ref == "investigative"){
                        $investigative = $investigative + 2;
                    }elseif($personality_ref == "realistic"){
                        $realistic = $realistic + 2;
                    }
                }elseif($option == "Could be interesting"){
                    if($personality_ref == "conventional"){
                        $conventional = $conventional + 1;
                    }elseif($personality_ref == "enterprising"){
                        $enterprising = $enterprising + 1;
                    }elseif($personality_ref == "social"){
                        $social = $social + 1;
                    }elseif($personality_ref == "artistic "){
                        $artistic = $artistic + 1;
                    }elseif($personality_ref == "investigative"){
                        $investigative = $investigative + 1;
                    }elseif($personality_ref == "realistic"){
                        $realistic = $realistic + 1;
                    }
                }elseif($option == "Unsure"){
                    if($personality_ref == "conventional"){
                        $conventional = $conventional + 0;
                    }elseif($personality_ref == "enterprising"){
                        $enterprising = $enterprising + 0;
                    }elseif($personality_ref == "social"){
                        $social = $social + 0;
                    }elseif($personality_ref == "artistic "){
                        $artistic = $artistic + 0;
                    }elseif($personality_ref == "investigative"){
                        $investigative = $investigative + 0;
                    }elseif($personality_ref == "realistic"){
                        $realistic = $realistic + 0;
                    }
                }elseif($option == "Rahter Not"){
                    if($personality_ref == "conventional"){
                        $conventional = $conventional - 1;
                    }elseif($personality_ref == "enterprising"){
                        $enterprising = $enterprising - 1;
                    }elseif($personality_ref == "social"){
                        $social = $social - 1;
                    }elseif($personality_ref == "artistic "){
                        $artistic = $artistic - 1;
                    }elseif($personality_ref == "investigative"){
                        $investigative = $investigative - 1;
                    }elseif($personality_ref == "realistic"){
                        $realistic = $realistic - 1;
                    }
                }elseif($option == "I hate it"){
                    if($personality_ref == "conventional"){
                        $conventional = $conventional - 2;
                    }elseif($personality_ref == "enterprising"){
                        $enterprising = $enterprising - 2;
                    }elseif($personality_ref == "social"){
                        $social = $social - 2;
                    }elseif($personality_ref == "artistic "){
                        $artistic = $artistic - 2;
                    }elseif($personality_ref == "investigative"){
                        $investigative = $investigative - 2;
                    }elseif($personality_ref == "realistic"){
                        $realistic = $realistic - 2;
                    }
                }

            }

            // if ($request->input('answers.'.$question) != null){
            //     echo $question.'<br>';
            //     $topic = DB::table('questions')->select('personality_ref')->where('id', '=', $question)->get();
            //     echo $topic[0]->personality_ref.'<br>';
            //     echo $request->input('answers.'.$question).'<br>';
            // }
            // echo '<br><br>';

            
        }

        


        //calc result
        if($conventional >= $enterprising && 
        $conventional >= $social &&
        $conventional >= $artistic && 
        $conventional >= $investigative &&
        $conventional >= $realistic){
            $result = 'conventional';
        }if($enterprising >= $conventional && 
        $enterprising >= $social &&
        $enterprising >= $artistic && 
        $enterprising >= $investigative &&
        $enterprising >= $realistic){
            $result = 'enterprising';
        }if($social >= $conventional && 
        $social >= $enterprising &&
        $social >= $artistic && 
        $social >= $investigative &&
        $social >= $realistic){
            $result = 'social';
        }if($artistic >= $conventional && 
        $artistic >= $enterprising &&
        $artistic >= $social && 
        $artistic >= $investigative &&
        $artistic >= $realistic){
            $result = 'artistic';
        }if($investigative >= $conventional && 
        $investigative >= $enterprising &&
        $investigative >= $social && 
        $investigative >= $artistic &&
        $investigative >= $realistic){
            $result = 'investigative';
        }if($realistic >= $conventional && 
        $realistic >= $enterprising &&
        $realistic >= $social && 
        $realistic >= $artistic &&
        $realistic >= $investigative){
            $result = 'realistic';
        }
        

        Personality::create([
            'user_id'     => $request->input('userid'),
            'result'     => $result,
            'conventional' => $conventional,
            'enterprising'   => $enterprising,
            'social'     => $social,
            'artistic'     => $artistic,
            'investigative'     => $investigative,
            'realistic'     => $realistic,
        ]);


        //return view('personality.index');
        // header("Location: ".url('/')."personality");
        return redirect('APIPersonality/result/'.$request->input('userid'));
        exit();
    }

    public function APIPersonalityResult($id)
    {
        $data = -1;
        $result=-1;
        $conventional = -1;
        $enterprising = -1;
        $social = -1;
        $artistic = -1;
        $investigative = -1;
        $realistic = -1;

        $data = DB::table('personality')
        ->orderBy('created_at', 'desc')
        ->where('user_id', '=', $id)
        ->get();


        

        if($data->count() != 0){
            $result = strtoupper($data[0]->result);
            $conventional = $data[0]->conventional;
            $enterprising = $data[0]->enterprising;
            $social = $data[0]->social;
            $artistic = $data[0]->artistic;
            $investigative = $data[0]->investigative;
            $realistic = $data[0]->realistic;
        }
        

        return view('api.APIPersonalityResult', compact('data', 'result', 'conventional', 'enterprising', 'social', 'artistic', 'investigative', 'realistic'));
 

    }

    public function pertest()
    {
        $questions = Question::inRandomOrder()->limit(60)->where('topic_id', 11)->get();
        foreach ($questions as &$question) {
            $question->options = QuestionsOption::where('question_id', $question->id)->get();
        }

        return view('index.pertest', compact('questions'));
    }

    public function store(Request $request)
    {
        $result = '';
        $conventional = 30;
        $enterprising = 30;
        $social = 30;
        $artistic = 30;
        $investigative = 30;
        $realistic = 30;


        foreach ($request->input('questions', []) as $key => $question) {

            if ($request->input('answers.'.$question) != null){
                $topic = DB::table('questions')->select('personality_ref')->where('id', '=', $question)->get();
                $personality_ref = $topic[0]->personality_ref;
                $option = $request->input('answers.'.$question);
                $option = DB::table('questions_options')->select('option')->where('id', '=', $option)->get();
                $option = $option[0]->option;
                if($option == "I Love It"){
                    if($personality_ref == "conventional"){
                        $conventional = $conventional + 2;
                    }elseif($personality_ref == "enterprising"){
                        $enterprising = $enterprising + 2;
                    }elseif($personality_ref == "social"){
                        $social = $social + 2;
                    }elseif($personality_ref == "artistic "){
                        $artistic = $artistic + 2;
                    }elseif($personality_ref == "investigative"){
                        $investigative = $investigative + 2;
                    }elseif($personality_ref == "realistic"){
                        $realistic = $realistic + 2;
                    }
                }elseif($option == "Could be interesting"){
                    if($personality_ref == "conventional"){
                        $conventional = $conventional + 1;
                    }elseif($personality_ref == "enterprising"){
                        $enterprising = $enterprising + 1;
                    }elseif($personality_ref == "social"){
                        $social = $social + 1;
                    }elseif($personality_ref == "artistic "){
                        $artistic = $artistic + 1;
                    }elseif($personality_ref == "investigative"){
                        $investigative = $investigative + 1;
                    }elseif($personality_ref == "realistic"){
                        $realistic = $realistic + 1;
                    }
                }elseif($option == "Unsure"){
                    if($personality_ref == "conventional"){
                        $conventional = $conventional + 0;
                    }elseif($personality_ref == "enterprising"){
                        $enterprising = $enterprising + 0;
                    }elseif($personality_ref == "social"){
                        $social = $social + 0;
                    }elseif($personality_ref == "artistic "){
                        $artistic = $artistic + 0;
                    }elseif($personality_ref == "investigative"){
                        $investigative = $investigative + 0;
                    }elseif($personality_ref == "realistic"){
                        $realistic = $realistic + 0;
                    }
                }elseif($option == "Rahter Not"){
                    if($personality_ref == "conventional"){
                        $conventional = $conventional - 1;
                    }elseif($personality_ref == "enterprising"){
                        $enterprising = $enterprising - 1;
                    }elseif($personality_ref == "social"){
                        $social = $social - 1;
                    }elseif($personality_ref == "artistic "){
                        $artistic = $artistic - 1;
                    }elseif($personality_ref == "investigative"){
                        $investigative = $investigative - 1;
                    }elseif($personality_ref == "realistic"){
                        $realistic = $realistic - 1;
                    }
                }elseif($option == "I hate it"){
                    if($personality_ref == "conventional"){
                        $conventional = $conventional - 2;
                    }elseif($personality_ref == "enterprising"){
                        $enterprising = $enterprising - 2;
                    }elseif($personality_ref == "social"){
                        $social = $social - 2;
                    }elseif($personality_ref == "artistic "){
                        $artistic = $artistic - 2;
                    }elseif($personality_ref == "investigative"){
                        $investigative = $investigative - 2;
                    }elseif($personality_ref == "realistic"){
                        $realistic = $realistic - 2;
                    }
                }

            }

            // if ($request->input('answers.'.$question) != null){
            //     echo $question.'<br>';
            //     $topic = DB::table('questions')->select('personality_ref')->where('id', '=', $question)->get();
            //     echo $topic[0]->personality_ref.'<br>';
            //     echo $request->input('answers.'.$question).'<br>';
            // }
            // echo '<br><br>';

            
        }

        


        //calc result
        if($conventional >= $enterprising && 
        $conventional >= $social &&
        $conventional >= $artistic && 
        $conventional >= $investigative &&
        $conventional >= $realistic){
            $result = 'conventional';
        }if($enterprising >= $conventional && 
        $enterprising >= $social &&
        $enterprising >= $artistic && 
        $enterprising >= $investigative &&
        $enterprising >= $realistic){
            $result = 'enterprising';
        }if($social >= $conventional && 
        $social >= $enterprising &&
        $social >= $artistic && 
        $social >= $investigative &&
        $social >= $realistic){
            $result = 'social';
        }if($artistic >= $conventional && 
        $artistic >= $enterprising &&
        $artistic >= $social && 
        $artistic >= $investigative &&
        $artistic >= $realistic){
            $result = 'artistic';
        }if($investigative >= $conventional && 
        $investigative >= $enterprising &&
        $investigative >= $social && 
        $investigative >= $artistic &&
        $investigative >= $realistic){
            $result = 'investigative';
        }if($realistic >= $conventional && 
        $realistic >= $enterprising &&
        $realistic >= $social && 
        $realistic >= $artistic &&
        $realistic >= $investigative){
            $result = 'realistic';
        }
        

        Personality::create([
            'user_id'     => Auth::id(),
            'result'     => $result,
            'conventional' => $conventional,
            'enterprising'   => $enterprising,
            'social'     => $social,
            'artistic'     => $artistic,
            'investigative'     => $investigative,
            'realistic'     => $realistic,
        ]);

        // echo 'result: '.$result.'<br>';
        // echo 'conventional: '.$conventional.'<br>';
        // echo 'enterprising: '.$enterprising.'<br>';
        // echo 'social: '.$social.'<br>';
        // echo 'artistic: '.$artistic.'<br>';
        // echo 'investigative: '.$investigative.'<br>';
        // echo 'realistic: '.$realistic.'<br>';


        //return view('personality.index');
        // header("Location: http://127.0.0.1:8000/personality");
        return redirect('personality');
        exit();
    }

    public function perstore(Request $request)
    {
        $result = '';
        $conventional = 30;
        $enterprising = 30;
        $social = 30;
        $artistic = 30;
        $investigative = 30;
        $realistic = 30;


        foreach ($request->input('questions', []) as $key => $question) {

            if ($request->input('answers.'.$question) != null){
                $topic = DB::table('questions')->select('personality_ref')->where('id', '=', $question)->get();
                $personality_ref = $topic[0]->personality_ref;
                $option = $request->input('answers.'.$question);
                $option = DB::table('questions_options')->select('option')->where('id', '=', $option)->get();
                $option = $option[0]->option;
                if($option == "I Love It"){
                    if($personality_ref == "conventional"){
                        $conventional = $conventional + 2;
                    }elseif($personality_ref == "enterprising"){
                        $enterprising = $enterprising + 2;
                    }elseif($personality_ref == "social"){
                        $social = $social + 2;
                    }elseif($personality_ref == "artistic "){
                        $artistic = $artistic + 2;
                    }elseif($personality_ref == "investigative"){
                        $investigative = $investigative + 2;
                    }elseif($personality_ref == "realistic"){
                        $realistic = $realistic + 2;
                    }
                }elseif($option == "Could be interesting"){
                    if($personality_ref == "conventional"){
                        $conventional = $conventional + 1;
                    }elseif($personality_ref == "enterprising"){
                        $enterprising = $enterprising + 1;
                    }elseif($personality_ref == "social"){
                        $social = $social + 1;
                    }elseif($personality_ref == "artistic "){
                        $artistic = $artistic + 1;
                    }elseif($personality_ref == "investigative"){
                        $investigative = $investigative + 1;
                    }elseif($personality_ref == "realistic"){
                        $realistic = $realistic + 1;
                    }
                }elseif($option == "Unsure"){
                    if($personality_ref == "conventional"){
                        $conventional = $conventional + 0;
                    }elseif($personality_ref == "enterprising"){
                        $enterprising = $enterprising + 0;
                    }elseif($personality_ref == "social"){
                        $social = $social + 0;
                    }elseif($personality_ref == "artistic "){
                        $artistic = $artistic + 0;
                    }elseif($personality_ref == "investigative"){
                        $investigative = $investigative + 0;
                    }elseif($personality_ref == "realistic"){
                        $realistic = $realistic + 0;
                    }
                }elseif($option == "Rahter Not"){
                    if($personality_ref == "conventional"){
                        $conventional = $conventional - 1;
                    }elseif($personality_ref == "enterprising"){
                        $enterprising = $enterprising - 1;
                    }elseif($personality_ref == "social"){
                        $social = $social - 1;
                    }elseif($personality_ref == "artistic "){
                        $artistic = $artistic - 1;
                    }elseif($personality_ref == "investigative"){
                        $investigative = $investigative - 1;
                    }elseif($personality_ref == "realistic"){
                        $realistic = $realistic - 1;
                    }
                }elseif($option == "I hate it"){
                    if($personality_ref == "conventional"){
                        $conventional = $conventional - 2;
                    }elseif($personality_ref == "enterprising"){
                        $enterprising = $enterprising - 2;
                    }elseif($personality_ref == "social"){
                        $social = $social - 2;
                    }elseif($personality_ref == "artistic "){
                        $artistic = $artistic - 2;
                    }elseif($personality_ref == "investigative"){
                        $investigative = $investigative - 2;
                    }elseif($personality_ref == "realistic"){
                        $realistic = $realistic - 2;
                    }
                }

            }

            
        }

        


        //calc result
        if($conventional >= $enterprising && 
        $conventional >= $social &&
        $conventional >= $artistic && 
        $conventional >= $investigative &&
        $conventional >= $realistic){
            $result = 'conventional';
        }if($enterprising >= $conventional && 
        $enterprising >= $social &&
        $enterprising >= $artistic && 
        $enterprising >= $investigative &&
        $enterprising >= $realistic){
            $result = 'enterprising';
        }if($social >= $conventional && 
        $social >= $enterprising &&
        $social >= $artistic && 
        $social >= $investigative &&
        $social >= $realistic){
            $result = 'social';
        }if($artistic >= $conventional && 
        $artistic >= $enterprising &&
        $artistic >= $social && 
        $artistic >= $investigative &&
        $artistic >= $realistic){
            $result = 'artistic';
        }if($investigative >= $conventional && 
        $investigative >= $enterprising &&
        $investigative >= $social && 
        $investigative >= $artistic &&
        $investigative >= $realistic){
            $result = 'investigative';
        }if($realistic >= $conventional && 
        $realistic >= $enterprising &&
        $realistic >= $social && 
        $realistic >= $artistic &&
        $realistic >= $investigative){
            $result = 'realistic';
        }
        

        // Personality::create([
        //     'user_id'     => Auth::id(),
        //     'result'     => $result,
        //     'conventional' => $conventional,
        //     'enterprising'   => $enterprising,
        //     'social'     => $social,
        //     'artistic'     => $artistic,
        //     'investigative'     => $investigative,
        //     'realistic'     => $realistic,
        // ]);

        return view('index.perresult', compact('result', 'conventional', 'enterprising', 'social', 'artistic', 'investigative', 'realistic'));
    
    }
}

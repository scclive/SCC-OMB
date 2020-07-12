<?php

namespace App\Http\Controllers;

use App\Question;
use App\QuestionsOption;
use Illuminate\Http\Request;
use App\Http\Requests\StoreQuestionsRequest;
use App\Http\Requests\UpdateQuestionsRequest;

use App\Ocr;
use DB;
use Image;

class QuestionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function images($option)
    {
        if($option == "all")
            $ocrData = Ocr::all();
        elseif($option == "unread")
            $ocrData = DB::table('ocr')->where('Image_Traversed', '=', 'Unread')->get();
        elseif($option == "read")
            $ocrData = DB::table('ocr')->where('Image_Traversed', '=', 'Read')->get();
        elseif($option == "processed")
            $ocrData = DB::table('ocr')->where('Image_Text', '=', 'Processed')->get();

        return view('questions.images', compact(['ocrData']));

    }


    public function chooseImage()
    {

        $ocrData = Ocr::all();
        $image_code = '';
        foreach($ocrData as $image)
        {
            $image_code .= '<div class="btn " style="width: 91%; margin-right:6%; margin-left:3%; margin-bottom:24px;">'.$image->OCR_id.'<img src="/images/'.$image->Image_Dir.'" class="img-thumbnail imagecropselect"/></div>';
        }

        $output = array(
        'image'   => $image_code
        );
        return response()->json($output);
        
    }
    public function crop($x, $y, $w, $h, $img, $OCR_id)
    {

        // crop image
        // $ocr = Ocr::find($OCR_id);
        $Image_Dir = "";

        $data = DB::table('ocr')->where('OCR_id', '=', $OCR_id)->get();
        if($data->count()!=0){
            foreach($data as $row) {
                $Image_Dir =  $row->Image_Dir;
            }
        }



        $img = Image::make(public_path('images/'.$Image_Dir));
        $croppath = public_path('images/crop/'.$Image_Dir);
        $x = intval($x*1.3);
        $y = intval($y*1.3);
        $w = intval($w*1.3);
        $h = intval($h*1.3);

        $img->crop($w, $h, $x, $y);
        $img->save($croppath);
        
    }










    /**
     * Display a listing of Question.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();

        $English = (DB::table('topics')->where('title', '=', 'English')->get())[0]->id;
        $Analytical = (DB::table('topics')->where('title', '=', 'Analytical')->get())[0]->id;
        $Quantitative = (DB::table('topics')->where('title', '=', 'Quantitative')->get())[0]->id;
        $Physics = (DB::table('topics')->where('title', '=', 'Physics')->get())[0]->id;
        $Chemistry = (DB::table('topics')->where('title', '=', 'Chemistry')->get())[0]->id;
        $Mathematics = (DB::table('topics')->where('title', '=', 'Mathematics')->get())[0]->id;
        $Biology = (DB::table('topics')->where('title', '=', 'Biology')->get())[0]->id;
        $Computer = (DB::table('topics')->where('title', '=', 'Computer')->get())[0]->id;
        $Statistics = (DB::table('topics')->where('title', '=', 'Statistics')->get())[0]->id;
        $Economics = (DB::table('topics')->where('title', '=', 'Economics')->get())[0]->id;
        $Accounting = (DB::table('topics')->where('title', '=', 'Accounting')->get())[0]->id;
        $Commerce = (DB::table('topics')->where('title', '=', 'Commerce')->get())[0]->id;
        $Personality = (DB::table('topics')->where('title', '=', 'Personality')->get())[0]->id;


        
        

        if($questions->count() != 0){
            $English = (DB::table('questions')->where('topic_id', '=', $English)->get())->count();
            $Analytical = (DB::table('questions')->where('topic_id', '=', $Analytical)->get())->count();
            $Quantitative = (DB::table('questions')->where('topic_id', '=', $Quantitative)->get())->count();
            $Physics = (DB::table('questions')->where('topic_id', '=', $Physics)->get())->count();
            $Chemistry = (DB::table('questions')->where('topic_id', '=', $Chemistry)->get())->count();
            $Mathematics = (DB::table('questions')->where('topic_id', '=', $Mathematics)->get())->count();
            $Biology = (DB::table('questions')->where('topic_id', '=', $Biology)->get())->count();
            $Computer = (DB::table('questions')->where('topic_id', '=', $Computer)->get())->count();
            $Statistics = (DB::table('questions')->where('topic_id', '=', $Statistics)->get())->count();
            $Economics = (DB::table('questions')->where('topic_id', '=', $Economics)->get())->count();
            $Accounting = (DB::table('questions')->where('topic_id', '=', $Accounting)->get())->count();
            $Commerce = (DB::table('questions')->where('topic_id', '=', $Commerce)->get())->count();
            $Personality = (DB::table('questions')->where('topic_id', '=', $Personality)->get())->count();
            $total = $questions->count();
            
        }else{
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
            $Personality = 0;
            $total = 0;
        }

        return view('questions.index', compact('questions', 'English', 'Analytical', 'Quantitative', 'Physics', 'Chemistry', 'Mathematics', 'Biology', 'Computer', 'Statistics', 'Economics', 'Accounting', 'Commerce', 'Personality', 'total'));

    }

    /**
     * Show the form for creating new Question.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relations = [
            'topics' => \App\Topic::get()->pluck('title', 'id')->prepend('Please select', ''),
        ];

        $correct_options = [
            'option1' => 'Option #1',
            'option2' => 'Option #2',
            'option3' => 'Option #3',
            'option4' => 'Option #4',
            'option5' => 'Option #5'
        ];

        return view('questions.create', compact('correct_options') + $relations);
    }

    /**
     * Store a newly created Question in storage.
     *
     * @param  \App\Http\Requests\StoreQuestionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionsRequest $request)
    {

        $question = Question::create($request->all());

        foreach ($request->input() as $key => $value) {
            if(strpos($key, 'option') !== false && $value != '') {
                $status = $request->input('correct') == $key ? 1 : 0;
                QuestionsOption::create([
                    'question_id' => $question->id,
                    'option'      => $value,
                    'correct'     => $status
                ]);
            }
        }

        //checks if personality_ref
        if($request->get('personality_ref') != ''){
            $question = Question::find($question->id);
            $question->personality_ref =  $request->get('personality_ref');
            $question->save();
        }

        //checks if image exists
        if($request->get('OCR_id') != ''){
            $Image_Dir = "";

            //upload image
            $data = DB::table('ocr')->where('OCR_id', '=', $request->get('OCR_id'))->get();
            if($data->count()!=0){
                foreach($data as $row) {
                    $Image_Dir =  $row->Image_Dir;
                }
            }
            $randomNumber = rand();
            $img = Image::make(public_path('images/'.$Image_Dir));
            $croppath = public_path('images/crop/'.$randomNumber.$Image_Dir);
            $img->crop($request->get('w'), $request->get('h'), $request->get('x'), $request->get('y'));
            $img->save($croppath);

            //enter image
            $data = DB::table('questions')->where('id', '=', $question->id)->get();
            if($data->count()!=0){
                foreach($data as $row) {
                    $questionTemp = Question::find($row->id);
                    $questionTemp->question_image = $randomNumber.$Image_Dir;
                    $questionTemp->save();
                }
            }
        }





        return redirect()->route('questions.create');
    }


    /**
     * Show the form for editing Question.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relations = [
            'topics' => \App\Topic::get()->pluck('title', 'id')->prepend('Please select', ''),
        ];

        $question = Question::findOrFail($id);

        return view('questions.edit', compact('question') + $relations);
    }

    /**
     * Update Question in storage.
     *
     * @param  \App\Http\Requests\UpdateQuestionsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestionsRequest $request, $id)
    {
        $question = Question::findOrFail($id);
        $question->update($request->all());

        return redirect()->route('questions.index');
    }


    /**
     * Display Question.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relations = [
            'topics' => \App\Topic::get()->pluck('title', 'id')->prepend('Please select', ''),
        ];

        $question = Question::findOrFail($id);

        return view('questions.show', compact('question') + $relations);
    }


    /**
     * Remove Question from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();

        if($question->question_image !=''){
            unlink(public_path("images/crop/".$question->question_image));
        }

        return redirect()->route('questions.index');
    }

    /**
     * Delete all selected Question at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Question::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                if($entry->question_image !=''){
                    unlink(public_path("images/crop/".$entry->question_image));
                }
                $entry->delete();
            }
        }
    }

}

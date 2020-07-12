<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Question;
use App\Personality;
use App\Result;
use App\Topic;
use App\Test;
use App\User;
use App\Ocr;
use App\University;
use App\City;
use App\Department;
use Illuminate\Http\Request;
use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        










        //questions
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

        $questions = Question::count();
        $users = User::whereNull('role_id')->count();
        $admins = User::where('role_id', '=', '1')->count();

        $personalityTest = Personality::count();
        $selectionTest = DB::table('tests')->where('subject', 'LIKE', 'NAT-%')->count();
        $diagnosticTest = DB::table('tests')->where('subject', 'NOT LIKE', 'NAT-%')->count();
        $quizzes = Test::count();
        $average = Test::avg('result');
        $averageTotal = Test::avg('total');
        if($averageTotal != 0)
            $average = ($average/$averageTotal)*100;
        $subjects = Topic::count()-1;
        $username = Auth::user()->name;

        $universities = University::count();
        $campuses = City::count();
        $departments = Department::count();

        $ocr = Ocr::count();
        $read = DB::table('ocr')->where('Image_Traversed', '=', 'Read')->count();
        $unread = DB::table('ocr')->where('Image_Traversed', '=', 'Unread')->count();
        $processed = DB::table('ocr')->where('Image_Text', '=', 'Processed')->count();
        $unprocessed = DB::table('ocr')->where('Image_Text', '=', 'Unprocessed')->count();

        $reported = DB::table('report')->count();
        $resolved = DB::table('report')->where('rStatus', '=', 'Resolved')->count();

        return view('home', compact('questions', 'users', 'admins', 'reported', 'resolved', 'ocr','read','unread','processed','unprocessed','universities', 'campuses', 'departments', 'subjects', 'personalityTest', 'selectionTest', 'diagnosticTest', 'quizzes', 'average', 'username', 'English', 'Analytical', 'Quantitative', 'Physics', 'Chemistry', 'Mathematics', 'Biology', 'Computer', 'Statistics', 'Economics', 'Accounting', 'Commerce', 'Personality', 'total'));

        
    }
}

<?php

namespace App\Http\Controllers;

use App\Question;
use App\Topic;
use App\Test;
use App\User;
use App\Department;
use DB;

class FrontController extends Controller
{

    public function front()
    {
        $questions = Question::count();
        $users = User::count();
        $quizzes = Test::count();
        $average = Test::avg('result');
        $averageTotal = Test::avg('total');
        if($averageTotal != 0)
            $average = ($average/$averageTotal)*100;
        $subjects = Topic::count()-1;
        // $universities = University::count();
        // $campuses = City::count();
        $departments = Department::count();

        return view('Index.index', compact('questions', 'users', 'departments', 'subjects', 'quizzes', 'average'));

        
    }
}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Suggestion;
use App\User;
use Auth;

class SuggestionController extends Controller
{
    //
    public function store($sugcom,$sugcomtext)
    {
        /* $user = User::findOrFail($id); */
        $user = auth()->user()->id ;
        /* $user=User::find(Auth::id()); */
        /* $user=Auth::user(); */
        
        $suggestion= new Suggestion([
            'uid'  => $user,
            'sugcom' => $sugcom,
            'sugcomtext'  => $sugcomtext
        ]);
        $suggestion->save();
       /*  return redirect('/viewreports '); */
    }
    public function index()
    {
        $suggestion = Suggestion::all();
        $test;
        foreach ($suggestion as &$row) {
            $row->userdetails = User::where('id', $row->uid)->get()[0];
        }
        return view('/report.viewsuggestion',compact('suggestion'));
    }
}

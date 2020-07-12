<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use App\Suggestion;
use App\User;
use Sunra\PhpSimple\HtmlDomParser;

class ReportController extends Controller
{
    //
    public function store($Qid, $rMessage)
    {
        $user = auth()->user()->id ;
        $report= new Report([
            'uid' => $user,
            'Qid'  => $Qid,
            'rMessage' => $rMessage,
            'rStatus'  => "Unresolved"
        ]);
        $report->save();
    }

    public function APIstore($id, $Qid, $rMessage)
    {
        $user = $id ;
        $report= new Report([
            'uid' => $user,
            'Qid'  => $Qid,
            'rMessage' => $rMessage,
            'rStatus'  => "Unresolved"
        ]);
        $report->save();
    }
    
    public function index(){
        $reports = Report::all();
        foreach ($reports as &$row) {
            $row->userdetails = User::where('id', $row->uid)->get()[0];
        }
        return view('/report.viewreports',compact('reports'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $report = Report::find($id);
        $report->rStatus  =$request->get('rStatus');
        

        $report->save();
        return redirect('/viewreports ');

    }

   
}

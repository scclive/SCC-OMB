<?php

namespace App\Http\Controllers;
use DB;
use App\University;

use Illuminate\Http\Request;

class UniversitiesSearch extends Controller
{
    
    function index(){
     return view ('Universities');
    }

    function action(Request $request)
    {
        if ($request->ajax())
        {
          $output='';
          $query =$request->get('query');
          if($query !=''){
              $data = DB::table('universities')
              ->where('Uni_Name', 'like', '%'.$query.'%')
              ->orWhere('Uni_Phone', 'like', '%'.$query.'%')
              ->orWhere('Uni_Email', 'like', '%'.$query.'%')
              ->orWhere('Uni_Sector', 'like', '%'.$query.'%')
              ->orWhere('Uni_Main', 'like', '%'.$query.'%')
              ->orWhere('Uni_Address', 'like', '%'.$query.'%')
              ->orWhere('Uni_Url', 'like', '%'.$query.'%')
              ->orWhere('Uni_Rank', 'like', '%'.$query.'%')
              ->orWhere('Uni_Files', 'like', '%'.$query.'%')
              ->orderBy('Uni_id', 'desc')   
              ->get();
              //return view('index',compact('data'));
              
          }
          else
          {
            $data = DB::table('universities')
              ->orderBy('Uni_id', 'asc')
              ->get();
          }
          $total_row = $data->count();
          if($total_row > 0)
          {
            foreach($data as $row)
            {
              $campuses_data = DB::table('cities')->select('City_id')->where('Uni_id', '=', $row->Uni_id)->get();
              $campuses_Total = $campuses_data->count();
              $departments_Total = 0;
              foreach($campuses_data as $row2)
              {
                $departments_data = DB::table('departments')->select('Dep_Name')->where('City_id', '=', $row2->City_id)->get();
                $departments_Total = $departments_Total + $departments_data->count();
              }
                $output .= "
                <tr>
                <td>$row->Uni_id</td>
                <td>$row->Uni_Name</td>
                <td>$row->Uni_Phone</td>
                <td>$row->Uni_Email</td>
                <td>$row->Uni_Sector</td>
                <td>$row->Uni_Main</td>
                <td>$row->Uni_Address</td>
                <td>$row->Uni_Url</td>
                <td>$row->Uni_Rank</td>
                
                <td>$row->Uni_Files</td>
                <td>$campuses_Total</td>
                <td>$departments_Total</td>
                
                <td>
                  <a href='/CorelayerController/$row->Uni_id' class='btn btn-info'>VIEW Campuses</a>
                </td>
                <td>
                  <a href='/Campus/$row->Uni_id' class='btn btn-success'>ADD Campus</a>
                </td>
                <td>
                  <a href='/Uni_edit/$row->Uni_id' class='btn btn-primary'>EDIT</a>
                </td>
                <td>
                  <a href='/Delete/$row->Uni_id' class='btn btn-danger'>DELETE</a>
                </td>
              </tr>
                ";
            }
          }  
      else
      {
        $output = '
        <tr>
          <td align="center" colspan="13">No Data Found</td>
        </tr>
          ';
      }
      $data = array('table_data'  => $output,'total_data'  => $total_row);
    echo json_encode($data);
    }
  } 
}
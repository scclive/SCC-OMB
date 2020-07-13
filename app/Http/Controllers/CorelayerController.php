<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Department;
use DB;
use App\University;

class CorelayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $city = City::all();
        

        return view('Core_layer.Required_Campuses_data.blade', compact('city'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $city = City::where('Uni_id',$id)->get();
        if(count($city)==0)
        {
            return redirect()->back()->with('error', 'REQUESTED DATA NOT FOUND !');
        }
        else
        {
            return view('Core_layer.Required_Campuses_data', ['city'=>$city]);
        }
   
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_departments($id)
    {
        //
        $department = Department::where('City_id',$id)->get();
        if(count($department)==0)
        {
                return redirect()->back()->with('error', 'REQUESTED DATA NOT FOUND !');
            
        }
        else
        {
            return view('Core_layer.Request_Department_data', ['departments'=>$department]);
        }
    
        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    

    public function dashboard(){
        //
        return view('dashboard');
    }






    public function UIdetails(){
        return view('Index.UIdetails');
       
    }

    function action(Request $request){
        if ($request->ajax()){
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
                    
                }else{
                    $data = DB::table('universities')->orderBy('Uni_id', 'asc') ->get();
                }

                $total_row = $data->count();
                if($total_row > 0){
                    foreach($data as $row){
                        $campuses_data = DB::table('cities')->select('City_id')->where('Uni_id', '=', $row->Uni_id)->get();
                        $campuses_Total = $campuses_data->count();
                        $departments_Total = 0;
                        foreach($campuses_data as $row2){
                            $departments_data = DB::table('departments')->select('Dep_Name')->where('City_id', '=', $row2->City_id)->get();
                            $departments_Total = $departments_Total + $departments_data->count();
                        }
                        $output .= "
                        <tr>
                        <td>$row->Uni_Name</td>
                        <td>$row->Uni_Phone</td>
                        <td>$row->Uni_Email</td>
                        <td>$row->Uni_Sector</td>
                        <td>$row->Uni_Main</td>
                        <td>$row->Uni_Address</td>
                        <td><a href=$row->Uni_Url.>$row->Uni_Url</a></td>
                        <td>$row->Uni_Rank</td>
                        
                        <td>$row->Uni_Files</td>
                        <td>$campuses_Total</td>
                        <td>$departments_Total</td>
                        
                        <td>
                            <a href='/CPdetails/$row->Uni_id' class='btn btn-secondary'>VIEW Campuses</a>
                        </td>
                        
                        </tr>
                        
                        ";
                    }
            }else{
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

    public function CPdetails($id){
         //
        $city = City::where('Uni_id',$id)->get();
        if(count($city)==0){
            return redirect()->back()->with('error', 'REQUESTED DATA NOT FOUND !');
        }else{
            $university = University::find($id);
            return view('Index.CPdetails', ['city'=>$city], compact('university'));
        }
    
         
    }

    public function DPdetails($id){
        $department = Department::where('City_id',$id)->get();
        if(count($department)==0){
            return redirect()->back()->with('error', 'REQUESTED DATA NOT FOUND !');
            
        }else{
            $campus = City::find($id);
            return view('Index.DPdetails', ['departments'=>$department], compact('campus'));
        }
    }

    public function CPAll(){
        //
        $city = DB::table('cities')->get();
        if(count($city)==0){
            return redirect()->back()->with('error', 'REQUESTED DATA NOT FOUND !');
        }else{
            return view('Index.CPAll', ['city'=>$city]);
        }
    }

   public function DPAll(){
        $department = DB::table('departments')->get();
        if(count($department)==0){
            return redirect()->back()->with('error', 'REQUESTED DATA NOT FOUND !');
            
        }else{
            return view('Index.DPAll', ['departments'=>$department]);
        }
   }

}

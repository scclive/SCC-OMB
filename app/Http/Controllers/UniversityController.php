<?php

namespace App\Http\Controllers;
use App\University;
use Illuminate\Http\Request;
use Sunra\PhpSimple\HtmlDomParser;
use DB;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $university = University::all();
          return view('University_views.Uniindex',compact('university'));
       
    }
    /*  public function UIdetails()
    {
        return view('University_views.UIdetails');
       
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
                     <a href='/CorelayerController/$row->Uni_id' class='btn btn-secondary'>VIEW Campuses</a>
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
     }  */










     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('University_views.Unicreate');
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

        //Clean Variables
        $Uni_Name = strval($request->get('Uni_Name'));
        $Uni_Phone = strval($request->get('Uni_Phone'));
        $Uni_Email = strval($request->get('Uni_Email'));
        $Uni_Sector = strval($request->get('Uni_Sector'));
        $Uni_Main = strval($request->get('Uni_Main'));
        $Uni_Address = strval($request->get('Uni_Address'));
        $Uni_Rank = strval($request->get('Uni_Rank'));
        $Uni_Url = strval($request->get('Uni_Url'));
        $Uni_Files = strval($request->get('Uni_Files'));

        $data = DB::table('universities')->where('Uni_Name', '=', $Uni_Name)->get();
        if($data->count()!=0){
            //Update
            foreach($data as $row) {
                $university = University::find($row->Uni_id);
                $university->Uni_Name =  $Uni_Name;
                $university->Uni_Phone = $Uni_Phone;
                $university->Uni_Email = $Uni_Email;
                $university->Uni_Sector = $Uni_Sector;
                $university->Uni_Main = $Uni_Main;
                $university->Uni_Address = $Uni_Address;
                $university->Uni_Rank = $Uni_Rank;
                $university->Uni_Url = $Uni_Url;
                $university->Uni_Files = $Uni_Files;
                $university->save();
            }
        }else{
            //Add
            $university = new University([
                'Uni_Name'   =>$Uni_Name,
                'Uni_Phone'   =>$Uni_Phone,
                'Uni_Email'  =>$Uni_Email,
                'Uni_Sector'   =>$Uni_Sector,
                'Uni_Main'   =>$Uni_Main,
                'Uni_Address'   =>$Uni_Address,
                'Uni_Url'   =>$Uni_Url,
                'Uni_Rank'   =>$Uni_Rank,
                'Uni_Files'    =>$Uni_Files
            ]);
            $university->save();
        }

        // $university = new University([
        //     'Uni_Name'   =>$Uni_Name,
        //     'Uni_Phone'   =>$Uni_Phone,
        //     'Uni_Email'  =>$Uni_Email,
        //     'Uni_Sector'   =>$Uni_Sector,
        //     'Uni_Main'   =>$Uni_Main,
        //     'Uni_Address'   =>$Uni_Address,
        //     'Uni_Url'   =>$Uni_Url,
        //     'Uni_Rank'   =>$Uni_Rank,
        //     'Uni_Files'    =>$Uni_Files
        // ]);
        // $university->save();

        return redirect('/Universities');





        // $university = new University([
        //     'Uni_Name'   =>$request->get('Uni_Name'),
        //     'Uni_Phone'   =>$request->get('Uni_Phone'),
        //     'Uni_Email'  =>$request->get('Uni_Email'),
        //     'Uni_Sector'   =>$request->get('Uni_Sector'),
        //     'Uni_Main'   =>$request->get('Uni_Main'),
        //     'Uni_Address'   =>$request->get('Uni_Address'),
        //     'Uni_Rank'   =>$request->get('Uni_Rank'),
        //     'Uni_Url'   =>$request->get('Uni_Url'),
        //     'Uni_Files'    =>$request->get('Uni_Files')
        // ]);
        //return response()->json(['success'=>$Uni_Name.$Uni_City.$Uni_Phone.$Uni_Email.$Uni_Sector.$Uni_Main.$Uni_Address.$Uni_Rank.$Uni_Url.$Uni_Files]);
    }

    public function storeRank(Request $request)
    {
        //

        //Clean Variables
        $Uni_Name = strval($request->get('Uni_Name'));
        $Uni_Rank = strval($request->get('Uni_Rank'));

        $data = DB::table('universities')->where('Uni_Name', '=', $Uni_Name)->get();
        if($data->count()!=0){
            //Update
            foreach($data as $row) {
                $university = University::find($row->Uni_id);
                $university->Uni_Name =  $Uni_Name;
                $university->Uni_Rank = $Uni_Rank;
                $university->save();
            }
        }
        return redirect('/Universities');



    }



    /**
     * Display the specified resource.
     *
     * @param  int $Uni_id
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        include 'connection.php';

        $query = mysqli_query($con, "SELECT * FROM universities ORDER BY Uni_Name ASC");

        $data = array();
        $qry_array = array();
        $i = 0;
        $total = mysqli_num_rows($query);
        while ($row = mysqli_fetch_array($query)) {
            $data['Uni_id'] = $row['Uni_id'];
            $data['Uni_Name'] = $row['Uni_Name'];
            $data['Uni_Phone'] = $row['Uni_Phone'];
            $data['Uni_Email'] = $row['Uni_Email'];
            $data['Uni_Sector'] = $row['Uni_Sector'];
            $data['Uni_Rank'] = $row['Uni_Rank']; 
            $data['Uni_Url'] = $row['Uni_Url'];
            
            $data['updated_at'] = $row['updated_at'];
            $qry_array[$i] = $data;
            $i++;
        }
        $response = array();
        if($query){
            $response['success'] = 'true';
            $response['message'] = 'Data Loaded Successfully';
            $response['total'] = $total;
            $response['data'] = $qry_array;
        }else{
            $response['success'] = 'false';
            $response['message'] = 'Data Loading Failed';
        }
        echo json_encode($response);


    }
    public function show($Uni_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $Uni_id
     * @return \Illuminate\Http\Response
     */
    public function edit($Uni_id)
    {
        $university = University::find($Uni_id);
       // echo '$university';
        // return view('/University_views.Uniedit', compact('university'));
        return view('/University_views.Uniedit')->with(compact('university'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $Uni_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$Uni_id)
    {
        //
        

        $university = University::find($Uni_id);
        $university->Uni_Name =  $request->get('Uni_Name');
        $university->Uni_Phone = $request->get('Uni_Phone');
        $university->Uni_Email = $request->get('Uni_Email');
        $university->Uni_Sector = $request->get('Uni_Sector');
        $university->Uni_Main = $request->get('Uni_Main'); 
        $university->Uni_Address = $request->get('Uni_Address'); 
        /* $university->Uni_Rank = $request->get('Uni_Rank'); */
        $university->Uni_Url = $request->get('Uni_Url');
        $university->Uni_Files = $request->get('Uni_Files');
        $university->save();
      //  return view('University_views.Uniindex',compact('university'));
        return redirect('/Universities');/* ->with('success', 'Contact updated!'); */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $Uni_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Uni_id)
    {
        //
        // $university = University::find($Uni_id);
        // $university->delete();

        
        $campuses_data = DB::table('cities')->select('City_id')->where('Uni_id', '=', $Uni_id)->get();
        foreach($campuses_data as $row){
            $departments_data = DB::table('departments')->where('City_id', '=', $row->City_id)->delete();
        }
        DB::table('cities')->where('Uni_id', '=', $Uni_id)->delete();
        DB::table('universities')->where('Uni_id', '=', $Uni_id)->delete();

        return redirect('/Universities')/* ->with('success', 'Data deleted succesfuly!') */;

    }
    
}


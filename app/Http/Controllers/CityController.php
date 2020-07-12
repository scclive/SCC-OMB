<?php

namespace App\Http\Controllers;
use App\City;
use App\University;
use Illuminate\Http\Request;
use DB;



class CityController extends Controller
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
        

        return view('City_views.Cityindex', compact('city'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('City_views.Citycreate');
 
    }

    /**
     * Store a newly created resource in storage.
    
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   // public function store(Request $request,$id)
   public function store(Request $request) 
   {
        
        
        $city= new City([
            'Campus_City'  =>  $request->get('Campus_City'),
            'Uni_id'  => $request->get('Uni_id'),
            'Campus_Phone' => $request->get('Campus_Phone'),
            'City_Name' => $request->get('City_Name'),
            'Campus_Email'=> $request->get('Campus_Email'),
            'Campus_Url'=> $request->get('Campus_Url')

        ]); 
        
        $city->save();
        return redirect('/City_views');
        
    }

    /**
     * Store a newly created resource in storage.
    * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   // public function store(Request $request,$id)
  /*  public  function store_ID_REF(Request $request , $id)
    {
        $add_city = University::find($id);
        return view('City_views.check', compact('add_city'));
    }*/
    public function check($id){
        $city=$id;
        return view('/City_views.check', compact('city'));

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
        $city=$id;
        $university = University::find($city);
        
       
        return view('/City_views.Cityedit', compact('city', 'university'));
       
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
        $city = City::find($id);
        $city->Campus_City  =$request->get('Campus_City');
        $city->Uni_id  =$request->get('Uni_id');
        $city->City_Name = $request->get('City_Name');
        $city->Campus_Phone = $request->get('Campus_Phone');
        $city->Campus_Email= $request->get('Campus_Email');
        $city->Campus_Url= $request->get('Campus_Url');
        $city->save();
        return view('/City_views');
        
        
    }

      /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_request($id)
    {
        //
        $city_request =City::find($id);
        $university = University::find($city_request->Uni_id);
        
       
        return view('/City_views.Cityupdate', compact('city_request', 'university'));
       
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_request(Request $request, $id)
    {
        //
        $city = City::find($id);
        $city->Campus_City  =$request->get('Campus_City');
        $city->City_Name  =$request->get('City_Name');
        $city->Uni_id  =$request->get('Uni_id');
        $city->Campus_Phone = $request->get('Campus_Phone');
        $city->Campus_Email= $request->get('Campus_Email');
        $city->Campus_Url= $request->get('Campus_Url');
        $city->save();
        return redirect('/City_views');
       /*  ['city'=>$city] */
        
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
        // $city =City::find($id);
        // $city->delete();

        DB::table('departments')->where('City_id', '=', $id)->delete();
        DB::table('cities')->where('City_id', '=', $id)->delete();

        return redirect ('/City_views');
    }
}
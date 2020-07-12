<?php

namespace App\Http\Controllers;
use App\Department;
use App\City;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $departments = Department::all();
        return view ('Department_views.Depindex',compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Department_views.Depcreate');
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
        $department= new Department([
            
        'Dep_Name'  =>$request->get('Dep_Name'),
       'City_id' =>$request->get('City_id'),
        'Dep_Tags'  =>$request->get('Dep_Tags'),
        'Dep_fees'  =>$request->get('Dep_fees'),
        'Dep_PrevAggr'  =>$request->get('Dep_PrevAggr'),
        'Dep_AggrMatric'  =>$request->get('Dep_AggrMatric'),
        'Dep_AggrHssc'  =>$request->get('Dep_AggrHssc'),
        'Dep_AggrNts'  =>$request->get('Dep_AggrNts'),
        'Dep_AddmDeadline'  =>$request->get('Dep_AddmDeadline'),
        'Dep_TestName'  =>$request->get('Dep_TestName')
        ]);
        $department->save();
        return redirect('/Department_views ');

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
        $departments =($id);
        $city = City::find($id);

        return view('/Department_views.Depedit', compact('city', 'departments'));
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
        $department = Department::find($id);
        $department->Dep_Name  =$request->get('Dep_Name');
        $department->City_id  =$request->get('City_id');
        $department->Dep_Tags  =$request->get('Dep_Tags');
        $department->Dep_fees  =$request->get('Dep_fees');
        $department->Dep_PrevAggr =$request->get('Dep_PrevAggr');
        $department->Dep_AggrMatric  =$request->get('Dep_AggrMatric');
        $department->ep_AggrHssc  =$request->get('Dep_AggrHssc');
        $department->Dep_AggrNts  =$request->get('Dep_AggrNts');
        $department->Dep_AddmDeadline  =$request->get('Dep_AddmDeadline');
        $department->Dep_TestName  =$request->get('Dep_TestName');

        $department->save();
        return redirect('/Department_views ');

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
        $dep_request =Department::find($id);
        $city = City::find($dep_request->City_id);
        return view('/Department_views.Depupdate', compact('city', 'dep_request'));
       
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
        $department = Department::find($id);
        $department->Dep_Name  =$request->get('Dep_Name');
        $department->City_id  =$request->get('City_id');
        $department->Dep_Tags  =$request->get('Dep_Tags');
        $department->Dep_fees  =$request->get('Dep_fees');
        $department->Dep_PrevAggr =$request->get('Dep_PrevAggr');
        $department->Dep_AggrMatric  =$request->get('Dep_AggrMatric');
        $department->Dep_AggrHssc  =$request->get('Dep_AggrHssc');
        $department->Dep_AggrNts  =$request->get('Dep_AggrNts');
        $department->Dep_AddmDeadline  =$request->get('Dep_AddmDeadline');
        $department->Dep_TestName  =$request->get('Dep_TestName');

        $department->save();
        return redirect('/Department_views ');
        
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
        $departments = Department::find($id);
        $departments->delete();

        return redirect('/Department_views')->with('success', 'Data deleted succesfuly!');
    }
}
@extends('layouts.app')

@section('content')
<div class="panel panel-default"><h3 align="center">Add University Department <span id="total_records"></span></h3>
<div class="container-fluid">
 
    <form method="POST" action="{{  URL::to ('/Department_Store')}}">
 
        {{ csrf_field() }}
 
       <div class="form-group">
          <label >Department Name</label>
          <input  class="form-control" type="text" name="Dep_Name" placeholder="Department Name">
 
      </div>
      <div class="form-group">
            <label > Campus id </label>
            <input  class="form-control" name="City_id" placeholder="Campus id " >
 
      </div>
      
      <div class="form-group">
            <label >Department Update Date</label>
            <input  class="form-control" name="Dep_UpdateDate" placeholder="Department Update Date">
 
      </div>
      <div class="form-group">
            <label >Department Aggrigate</label>
            <input  class="form-control" name="Dep_PrevAggr" placeholder="aggrigate">
 
      </div>
      <div class="form-group">
            <label >Department Matric Aggrigate</label>
            <input  class="form-control" name="Dep_AggrMatric" placeholder="Department matric Aggrigate">
 
      </div>
      <div class="form-group">
            <label >Department Aggrigate HSSC</label>
            <input  class="form-control" name="Dep_AggrHssc" placeholder="Department Aggrigate HSSC">
 
      </div>
      <div class="form-group">
            <label >Department NTS Aggrigate</label>
            <input  class="form-control" name="Dep_AggrNts" placeholder="Department NTS Aggrigate">
 
      </div>
      <div class="form-group">
            <label >Department addmission Deadline</label>
            <input type="date"  class="form-control" name="Dep_AddmDeadline" placeholder="Department addmission Deadkine">
 
      </div>
      <div class="form-group">
            <label for="test" >Department Test Name</label>
         <!--   <input  class="form-control" name="Dep_TestName" placeholder="Department Test Name">
            -->
            <select name="Dep_TestName" id="test">
                  <option value="volvo">Volvo</option>
                  <option value="saab">Saab</option>
                  <option value="opel">Opel</option>
                  <option value="audi">Audi</option>
            </select>
      </div>
      <div class="form-group">
            <label >Department Tags</label>
           <!--  <input  class="form-control" name="Dep_Tags" placeholder="Department Tags"> -->
            <br/>
          <!--   <div class="select2-container " id="s2id_e1" > 
            <ul class="select2-choices" >
                  <li class="select2-search-field">
                  </li>
            </ul>
      </div> -->
      <select  multiple="" id="e1" style="width: 300px; display: none;">
            <option value="Agriculture & Forestry">Agriculture & Forestry</option>
            <option value="Applied Sciences & Professions">Applied Sciences & Professions</option>
            <option value="Arts, Design & Architecture">Arts, Design & Architecture</option>
            <option value="Buisness & Management">Buisness & Management</option>
            <option value="Computer Science & IT">Computer Science & IT</option>
            <option value="Education & Training">Education & Training</option>
            <option value="Engineering & Technology">Engineering & Technology</option>
            <option value="Environmental Studies & Earth Science">Environmental Studies & Earth Science</option>
            <option value="Hospitality, Leisure & Sports">Hospitality, Leisure & Sports</option>
            <option value="Humanities">Humanities</option>
            <option value="Journalism & Media">Journalism & Media</option>
            <option value="Law">Law</option>
            <option value="Medicin & Health">Medicin & Health</option>
            <option value="Natural Sciences & Mathematics">Natural Sciences & Mathematics</option>
            <option value="Social Science">Social Science</option>
      </select>
      <input type="checkbox" id="checkbox">Select All

      <input type="button" id="button" value="check Selected">
      </div>
      
      <input type="text" id="tags" name="Dep_Tags">
           
      <div class="form-group">
            <input class="form-control" type="submit" value="Save">
      </div>

    </form>  
 
 </div>   
 </div>


 
 
 @endsection
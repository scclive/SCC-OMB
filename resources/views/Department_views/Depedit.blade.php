@extends('layouts.app')

@section('content')

<div class="panel panel-default"><h3 align="center">{{$city->City_Name}}<span id="total_records"></span></h3>
<div class="panel panel-default"><h5 align="center">Add A New Department<span id="total_records"></span></h5>
<div class="container-fluid">
 
    <form method="POST" action="{{  URL::to ('/Department_Store')}}">
 
        {{ csrf_field() }}
 
       <div class="form-group col-md-12">
          <label ><b>Department Name</b></label>
          <input  class="form-control" type="text" name="Dep_Name" placeholder="e.g. Bachelor of Computer Science (BCS)">
 
      </div>
      
      

      <div class="panel-body">
            <div class="row">
                  <div class="col-md-3">
                        <div class="form-group">
                              <label ><b>Fees (Rs)</b></label>
                              <input  class="form-control" type="text" name="Dep_fees" placeholder="e.g. 60000" >
                        </div>
                  </div>
                  <div class="col-md-3" >
                        <div class="form-group">
                              <label ><b>Aggregate</b></label>
                              <input  class="form-control" type="text" name="Dep_PrevAggr" placeholder="e.g. 80" value="50">
                        </div>
                  </div>
                  <div class="col-md-3" >
                        <div class="form-group">
                              <label ><b>Aggregate SSC</b></label>
                              <input  class="form-control" type="text" name="Dep_AggrMatric" placeholder="e.g. 15">
                        </div>
                  </div>
                  
                  <div class="col-md-3" >
                        <div class="form-group">
                              <label ><b>Aggregate HSSC</b></label>
                              <input  class="form-control" type="text" name="Dep_AggrHssc" placeholder="e.g. 50">
                        </div>
                  </div>

                  

                  <div class="col-md-3" >
                        <div class="form-group">
                              <label ><b>Aggregate Entry Test</b></label>
                              <input  class="form-control" type="text" name="Dep_AggrNts" placeholder="e.g. 35">
                        </div>
                  </div>

                  <div class="col-md-3" >
                        <div class="form-group">
                              <label ><b>Deadline</b></label>
                              <input type="date" class="form-control" type="text" name="Dep_AddmDeadline" placeholder="">
                        </div>
                  </div>

                  <div class="col-md-3" >
                        <label for="Dep_TestName" class="control-label"><b>Entry Test Name</b></label>
                              <select id="Dep_TestName" name="Dep_TestName" class="form-control ">
                                    <option value="NAT" selected>NAT</option>
                                    <option value="NAT-IE" >NAT-IE</option>
                                    <option value="NAT-IM" >NAT-IM</option>
                                    <option value="NAT-ICS" >NAT-ICS</option>
                                    <option value="NAT-IGS" >NAT-IGS</option>
                                    <option value="NAT-ICOM" >NAT-ICOM</option>
                              </select>
                        <br>
                  </div>
            </div>
      </div>



      
      
      
      
      
      

     


      <!-- <div class="form-group">
            <label ><b>Department Tags</b></label>
            <input  class="form-control" name="Dep_Tags" placeholder="Department Tags">
            <div class="select2-container " id="s2id_e1" > 
                  <ul class="select2-choices" >
                        <li class="select2-search-field"></li>
                  </ul>
            </div>
      </div>
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
      </div> -->
      


      <div class="col-xs-12 form-group">
            <label ><b>Attach Relevant Tag(s):</b></label><br>
            <div class="row">
                  <div class="col-md-2" >
                        <br><br><br>
                        <input type="checkbox" name="tag1" value="Applied Sciences & Professions">
                        <label for="tag1">Applied Sciences & Professions</b></label><br>
                  </div>
                  <div class="col-md-2" >
                        <input type="checkbox" name="tag2" value="Arts, Design & Architecture">
                        <label for="tag2">Arts, Design & Architecture</b></label><br>
                  </div>
                  <div class="col-md-2" >
                        <input type="checkbox" name="tag3" value="Buisness & Management">
                        <label for="tag3">Buisness & Management</b></label><br>
                  </div>
                  <div class="col-md-2" >

                        <input type="checkbox" name="tag4" value="Computer Science & IT">
                        <label for="tag4">Computer Science & IT</b></label><br>
                  </div>
                  <div class="col-md-2" >

                        <input type="checkbox" name="tag5" value="Education & Training">
                        <label for="tag5">Education & Training</b></label><br>
                  </div>
                  <div class="col-md-2" >

                        <input type="checkbox" name="tag6" value="Engineering & Technology">
                        <label for="tag6">Engineering & Technology</b></label><br>
                  </div>
                  <div class="col-md-2" >

                        <input type="checkbox" name="tag7" value="Environmental Studies & Earth Science">
                        <label for="tag7">Environmental Studies & Earth Science</b></label><br>
                  </div>
                  <div class="col-md-2" >

                        <input type="checkbox" name="tag8" value="Hospitality, Leisure & Sports">
                        <label for="tag8">Hospitality, Leisure & Sports</b></label><br>
                  </div>
                  <div class="col-md-2" >

                        <input type="checkbox" name="tag9" value="Journalism & Media">
                        <label for="tag9">Journalism & Media</b></label><br>
                  </div>
                  <div class="col-md-2" >

                        <input type="checkbox" name="tag10" value="Law">
                        <label for="tag10">Law</b></label><br>
                  </div>
                  <div class="col-md-2" >

                        <input type="checkbox" name="tag11" value="Medicin & Health">
                        <label for="tag11">Medicin & Health</b></label><br>
                  </div>
                  <div class="col-md-2" >

                        <input type="checkbox" name="tag12" value="Natural Sciences & Mathematics">
                        <label for="tag12">Natural Sciences & Mathematics</b></label><br>
                  </div>
                  <div class="col-md-2" >

                        <input type="checkbox" name="tag13" value="Social Science">
                        <label for="tag13">Social Science</b></label><br>
                  </div>
                  <div class="col-md-12" >
                        <input class="form-control" type="text" id="tags" name="Dep_Tags">
                        <br><br><br>
                  </div>
                  

                  <div class="col-md-12" >
                        <div class="form-group">
                              <label ><b> Campus ID </b></label>
                              <input  class="form-control" type="text" name="City_id" placeholder="Campus id " value="{{ $departments }}" readonly>
                        </div>
                  </div>

                  <div class="col-md-12" >
                        <div class="form-group">
                              <button class="form-control btn btn-success " type="submit"  > Submit</button>
                        </div>
                  </div>
                  
            </div>
      </div>

      




      
           
      

    </form>  
 
 </div>   
 </div>
 
 @endsection
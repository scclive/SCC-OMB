@extends('layouts.app')

@section('content')
<div class="panel panel-default"><h3 align="center">{{$city->City_Name}}<span id="total_records"></span></h3>
<div class="panel panel-default"><h5 align="center">Edit Department Details<span id="total_records"></span></h5>
<div class="container-fluid">
 
    <form method="POST" action="{{  URL::to ('/Dep_update_request', "$dep_request->Dep_id")}}">
 
        {{ csrf_field() }}
 

      <div class="form-group col-md-12">
          <label ><b>Department Name</b></b></label>
          <input  class="form-control" type="text" name="Dep_Name" placeholder="e.g. Bachelor of Computer Science (BCS)" value="{{ $dep_request->Dep_Name }}">
 
      </div>
      
      

      <div class="panel-body">
            <div class="row">
                  <div class="col-md-3">
                        <div class="form-group">
                              <label ><b>Fees (Rs)</b></label>
                              <input  class="form-control" type="text" name="Dep_fees" placeholder="e.g. 60000" value="{{ $dep_request->Dep_fees }}" >
                        </div>
                  </div>
                  <div class="col-md-3" >
                        <div class="form-group">
                              <label ><b>Aggregate</b></label>
                              <input  class="form-control" type="text" name="Dep_PrevAggr" placeholder="e.g. 80" value="{{ $dep_request->Dep_PrevAggr }}">
                        </div>
                  </div>
                  <div class="col-md-3" >
                        <div class="form-group">
                              <label ><b>Aggregate SSC</b></label>
                              <input  class="form-control" type="text" name="Dep_AggrMatric" placeholder="e.g. 15" value="{{ $dep_request->Dep_AggrMatric }}">
                        </div>
                  </div>
                  
                  <div class="col-md-3" >
                        <div class="form-group">
                              <label ><b>Aggregate HSSC</b></label>
                              <input  class="form-control" type="text" name="Dep_AggrHssc" placeholder="e.g. 50" value="{{ $dep_request->Dep_AggrHssc }}">
                        </div>
                  </div>

                  

                  <div class="col-md-3" >
                        <div class="form-group">
                              <label ><b>Aggregate Entry Test</b></label>
                              <input  class="form-control" type="text" name="Dep_AggrNts" placeholder="e.g. 35" value="{{ $dep_request->Dep_AggrNts }}">
                        </div>
                  </div>

                  <div class="col-md-3" >
                        <div class="form-group">
                              <label ><b>Deadline</b></label>
                              <input type="date" class="form-control" type="text" name="Dep_AddmDeadline" placeholder="" value="{{ $dep_request->Dep_AddmDeadline }}">
                        </div>
                  </div>

                  <div class="col-md-3" >
                        <label for="Dep_TestName" class="control-label"><b>Entry Test Name</b></label>
                              <select id="Dep_TestName" name="Dep_TestName" class="form-control ">
                                    <option value="NAT" @if($dep_request->Dep_TestName == 'NAT') selected @endif > NAT</option>
                                    <option value="NAT-IE" @if($dep_request->Dep_TestName == 'NAT-IE') selected @endif >NAT-IE</option>
                                    <option value="NAT-IM" @if($dep_request->Dep_TestName == 'NAT-IM') selected @endif >NAT-IM</option>
                                    <option value="NAT-ICS" @if($dep_request->Dep_TestName == 'NAT-ICS') selected @endif >NAT-ICS</option>
                                    <option value="NAT-IGS" @if($dep_request->Dep_TestName == 'NAT-IGS') selected @endif >NAT-IGS</option>
                                    <option value="NAT-ICOM" @if($dep_request->Dep_TestName == 'NAT-ICOM') selected @endif>NAT-ICOM</option>
                              </select>
                        <br>
                  </div>
            </div>
      </div>

      <div class="col-xs-12 form-group">
            <label ><b>Attach Relevant Tag(s):</b></label><br>
            <div class="row">
                  <div class="col-md-2" >
                        <br><br><br>
                        <input type="checkbox" name="tag1" value="Applied Sciences & Professions" <?php if(strpos($dep_request->Dep_Tags, "Applied Sciences & Professions") !== false) echo "checked"; ?> >
                        <label for="tag1">Applied Sciences & Professions</b></label><br>
                  </div>

                  <div class="col-md-2" >
                        <input type="checkbox" name="tag2" value="Arts, Design & Architecture" <?php if(strpos($dep_request->Dep_Tags, "Arts, Design & Architecture") !== false) echo "checked"; ?>>
                        <label for="tag2">Arts, Design & Architecture</b></label><br>
                  </div>

                  <div class="col-md-2" >
                        <input type="checkbox" name="tag3" value="Buisness & Management" <?php if(strpos($dep_request->Dep_Tags, "Buisness & Management") !== false) echo "checked"; ?>>
                        <label for="tag3">Buisness & Management</b></label><br>
                  </div>

                  <div class="col-md-2" >

                        <input type="checkbox" name="tag4" value="Computer Science & IT" <?php if(strpos($dep_request->Dep_Tags, "Computer Science & IT") !== false) echo "checked"; ?>>
                        <label for="tag4">Computer Science & IT</b></label><br>
                  </div>

                  <div class="col-md-2" >

                        <input type="checkbox" name="tag5" value="Education & Training" <?php if(strpos($dep_request->Dep_Tags, "Education & Training") !== false) echo "checked"; ?>>
                        <label for="tag5">Education & Training</b></label><br>
                  </div>

                  <div class="col-md-2" >

                        <input type="checkbox" name="tag6" value="Engineering & Technology" <?php if(strpos($dep_request->Dep_Tags, "Engineering & Technology") !== false) echo "checked"; ?>>
                        <label for="tag6">Engineering & Technology</b></label><br>
                  </div>

                  <div class="col-md-2" >

                        <input type="checkbox" name="tag7" value="Environmental Studies & Earth Science" <?php if(strpos($dep_request->Dep_Tags, "Environmental Studies & Earth Science") !== false) echo "checked"; ?>>
                        <label for="tag7">Environmental Studies & Earth Science</b></label><br>
                  </div>

                  <div class="col-md-2" >

                        <input type="checkbox" name="tag8" value="Hospitality, Leisure & Sports" <?php if(strpos($dep_request->Dep_Tags, "Hospitality, Leisure & Sports") !== false) echo "checked"; ?>>
                        <label for="tag8">Hospitality, Leisure & Sports</b></label><br>
                  </div>

                  <div class="col-md-2" >

                        <input type="checkbox" name="tag9" value="Journalism & Media" <?php if(strpos($dep_request->Dep_Tags, "Journalism & Media") !== false) echo "checked"; ?>>
                        <label for="tag9">Journalism & Media</b></label><br>
                  </div>

                  <div class="col-md-2" >

                        <input type="checkbox" name="tag10" value="Law" <?php if(strpos($dep_request->Dep_Tags, "Law") !== false) echo "checked"; ?>>
                        <label for="tag10">Law</b></label><br>
                  </div>

                  <div class="col-md-2" >

                        <input type="checkbox" name="tag11" value="Medicin & Health" <?php if(strpos($dep_request->Dep_Tags, "Medicin & Health") !== false) echo "checked"; ?>>
                        <label for="tag11">Medicin & Health</b></label><br>
                  </div>

                  <div class="col-md-2" >

                        <input type="checkbox" name="tag12" value="Natural Sciences & Mathematics" <?php if(strpos($dep_request->Dep_Tags, "Natural Sciences & Mathematics") !== false) echo "checked"; ?>>
                        <label for="tag12">Natural Sciences & Mathematics</b></label><br>
                  </div>

                  <div class="col-md-2" >

                        <input type="checkbox" name="tag13" value="Social Science" <?php if(strpos($dep_request->Dep_Tags, "Social Science") !== false) echo "checked"; ?>>
                        <label for="tag13">Social Science</b></label><br>
                  </div>

                  <div class="col-md-12" >
                        <input class="form-control" type="text" id="tags" name="Dep_Tags" value="{{ $dep_request->Dep_Tags }}">
                        <br><br><br>
                  </div>
                  

                  <div class="col-md-12" >
                        <div class="form-group">
                              <label ><b> Campus ID </b></label>
                              <input  class="form-control" type="text" name="City_id" placeholder="Campus id " value="{{ $dep_request->City_id }}" readonly>
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
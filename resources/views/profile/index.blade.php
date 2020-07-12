@extends('layouts.app')

@section('content')
    

 
    <center><img style="width:50px;" src="../img/sign-up-icon_small.png"/></center>
    <h3 align="center">Your profile</h3>

    @if($data[0]->photo != '')
        <div style="width:100%;">
        <br>
        <br>
        <center><img src="{{  URL::to ('/images/profile_image')}}/{{ $data[0]->photo}}"  style="width: 200px; border-radius: 0% !important;  border: 15px solid;  padding: 15px;">
        </center>
        <br>
        <br>
        </div>
    @endif
    <a href="#logout" onclick="$('#logout').submit();"><div class="btn btn-danger" style="float:right">Logout</div></a>
    <a href="/profile/photo"><div class="btn btn-default" style="float:right">Profile Image</div></a>
    <a href="/profile/password"><div class="btn btn-info" style="float:right">Change Password</div></a>
    
    <div id="main" class="panel panel-default">
        <h3 class="page-title">Details</h3>
        {!! Form::open(['method' => 'POST', 'url' => ['profile/store']]) !!}

        <label for="firstname" class="control-label">Firstname</label>
        <input class="form-control " placeholder="" name="firstname" type="text" id="firstname" maxlength="32" pattern="[A-Za-z]{1,32}" value="@if($data[0]->firstname != ''){{$data[0]->firstname}}@endif" title="Firstname should only contain lowercase nad Upercases letters(Max length 32). e.g. john">
        <br>


        <label for="surname" class="control-label">Surname</label>
        <input class="form-control " placeholder="" name="surname" type="text" id="surname" maxlength="32" pattern="[A-Za-z]{1,32}" value="@if($data[0]->surname != ''){{$data[0]->surname}}@endif" title="Surname should only contain lowercase nad Upercases letters(Max length 32). e.g. john">
        <br>

        <label for="gender" class="control-label">Gender</label>
        <select id="gender" name="gender" class="form-control ">
            @if($data[0]->gender == 'Male')
                <option value="Male" selected>Male</option>
            @else
                <option value="Male">Male</option>
            @endif
            @if($data[0]->gender == 'Female')
                <option value="Female" selected>Female</option>
            @else
                <option value="Female">Female</option>
            @endif
        </select>
        <br>


        <label for="phone" class="control-label">Phone</label>
        <input class="form-control " placeholder="" name="phone" type="text" id="phone" value="@if($data[0]->phone != ''){{$data[0]->phone}}@endif">
        <br>

        <label for="dob" class="control-label">DOB</label>
        <input type="date"  class="form-control" name="dob" id="dob" placeholder="" value="@if($data[0]->dob != ''){{$data[0]->dob}}@endif">
        </br>

        <label for="cnic" class="control-label">CNIC</label>
        <input class="form-control " placeholder="13302-1234567-8" pattern="[0-9]{5}-[0-9]{7}-[0-9]{1}" name="cnic" type="text" id="cnic" value="@if($data[0]->cnic != ''){{$data[0]->cnic}}@endif">
        <br>


        <label for="aboutme" class="control-label">About You</label>
        <textarea class="form-control " placeholder="" name="aboutme" type="text" id="aboutme" >@if($data[0]->aboutme != ''){{$data[0]->aboutme}}@endif</textarea>
        <br>

        <select id="employed" name="employed" class="form-control ">
            @if($data[0]->employed == 'Employed')
                <option value="Employed" selected>Employed</option>
            @else
                <option value="Employed">Employed</option>
            @endif
            @if($data[0]->employed == 'Unemployed')
                <option value="Unemployed" selected>Unemployed</option>
            @else
                <option value="Unemployed">Unemployed</option>
            @endif
        </select>
        <br>

        <label for="address" class="control-label">Address</label>
        <input class="form-control " placeholder="" name="address" type="text" id="address" value="@if($data[0]->address != ''){{$data[0]->address}}@endif">
        <br>

        <label for="city" class="control-label">City</label>
        <select id="city" name="city" class="form-control ">
            <option value="none">Select City</option>
            <option value="Attock City">Attock City</option>
            <option value="Bahāwalnagar">Bahāwalnagar</option>
            <option value="Bahāwalpur">Bahāwalpur</option>
            <option value="Bhakkar">Bhakkar</option>
            <option value="Chakwāl">Chakwāl</option>
            <option value="Chiniot">Chiniot</option>
            <option value="Dera Ghāzi Khān">Dera Ghāzi Khān</option>
            <option value="Faisalābād">Faisalābād</option>
            <option value="Gujrānwāla">Gujrānwāla</option>
            <option value="Gujrāt">Gujrāt</option>
            <option value="Hāfizābād">Hāfizābād</option>
            <option value="Jhang City">Jhang City</option>
            <option value="Jhang Sadr">Jhang Sadr</option>
            <option value="Jhelum">Jhelum</option>
            <option value="Kasūr">Kasūr</option>
            <option value="Khānewāl">Khānewāl</option>
            <option value="Khushāb">Khushāb</option>
            <option value="Kundiān">Kundiān</option>
            <option value="Lahore">Lahore</option>
            <option value="Leiah">Leiah</option>
            <option value="Lodhrān">Lodhrān</option>
            <option value="Mandi Bahāuddīn">Mandi Bahāuddīn</option>
            <option value="Masīwāla">Masīwāla</option>
            <option value="Miānwāli">Miānwāli</option>
            <option value="Multān">Multān</option>
            <option value="Muzaffargarh">Muzaffargarh</option>
            <option value="Nankāna Sāhib">Nankāna Sāhib</option>
            <option value="Nārowāl">Nārowāl</option>
            <option value="Okāra">Okāra</option>
            <option value="Pākpattan">Pākpattan</option>
            <option value="Rahīmyār Khān">Rahīmyār Khān</option>
            <option value="Rājanpur">Rājanpur</option>
            <option value="Rāwalpindi">Rāwalpindi</option>
            <option value="Sādiqābād">Sādiqābād</option>
            <option value="Sāhīwāl">Sāhīwāl</option>
            <option value="Sargodha">Sargodha</option>
            <option value="Sheikhupura">Sheikhupura</option>
            <option value="Siālkot City">Siālkot City</option>
            <option value="Toba Tek Singh">Toba Tek Singh</option>
            <option value="Vihāri">Vihāri</option>
            
            <option value="Badīn">Badīn</option>
            <option value="Dādu">Dādu</option>
            <option value="Ghotki">Ghotki</option>
            <option value="Hyderābād City">Hyderābād City</option>
            <option value="Jacobābād">Jacobābād</option>
            <option value="Jāmshoro">Jāmshoro</option>
            <option value="Kandhkot">Kandhkot</option>
            <option value="Karachi">Karachi</option>
            <option value="Khairpur">Khairpur</option>
            <option value="Lārkāna">Lārkāna</option>
            <option value="Matiāri">Matiāri</option>
            <option value="Mīrpur Khās">Mīrpur Khās</option>
            <option value="Naushahro Fīroz">Naushahro Fīroz</option>
            <option value="Nawābshāh">Nawābshāh</option>
            <option value="Sānghar">Sānghar</option>
            <option value="Shahdād Kot">Shahdād Kot</option>
            <option value="Shikārpur">Shikārpur</option>
            <option value="Sukkur">Sukkur</option>
            <option value="Tando Allāhyār">Tando Allāhyār</option>
            <option value="Tando Muhammad Khān">Tando Muhammad Khān</option>
            <option value="Thatta">Thatta</option>
            <option value="Umarkot">Umarkot</option>
            
            <option value="Abbottābād">Abbottābād</option>
            <option value="Alpūrai">Alpūrai</option>
            <option value="Bannu">Bannu</option>
            <option value="Bardār">Bardār</option>
            <option value="Batgrām">Batgrām</option>
            <option value="Chārsadda">Chārsadda</option>
            <option value="Chitrāl">Chitrāl</option>
            <option value="Daggar">Daggar</option>
            <option value="Dasu">Dasu</option>
            <option value="Dera Ismāīl Khān">Dera Ismāīl Khān</option>
            <option value="Hangu">Hangu</option>
            <option value="Harīpur">Harīpur</option>
            <option value="Karak">Karak</option>
            <option value="Kohāt">Kohāt</option>
            <option value="Lakki Marwat">Lakki Marwat</option>
            <option value="Malakand">Malakand</option>
            <option value="Mānsehra">Mānsehra</option>
            <option value="Mardan">Mardan</option>
            <option value="Mehra">Mehra</option>
            <option value="Nowshera">Nowshera</option>
            <option value="Peshāwar">Peshāwar</option>
            <option value="Saidu Sharif">Saidu Sharif</option>
            <option value="Serai">Serai</option>
            <option value="Swābi">Swābi</option>
            <option value="Tānk">Tānk</option>
            <option value="Timargara">Timargara</option>
            <option value="Upper Dir">Upper Dir</option>
            
            <option value="Awārān">Awārān</option>
            <option value="Bārkhān">Bārkhān</option>
            <option value="Chaman">Chaman</option>
            <option value="Dālbandīn">Dālbandīn</option>
            <option value="Dera Allāhyār">Dera Allāhyār</option>
            <option value="Dera Bugti<">Dera Bugti</option>
            <option value="Dera Murād Jamāli">Dera Murād Jamāli</option>
            <option value="Gandāvā">Gandāvā</option>
            <option value="Gwādar">Gwādar</option>
            <option value="Kalāt">Kalāt</option>
            <option value="Khārān">Khārān</option>
            <option value="Khuzdār">Khuzdār</option>
            <option value="Kohlu">Kohlu</option>
            <option value="Loralai">Loralai</option>
            <option value="Mastung">Mastung</option>
            <option value="Mūsa Khel Bāzār">Mūsa Khel Bāzār</option>
            <option value="Panjgūr">Panjgūr</option>
            <option value="Pishin">Pishin</option>
            <option value="Qila Abdullāh">Qila Abdullāh</option>
            <option value="Qila Saifullāh">Qila Saifullāh</option>
            <option value="Quetta">Quetta</option>
            <option value="Sibi">Sibi</option>
            <option value="Turbat">Turbat</option>
            <option value="Uthal">Uthal</option>
            <option value="Zhob">Zhob</option>
            <option value="Ziārat">Ziārat</option>
            
            <option value="Athmuqam">Athmuqam</option>
            <option value="Bāgh">Bāgh</option>
            <option value="Kotli">Kotli</option>
            <option value=">New Mīrpur">New Mīrpur</option>
            <option value="Rāwala Kot">Rāwala Kot</option>
            
            <option value="Alīābad">Alīābad</option>
            <option value="Chilās">Chilās</option>
            <option value="Eidgāh">Eidgāh</option>
            <option value="Gākuch">Gākuch</option>
            <option value="Gilgit">Gilgit</option>


            <option value="Islamabad">Islamabad</option>

        </select>
        <br>

        <label for="province" class="control-label" style="display:none;">Province</label>
        <select id="province" class="form-control " style="display:none;">
            <option value="none">Select Province</option>
            <option value="Punjab">Punjab</option>
            <option value="Sindh">Sindh</option>
            <option value="KPK">KPK</option>
            <option value="Balochistan">Balochistan</option>
            <option value="FATA/PATA">FATA/PATA</option>
            <option value="AJK">AJK</option>
            <option value="GB">GB</option>
            <option value="ICT">ICT</option>
        </select>
        <br>


        
    </div>

    {!! Form::submit(trans('quickadmin.save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop


@inject('request', 'Illuminate\Http\Request')

<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu"
            data-keep-expanded="false"
            data-auto-scroll="true"
            data-slide-speed="200">
          

            @if(Auth::user()->isAdmin())
            <!-- DashboardHome -->
            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{  URL::to ('/home')}}">
                <i class="fa"> <img src="{{  URL::to ('/img/home24.png')}}"/></i>
                    <span class="title">Home</span>
                </a>
            </li>
            @endif

            <li class="{{ $request->segment(1) == 'tests' ? 'active' : '' }}" style="display:none;">
                <a href="{{ route('tests.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('quickadmin.test.new')</span>
                </a>
            </li>

            <li class="{{ $request->segment(1) == 'results' ? 'active' : '' }}" style="display:none;">
                <a href="{{ route('results.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('quickadmin.results.title')</span>
                </a>
            </li>

            <!-- getstarted -->
            <li class="{{ $request->segment(1) == 'gettingstarted' ? 'active' : '' }}">
                 <a href="{{  URL::to ('/gettingstarted')}}">
                    <img style="width:20px;" src="{{  URL::to ('/img/shuttlecolor.png')}}"/>
                    <span class="title">Get Started</span>
                </a>
            </li>

           

            <!-- profile -->
            <li class="{{ $request->segment(1) == 'profile' ? 'active' : '' }}">
                 <a href="{{  URL::to ('/profile')}}">
                    <img style="width:20px;" src="{{  URL::to ('/img/sign-up-icon_small.png')}}"/>
                    <span class="title">Your Profile</span>
                </a>
            </li>

            <!-- academics -->
            <li class="{{ $request->segment(1) == 'academics' ? 'active' : '' }}">
                 <a href="{{  URL::to ('/academics')}}">
                    <img style="width:20px;" src="{{  URL::to ('/img/academics.png')}}"/>
                    <span class="title">Academics</span>
                </a>
            </li>

            <!-- selection -->
            <li class="{{ $request->segment(1) == 'selection' ? 'active' : '' }}">
                 <a href="{{  URL::to ('/selection')}}">
                    <img style="width:20px;" src="{{  URL::to ('/img/svg_icon/3.png')}}"/>
                    <span class="title">Selection Test</span>
                </a>
            </li>


            <!-- diagnostic -->
            <li class="{{ $request->segment(1) == 'diagnostic' ? 'active' : '' }}">
                 <a href="{{  URL::to ('/diagnostic')}}">
                    <img style="width:20px;" src="{{  URL::to ('/img/svg_icon/2.png')}}"/>
                    <span class="title">Diagnostic Test</span>
                </a>
            </li>


             <!-- personality -->
             <li class="{{ $request->segment(1) == 'personality' ? 'active' : '' }}">
             <a href="{{  URL::to ('/personality')}}">
                    <img style="width:20px;" src="{{  URL::to ('/img/svg_icon/4.png')}}"/>
                    <span class="title">Personality Test</span>
                </a>
            </li>

            @if(!Auth::user()->isAdmin())
                <li class="{{ $request->segment(1) == 'Universities' ? 'active' : '' }}">
                    <a href="{{  URL::to ('/UIdetails')}}">
                        <img src="{{  URL::to ('/img/campustwo24.png')}}"/>
                        <span class="title">Universities</span>
                    </a>
                </li>
                <li class="{{ $request->segment(1) == 'City_views' ? 'active' : '' }}">
                    <a href="{{  URL::to ('/CPAll')}}">
                        <img src="{{  URL::to ('/img/campusthree24.png')}}"/>
                        <span class="title">Campuses</span>
                    </a>
                </li>
                <li class="{{ $request->segment(1) == 'Department_views' ? 'active' : '' }}">
                    <a href="{{  URL::to ('/DPAll')}}">
                        <img src="{{  URL::to ('/img/departments24.png')}}"/>
                        <span class="title">Deparments</span>
                    </a>
                </li>
            @endif

            <!-- results -->
            <li class="{{ $request->segment(1) == 'reportcard' ? 'active' : '' }}">
                 <a href="{{  URL::to ('/reportcard')}}">
                    <img style="width:20px;" src="{{  URL::to ('/img/svg_icon/5.png')}}"/>
                    <span class="title">Results</span>
                </a>
            </li>
            <!-- recommendations -->
            <li class="{{ $request->segment(1) == 'recommendations' ? 'active' : '' }}">
                 <a href="{{  URL::to ('/recommendations')}}">
                 <img style="width:20px;" src="{{  URL::to ('/img/recommend.png')}}"/>
                    <!-- <i class="fa fa-gears"></i> -->
                    <span class="title">Report<sup> Beta</sup></span>
                </a>
            </li>














            @if(Auth::user()->isAdmin())
    

            <!-- topics -->
            <li  class="{{ $request->segment(1) == 'topics' ? 'active' : '' }}">
                <a  href="{{ route('topics.index') }}">
                    <img style="width:20px;" src="{{  URL::to ('/img/school.png')}}"/>
                    <span class="title">Subjects</span>
                </a>
            </li>


            <!-- Questions -->
            <li class="{{ ($request->segment(1) == 'questions' && $request->segment(2) != 'create') ? 'active' : '' }}">
                <a href="{{ route('questions.index') }}">
                    <img style="width:20px;" src="{{  URL::to ('/img/analysis.png')}}"/>
                    <span class="title">@lang('quickadmin.questions.title')</span>
                </a>
            </li>
            <li style="padding-left:40px;" class="{{ ($request->segment(2) == 'create' && $request->segment(1) == 'questions'  ) ? 'active active-sub' : '' }}">
                <a href="{{  URL::to ('/questions/create')}}">
                    <img style="width:20px;" src="{{  URL::to ('/img/plus.png')}}"/>
                    <span class="title">
                        Add New
                    </span>
                </a>
            </li>




            <!-- Questions Option -->
            <li class=" {{ $request->segment(1) == 'questions_options' ? 'active' : '' }}">
                <a href="{{ route('questions_options.index') }}">
                <img style="width:20px;" src="{{  URL::to ('/img/layers.png')}}"/>
                    <span class="title">@lang('quickadmin.questions-options.title')</span>
                </a>
            </li>

            <!-- OCR -->
            <li class="{{ ($request->segment(1) == 'OCR' && $request->segment(2) != 'UploadNew') ? 'active' : '' }}">
                <a href="{{  URL::to ('/OCR')}}">
                    <img style="width:24px;" src="{{  URL::to ('/img/font.png')}}"/>
                    <span class="title">OCR Management</span>
                </a>
            </li>
            <li style="padding-left:40px;" class="{{ $request->segment(2) == 'UploadNew' ? 'active' : '' }}">
                <a href="{{  URL::to ('/OCR/UploadNew')}}">
                    <img style="width:20px;" src="{{  URL::to ('/img/upload.png')}}"/>
                    <span class="title">
                        Upload New
                    </span>
                </a>
            </li>
            <li style="padding-left:40px;" class="{{ $request->segment(2) == 'Images' ? 'active' : '' }}">
                <a href="{{  URL::to ('/OCR/Images')}}">
                    <img style="width:20px;" src="{{  URL::to ('/img/layout.png')}}"/>
                    <span class="title">
                        Image View
                    </span>
                </a>
            </li>
            <li style="padding-left:40px;" class="{{ $request->segment(2) == 'Conversion' ? 'active' : '' }}">
                <a href="{{  URL::to ('/OCR/Conversion')}}">
                    <img style="width:20px;" src="{{  URL::to ('/img/data.png')}}"/>
                    <span class="title">
                        Image Conversion
                    </span>
                </a>
            </li>

            <!-- User Managment -->
            <li >
                <a href="#">
                    <!-- <i class="fa fa-users"></i> -->
                    <img style="width:20px;" src="{{  URL::to ('/img/usermanagement.png')}}"/>
                    <span class="title">@lang('quickadmin.user-management.title')</span>
                    <!-- <span class="fa arrow"></span> -->
                </a>
            </li>
            
            <li style="padding-left:40px;" class="{{ $request->segment(1) == 'roles' ? 'active active-sub' : '' }}">
                <a href="{{ route('roles.index') }}">
                    <!-- <i class="fa fa-briefcase"></i> -->
                    <img style="width:20px;" src="{{  URL::to ('/img/roles.png')}}"/>
                    <span class="title">
                        @lang('quickadmin.roles.title')
                    </span>
                </a>
            </li>
            <li style="padding-left:40px;" class="{{ $request->segment(1) == 'users' ? 'active active-sub' : '' }}">
                <a href="{{ route('users.index') }}">
                    <!-- <i class="fa fa-user"></i> -->
                    <img style="width:20px;" src="{{  URL::to ('/img/users.png')}}"/>
                    <span class="title">
                        @lang('quickadmin.users.title')
                    </span>
                </a>
            </li>
            <li style="padding-left:40px;" class="{{ $request->segment(1) == 'user_actions' ? 'active active-sub' : '' }}">
                <a href="{{ route('user_actions.index') }}">
                    <!-- <i class="fa fa-th-list"></i> -->
                    <img style="width:20px;" src="{{  URL::to ('/img/useractions.png')}}"/>
                    <span class="title">
                        @lang('quickadmin.user-actions.title')
                    </span>
                </a>
            </li>
          
            <!-- Universities -->
              <li class="{{ $request->segment(1) == 'Universities' ? 'active' : '' }}">
                <a href="{{  URL::to ('/Universities')}}">
                    <img src="{{  URL::to ('/img/campustwo24.png')}}"/>
                    <span class="title">Universities</span>
                </a>
            </li>
            <li style="padding-left:40px;" class="{{ $request->segment(2) == 'Unicreate' ? 'active active-sub' : '' }}">
                <a href="{{  URL::to ('/University_views/Unicreate')}}">
                    <img style="width:20px;" src="{{  URL::to ('/img/plus.png')}}"/>
                    <span class="title">
                        Add New
                    </span>
                </a>
            </li>
            <!-- Campuses -->

              <li class="{{ $request->segment(1) == 'City_views' ? 'active' : '' }}">
                <a href="{{  URL::to ('/City_views')}}">
                    <img src="{{  URL::to ('/img/campusthree24.png')}}"/>
                    <span class="title">Campuses</span>
                </a>
            </li>

            <!-- Deparments -->
            <li class="{{ $request->segment(1) == 'Department_views' ? 'active' : '' }}">
                <a href="{{  URL::to ('/Department_views')}}">
                    <img src="{{  URL::to ('/img/departments24.png')}}"/>
                    <span class="title">Deparments</span>
                </a>
            </li>

            <!-- Crawler -->
            <li class="{{ $request->segment(1) == 'Crawler' ? 'active' : '' }}">
                <a href="{{  URL::to ('/Crawler')}}">
                    <img src="{{  URL::to ('/img/spider.png')}}"/>
                    <span class="title">Crawler</span>
                </a>
            </li>
            <li style="padding-left:40px;" class="{{ $request->segment(1) == 'Crawler/Universities' ? 'active active-sub' : '' }}">
                <a href="{{  URL::to ('/Crawler/Universities')}}">
                <img src="{{  URL::to ('/img/campustwo24.png')}}"/>
                    <span class="title">
                        Universities
                    </span>
                </a>
            </li>
            <li style="padding-left:40px;" class="">
                <a href="/Crawler/UniversitiesRank">
                    <img style="width:24px;" src="{{  URL::to ('/img/rank.png')}}"/>
                    <span class="title">
                        Rankings
                    </span>
                </a>
            </li>
            <li style="padding-left:40px;" class="">
                <a href="/Crawler/UniversitiesCampuses">
                    <img style="width:24px;" src="{{  URL::to ('/img/campusthree24.png')}}"/>
                    <span class="title">
                        Campuses List
                    </span>
                </a>
            </li>
            <li class="{{ $request->segment(1) == 'Crawler' ? 'active' : '' }}">
                <a href="{{  URL::to ('/viewreports')}}">
                    <img style="width:24px;" src="{{  URL::to ('/img/warn.png')}}"/>
                    <span class="title"> Reported Questions</span>
                </a>
            </li>
            <li class="{{ $request->segment(1) == 'Crawler' ? 'active' : '' }}">
                <a href="{{  URL::to ('/viewsuggestions')}}">
                    <img style="width:24px;" src="{{  URL::to ('/img/suggestions.png')}}"/>
                    <span class="title"> Feedback</span>
                </a>
            </li>

            @endif
            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                <img src="{{  URL::to ('/img/logout24.png')}}"/>
                    <span class="title">@lang('quickadmin.logout')</span>
                </a>
            </li>
        </ul>

        
    </div>
</div>


{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('quickadmin.logout')</button>
{!! Form::close() !!}

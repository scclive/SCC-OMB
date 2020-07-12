<div class="page-header-inner">
    <div class="page-header-inner">


        <div class="navbar-header">



            <a href="#" class="navbar-brand">
                <img style="float:left" src="{{  URL::to ('/img/dashboard64.png')}}" width="30" height="30">
                @if(Auth::user()->isAdmin())
                    &nbsp&nbspSCC | Dashboard - (Admin)
                @else
                    &nbsp&nbspSCC | Dashboard - (User)
                @endif
                <!-- @lang('quickadmin.quickadmin_title') -->
                <!-- class="menu-toggler responsive-toggler" -->
            </a>





        </div>

        <a href="javascript:;"
            class="navbar-toggle menu-toggler responsive-toggler" 
            data-toggle="collapse"
            data-target=".navbar-collapse">
        </a>

        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">

            


            
            <li>
                <a href="/profile/password" class="navbar-brand" style="font-size:90%;">
                    <img style="float:left" src="{{  URL::to ('/img/password.png')}}" width="30" height="30">
                    &nbsp&nbsp
                    Change Password
                </a>
            </li>
            <li>
                <a href="#logout" onclick="$('#logout').submit();" class="navbar-brand" style="font-size:90%;">
                    <img style="float:left" src="{{  URL::to ('/img/logout.png')}}" width="30" height="30">
                    &nbsp&nbspLog Out
                </a>
            </li>

            <!-- <li>
                <a href="#">
                    <span class="">
                    </span>Change Password
                </a>
            </li> -->
                
            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon">sadsadd</span>
            </button> -->





            </ul>
        </div>
    </div>
</div>

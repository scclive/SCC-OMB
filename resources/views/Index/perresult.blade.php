<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('Index.head')
</head>

<body>


    @include('Index.header')
    

    <!-- service_area_start -->
    <div class="service_area">
        <br><br><br><br><br>
        <div class="container">

            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center">
                        <img src="img/svg_icon/4.png" alt="" > 
                        <h4>Your Results</h4>
                    </div>
                </div>
            </div>
            <div class="row"><div class="col-12"></div></div>

            <div class="row">
                <div class="col-2 text-center">
                    <img style="width:30px;" src="{{  URL::to ('/img/conventional.png')}}"/> {{$conventional}}%
                </div>
                <div class="col-2 text-center">
                    <img style="width:30px;" src="{{  URL::to ('/img/enterprising.png')}}"/> {{$enterprising}}%
                </div>
                <div class="col-2 text-center">
                    <img style="width:30px;" src="{{  URL::to ('/img/social.png')}}"/> {{$social}}%
                </div>
                <div class="col-2 text-center">
                    <img style="width:30px;" src="{{  URL::to ('/img/artistic.png')}}"/> {{$artistic}}%
                </div>
                <div class="col-2 text-center">
                    <img style="width:30px;" src="{{  URL::to ('/img/investigative.png')}}"/> {{$investigative}}%
                </div>
                <div class="col-2 text-center">
                    <img style="width:30px;" src="{{  URL::to ('/img/realistic.png')}}"/> {{$realistic}}%
                </div>
                <br><br><br><br><br><br><br><br><br>
            </div>

            <div class="row" style="margin-top:30px;">
                <div class="col-4"></div>
                <a href="/register" class="col-md-4 btn btn-light">
                    Sign Up For More Amazing Features
                </a>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Characteristics</div>
                        <div class="panel-body">
                            <div class="row">
                            <div id="growContainer" >
                                <div class="grow" style="background-color:#FFF7E5;" >
                                    <center>
                                    <img style="width:40px; padding-top:20px;" src="{{  URL::to ('/img/conventional.png')}}"/>
                                    <h3 style="padding-left:20px; padding-right:20px;">Conventional – Organizers</h3>
                                    <p style="padding-left:20px; padding-right:20px;">This type of people is logical, efficient, well-organized, thorough, and detail oriented. They are careful and like to give structure to what they do. Practical tasks, quantitative measurements, and structured environments are the fields they are outstanding in.</p>
                                    </center>
                                </div>
                                <div class="grow" style="background-color:#FFEFCC;">
                                
                                    <center>
                                    <img style="width:40px; padding-top:20px;" src="{{  URL::to ('/img/enterprising.png')}}"/>
                                    <h3 style="padding-left:20px; padding-right:20px;">Enterprising – Persuaders</h3>
                                    <p style="padding-left:20px; padding-right:20px;">People who present this feature are adventurous, ambitious, assertive, energetic, optimistic, and motivational. They become great leaders, are good at engaging with people and inspire others to follow them. They are not afraid to take risks or to play the central role in what they do.</p>
                                    </center>
                                </div>
                                <div class="grow" style="background-color:#FFE8B2;">
                                    <center>
                                    <img style="width:40px; padding-top:20px;" src="{{  URL::to ('/img/social.png')}}"/>
                                    <h3 style="padding-left:20px; padding-right:20px;">Social – Helpers</h3>
                                    <p style="padding-left:20px; padding-right:20px;">This type of people is kind, generous, cooperative, patient, caring, helpful, empathetic, and friendly. They find it essential to help others and they value collaborations a lot.</p>
                                    </center>
                                </div>
                                <div class="grow" style="background-color:#FFE099;">
                                    <center>
                                    <img style="width:40px; padding-top:20px;" src="{{  URL::to ('/img/artistic.png')}}"/>
                                    <h3 style="padding-left:20px; padding-right:20px;">Artistic – Creators</h3>
                                    <p style="padding-left:20px; padding-right:20px;">People of this type are creative, intuitive, sensitive, expressive, original, innovative, and spontaneous. They are eager to create something new and beautiful and leave a mark on many people’s minds with their creations.</p>
                                    </center>
                                </div>
                                <div class="grow" style="background-color:#FFD97F;">
                                    <center>
                                    <img style="width:40px; padding-top:20px;" src="{{  URL::to ('/img/investigative.png')}}"/>
                                    <h3 style="padding-left:20px; padding-right:20px;">Investigative – Thinkers</h3>
                                    <p style="padding-left:20px; padding-right:20px;">This type of people is usually formed out of thinkers; intellectual, curious, systematic, rational, analytical, and logical. They want to know everything about the world around them and they ask a lot of questions, which they then love solving and investigating.</p>
                                    </center>
                                </div>
                                <div class="grow" style="background-color:#FFD166;">
                                    <center>
                                    <img style="width:40px; padding-top:20px;" src="{{  URL::to ('/img/realistic.png')}}"/>
                                    <h3 style="padding-left:20px; padding-right:20px;">Realistic – Doers</h3>
                                    <p style="padding-left:20px; padding-right:20px;">People with this main characteristic are independent, stable, persistent, practical, down-to-earth, athletic, and physical. They think straight and they don't hesitate before doing something.</p>
                                    </center>
                                </div>

                                
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-5"></div>
                <a href="/per/test" class="col-md-2 btn btn-info">
                    Take A New Test
                </a>
            </div>

        </div>
    </div>
    <!-- service_area_end -->

	

    @include('Index.footer')

</body>

</html>
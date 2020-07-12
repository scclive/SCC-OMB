<!DOCTYPE html>
<html lang="en">

    @auth
        <head>
            

           


            
                @if(!Auth::user()->isAdmin())
                    @if(\Request::is('home')
                        || \Request::is('Crawler*')
                        || \Request::is('OCR*')
                        || \Request::is('roles*')
                        || \Request::is('users*')
                        || \Request::is('user_actions*')
                        || \Request::is('topics*')
                        || \Request::is('questions*')
                        || \Request::is('questions_options*')

                        || \Request::is('University_views*')
                        || \Request::is('Uni_edit*')
                        || \Request::is('Uni_update*')
                        || \Request::is('Delete*')
                        || \Request::is('University_Store_Rank*')
                        || \Request::is('Universities*')

                        || \Request::is('Department_views*')
                        || \Request::is('Dep_edit*')
                        || \Request::is('Dep_update*')
                        || \Request::is('Dep_Delete*')
                        || \Request::is('Department_Store*')
                        || \Request::is('Dep_edit_request*')
                        || \Request::is('Dep_update_request*')
                        || \Request::is('Department*')

                        || \Request::is('City_Store*')
                        || \Request::is('City_views*')
                        || \Request::is('City_edit*')
                        || \Request::is('City_update*')
                        || \Request::is('City_edit_request*')
                        || \Request::is('City_update_request*')
                        || \Request::is('City_Delete*')
                        || \Request::is('Campus*')

                        || \Request::is('CorelayerController*')
                        || \Request::is('CorelayerController_Dep*')

                        || \Request::is('dashboard*')
                        || \Request::is('viewsuggestions*')
                        || \Request::is('viewreports*')
                    
                    )
                        <script>
                            window.location = "/gettingstarted";
                        </script>
                    @endif
                @endif
            
                @include('partials.head')
                @include('partials.javascripts')




                

                <script>

                    @if(Auth::user()->isAdmin())
                        @if(\Request::is('home')|| \Request::is('dashboard'))

                            anychart.onDocumentLoad(function () {
                                // create data
                                var data = [
                                    ["Users", {{ $users }}],
                                    ["Average Score %", {{ number_format($average, 2) }}],
                                    ["Admins", {{ $admins }}],
                                    ["Selection Taken", {{ $diagnosticTest }}],
                                    ["Personality Taken", {{$personalityTest}}],
                                    ["Diag Taken", {{ $selectionTest }}]
                                ];

                                // create a chart
                                chart = anychart.column();

                                // create a column series and set the data
                                var series = chart.column(data);
                                chart.title("At a Glance");
                                // set the container element 
                                chart.container("container1");

                                chart.animation(true, 800);
                                // initiate chart display
                                chart.draw();

                                var theOddOnes = document.getElementsByClassName('anychart-credits');
                                for(var i=0; i<theOddOnes.length; i++){
                                    document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                }
                                
                            });
                            

                            anychart.onDocumentReady(function () {

                                // create a data set
                                var data = anychart.data.set([
                                    ["Universities", {{$universities}}],
                                    ["Campuses", {{$campuses}}],
                                    ["Departments", {{$departments}}],
                                ]);

                                // create a chart
                                var chart = anychart.bar();

                                // create a bar series and set the data
                                var series = chart.bar(data);
                                series.labels()
                                    .enabled(true)
                                    .position('right-center')
                                    .anchor('left-center')
                                    .format('{%Value}{groupsSeparator: }');

                                // set the chart title
                                chart.title("Total");

                                // set the titles of the axes
                                // chart.xAxis().title("Traits");
                                // chart.yAxis().title("%");

                                // set the container id
                                chart.container("container2");
                                chart.animation(true, 800);

                                // initiate drawing the chart
                                chart.draw();
                            });

                            anychart.onDocumentReady(function () {
                                // create data


                                var data = [
                                    {x: "Read", value: {{$read}}},
                                    {x: "Unread", value: {{$unread}}},
                                    {x: "Processed", value: {{$processed}}},
                                    {x: "Unprocessed", value: {{$unprocessed}}},
                                ];

                                // create a pie chart and set the data
                                var chart = anychart.pie(data);

                                /* set the inner radius
                                (to turn the pie chart into a doughnut chart)*/
                                chart.innerRadius("35%");

                                // set the chart title
                                chart.title("Breakdown");

                                // set the container id
                                chart.container("container3");

                                // initiate drawing the chart
                                chart.draw();
                            });

                            
                            //sankey
                            // anychart.onDocumentReady(function () {

                            //     // create data
                            //     var data = [
                            //         {from: "Universities",  to: "Campuses",  weight: {{$campuses}}},
                            //         {from: "Campuses",  to: "Departments", weight: {{$departments}}}
                            //     ];

                            //     // create a chart and set the data
                            //     var chart = anychart.sankey(data);

                            //     // set the width of nodes
                            //     chart.nodeWidth("20%");

                            //     // set the chart title
                            //     chart.title("Totals");

                            //     // set the container id
                            //     chart.container("container2");

                            //     // initiate drawing the chart
                            //     chart.draw();
                            // });

                            // barmekko horizontal
                            // anychart.onDocumentReady(function () {

                            //     // create data
                            //     var data = [
                            //         ["Universities", {{$universities}}],
                            //         ["Campuses", {{$campuses}}],
                            //         ["Departments", {{$departments}}],
                            //     ];

                            //     // create a chart
                            //     var chart = anychart.barmekko();

                            //     // swap axes
                            //     chart.xAxis().orientation("left");
                            //     chart.yAxis().orientation("bottom");    

                            //     // add series
                            //     var series = chart.mekko(data);
                            //     series.isVertical(true);

                            //     // set the chart title
                            //     chart.title("Total");

                            //     // set the container id
                            //     chart.container("container2");

                            //     // initiate drawing the chart
                            //     chart.draw();
                            // });

                            //venn
                            // anychart.onDocumentReady(function () {

                            //     //create data
                            //     var data = [
                            //         {x: "Universities", value: {{$universities}}},
                            //         {x: "Campuses", value: {{$campuses}}},
                            //         {x: "Departments", value: {{$departments}}},
                            //         {x: ["Universities", "Campuses"], value: {{$campuses}}},
                            //         {x: ["Campuses", "Departments"], value: {{$departments}}}
                            //     ];

                            //     // create a chart and set the data
                            //     chart = anychart.venn(data);

                            //     // configure labels of intersections
                            //     chart.intersections().labels().format("{%x}");

                            //     // set the chart title
                            //     chart.title("Total");

                            //     // set the container id
                            //     chart.container('container2');

                            //     // initiate drawing the chart
                            //     chart.draw();
                            // });

                
                        @endif
                    @endif

                    @if(\Request::is('academics'))

                        @if($dataSSC != '')
                            @if($data[0]->ssc == 'matric')
                                var data;
                                @if($dataSSC[0]->track == 'Medical')
                                    anychart.onDocumentReady(function () {
                                        var data = anychart.data.set([
                                            ["English", "{{ ($dataSSC[0]->english/150)*100}}"],
                                            ["Urdu", "{{ ($dataSSC[0]->urdu/150)*100 }}"],
                                            ["Islamiyat Ethics", "{{ ($dataSSC[0]->islamiyat_Ethics/75)*100 }}"],
                                            ["Pakistan Studies", "{{ ($dataSSC[0]->pakistan_Studies/75)*100 }}"],
                                            ["Mathematics", "{{ ($dataSSC[0]->mathematics/150)*100 }}"],
                                            ["Physics", "{{ ($dataSSC[0]->physics/150)*100 }}"],
                                            ["Chemistry", "{{ ($dataSSC[0]->chemistry/150)*100 }}"],
                                            ["Biology", "{{ ($dataSSC[0]->biology/150)*100 }}"]
                                        ]);
                                        // create a chart
                                        var chart = anychart.bar();
                                        // create a bar series and set the data
                                        var series = chart.bar(data);
                                        chart.title("SSC: Matric - Medical");
                                        // set the titles of the axes
                                        chart.xAxis().title("Subjects");
                                        chart.yAxis().title("%");
                                        chart.animation(true, 800);
                                        // set the container id
                                        chart.container("container");
                                        // initiate drawing the chart
                                        chart.draw();
                                        document.getElementsByClassName('anychart-credits-text')[0].style.visibility = 'hidden';
                                        document.getElementsByClassName('anychart-credits')[0].style.visibility = 'hidden';
                                    });
                                @elseif($dataSSC[0]->track == 'Engineering')
                                    anychart.onDocumentReady(function () {
                                        var data = anychart.data.set([
                                            ["English", "{{ ($dataSSC[0]->english/150)*100}}"],
                                            ["Urdu", "{{ ($dataSSC[0]->urdu/150)*100 }}"],
                                            ["Islamiyat Ethics", "{{ ($dataSSC[0]->islamiyat_Ethics/75)*100 }}"],
                                            ["Pakistan Studies", "{{ ($dataSSC[0]->pakistan_Studies/75)*100 }}"],
                                            ["Mathematics", "{{ ($dataSSC[0]->mathematics/150)*100 }}"],
                                            ["Physics", "{{ ($dataSSC[0]->physics/150)*100 }}"],
                                            ["Chemistry", "{{ ($dataSSC[0]->chemistry/150)*100 }}"],
                                            ["Computer", "{{ ($dataSSC[0]->computer/150)*100 }}"]
                                        ]);
                                        // create a chart
                                        var chart = anychart.bar();
                                        // create a bar series and set the data
                                        var series = chart.bar(data);
                                        chart.title("SSC: Matric - Engineering");
                                        // set the titles of the axes
                                        chart.xAxis().title("Subjects");
                                        chart.yAxis().title("%");
                                        chart.animation(true, 800);
                                        // set the container id
                                        chart.container("container");
                                        // initiate drawing the chart
                                        chart.draw();
                                        document.getElementsByClassName('anychart-credits-text')[0].style.visibility = 'hidden';
                                        document.getElementsByClassName('anychart-credits')[0].style.visibility = 'hidden';
                                    });

                                @elseif($dataSSC[0]->track == 'Humanities')
                                    anychart.onDocumentReady(function () {
                                        var data = anychart.data.set([
                                            ["English", "{{ ($dataSSC[0]->english/150)*100}}"],
                                            ["Urdu", "{{ ($dataSSC[0]->urdu/150)*100 }}"],
                                            ["Islamiyat Ethics", "{{ ($dataSSC[0]->islamiyat_Ethics/75)*100 }}"],
                                            ["Pakistan Studies", "{{ ($dataSSC[0]->pakistan_Studies/75)*100 }}"],
                                            ["Mathematics", "{{ ($dataSSC[0]->mathematics/150)*100 }}"],
                                            ["General Sciences", "{{ ($dataSSC[0]->general_sciences/150)*100 }}"],
                                            ["Economics", "{{ ($dataSSC[0]->economics/150)*100 }}"],
                                            ["Business Studies", "{{ ($dataSSC[0]->business_studies/150)*100 }}"]
                                        ]);
                                        // create a chart
                                        var chart = anychart.bar();
                                        // create a bar series and set the data
                                        var series = chart.bar(data);
                                        chart.title("SSC: Matric - Humanities");
                                        // set the titles of the axes
                                        chart.xAxis().title("Subjects");
                                        chart.yAxis().title("%");
                                        chart.animation(true, 800);
                                        // set the container id
                                        chart.container("container");
                                        // initiate drawing the chart
                                        chart.draw();
                                        document.getElementsByClassName('anychart-credits-text')[0].style.visibility = 'hidden';
                                        document.getElementsByClassName('anychart-credits')[0].style.visibility = 'hidden';
                                    });

                                @endif
                            @elseif($data[0]->ssc == 'olevels')
                                
                                var data = [['',]];
                                @if($dataSSC[0]->art != 'null')
                                    data.push(["Art", "{{$dataSSC[0]->art}}"]);
                                @endif
                                @if($dataSSC[0]->biology != 'null')
                                    data.push(["Biology", "{{$dataSSC[0]->biology}}"]);
                                @endif
                                @if($dataSSC[0]->businessStudies != 'null')
                                    data.push(["Business Studies", "{{$dataSSC[0]->businessStudies}}"]);
                                @endif
                                @if($dataSSC[0]->chemistry != 'null')
                                    data.push(["Chemistry", "{{$dataSSC[0]->chemistry}}"]);
                                @endif
                                @if($dataSSC[0]->computerStudies != 'null')
                                    data.push(["Computer Studies", "{{$dataSSC[0]->computerStudies}}"]);
                                @endif
                                @if($dataSSC[0]->economics != 'null')
                                    data.push(["Economics", "{{$dataSSC[0]->economics}}"]);
                                @endif
                                @if($dataSSC[0]->englishLanguage != 'null')
                                    data.push(["English Language", "{{$dataSSC[0]->englishLanguage}}"]);
                                @endif
                                @if($dataSSC[0]->islamiyat != 'null')
                                    data.push(["Islamiyat", "{{$dataSSC[0]->islamiyat}}"]);
                                @endif
                                @if($dataSSC[0]->mathematicsAdditional != 'null')
                                    data.push(["Mathematics Additional", "{{$dataSSC[0]->mathematicsAdditional}}"]);
                                @endif
                                @if($dataSSC[0]->mathematicsD != 'null')
                                    data.push(["MathematicsD", "{{$dataSSC[0]->mathematicsD}}"]);
                                @endif
                                @if($dataSSC[0]->pakistanStudies != 'null')
                                    data.push(["PakistanS Studies", "{{$dataSSC[0]->pakistanStudies}}"]);
                                @endif
                                @if($dataSSC[0]->religiousStudies != 'null')
                                    data.push(["Religious Studies", "{{$dataSSC[0]->religiousStudies}}"]);
                                @endif
                                @if($dataSSC[0]->sociology != 'null')
                                    data.push(["Sociology", "{{$dataSSC[0]->sociology}}"]);
                                @endif
                                @if($dataSSC[0]->urduFirstLanguage != 'null')
                                    data.push(["uUrdu First Language", "{{$dataSSC[0]->urduFirstLanguage}}"]);
                                @endif
                                @if($dataSSC[0]->urduSecondLanguage != 'null')
                                    data.push(["Urdu Second Language", "{{$dataSSC[0]->urduSecondLanguage}}"]);
                                @endif
                                anychart.onDocumentReady(function () {
                                    // create a chart
                                    var chart = anychart.bar();
                                    // create a bar series and set the data
                                    var series = chart.bar(data);
                                    chart.title("SSC: O-Levels");
                                    // set the titles of the axes
                                    chart.xAxis().title("Subjects");
                                    chart.yAxis().title("%");
                                    chart.animation(true, 800);
                                    // set the container id
                                    chart.container("container");
                                    // initiate drawing the chart
                                    chart.draw();
                                    document.getElementsByClassName('anychart-credits-text')[0].style.visibility = 'hidden';
                                    document.getElementsByClassName('anychart-credits')[0].style.visibility = 'hidden';
                                });
                            @endif
                        @endif


                        @if($dataHSSC != '')
                            @if($data[0]->hssc == 'hssc')
                                @if($dataHSSC[0]->track == 'Pre-Med')
                                    anychart.onDocumentReady(function () {
                                        var data = anychart.data.set([
                                            ["English", "{{ ($dataHSSC[0]->english/200)*100}}"],
                                            ["Urdu", "{{ ($dataHSSC[0]->urdu/200)*100 }}"],
                                            ["Islamiyat_Ethics", "{{ ($dataHSSC[0]->islamiyat_Ethics/50)*100 }}"],
                                            ["Pakistan_Studies", "{{ ($dataHSSC[0]->pakistan_Studies/20)*100 }}"],
                                            ["Physics", "{{ ($dataHSSC[0]->physics/200)*100 }}"],
                                            ["Chemistry", "{{ ($dataHSSC[0]->chemistry/200)*100 }}"],
                                            ["Biology", "{{ ($dataHSSC[0]->biology/200)*100 }}"]
                                        ]);
                                        // create a chart
                                        var chart = anychart.bar();
                                        // create a bar series and set the data
                                        var series = chart.bar(data);
                                        chart.title("HSSC: Intermediate - Pre-Medical");
                                        // set the titles of the axes
                                        chart.xAxis().title("Subjects");
                                        chart.yAxis().title("%");
                                        chart.animation(true, 800);
                                        // set the container id
                                        chart.container("container2");
                                        // initiate drawing the chart
                                        chart.draw();
                                        document.getElementsByClassName('anychart-credits-text')[0].style.visibility = 'hidden';
                                        document.getElementsByClassName('anychart-credits')[0].style.visibility = 'hidden';
                                        document.getElementsByClassName('anychart-credits-text')[1].style.visibility = 'hidden';
                                        document.getElementsByClassName('anychart-credits')[1].style.visibility = 'hidden';
                                    });



                                @elseif($dataHSSC[0]->track == 'Pre-Engineering')
                                    anychart.onDocumentReady(function () {
                                        var data = anychart.data.set([
                                            ["English", "{{ ($dataHSSC[0]->english/200)*100}}"],
                                            ["Urdu", "{{ ($dataHSSC[0]->urdu/200)*100 }}"],
                                            ["Islamiyat_Ethics", "{{ ($dataHSSC[0]->islamiyat_Ethics/50)*100 }}"],
                                            ["Pakistan_Studies", "{{ ($dataHSSC[0]->pakistan_Studies/50)*100 }}"],
                                            ["Mathematics", "{{ ($dataHSSC[0]->mathematics/200)*100 }}"],
                                            ["Physics", "{{ ($dataHSSC[0]->physics/200)*100 }}"],
                                            ["Chemistry", "{{ ($dataHSSC[0]->chemistry/200)*100 }}"],
                                        ]);
                                        // create a chart
                                        var chart = anychart.bar();
                                        // create a bar series and set the data
                                        var series = chart.bar(data);
                                        chart.title("HSSC: Intermediate - Pre-Engineering");
                                        // set the titles of the axes
                                        chart.xAxis().title("Subjects");
                                        chart.yAxis().title("%");
                                        chart.animation(true, 800);
                                        // set the container id
                                        chart.container("container2");
                                        // initiate drawing the chart
                                        chart.draw();
                                        document.getElementsByClassName('anychart-credits-text')[0].style.visibility = 'hidden';
                                        document.getElementsByClassName('anychart-credits')[0].style.visibility = 'hidden';
                                        document.getElementsByClassName('anychart-credits-text')[1].style.visibility = 'hidden';
                                        document.getElementsByClassName('anychart-credits')[1].style.visibility = 'hidden';
                                    });
                


                                @elseif($dataHSSC[0]->track == 'ICS')
                                    @if($dataHSSC[0]->physics != 'null')
                                        anychart.onDocumentReady(function () {
                                            var data = anychart.data.set([
                                                ["English", "{{ ($dataHSSC[0]->english/200)*100}}"],
                                                ["Urdu", "{{ ($dataHSSC[0]->urdu/200)*100 }}"],
                                                ["Islamiyat_Ethics", "{{ ($dataHSSC[0]->islamiyat_Ethics/50)*100 }}"],
                                                ["Pakistan_Studies", "{{ ($dataHSSC[0]->pakistan_Studies/50)*100 }}"],
                                                ["Mathematics", "{{ ($dataHSSC[0]->mathematics/200)*100 }}"],
                                                ["Physics", "{{ ($dataHSSC[0]->physics/200)*100 }}"],
                                                ["Computer", "{{ ($dataHSSC[0]->computer/200)*100 }}"],
                                            ]);
                                            // create a chart
                                            var chart = anychart.bar();
                                            // create a bar series and set the data
                                            var series = chart.bar(data);
                                            chart.title("HSSC: Intermediate - ICS (Physics)");
                                            // set the titles of the axes
                                            chart.xAxis().title("Subjects");
                                            chart.yAxis().title("%");
                                            chart.animation(true, 800);
                                            // set the container id
                                            chart.container("container2");
                                            // initiate drawing the chart
                                            chart.draw();
                                            document.getElementsByClassName('anychart-credits-text')[0].style.visibility = 'hidden';
                                            document.getElementsByClassName('anychart-credits')[0].style.visibility = 'hidden';
                                            document.getElementsByClassName('anychart-credits-text')[1].style.visibility = 'hidden';
                                            document.getElementsByClassName('anychart-credits')[1].style.visibility = 'hidden';
                                        });
                                    @elseif($dataHSSC[0]->statistics != 'null')
                                        anychart.onDocumentReady(function () {
                                            var data = anychart.data.set([
                                                ["English", "{{ ($dataHSSC[0]->english/200)*100}}"],
                                                ["Urdu", "{{ ($dataHSSC[0]->urdu/200)*100 }}"],
                                                ["Islamiyat_Ethics", "{{ ($dataHSSC[0]->islamiyat_Ethics/50)*100 }}"],
                                                ["Pakistan_Studies", "{{ ($dataHSSC[0]->pakistan_Studies/50)*100 }}"],
                                                ["Mathematics", "{{ ($dataHSSC[0]->mathematics/200)*100 }}"],
                                                ["Statistics", "{{ ($dataHSSC[0]->statistics/200)*100 }}"],
                                                ["Computer", "{{ ($dataHSSC[0]->computer/200)*100 }}"],
                                            ]);
                                            // create a chart
                                            var chart = anychart.bar();
                                            // create a bar series and set the data
                                            var series = chart.bar(data);
                                            chart.title("HSSC: Intermediate - ICS (Statistics)");
                                            // set the titles of the axes
                                            chart.xAxis().title("Subjects");
                                            chart.yAxis().title("%");
                                            chart.animation(true, 800);
                                            // set the container id
                                            chart.container("container2");
                                            // initiate drawing the chart
                                            chart.draw();
                                            document.getElementsByClassName('anychart-credits-text')[0].style.visibility = 'hidden';
                                            document.getElementsByClassName('anychart-credits')[0].style.visibility = 'hidden';
                                            document.getElementsByClassName('anychart-credits-text')[1].style.visibility = 'hidden';
                                            document.getElementsByClassName('anychart-credits')[1].style.visibility = 'hidden';
                                        });
                                    @elseif($dataHSSC[0]->economics != 'null')
                                        anychart.onDocumentReady(function () {
                                            var data = anychart.data.set([
                                                ["English", "{{ ($dataHSSC[0]->english/200)*100}}"],
                                                ["Urdu", "{{ ($dataHSSC[0]->urdu/200)*100 }}"],
                                                ["Islamiyat_Ethics", "{{ ($dataHSSC[0]->islamiyat_Ethics/50)*100 }}"],
                                                ["Pakistan_Studies", "{{ ($dataHSSC[0]->pakistan_Studies/50)*100 }}"],
                                                ["Mathematics", "{{ ($dataHSSC[0]->mathematics/200)*100 }}"],
                                                ["Economics", "{{ ($dataHSSC[0]->economics/200)*100 }}"],
                                                ["Computer", "{{ ($dataHSSC[0]->computer/200)*100 }}"],
                                            ]);
                                            // create a chart
                                            var chart = anychart.bar();
                                            // create a bar series and set the data
                                            var series = chart.bar(data);
                                            chart.title("HSSC: Intermediate - ICS (Economics)");
                                            // set the titles of the axes
                                            chart.xAxis().title("Subjects");
                                            chart.yAxis().title("%");
                                            chart.animation(true, 800);
                                            // set the container id
                                            chart.container("container2");
                                            // initiate drawing the chart
                                            chart.draw();
                                            document.getElementsByClassName('anychart-credits-text')[0].style.visibility = 'hidden';
                                            document.getElementsByClassName('anychart-credits')[0].style.visibility = 'hidden';
                                            document.getElementsByClassName('anychart-credits-text')[1].style.visibility = 'hidden';
                                            document.getElementsByClassName('anychart-credits')[1].style.visibility = 'hidden';
                                        });
                                    @endif
                                @endif
                            @elseif($data[0]->hssc == 'alevels')
                                var data2 = [['',]];
                                @if($dataHSSC[0]->accounting != 'null')
                                    data2.push(["Accounting", "{{$dataHSSC[0]->accounting}}"]);
                                @endif
                                @if($dataHSSC[0]->aICT != 'null')
                                    data2.push(["AICT", "{{$dataHSSC[0]->aICT}}"]);
                                @endif
                                @if($dataHSSC[0]->art != 'null')
                                    data2.push(["Art", "{{$dataHSSC[0]->art}}"]);
                                @endif
                                @if($dataHSSC[0]->biology != 'null')
                                    data2.push(["Biology", "{{$dataHSSC[0]->biology}}"]);
                                @endif
                                @if($dataHSSC[0]->businessStudies != 'null')
                                    data2.push(["Business Studies", "{{$dataHSSC[0]->businessStudies}}"]);
                                @endif
                                @if($dataHSSC[0]->chemistry != 'null')
                                    data2.push(["Chemistry", "{{$dataHSSC[0]->chemistry}}"]);
                                @endif
                                @if($dataHSSC[0]->computerScience != 'null')
                                    data2.push(["Computer Science", "{{$dataHSSC[0]->computerScience}}"]);
                                @endif
                                @if($dataHSSC[0]->economics != 'null')
                                    data2.push(["Economics", "{{$dataHSSC[0]->economics}}"]);
                                @endif
                                @if($dataHSSC[0]->englishLanguage != 'null')
                                    data2.push(["English Language", "{{$dataHSSC[0]->englishLanguage}}"]);
                                @endif
                                @if($dataHSSC[0]->englishLiterature != 'null')
                                    data2.push(["English Literature", "{{$dataHSSC[0]->englishLiterature}}"]);
                                @endif
                                @if($dataHSSC[0]->environmentalManagement != 'null')
                                    data2.push(["Environmental Management", "{{$dataHSSC[0]->environmentalManagement}}"]);
                                @endif
                                @if($dataHSSC[0]->globalPerspectives != 'null')
                                    data2.push(["Global Perspectives", "{{$dataHSSC[0]->globalPerspectives}}"]);
                                @endif
                                @if($dataHSSC[0]->governmentPolitics != 'null')
                                    data2.push(["Government Politics", "{{$dataHSSC[0]->governmentPolitics}}"]);
                                @endif
                                @if($dataHSSC[0]->history != 'null')
                                    data2.push(["History", "{{$dataHSSC[0]->history}}"]);
                                @endif
                                @if($dataHSSC[0]->law != 'null')
                                    data2.push(["Law", "{{$dataHSSC[0]->law}}"]);
                                @endif
                                @if($dataHSSC[0]->mathematics != 'null')
                                    data2.push(["Mathematics", "{{$dataHSSC[0]->mathematics}}"]);
                                @endif
                                @if($dataHSSC[0]->mathematicsFurther != 'null')
                                    data2.push(["Mathematics Further", "{{$dataHSSC[0]->mathematicsFurther}}"]);
                                @endif
                                @if($dataHSSC[0]->mediaStudies != 'null')
                                    data2.push(["Media Studies", "{{$dataHSSC[0]->mediaStudies}}"]);
                                @endif
                                @if($dataHSSC[0]->physics != 'null')
                                    data2.push(["Physics", "{{$dataHSSC[0]->physics}}"]);
                                @endif
                                @if($dataHSSC[0]->psychology != 'null')
                                    data2.push(["Psychology", "{{$dataHSSC[0]->psychology}}"]);
                                @endif
                                @if($dataHSSC[0]->sociology != 'null')
                                    data2.push(["Sociology", "{{$dataHSSC[0]->sociology}}"]);
                                @endif
                                @if($dataHSSC[0]->urdu != 'null')
                                    data2.push(["Urdu", "{{$dataHSSC[0]->urdu}}"]);
                                @endif
                                anychart.onDocumentReady(function () {
                                    // create a chart
                                    var chart2 = anychart.bar();
                                    // create a bar series and set the data2
                                    var series = chart2.bar(data2);
                                    chart2.title("HSSC: A-Levels");
                                    // set the titles of the axes
                                    chart2.xAxis().title("Subjects");
                                    chart2.yAxis().title("%");
                                    chart2.animation(true, 800);
                                    // set the container id
                                    chart2.container("container2");
                                    // initiate drawing the chart
                                    chart2.draw();
                                    document.getElementsByClassName('anychart-credits-text')[0].style.visibility = 'hidden';
                                    document.getElementsByClassName('anychart-credits')[0].style.visibility = 'hidden';
                                    document.getElementsByClassName('anychart-credits-text')[1].style.visibility = 'hidden';
                                    document.getElementsByClassName('anychart-credits')[1].style.visibility = 'hidden';
                                });
                            @endif
                        @endif
                    @endif

                    @if(\Request::is('selection'))

                        @if($subject != '')
                            anychart.onDocumentReady(function () {
                                var data = [
                                    {x: 'Analytical', value: {{$Analytical}}},
                                    {x: 'English', value: {{$English}}},
                                    {x: 'Quantitative', value: {{$Quantitative}}},
                                ];

                                if("{{$subject}}" == "NAT-IE"){
                                    var data2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Physics', value: {{$subjectScore1}}},
                                        {x: 'Chemistry', value: {{$subjectScore2}}},
                                        {x: 'Maths', value: {{$subjectScore3}}},
                                    ];
                                    data = data2;
                                }
                                else if("{{$subject}}" == 'NAT-IM'){
                                    var data2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Physics', value: {{$subjectScore1}}},
                                        {x: 'Chemistry', value: {{$subjectScore2}}},
                                        {x: 'Bio', value: {{$subjectScore3}}},
                                    ];
                                    data = data2;
                                }
                                else if("{{$subject}}" == 'NAT-ICS'){
                                    var data2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Physics', value: {{$subjectScore1}}},
                                        {x: 'Computer', value: {{$subjectScore2}}},
                                        {x: 'Maths', value: {{$subjectScore3}}},
                                    ];
                                    data = data2;
                                }
                                else if("{{$subject}}" == 'NAT-IGS'){
                                    var data2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Maths', value: {{$subjectScore1}}},
                                        {x: 'Statistics', value: {{$subjectScore2}}},
                                        {x: 'Economics', value: {{$subjectScore3}}},
                                    ];
                                    data = data2;
                                }
                                else if("{{$subject}}" == 'NAT-ICOM'){
                                    var data2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Accounting', value: {{$subjectScore1}}},
                                        {x: 'Commerce', value: {{$subjectScore2}}},
                                        {x: 'Economics', value: {{$subjectScore3}}},
                                    ];
                                    data = data2;
                                }


                                // create a chart
                                var chart = anychart.pareto(data);

                                // get the column series and format tooltip
                                chart.getSeriesAt(0).tooltip().format("Score: {%value}");

                                // get the line series and format tooltip
                                chart.getSeriesAt(1).tooltip().format("Cumulative Weight: {%CF}");

                                // set the chart title
                                chart.title("{{$subject}}" + " Total:" + "{{$data[0]->result}}" + "/" + "{{$data[0]->total}}");

                                chart.animation(true, 800);

                                // set the container id
                                chart.container("container");

                                // initiate drawing the chart
                                chart.draw();

                                var theOddOnes = document.getElementsByClassName('anychart-credits');
                                for(var i=0; i<theOddOnes.length; i++){
                                    document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                }
                            });


                        @else
                            anychart.onDocumentReady(function () {

                                var data = [
                                    {x: 'Analytical', value: {{$Analytical}}},
                                    {x: 'English', value: {{$English}}},
                                    {x: 'Quantitative', value: {{$Quantitative}}},
                                    {x: 'Subject I', value: {{$subjectScore1}}},
                                    {x: 'Subject II', value: {{$subjectScore2}}},
                                    {x: 'Subject III', value: {{$subjectScore3}}},
                                ];



                                // create a chart
                                var chart = anychart.pareto(data);

                                // get the column series and format tooltip
                                chart.getSeriesAt(0).tooltip().format("Score: {%value}");

                                // get the line series and format tooltip
                                chart.getSeriesAt(1).tooltip().format("Cumulative Weight: {%CF}");

                                // set the chart title
                                chart.title("You Haven't Taken Any Test");

                                chart.animation(true, 800);

                                // set the container id
                                chart.container("container");

                                // initiate drawing the chart
                                chart.draw();

                                var theOddOnes = document.getElementsByClassName('anychart-credits');
                                for(var i=0; i<theOddOnes.length; i++){
                                    document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                }
                            });

                        @endif

                    @endif

                    @if(\Request::is('diagnostic'))

                        anychart.onDocumentReady(function () {

                            // create a data set
                            var data = anychart.data.set([
                                ["Analytical", {{ $Analytical }}],
                                ["English", {{ $English }}],
                                ["Quantitative", {{ $Quantitative }}],
                                ["Physics", {{ $Physics }}],
                                ["Chem", {{ $Chemistry }}],
                                ["Maths", {{ $Mathematics }}],
                                ["Bio", {{ $Biology }}],
                                ["Computer", {{ $Computer }}],
                                ["Stats", {{ $Statistics }}],
                                ["Eco", {{ $Economics }}],
                                ["Acc", {{ $Accounting }}],
                                ["Commerce", {{ $Commerce }}]
                            ]);



                            
                            // create a chart
                            var chart = anychart.barmekko();

                            // create a bar series and set the data
                            var series = chart.mekko(data);

                            // set the chart title
                            chart.title("Your Average Scores");

                            chart.animation(true, 800);
                            series.name("Score");

                            // set the container id
                            chart.container("container");

                            // initiate drawing the chart
                            chart.draw();
                            
                            document.getElementsByClassName('anychart-credits-text')[0].style.visibility = 'hidden';
                            document.getElementsByClassName('anychart-credits')[0].style.visibility = 'hidden';
                            
                            document.getElementsByClassName('btn-success')[0].style.visibility = 'hidden';
                        });

                    @endif
                    
                    @if(\Request::is('personality'))
                        @if($conventional == -1)
                            $(".lastresult").hide();
                        @else

                            // anychart.onDocumentLoad(function () {
                            //     // create data
                            //     var data = [
                            //     ["conventional", {{ $conventional }}],
                            //     ["enterprising", {{ $enterprising }}],
                            //     ["social", {{ $social }}],
                            //     ["artistic", {{ $artistic }}],
                            //     ["investigative", {{ $investigative }}],
                            //     ["realistic", {{ $realistic }}]
                            //     ];

                            //     // create a chart
                            //     chart = anychart.column();

                            //     // create a column series and set the data
                            //     var series = chart.column(data);
                            //     chart.title("Personality: {{ $result}}");
                            //     // set the container element 
                            //     chart.container("container");

                            //     chart.animation(true, 800);
                            //     // initiate chart display
                            //     chart.draw();
                                
                            //     document.getElementsByClassName('anychart-credits-text')[0].style.visibility = 'hidden';
                            //     document.getElementsByClassName('anychart-credits')[0].style.visibility = 'hidden';
                                
                            //     document.getElementsByClassName('btn-success')[0].style.visibility = 'hidden';
                            // });



                            // anychart.onDocumentLoad(function () {
                            //     // create an instance of a pie chart
                            //     var chart = anychart.pie();
                            //     // set the data
                            //     chart.data([
                            //         ["conventional", {{ $conventional }}],
                            //         ["enterprising", {{ $enterprising }}],
                            //         ["social", {{ $social }}],
                            //         ["artistic", {{ $artistic }}],
                            //         ["investigative", {{ $investigative }}],
                            //         ["realistic", {{ $realistic }}]
                            //     ]);
                            //     // set chart title
                            //     chart.title("Personality: {{ $result}}");
                            //     // set the container element 
                            //     chart.container("container");
                            //     // initiate chart display
                            //     chart.animation(true, 800);
                            //     // set the start angle
                            //     chart.startAngle(90);
                            //     chart.selected().explode("3%");
                            //     chart.labels().position("outside");
                            //     chart.connectorStroke({color: "#595959", thickness: 2, dash:"2 2"});
                            //     chart.draw();
                                
                            //     document.getElementsByClassName('anychart-credits-text')[0].style.visibility = 'hidden';
                            //     document.getElementsByClassName('anychart-credits')[0].style.visibility = 'hidden';
                                
                            //     document.getElementsByClassName('btn-success')[0].style.visibility = 'hidden';
                            // });

                            anychart.onDocumentReady(function () {

                                // create a data set
                                var data = anychart.data.set([
                                    ["Conventional", {{ $conventional }}],
                                    ["Enterprising", {{ $enterprising }}],
                                    ["Social", {{ $social }}],
                                    ["Artistic", {{ $artistic }}],
                                    ["Investigative", {{ $investigative }}],
                                    ["Realistic", {{ $realistic }}]
                                ]);

                                // create a chart
                                var chart = anychart.bar();

                                // create a bar series and set the data
                                var series = chart.bar(data);

                                // set the chart title
                                chart.title("Personality: {{ $result}}");

                                // set the titles of the axes
                                chart.xAxis().title("Traits");
                                chart.yAxis().title("%");
                                chart.animation(true, 800);

                                // set the container id
                                chart.container("container");

                                // initiate drawing the chart
                                chart.draw();
                                
                                document.getElementsByClassName('anychart-credits-text')[0].style.visibility = 'hidden';
                                document.getElementsByClassName('anychart-credits')[0].style.visibility = 'hidden';
                                
                                document.getElementsByClassName('btn-success')[0].style.visibility = 'hidden';
                            });

                        @endif
                    @endif

                    @if(\Request::is('questions') || \Request::is('home'))

                        anychart.onDocumentReady(function () {

                            // create a data set
                            var data = anychart.data.set([
                                ["Analytical", {{ $Analytical }}],
                                ["English", {{ $English }}],
                                ["Quantitative", {{ $Quantitative }}],
                                ["Physics", {{ $Physics }}],
                                ["Chemistry", {{ $Chemistry }}],
                                ["Maths", {{ $Mathematics }}],
                                ["Biology", {{ $Biology }}],
                                ["Computer", {{ $Computer }}],
                                ["Statistics", {{ $Statistics }}],
                                ["Economics", {{ $Economics }}],
                                ["Accounting", {{ $Accounting }}],
                                ["Commerce", {{ $Commerce }}],
                                ["Personality", {{ $Personality }}]
                            ]);

                            // create a chart
                            var chart = anychart.polar();

                            // create a bar series and set the data
                            var series = chart.polygon(data);

                            // set the type of the x-scale
                            chart.xScale("ordinal");

                            // enable sorting points by x
                            chart.sortPointsByX(true);

                            // set the inner radius
                            chart.innerRadius(50);

                            // set the interactivity mode
                            chart.interactivity().hoverMode("single");
                            
                            // set the chart title
                            chart.title("Total Questions Breakdown");
                            series.name("Total"); 
                            series.normal().fill("#00cc99", 0.3);
                            series.hovered().fill("#00cc99", 0.1);
                            series.selected().fill("#00cc99", 0.5);
                            series.normal().stroke("#00cc99", 1, "10 5", "round");
                            series.hovered().stroke("#00cc99", 2, "10 5", "round");
                            series.selected().stroke("#00cc99", 4, "10 5", "round");

                            series.normal().fill("#7bc0f7", 0.3);
                            series.hovered().fill("#7bc0f7", 0.1);
                            series.selected().fill("#7bc0f7", 0.5);
                            series.normal().stroke("#7bc0f7", 1, "10 5", "round");
                            series.hovered().stroke("#7bc0f7", 2, "10 5", "round");
                            series.selected().stroke("#7bc0f7", 4, "10 5", "round");

                            chart.animation(true, 800);

                            // set the container id
                            chart.container("container");

                            // initiate drawing the chart
                            chart.draw();

                            var theOddOnes = document.getElementsByClassName('anychart-credits');
                            for(var i=0; i<theOddOnes.length; i++){
                                document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                            }
                            
                        });
                        

                    @endif

                    @if(\Request::is('Department_views/Depcreate')|| \Request::is('Department/*'))
                        
                        
                        $(function(){
                            
                            $("#e1").select2();
                            $("#checkbox").click(function(){
                                if($("#checkbox").is(':checked') ){
                                    $("#e1 > option").prop("selected","selected");
                                    $("#e1").trigger("change");
                                }else{
                                    $("#e1 > option").removeAttr("selected");
                                    $("#e1").trigger("change");
                                }
                            });
                            $("#button").click(function(){
                                $value=$("#e1").val();
                                /*   alert($("#e1").val()); */
                                document.getElementById("tags").value =$value ;
                            });
                        });
                    @endif

                    @if(\Request::is('Dep_edit/*'))
                        
                        
                        $(function(){
                            
                            $("#e1").select2();
                            $("#checkbox").click(function(){
                                if($("#checkbox").is(':checked') ){
                                    $("#e1 > option").prop("selected","selected");
                                    $("#e1").trigger("change");
                                }else{
                                    $("#e1 > option").removeAttr("selected");
                                    $("#e1").trigger("change");
                                }
                            });
                            $("#button").click(function(){
                                $value=$("#e1").val();
                                /*   alert($("#e1").val()); */
                                document.getElementById("tags").value =$value ;
                            });
                        });
                    @endif

                    @if(\Request::is('Campus/*') || \Request::is('City_edit_request/*'))
                    
                        
                        $(document).ready(function(){
                            $('#Campus_City').on('keyup paste',username_check);

                        });

                        
                        function username_check(){  
                            var username = $('#Campus_City').val();
                            if(username == ''){
                                $("#City_Name").val('');
                            }else{
                                var text = "{{ $university->Uni_Name }}" + ", " + username + " Campus";
                                $("#City_Name").val(text);
                            }

                        }
                    @endif
                    
                    @if( \Request::is('selection/*'))
                        function startTimer(duration, display) {
                            var timer = duration, minutes, seconds;
                            setInterval(function () {
                                minutes = parseInt(timer / 60, 10);
                                seconds = parseInt(timer % 60, 10);

                                minutes = minutes < 10 ? "0" + minutes : minutes;
                                seconds = seconds < 10 ? "0" + seconds : seconds;

                                display.textContent = minutes + ":" + seconds;

                                if (--timer < 0) {
                                    // timer = duration;
                                    document.getElementsByClassName('hiddensubmit')[0].click();
                                }
                            }, 1000);
                            
                        }

                        $( window ).on( "load", function() { 
                            var fiveMinutes = 60 * 120,
                                display = document.querySelector('#time');
                            startTimer(fiveMinutes, display);
                            
                        })

                    @endif

                    @if( \Request::is('diagnostic/*'))
                        function startTimer(duration, display) {
                            var timer = duration, minutes, seconds;
                            setInterval(function () {
                                minutes = parseInt(timer / 60, 10);
                                seconds = parseInt(timer % 60, 10);

                                minutes = minutes < 10 ? "0" + minutes : minutes;
                                seconds = seconds < 10 ? "0" + seconds : seconds;

                                display.textContent = minutes + ":" + seconds;

                                if (--timer < 0) {
                                    // timer = duration;
                                    document.getElementsByClassName('hiddensubmit')[0].click();
                                }
                            }, 1000);
                            
                        }

                        $( window ).on( "load", function() { 
                            var fiveMinutes = 60 * 55,
                            display = document.querySelector('#time');
                            startTimer(fiveMinutes, display);
                        })

                        window.addEventListener("beforeunload", function (e) {
                            var confirmationMessage = "\o/";

                            (e || window.event).returnValue = confirmationMessage; //Gecko + IE
                            return confirmationMessage;                            //Webkit, Safari, Chrome
                        });

                        window.onbeforeunload = function () {
                            return "2";
                        };

                    @endif

                    @if( \Request::is('reportcard'))

                        //academics
                        @if($dataSSC != '')
                            @if($dataAcademic[0]->ssc == 'matric')
                                var dataAcademic;
                                @if($dataSSC[0]->track == 'Medical')
                                    anychart.onDocumentReady(function () {
                                        var dataAcademic = anychart.data.set([
                                            ["English", "{{ ($dataSSC[0]->english/150)*100}}"],
                                            ["Urdu", "{{ ($dataSSC[0]->urdu/150)*100 }}"],
                                            ["Islamiyat Ethics", "{{ ($dataSSC[0]->islamiyat_Ethics/75)*100 }}"],
                                            ["Pakistan Studies", "{{ ($dataSSC[0]->pakistan_Studies/75)*100 }}"],
                                            ["Mathematics", "{{ ($dataSSC[0]->mathematics/150)*100 }}"],
                                            ["Physics", "{{ ($dataSSC[0]->physics/150)*100 }}"],
                                            ["Chemistry", "{{ ($dataSSC[0]->chemistry/150)*100 }}"],
                                            ["Biology", "{{ ($dataSSC[0]->biology/150)*100 }}"]
                                        ]);
                                        // create a chart
                                        var chart = anychart.bar();
                                        // create a bar series and set the dataAcademic
                                        var series = chart.bar(dataAcademic);
                                        chart.title("SSC: Matric - Medical");
                                        // set the titles of the axes
                                        chart.xAxis().title("Subjects");
                                        chart.yAxis().title("%");
                                        chart.animation(true, 800);
                                        // set the container id
                                        chart.container("container1");
                                        // initiate drawing the chart
                                        chart.draw();
                                        var theOddOnes = document.getElementsByClassName('anychart-credits');
                                        for(var i=0; i<theOddOnes.length; i++){
                                            document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                        }
                                    });
                                @elseif($dataSSC[0]->track == 'Engineering')
                                    anychart.onDocumentReady(function () {
                                        var dataAcademic = anychart.data.set([
                                            ["English", "{{ ($dataSSC[0]->english/150)*100}}"],
                                            ["Urdu", "{{ ($dataSSC[0]->urdu/150)*100 }}"],
                                            ["Islamiyat Ethics", "{{ ($dataSSC[0]->islamiyat_Ethics/75)*100 }}"],
                                            ["Pakistan Studies", "{{ ($dataSSC[0]->pakistan_Studies/75)*100 }}"],
                                            ["Mathematics", "{{ ($dataSSC[0]->mathematics/150)*100 }}"],
                                            ["Physics", "{{ ($dataSSC[0]->physics/150)*100 }}"],
                                            ["Chemistry", "{{ ($dataSSC[0]->chemistry/150)*100 }}"],
                                            ["Computer", "{{ ($dataSSC[0]->computer/150)*100 }}"]
                                        ]);
                                        // create a chart
                                        var chart = anychart.bar();
                                        // create a bar series and set the dataAcademic
                                        var series = chart.bar(dataAcademic);
                                        chart.title("SSC: Matric - Engineering");
                                        // set the titles of the axes
                                        chart.xAxis().title("Subjects");
                                        chart.yAxis().title("%");
                                        chart.animation(true, 800);
                                        // set the container id
                                        chart.container("container1");
                                        // initiate drawing the chart
                                        chart.draw();

                                        var theOddOnes = document.getElementsByClassName('anychart-credits');
                                        for(var i=0; i<theOddOnes.length; i++){
                                            document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                        }
                                    });

                                @elseif($dataSSC[0]->track == 'Humanities')
                                    anychart.onDocumentReady(function () {
                                        var dataAcademic = anychart.data.set([
                                            ["English", "{{ ($dataSSC[0]->english/150)*100}}"],
                                            ["Urdu", "{{ ($dataSSC[0]->urdu/150)*100 }}"],
                                            ["Islamiyat Ethics", "{{ ($dataSSC[0]->islamiyat_Ethics/75)*100 }}"],
                                            ["Pakistan Studies", "{{ ($dataSSC[0]->pakistan_Studies/75)*100 }}"],
                                            ["Mathematics", "{{ ($dataSSC[0]->mathematics/150)*100 }}"],
                                            ["General Sciences", "{{ ($dataSSC[0]->general_sciences/150)*100 }}"],
                                            ["Economics", "{{ ($dataSSC[0]->economics/150)*100 }}"],
                                            ["Business Studies", "{{ ($dataSSC[0]->business_studies/150)*100 }}"]
                                        ]);
                                        // create a chart
                                        var chart = anychart.bar();
                                        // create a bar series and set the dataAcademic
                                        var series = chart.bar(dataAcademic);
                                        chart.title("SSC: Matric - Humanities");
                                        // set the titles of the axes
                                        chart.xAxis().title("Subjects");
                                        chart.yAxis().title("%");
                                        chart.animation(true, 800);
                                        // set the container id
                                        chart.container("container1");
                                        // initiate drawing the chart
                                        chart.draw();
                                        var theOddOnes = document.getElementsByClassName('anychart-credits');
                                        for(var i=0; i<theOddOnes.length; i++){
                                            document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                        }
                                    });

                                @endif
                            @elseif($dataAcademic[0]->ssc == 'olevels')
                                
                                var dataAcademic = [['',]];
                                @if($dataSSC[0]->art != 'null')
                                    dataAcademic.push(["Art", "{{$dataSSC[0]->art}}"]);
                                @endif
                                @if($dataSSC[0]->biology != 'null')
                                    dataAcademic.push(["Biology", "{{$dataSSC[0]->biology}}"]);
                                @endif
                                @if($dataSSC[0]->businessStudies != 'null')
                                    dataAcademic.push(["Business Studies", "{{$dataSSC[0]->businessStudies}}"]);
                                @endif
                                @if($dataSSC[0]->chemistry != 'null')
                                    dataAcademic.push(["Chemistry", "{{$dataSSC[0]->chemistry}}"]);
                                @endif
                                @if($dataSSC[0]->computerStudies != 'null')
                                    dataAcademic.push(["Computer Studies", "{{$dataSSC[0]->computerStudies}}"]);
                                @endif
                                @if($dataSSC[0]->economics != 'null')
                                    dataAcademic.push(["Economics", "{{$dataSSC[0]->economics}}"]);
                                @endif
                                @if($dataSSC[0]->englishLanguage != 'null')
                                    dataAcademic.push(["English Language", "{{$dataSSC[0]->englishLanguage}}"]);
                                @endif
                                @if($dataSSC[0]->islamiyat != 'null')
                                    dataAcademic.push(["Islamiyat", "{{$dataSSC[0]->islamiyat}}"]);
                                @endif
                                @if($dataSSC[0]->mathematicsAdditional != 'null')
                                    dataAcademic.push(["Mathematics Additional", "{{$dataSSC[0]->mathematicsAdditional}}"]);
                                @endif
                                @if($dataSSC[0]->mathematicsD != 'null')
                                    dataAcademic.push(["MathematicsD", "{{$dataSSC[0]->mathematicsD}}"]);
                                @endif
                                @if($dataSSC[0]->pakistanStudies != 'null')
                                    dataAcademic.push(["PakistanS Studies", "{{$dataSSC[0]->pakistanStudies}}"]);
                                @endif
                                @if($dataSSC[0]->religiousStudies != 'null')
                                    dataAcademic.push(["Religious Studies", "{{$dataSSC[0]->religiousStudies}}"]);
                                @endif
                                @if($dataSSC[0]->sociology != 'null')
                                    dataAcademic.push(["Sociology", "{{$dataSSC[0]->sociology}}"]);
                                @endif
                                @if($dataSSC[0]->urduFirstLanguage != 'null')
                                    dataAcademic.push(["uUrdu First Language", "{{$dataSSC[0]->urduFirstLanguage}}"]);
                                @endif
                                @if($dataSSC[0]->urduSecondLanguage != 'null')
                                    dataAcademic.push(["Urdu Second Language", "{{$dataSSC[0]->urduSecondLanguage}}"]);
                                @endif
                                anychart.onDocumentReady(function () {
                                    // create a chart
                                    var chart = anychart.bar();
                                    // create a bar series and set the dataAcademic
                                    var series = chart.bar(dataAcademic);
                                    chart.title("SSC: O-Levels");
                                    // set the titles of the axes
                                    chart.xAxis().title("Subjects");
                                    chart.yAxis().title("%");
                                    chart.animation(true, 800);
                                    // set the container id
                                    chart.container("container1");
                                    // initiate drawing the chart
                                    chart.draw();
                                    var theOddOnes = document.getElementsByClassName('anychart-credits');
                                    for(var i=0; i<theOddOnes.length; i++){
                                        document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                    }
                                });
                            @endif
                        @endif
                        @if($dataHSSC != '')
                            @if($dataAcademic[0]->hssc == 'hssc')
                                @if($dataHSSC[0]->track == 'Pre-Med')
                                    anychart.onDocumentReady(function () {
                                        var dataAcademic = anychart.data.set([
                                            ["English", "{{ ($dataHSSC[0]->english/200)*100}}"],
                                            ["Urdu", "{{ ($dataHSSC[0]->urdu/200)*100 }}"],
                                            ["Islamiyat_Ethics", "{{ ($dataHSSC[0]->islamiyat_Ethics/50)*100 }}"],
                                            ["Pakistan_Studies", "{{ ($dataHSSC[0]->pakistan_Studies/20)*100 }}"],
                                            ["Physics", "{{ ($dataHSSC[0]->physics/200)*100 }}"],
                                            ["Chemistry", "{{ ($dataHSSC[0]->chemistry/200)*100 }}"],
                                            ["Biology", "{{ ($dataHSSC[0]->biology/200)*100 }}"]
                                        ]);
                                        // create a chart
                                        var chart = anychart.bar();
                                        // create a bar series and set the dataAcademic
                                        var series = chart.bar(dataAcademic);
                                        chart.title("HSSC: Intermediate - Pre-Medical");
                                        // set the titles of the axes
                                        chart.xAxis().title("Subjects");
                                        chart.yAxis().title("%");
                                        chart.animation(true, 800);
                                        // set the container id
                                        chart.container("container2");
                                        // initiate drawing the chart
                                        chart.draw();
                                        var theOddOnes = document.getElementsByClassName('anychart-credits');
                                        for(var i=0; i<theOddOnes.length; i++){
                                            document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                        }
                                    });



                                @elseif($dataHSSC[0]->track == 'Pre-Engineering')
                                    anychart.onDocumentReady(function () {
                                        var dataAcademic = anychart.data.set([
                                            ["English", "{{ ($dataHSSC[0]->english/200)*100}}"],
                                            ["Urdu", "{{ ($dataHSSC[0]->urdu/200)*100 }}"],
                                            ["Islamiyat_Ethics", "{{ ($dataHSSC[0]->islamiyat_Ethics/50)*100 }}"],
                                            ["Pakistan_Studies", "{{ ($dataHSSC[0]->pakistan_Studies/50)*100 }}"],
                                            ["Mathematics", "{{ ($dataHSSC[0]->mathematics/200)*100 }}"],
                                            ["Physics", "{{ ($dataHSSC[0]->physics/200)*100 }}"],
                                            ["Chemistry", "{{ ($dataHSSC[0]->chemistry/200)*100 }}"],
                                        ]);
                                        // create a chart
                                        var chart = anychart.bar();
                                        // create a bar series and set the dataAcademic
                                        var series = chart.bar(dataAcademic);
                                        chart.title("HSSC: Intermediate - Pre-Engineering");
                                        // set the titles of the axes
                                        chart.xAxis().title("Subjects");
                                        chart.yAxis().title("%");
                                        chart.animation(true, 800);
                                        // set the container id
                                        chart.container("container2");
                                        // initiate drawing the chart
                                        chart.draw();
                                        
                                        var theOddOnes = document.getElementsByClassName('anychart-credits');
                                        for(var i=0; i<theOddOnes.length; i++){
                                            document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                        }
                                    });
                


                                @elseif($dataHSSC[0]->track == 'ICS')
                                    @if($dataHSSC[0]->physics != 'null')
                                        anychart.onDocumentReady(function () {
                                            var dataAcademic = anychart.data.set([
                                                ["English", "{{ ($dataHSSC[0]->english/200)*100}}"],
                                                ["Urdu", "{{ ($dataHSSC[0]->urdu/200)*100 }}"],
                                                ["Islamiyat_Ethics", "{{ ($dataHSSC[0]->islamiyat_Ethics/50)*100 }}"],
                                                ["Pakistan_Studies", "{{ ($dataHSSC[0]->pakistan_Studies/50)*100 }}"],
                                                ["Mathematics", "{{ ($dataHSSC[0]->mathematics/200)*100 }}"],
                                                ["Physics", "{{ ($dataHSSC[0]->physics/200)*100 }}"],
                                                ["Computer", "{{ ($dataHSSC[0]->computer/200)*100 }}"],
                                            ]);
                                            // create a chart
                                            var chart = anychart.bar();
                                            // create a bar series and set the dataAcademic
                                            var series = chart.bar(dataAcademic);
                                            chart.title("HSSC: Intermediate - ICS (Physics)");
                                            // set the titles of the axes
                                            chart.xAxis().title("Subjects");
                                            chart.yAxis().title("%");
                                            chart.animation(true, 800);
                                            // set the container id
                                            chart.container("container2");
                                            // initiate drawing the chart
                                            chart.draw();
                                            var theOddOnes = document.getElementsByClassName('anychart-credits');
                                            for(var i=0; i<theOddOnes.length; i++){
                                                document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                            }
                                        });
                                    @elseif($dataHSSC[0]->statistics != 'null')
                                        anychart.onDocumentReady(function () {
                                            var dataAcademic = anychart.data.set([
                                                ["English", "{{ ($dataHSSC[0]->english/200)*100}}"],
                                                ["Urdu", "{{ ($dataHSSC[0]->urdu/200)*100 }}"],
                                                ["Islamiyat_Ethics", "{{ ($dataHSSC[0]->islamiyat_Ethics/50)*100 }}"],
                                                ["Pakistan_Studies", "{{ ($dataHSSC[0]->pakistan_Studies/50)*100 }}"],
                                                ["Mathematics", "{{ ($dataHSSC[0]->mathematics/200)*100 }}"],
                                                ["Statistics", "{{ ($dataHSSC[0]->statistics/200)*100 }}"],
                                                ["Computer", "{{ ($dataHSSC[0]->computer/200)*100 }}"],
                                            ]);
                                            // create a chart
                                            var chart = anychart.bar();
                                            // create a bar series and set the dataAcademic
                                            var series = chart.bar(dataAcademic);
                                            chart.title("HSSC: Intermediate - ICS (Statistics)");
                                            // set the titles of the axes
                                            chart.xAxis().title("Subjects");
                                            chart.yAxis().title("%");
                                            chart.animation(true, 800);
                                            // set the container id
                                            chart.container("container2");
                                            // initiate drawing the chart
                                            chart.draw();
                                            var theOddOnes = document.getElementsByClassName('anychart-credits');
                                            for(var i=0; i<theOddOnes.length; i++){
                                                document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                            }
                                        });
                                    @elseif($dataHSSC[0]->economics != 'null')
                                        anychart.onDocumentReady(function () {
                                            var dataAcademic = anychart.data.set([
                                                ["English", "{{ ($dataHSSC[0]->english/200)*100}}"],
                                                ["Urdu", "{{ ($dataHSSC[0]->urdu/200)*100 }}"],
                                                ["Islamiyat_Ethics", "{{ ($dataHSSC[0]->islamiyat_Ethics/50)*100 }}"],
                                                ["Pakistan_Studies", "{{ ($dataHSSC[0]->pakistan_Studies/50)*100 }}"],
                                                ["Mathematics", "{{ ($dataHSSC[0]->mathematics/200)*100 }}"],
                                                ["Economics", "{{ ($dataHSSC[0]->economics/200)*100 }}"],
                                                ["Computer", "{{ ($dataHSSC[0]->computer/200)*100 }}"],
                                            ]);
                                            // create a chart
                                            var chart = anychart.bar();
                                            // create a bar series and set the dataAcademic
                                            var series = chart.bar(dataAcademic);
                                            chart.title("HSSC: Intermediate - ICS (Economics)");
                                            // set the titles of the axes
                                            chart.xAxis().title("Subjects");
                                            chart.yAxis().title("%");
                                            chart.animation(true, 800);
                                            // set the container id
                                            chart.container("container2");
                                            // initiate drawing the chart
                                            chart.draw();
                                            
                                            var theOddOnes = document.getElementsByClassName('anychart-credits');
                                            for(var i=0; i<theOddOnes.length; i++){
                                                document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                            }
                                        });
                                    @endif
                                @endif
                            @elseif($dataAcademic[0]->hssc == 'alevels')
                                var data2 = [['',]];
                                @if($dataHSSC[0]->accounting != 'null')
                                    data2.push(["Accounting", "{{$dataHSSC[0]->accounting}}"]);
                                @endif
                                @if($dataHSSC[0]->aICT != 'null')
                                    data2.push(["AICT", "{{$dataHSSC[0]->aICT}}"]);
                                @endif
                                @if($dataHSSC[0]->art != 'null')
                                    data2.push(["Art", "{{$dataHSSC[0]->art}}"]);
                                @endif
                                @if($dataHSSC[0]->biology != 'null')
                                    data2.push(["Biology", "{{$dataHSSC[0]->biology}}"]);
                                @endif
                                @if($dataHSSC[0]->businessStudies != 'null')
                                    data2.push(["Business Studies", "{{$dataHSSC[0]->businessStudies}}"]);
                                @endif
                                @if($dataHSSC[0]->chemistry != 'null')
                                    data2.push(["Chemistry", "{{$dataHSSC[0]->chemistry}}"]);
                                @endif
                                @if($dataHSSC[0]->computerScience != 'null')
                                    data2.push(["Computer Science", "{{$dataHSSC[0]->computerScience}}"]);
                                @endif
                                @if($dataHSSC[0]->economics != 'null')
                                    data2.push(["Economics", "{{$dataHSSC[0]->economics}}"]);
                                @endif
                                @if($dataHSSC[0]->englishLanguage != 'null')
                                    data2.push(["English Language", "{{$dataHSSC[0]->englishLanguage}}"]);
                                @endif
                                @if($dataHSSC[0]->englishLiterature != 'null')
                                    data2.push(["English Literature", "{{$dataHSSC[0]->englishLiterature}}"]);
                                @endif
                                @if($dataHSSC[0]->environmentalManagement != 'null')
                                    data2.push(["Environmental Management", "{{$dataHSSC[0]->environmentalManagement}}"]);
                                @endif
                                @if($dataHSSC[0]->globalPerspectives != 'null')
                                    data2.push(["Global Perspectives", "{{$dataHSSC[0]->globalPerspectives}}"]);
                                @endif
                                @if($dataHSSC[0]->governmentPolitics != 'null')
                                    data2.push(["Government Politics", "{{$dataHSSC[0]->governmentPolitics}}"]);
                                @endif
                                @if($dataHSSC[0]->history != 'null')
                                    data2.push(["History", "{{$dataHSSC[0]->history}}"]);
                                @endif
                                @if($dataHSSC[0]->law != 'null')
                                    data2.push(["Law", "{{$dataHSSC[0]->law}}"]);
                                @endif
                                @if($dataHSSC[0]->mathematics != 'null')
                                    data2.push(["Mathematics", "{{$dataHSSC[0]->mathematics}}"]);
                                @endif
                                @if($dataHSSC[0]->mathematicsFurther != 'null')
                                    data2.push(["Mathematics Further", "{{$dataHSSC[0]->mathematicsFurther}}"]);
                                @endif
                                @if($dataHSSC[0]->mediaStudies != 'null')
                                    data2.push(["Media Studies", "{{$dataHSSC[0]->mediaStudies}}"]);
                                @endif
                                @if($dataHSSC[0]->physics != 'null')
                                    data2.push(["Physics", "{{$dataHSSC[0]->physics}}"]);
                                @endif
                                @if($dataHSSC[0]->psychology != 'null')
                                    data2.push(["Psychology", "{{$dataHSSC[0]->psychology}}"]);
                                @endif
                                @if($dataHSSC[0]->sociology != 'null')
                                    data2.push(["Sociology", "{{$dataHSSC[0]->sociology}}"]);
                                @endif
                                @if($dataHSSC[0]->urdu != 'null')
                                    data2.push(["Urdu", "{{$dataHSSC[0]->urdu}}"]);
                                @endif
                                anychart.onDocumentReady(function () {
                                    // create a chart
                                    var chart2 = anychart.bar();
                                    // create a bar series and set the data2
                                    var series = chart2.bar(data2);
                                    chart2.title("HSSC: A-Levels");
                                    // set the titles of the axes
                                    chart2.xAxis().title("Subjects");
                                    chart2.yAxis().title("%");
                                    chart2.animation(true, 800);
                                    // set the container id
                                    chart2.container("container2");
                                    // initiate drawing the chart
                                    chart2.draw();
                                    var theOddOnes = document.getElementsByClassName('anychart-credits');
                                    for(var i=0; i<theOddOnes.length; i++){
                                        document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                    }
                                });
                            @endif
                        @endif

                        //selection
                        @if($subject != '')
                            anychart.onDocumentReady(function () {
                                var dataSelection;
                                var dataSelection = [
                                    {x: 'Analytical', value: {{$Analytical}}},
                                    {x: 'English', value: {{$English}}},
                                    {x: 'Quantitative', value: {{$Quantitative}}},
                                ];

                                if("{{$subject}}" == "NAT-IE"){
                                    var dataSelection2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Physics', value: {{$subjectScore1}}},
                                        {x: 'Chemistry', value: {{$subjectScore2}}},
                                        {x: 'Maths', value: {{$subjectScore3}}},
                                    ];
                                    dataSelection = dataSelection2;
                                }
                                else if("{{$subject}}" == 'NAT-IM'){
                                    var dataSelection2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Physics', value: {{$subjectScore1}}},
                                        {x: 'Chemistry', value: {{$subjectScore2}}},
                                        {x: 'Bio', value: {{$subjectScore3}}},
                                    ];
                                    dataSelection = dataSelection2;
                                }
                                else if("{{$subject}}" == 'NAT-ICS'){
                                    var dataSelection2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Physics', value: {{$subjectScore1}}},
                                        {x: 'Computer', value: {{$subjectScore2}}},
                                        {x: 'Maths', value: {{$subjectScore3}}},
                                    ];
                                    dataSelection = dataSelection2;
                                }
                                else if("{{$subject}}" == 'NAT-IGS'){
                                    var dataSelection2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Maths', value: {{$subjectScore1}}},
                                        {x: 'Statistics', value: {{$subjectScore2}}},
                                        {x: 'Economics', value: {{$subjectScore3}}},
                                    ];
                                    dataSelection = dataSelection2;
                                }
                                else if("{{$subject}}" == 'NAT-ICOM'){
                                    var dataSelection2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Accounting', value: {{$subjectScore1}}},
                                        {x: 'Commerce', value: {{$subjectScore2}}},
                                        {x: 'Economics', value: {{$subjectScore3}}},
                                    ];
                                    dataSelection = dataSelection2;
                                }


                                // create a chart
                                var chart = anychart.pareto(dataSelection);

                                // get the column series and format tooltip
                                chart.getSeriesAt(0).tooltip().format("Score: {%value}");

                                // get the line series and format tooltip
                                chart.getSeriesAt(1).tooltip().format("Cumulative Weight: {%CF}");

                                // set the chart title
                                chart.title("{{$subject}}" + " Total:" + "{{$dataSelection[0]->result}}" + "/" + "{{$dataSelection[0]->total}}");

                                chart.animation(true, 800);

                                // set the container id
                                chart.container("container3");

                                // initiate drawing the chart
                                chart.draw();

                                var theOddOnes = document.getElementsByClassName('anychart-credits');
                                for(var i=0; i<theOddOnes.length; i++){
                                    document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                }
                            });


                        @else
                            anychart.onDocumentReady(function () {

                                var dataSelection = [
                                    {x: 'Analytical', value: {{$Analytical}}},
                                    {x: 'English', value: {{$English}}},
                                    {x: 'Quantitative', value: {{$Quantitative}}},
                                    {x: 'Subject I', value: {{$subjectScore1}}},
                                    {x: 'Subject II', value: {{$subjectScore2}}},
                                    {x: 'Subject III', value: {{$subjectScore3}}},
                                ];



                                // create a chart
                                var chart = anychart.pareto(dataSelection);

                                // get the column series and format tooltip
                                chart.getSeriesAt(0).tooltip().format("Score: {%value}");

                                // get the line series and format tooltip
                                chart.getSeriesAt(1).tooltip().format("Cumulative Weight: {%CF}");

                                // set the chart title
                                chart.title("You Haven't Taken Any Test");

                                chart.animation(true, 800);

                                // set the container id
                                chart.container("container3");

                                // initiate drawing the chart
                                chart.draw();

                                var theOddOnes = document.getElementsByClassName('anychart-credits');
                                for(var i=0; i<theOddOnes.length; i++){
                                    document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                }
                            });

                        @endif

                        //diagnostic
                        anychart.onDocumentReady(function () {

                            // create a dataDiagnostic set
                            var dataDiagnostic = anychart.data.set([
                                ["Analytical", {{ $AnalyticalDiagnostic }}],
                                ["English", {{ $EnglishDiagnostic }}],
                                ["Quantitative", {{ $QuantitativeDiagnostic }}],
                                ["Physics", {{ $PhysicsDiagnostic }}],
                                ["Chem", {{ $ChemistryDiagnostic }}],
                                ["Maths", {{ $MathematicsDiagnostic }}],
                                ["Bio", {{ $BiologyDiagnostic }}],
                                ["Computer", {{ $ComputerDiagnostic }}],
                                ["Stats", {{ $StatisticsDiagnostic }}],
                                ["Eco", {{ $EconomicsDiagnostic }}],
                                ["Acc", {{ $AccountingDiagnostic }}],
                                ["Commerce", {{ $CommerceDiagnostic }}]
                            ]);




                            // create a chart
                            var chart = anychart.barmekko();

                            // create a bar series and set the dataDiagnostic
                            var series = chart.mekko(dataDiagnostic);

                            // set the chart title
                            chart.title("Your Average Scores");

                            chart.animation(true, 800);
                            series.name("Score");

                            // set the container id
                            chart.container("container4");

                            // initiate drawing the chart
                            chart.draw();
                            var theOddOnes = document.getElementsByClassName('anychart-credits');
                            for(var i=0; i<theOddOnes.length; i++){
                                document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                            }
                        });

                        //personality
                        @if($conventional == -1)
                            $(".lastresult").hide();
                        @else
                            anychart.onDocumentReady(function () {

                                // create a dataPersonality set
                                var dataPersonality = anychart.data.set([
                                    ["Conventional", {{ $conventional }}],
                                    ["Enterprising", {{ $enterprising }}],
                                    ["Social", {{ $social }}],
                                    ["Artistic", {{ $artistic }}],
                                    ["Investigative", {{ $investigative }}],
                                    ["Realistic", {{ $realistic }}]
                                ]);

                                // create a chart
                                var chart = anychart.bar();

                                // create a bar series and set the dataPersonality
                                var series = chart.bar(dataPersonality);

                                // set the chart title
                                chart.title("Personality: {{ $result}}");

                                // set the titles of the axes
                                chart.xAxis().title("Traits");
                                chart.yAxis().title("%");
                                chart.animation(true, 800);

                                // set the container id
                                chart.container("container5");

                                // initiate drawing the chart
                                chart.draw();
                                var theOddOnes = document.getElementsByClassName('anychart-credits');
                                for(var i=0; i<theOddOnes.length; i++){
                                    document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                }
                            });

                        @endif

                    @endif

                    @if( \Request::is('generate'))
                        //personality
                        anychart.onDocumentReady(function () {

                            // create a data set
                            var dataPersonality = anychart.data.set([
                                    ["Conventional", {{ $conventional }}],
                                    ["Enterprising", {{ $enterprising }}],
                                    ["Social", {{ $social }}],
                                    ["Artistic", {{ $artistic }}],
                                    ["Investigative", {{ $investigative }}],
                                    ["Realistic", {{ $realistic }}]
                            ]);

                            // create a chart
                            var chart = anychart.polar();

                            // create a bar series and set the data
                            var series = chart.polygon(dataPersonality);

                            // set the type of the x-scale
                            chart.xScale("ordinal");

                            // enable sorting points by x
                            chart.sortPointsByX(true);

                            // set the inner radius
                            chart.innerRadius(50);

                            // set the interactivity mode
                            chart.interactivity().hoverMode("single");

                            // set the chart title
                            chart.title("");
                            series.name("Score"); 
                            series.normal().fill("#00cc99", 0.3);
                            series.hovered().fill("#00cc99", 0.1);
                            series.selected().fill("#00cc99", 0.5);
                            series.normal().stroke("#00cc99", 1, "10 5", "round");
                            series.hovered().stroke("#00cc99", 2, "10 5", "round");
                            series.selected().stroke("#00cc99", 4, "10 5", "round");

                            series.normal().fill("#7bc0f7", 0.3);
                            series.hovered().fill("#7bc0f7", 0.1);
                            series.selected().fill("#7bc0f7", 0.5);
                            series.normal().stroke("#7bc0f7", 1, "10 5", "round");
                            series.hovered().stroke("#7bc0f7", 2, "10 5", "round");
                            series.selected().stroke("#7bc0f7", 4, "10 5", "round");

                            chart.animation(true, 800);

                            // set the container id
                            chart.container("container5");

                            // initiate drawing the chart
                            chart.draw();

                            var theOddOnes = document.getElementsByClassName('anychart-credits');
                            for(var i=0; i<theOddOnes.length; i++){
                                document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                            }
                        });

                        //academics
                        @if($dataSSC != '')
                            @if($dataAcademic[0]->ssc == 'matric')
                                var dataAcademic;
                                @if($dataSSC[0]->track == 'Medical')
                                    anychart.onDocumentReady(function () {
                                        var dataAcademic = anychart.data.set([
                                            ["English", "{{ ($dataSSC[0]->english/150)*100}}"],
                                            ["Urdu", "{{ ($dataSSC[0]->urdu/150)*100 }}"],
                                            ["Islamiyat Ethics", "{{ ($dataSSC[0]->islamiyat_Ethics/75)*100 }}"],
                                            ["Pakistan Studies", "{{ ($dataSSC[0]->pakistan_Studies/75)*100 }}"],
                                            ["Mathematics", "{{ ($dataSSC[0]->mathematics/150)*100 }}"],
                                            ["Physics", "{{ ($dataSSC[0]->physics/150)*100 }}"],
                                            ["Chemistry", "{{ ($dataSSC[0]->chemistry/150)*100 }}"],
                                            ["Biology", "{{ ($dataSSC[0]->biology/150)*100 }}"]
                                        ]);
                                        // create a chart
                                        var chart = anychart.bar();
                                        // create a bar series and set the dataAcademic
                                        var series = chart.bar(dataAcademic);
                                        chart.title("SSC: Matric - Medical");
                                        // set the titles of the axes
                                        chart.xAxis().title("Subjects");
                                        chart.yAxis().title("%");
                                        chart.animation(true, 800);
                                        // set the container id
                                        chart.container("container1");
                                        // initiate drawing the chart
                                        chart.draw();
                                        var theOddOnes = document.getElementsByClassName('anychart-credits');
                                        for(var i=0; i<theOddOnes.length; i++){
                                            document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                        }
                                    });
                                @elseif($dataSSC[0]->track == 'Engineering')
                                    anychart.onDocumentReady(function () {
                                        var dataAcademic = anychart.data.set([
                                            ["English", "{{ ($dataSSC[0]->english/150)*100}}"],
                                            ["Urdu", "{{ ($dataSSC[0]->urdu/150)*100 }}"],
                                            ["Islamiyat Ethics", "{{ ($dataSSC[0]->islamiyat_Ethics/75)*100 }}"],
                                            ["Pakistan Studies", "{{ ($dataSSC[0]->pakistan_Studies/75)*100 }}"],
                                            ["Mathematics", "{{ ($dataSSC[0]->mathematics/150)*100 }}"],
                                            ["Physics", "{{ ($dataSSC[0]->physics/150)*100 }}"],
                                            ["Chemistry", "{{ ($dataSSC[0]->chemistry/150)*100 }}"],
                                            ["Computer", "{{ ($dataSSC[0]->computer/150)*100 }}"]
                                        ]);
                                        // create a chart
                                        var chart = anychart.bar();
                                        // create a bar series and set the dataAcademic
                                        var series = chart.bar(dataAcademic);
                                        chart.title("SSC: Matric - Engineering");
                                        // set the titles of the axes
                                        chart.xAxis().title("Subjects");
                                        chart.yAxis().title("%");
                                        chart.animation(true, 800);
                                        // set the container id
                                        chart.container("container1");
                                        // initiate drawing the chart
                                        chart.draw();

                                        var theOddOnes = document.getElementsByClassName('anychart-credits');
                                        for(var i=0; i<theOddOnes.length; i++){
                                            document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                        }
                                    });

                                @elseif($dataSSC[0]->track == 'Humanities')
                                    anychart.onDocumentReady(function () {
                                        var dataAcademic = anychart.data.set([
                                            ["English", "{{ ($dataSSC[0]->english/150)*100}}"],
                                            ["Urdu", "{{ ($dataSSC[0]->urdu/150)*100 }}"],
                                            ["Islamiyat Ethics", "{{ ($dataSSC[0]->islamiyat_Ethics/75)*100 }}"],
                                            ["Pakistan Studies", "{{ ($dataSSC[0]->pakistan_Studies/75)*100 }}"],
                                            ["Mathematics", "{{ ($dataSSC[0]->mathematics/150)*100 }}"],
                                            ["General Sciences", "{{ ($dataSSC[0]->general_sciences/150)*100 }}"],
                                            ["Economics", "{{ ($dataSSC[0]->economics/150)*100 }}"],
                                            ["Business Studies", "{{ ($dataSSC[0]->business_studies/150)*100 }}"]
                                        ]);
                                        // create a chart
                                        var chart = anychart.bar();
                                        // create a bar series and set the dataAcademic
                                        var series = chart.bar(dataAcademic);
                                        chart.title("SSC: Matric - Humanities");
                                        // set the titles of the axes
                                        chart.xAxis().title("Subjects");
                                        chart.yAxis().title("%");
                                        chart.animation(true, 800);
                                        // set the container id
                                        chart.container("container1");
                                        // initiate drawing the chart
                                        chart.draw();
                                        var theOddOnes = document.getElementsByClassName('anychart-credits');
                                        for(var i=0; i<theOddOnes.length; i++){
                                            document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                        }
                                    });

                                @endif
                            @elseif($dataAcademic[0]->ssc == 'olevels')
                                
                                var dataAcademic = [['',]];
                                @if($dataSSC[0]->art != 'null')
                                    dataAcademic.push(["Art", "{{$dataSSC[0]->art}}"]);
                                @endif
                                @if($dataSSC[0]->biology != 'null')
                                    dataAcademic.push(["Biology", "{{$dataSSC[0]->biology}}"]);
                                @endif
                                @if($dataSSC[0]->businessStudies != 'null')
                                    dataAcademic.push(["Business Studies", "{{$dataSSC[0]->businessStudies}}"]);
                                @endif
                                @if($dataSSC[0]->chemistry != 'null')
                                    dataAcademic.push(["Chemistry", "{{$dataSSC[0]->chemistry}}"]);
                                @endif
                                @if($dataSSC[0]->computerStudies != 'null')
                                    dataAcademic.push(["Computer Studies", "{{$dataSSC[0]->computerStudies}}"]);
                                @endif
                                @if($dataSSC[0]->economics != 'null')
                                    dataAcademic.push(["Economics", "{{$dataSSC[0]->economics}}"]);
                                @endif
                                @if($dataSSC[0]->englishLanguage != 'null')
                                    dataAcademic.push(["English Language", "{{$dataSSC[0]->englishLanguage}}"]);
                                @endif
                                @if($dataSSC[0]->islamiyat != 'null')
                                    dataAcademic.push(["Islamiyat", "{{$dataSSC[0]->islamiyat}}"]);
                                @endif
                                @if($dataSSC[0]->mathematicsAdditional != 'null')
                                    dataAcademic.push(["Mathematics Additional", "{{$dataSSC[0]->mathematicsAdditional}}"]);
                                @endif
                                @if($dataSSC[0]->mathematicsD != 'null')
                                    dataAcademic.push(["MathematicsD", "{{$dataSSC[0]->mathematicsD}}"]);
                                @endif
                                @if($dataSSC[0]->pakistanStudies != 'null')
                                    dataAcademic.push(["PakistanS Studies", "{{$dataSSC[0]->pakistanStudies}}"]);
                                @endif
                                @if($dataSSC[0]->religiousStudies != 'null')
                                    dataAcademic.push(["Religious Studies", "{{$dataSSC[0]->religiousStudies}}"]);
                                @endif
                                @if($dataSSC[0]->sociology != 'null')
                                    dataAcademic.push(["Sociology", "{{$dataSSC[0]->sociology}}"]);
                                @endif
                                @if($dataSSC[0]->urduFirstLanguage != 'null')
                                    dataAcademic.push(["uUrdu First Language", "{{$dataSSC[0]->urduFirstLanguage}}"]);
                                @endif
                                @if($dataSSC[0]->urduSecondLanguage != 'null')
                                    dataAcademic.push(["Urdu Second Language", "{{$dataSSC[0]->urduSecondLanguage}}"]);
                                @endif
                                anychart.onDocumentReady(function () {
                                    // create a chart
                                    var chart = anychart.bar();
                                    // create a bar series and set the dataAcademic
                                    var series = chart.bar(dataAcademic);
                                    chart.title("SSC: O-Levels");
                                    // set the titles of the axes
                                    chart.xAxis().title("Subjects");
                                    chart.yAxis().title("%");
                                    chart.animation(true, 800);
                                    // set the container id
                                    chart.container("container1");
                                    // initiate drawing the chart
                                    chart.draw();
                                    var theOddOnes = document.getElementsByClassName('anychart-credits');
                                    for(var i=0; i<theOddOnes.length; i++){
                                        document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                    }
                                });
                            @endif
                        @endif

                        @if($dataHSSC != '')
                            @if($dataAcademic[0]->hssc == 'hssc')
                                @if($dataHSSC[0]->track == 'Pre-Med')
                                    anychart.onDocumentReady(function () {
                                        var dataAcademic = anychart.data.set([
                                            ["English", "{{ ($dataHSSC[0]->english/200)*100}}"],
                                            ["Urdu", "{{ ($dataHSSC[0]->urdu/200)*100 }}"],
                                            ["Islamiyat_Ethics", "{{ ($dataHSSC[0]->islamiyat_Ethics/50)*100 }}"],
                                            ["Pakistan_Studies", "{{ ($dataHSSC[0]->pakistan_Studies/20)*100 }}"],
                                            ["Physics", "{{ ($dataHSSC[0]->physics/200)*100 }}"],
                                            ["Chemistry", "{{ ($dataHSSC[0]->chemistry/200)*100 }}"],
                                            ["Biology", "{{ ($dataHSSC[0]->biology/200)*100 }}"]
                                        ]);
                                        // create a chart
                                        var chart = anychart.bar();
                                        // create a bar series and set the dataAcademic
                                        var series = chart.bar(dataAcademic);
                                        chart.title("HSSC: Intermediate - Pre-Medical");
                                        // set the titles of the axes
                                        chart.xAxis().title("Subjects");
                                        chart.yAxis().title("%");
                                        chart.animation(true, 800);
                                        // set the container id
                                        chart.container("container2");
                                        // initiate drawing the chart
                                        chart.draw();
                                        var theOddOnes = document.getElementsByClassName('anychart-credits');
                                        for(var i=0; i<theOddOnes.length; i++){
                                            document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                        }
                                    });



                                @elseif($dataHSSC[0]->track == 'Pre-Engineering')
                                    anychart.onDocumentReady(function () {
                                        var dataAcademic = anychart.data.set([
                                            ["English", "{{ ($dataHSSC[0]->english/200)*100}}"],
                                            ["Urdu", "{{ ($dataHSSC[0]->urdu/200)*100 }}"],
                                            ["Islamiyat_Ethics", "{{ ($dataHSSC[0]->islamiyat_Ethics/50)*100 }}"],
                                            ["Pakistan_Studies", "{{ ($dataHSSC[0]->pakistan_Studies/50)*100 }}"],
                                            ["Mathematics", "{{ ($dataHSSC[0]->mathematics/200)*100 }}"],
                                            ["Physics", "{{ ($dataHSSC[0]->physics/200)*100 }}"],
                                            ["Chemistry", "{{ ($dataHSSC[0]->chemistry/200)*100 }}"],
                                        ]);
                                        // create a chart
                                        var chart = anychart.bar();
                                        // create a bar series and set the dataAcademic
                                        var series = chart.bar(dataAcademic);
                                        chart.title("HSSC: Intermediate - Pre-Engineering");
                                        // set the titles of the axes
                                        chart.xAxis().title("Subjects");
                                        chart.yAxis().title("%");
                                        chart.animation(true, 800);
                                        // set the container id
                                        chart.container("container2");
                                        // initiate drawing the chart
                                        chart.draw();
                                        
                                        var theOddOnes = document.getElementsByClassName('anychart-credits');
                                        for(var i=0; i<theOddOnes.length; i++){
                                            document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                        }
                                    });
                


                                @elseif($dataHSSC[0]->track == 'ICS')
                                    @if($dataHSSC[0]->physics != 'null')
                                        anychart.onDocumentReady(function () {
                                            var dataAcademic = anychart.data.set([
                                                ["English", "{{ ($dataHSSC[0]->english/200)*100}}"],
                                                ["Urdu", "{{ ($dataHSSC[0]->urdu/200)*100 }}"],
                                                ["Islamiyat_Ethics", "{{ ($dataHSSC[0]->islamiyat_Ethics/50)*100 }}"],
                                                ["Pakistan_Studies", "{{ ($dataHSSC[0]->pakistan_Studies/50)*100 }}"],
                                                ["Mathematics", "{{ ($dataHSSC[0]->mathematics/200)*100 }}"],
                                                ["Physics", "{{ ($dataHSSC[0]->physics/200)*100 }}"],
                                                ["Computer", "{{ ($dataHSSC[0]->computer/200)*100 }}"],
                                            ]);
                                            // create a chart
                                            var chart = anychart.bar();
                                            // create a bar series and set the dataAcademic
                                            var series = chart.bar(dataAcademic);
                                            chart.title("HSSC: Intermediate - ICS (Physics)");
                                            // set the titles of the axes
                                            chart.xAxis().title("Subjects");
                                            chart.yAxis().title("%");
                                            chart.animation(true, 800);
                                            // set the container id
                                            chart.container("container2");
                                            // initiate drawing the chart
                                            chart.draw();
                                            var theOddOnes = document.getElementsByClassName('anychart-credits');
                                            for(var i=0; i<theOddOnes.length; i++){
                                                document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                            }
                                        });
                                    @elseif($dataHSSC[0]->statistics != 'null')
                                        anychart.onDocumentReady(function () {
                                            var dataAcademic = anychart.data.set([
                                                ["English", "{{ ($dataHSSC[0]->english/200)*100}}"],
                                                ["Urdu", "{{ ($dataHSSC[0]->urdu/200)*100 }}"],
                                                ["Islamiyat_Ethics", "{{ ($dataHSSC[0]->islamiyat_Ethics/50)*100 }}"],
                                                ["Pakistan_Studies", "{{ ($dataHSSC[0]->pakistan_Studies/50)*100 }}"],
                                                ["Mathematics", "{{ ($dataHSSC[0]->mathematics/200)*100 }}"],
                                                ["Statistics", "{{ ($dataHSSC[0]->statistics/200)*100 }}"],
                                                ["Computer", "{{ ($dataHSSC[0]->computer/200)*100 }}"],
                                            ]);
                                            // create a chart
                                            var chart = anychart.bar();
                                            // create a bar series and set the dataAcademic
                                            var series = chart.bar(dataAcademic);
                                            chart.title("HSSC: Intermediate - ICS (Statistics)");
                                            // set the titles of the axes
                                            chart.xAxis().title("Subjects");
                                            chart.yAxis().title("%");
                                            chart.animation(true, 800);
                                            // set the container id
                                            chart.container("container2");
                                            // initiate drawing the chart
                                            chart.draw();
                                            var theOddOnes = document.getElementsByClassName('anychart-credits');
                                            for(var i=0; i<theOddOnes.length; i++){
                                                document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                            }
                                        });
                                    @elseif($dataHSSC[0]->economics != 'null')
                                        anychart.onDocumentReady(function () {
                                            var dataAcademic = anychart.data.set([
                                                ["English", "{{ ($dataHSSC[0]->english/200)*100}}"],
                                                ["Urdu", "{{ ($dataHSSC[0]->urdu/200)*100 }}"],
                                                ["Islamiyat_Ethics", "{{ ($dataHSSC[0]->islamiyat_Ethics/50)*100 }}"],
                                                ["Pakistan_Studies", "{{ ($dataHSSC[0]->pakistan_Studies/50)*100 }}"],
                                                ["Mathematics", "{{ ($dataHSSC[0]->mathematics/200)*100 }}"],
                                                ["Economics", "{{ ($dataHSSC[0]->economics/200)*100 }}"],
                                                ["Computer", "{{ ($dataHSSC[0]->computer/200)*100 }}"],
                                            ]);
                                            // create a chart
                                            var chart = anychart.bar();
                                            // create a bar series and set the dataAcademic
                                            var series = chart.bar(dataAcademic);
                                            chart.title("HSSC: Intermediate - ICS (Economics)");
                                            // set the titles of the axes
                                            chart.xAxis().title("Subjects");
                                            chart.yAxis().title("%");
                                            chart.animation(true, 800);
                                            // set the container id
                                            chart.container("container2");
                                            // initiate drawing the chart
                                            chart.draw();
                                            
                                            var theOddOnes = document.getElementsByClassName('anychart-credits');
                                            for(var i=0; i<theOddOnes.length; i++){
                                                document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                            }
                                        });
                                    @endif
                                @endif
                            @elseif($dataAcademic[0]->hssc == 'alevels')
                                var data2 = [['',]];
                                @if($dataHSSC[0]->accounting != 'null')
                                    data2.push(["Accounting", "{{$dataHSSC[0]->accounting}}"]);
                                @endif
                                @if($dataHSSC[0]->aICT != 'null')
                                    data2.push(["AICT", "{{$dataHSSC[0]->aICT}}"]);
                                @endif
                                @if($dataHSSC[0]->art != 'null')
                                    data2.push(["Art", "{{$dataHSSC[0]->art}}"]);
                                @endif
                                @if($dataHSSC[0]->biology != 'null')
                                    data2.push(["Biology", "{{$dataHSSC[0]->biology}}"]);
                                @endif
                                @if($dataHSSC[0]->businessStudies != 'null')
                                    data2.push(["Business Studies", "{{$dataHSSC[0]->businessStudies}}"]);
                                @endif
                                @if($dataHSSC[0]->chemistry != 'null')
                                    data2.push(["Chemistry", "{{$dataHSSC[0]->chemistry}}"]);
                                @endif
                                @if($dataHSSC[0]->computerScience != 'null')
                                    data2.push(["Computer Science", "{{$dataHSSC[0]->computerScience}}"]);
                                @endif
                                @if($dataHSSC[0]->economics != 'null')
                                    data2.push(["Economics", "{{$dataHSSC[0]->economics}}"]);
                                @endif
                                @if($dataHSSC[0]->englishLanguage != 'null')
                                    data2.push(["English Language", "{{$dataHSSC[0]->englishLanguage}}"]);
                                @endif
                                @if($dataHSSC[0]->englishLiterature != 'null')
                                    data2.push(["English Literature", "{{$dataHSSC[0]->englishLiterature}}"]);
                                @endif
                                @if($dataHSSC[0]->environmentalManagement != 'null')
                                    data2.push(["Environmental Management", "{{$dataHSSC[0]->environmentalManagement}}"]);
                                @endif
                                @if($dataHSSC[0]->globalPerspectives != 'null')
                                    data2.push(["Global Perspectives", "{{$dataHSSC[0]->globalPerspectives}}"]);
                                @endif
                                @if($dataHSSC[0]->governmentPolitics != 'null')
                                    data2.push(["Government Politics", "{{$dataHSSC[0]->governmentPolitics}}"]);
                                @endif
                                @if($dataHSSC[0]->history != 'null')
                                    data2.push(["History", "{{$dataHSSC[0]->history}}"]);
                                @endif
                                @if($dataHSSC[0]->law != 'null')
                                    data2.push(["Law", "{{$dataHSSC[0]->law}}"]);
                                @endif
                                @if($dataHSSC[0]->mathematics != 'null')
                                    data2.push(["Mathematics", "{{$dataHSSC[0]->mathematics}}"]);
                                @endif
                                @if($dataHSSC[0]->mathematicsFurther != 'null')
                                    data2.push(["Mathematics Further", "{{$dataHSSC[0]->mathematicsFurther}}"]);
                                @endif
                                @if($dataHSSC[0]->mediaStudies != 'null')
                                    data2.push(["Media Studies", "{{$dataHSSC[0]->mediaStudies}}"]);
                                @endif
                                @if($dataHSSC[0]->physics != 'null')
                                    data2.push(["Physics", "{{$dataHSSC[0]->physics}}"]);
                                @endif
                                @if($dataHSSC[0]->psychology != 'null')
                                    data2.push(["Psychology", "{{$dataHSSC[0]->psychology}}"]);
                                @endif
                                @if($dataHSSC[0]->sociology != 'null')
                                    data2.push(["Sociology", "{{$dataHSSC[0]->sociology}}"]);
                                @endif
                                @if($dataHSSC[0]->urdu != 'null')
                                    data2.push(["Urdu", "{{$dataHSSC[0]->urdu}}"]);
                                @endif
                                anychart.onDocumentReady(function () {
                                    // create a chart
                                    var chart2 = anychart.bar();
                                    // create a bar series and set the data2
                                    var series = chart2.bar(data2);
                                    chart2.title("HSSC: A-Levels");
                                    // set the titles of the axes
                                    chart2.xAxis().title("Subjects");
                                    chart2.yAxis().title("%");
                                    chart2.animation(true, 800);
                                    // set the container id
                                    chart2.container("container2");
                                    // initiate drawing the chart
                                    chart2.draw();
                                    var theOddOnes = document.getElementsByClassName('anychart-credits');
                                    for(var i=0; i<theOddOnes.length; i++){
                                        document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                    }
                                });
                            @endif
                        @endif

                        //selection
                        @if($subject != '')
                            anychart.onDocumentReady(function () {
                                var dataSelection;
                                var dataSelection = [
                                    {x: 'Analytical', value: {{$Analytical}}},
                                    {x: 'English', value: {{$English}}},
                                    {x: 'Quantitative', value: {{$Quantitative}}},
                                ];

                                if("{{$subject}}" == "NAT-IE"){
                                    var dataSelection2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Physics', value: {{$subjectScore1}}},
                                        {x: 'Chemistry', value: {{$subjectScore2}}},
                                        {x: 'Maths', value: {{$subjectScore3}}},
                                    ];
                                    dataSelection = dataSelection2;
                                }
                                else if("{{$subject}}" == 'NAT-IM'){
                                    var dataSelection2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Physics', value: {{$subjectScore1}}},
                                        {x: 'Chemistry', value: {{$subjectScore2}}},
                                        {x: 'Bio', value: {{$subjectScore3}}},
                                    ];
                                    dataSelection = dataSelection2;
                                }
                                else if("{{$subject}}" == 'NAT-ICS'){
                                    var dataSelection2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Physics', value: {{$subjectScore1}}},
                                        {x: 'Computer', value: {{$subjectScore2}}},
                                        {x: 'Maths', value: {{$subjectScore3}}},
                                    ];
                                    dataSelection = dataSelection2;
                                }
                                else if("{{$subject}}" == 'NAT-IGS'){
                                    var dataSelection2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Maths', value: {{$subjectScore1}}},
                                        {x: 'Statistics', value: {{$subjectScore2}}},
                                        {x: 'Economics', value: {{$subjectScore3}}},
                                    ];
                                    dataSelection = dataSelection2;
                                }
                                else if("{{$subject}}" == 'NAT-ICOM'){
                                    var dataSelection2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Accounting', value: {{$subjectScore1}}},
                                        {x: 'Commerce', value: {{$subjectScore2}}},
                                        {x: 'Economics', value: {{$subjectScore3}}},
                                    ];
                                    dataSelection = dataSelection2;
                                }


                                // create a chart
                                var chart = anychart.pareto(dataSelection);

                                // get the column series and format tooltip
                                chart.getSeriesAt(0).tooltip().format("Score: {%value}");

                                // get the line series and format tooltip
                                chart.getSeriesAt(1).tooltip().format("Cumulative Weight: {%CF}");

                                // set the chart title
                                chart.title("{{$subject}}" + " Total:" + "{{$dataSelection[0]->result}}" + "/" + "{{$dataSelection[0]->total}}");

                                chart.animation(true, 800);

                                // set the container id
                                chart.container("container3");

                                // initiate drawing the chart
                                chart.draw();

                                var theOddOnes = document.getElementsByClassName('anychart-credits');
                                for(var i=0; i<theOddOnes.length; i++){
                                    document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                }
                            });


                        @else
                            anychart.onDocumentReady(function () {

                                var dataSelection = [
                                    {x: 'Analytical', value: {{$Analytical}}},
                                    {x: 'English', value: {{$English}}},
                                    {x: 'Quantitative', value: {{$Quantitative}}},
                                    {x: 'Subject I', value: {{$subjectScore1}}},
                                    {x: 'Subject II', value: {{$subjectScore2}}},
                                    {x: 'Subject III', value: {{$subjectScore3}}},
                                ];



                                // create a chart
                                var chart = anychart.pareto(dataSelection);

                                // get the column series and format tooltip
                                chart.getSeriesAt(0).tooltip().format("Score: {%value}");

                                // get the line series and format tooltip
                                chart.getSeriesAt(1).tooltip().format("Cumulative Weight: {%CF}");

                                // set the chart title
                                chart.title("You Haven't Taken Any Test");

                                chart.animation(true, 800);

                                // set the container id
                                chart.container("container3");

                                // initiate drawing the chart
                                chart.draw();

                                var theOddOnes = document.getElementsByClassName('anychart-credits');
                                for(var i=0; i<theOddOnes.length; i++){
                                    document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                }
                            });

                        @endif

                        //diagnostic
                        anychart.onDocumentReady(function () {

                            // create a dataDiagnostic set
                            var dataDiagnostic = anychart.data.set([
                                ["Analytical", {{ $AnalyticalDiagnostic }}],
                                ["English", {{ $EnglishDiagnostic }}],
                                ["Quantitative", {{ $QuantitativeDiagnostic }}],
                                ["Physics", {{ $PhysicsDiagnostic }}],
                                ["Chem", {{ $ChemistryDiagnostic }}],
                                ["Maths", {{ $MathematicsDiagnostic }}],
                                ["Bio", {{ $BiologyDiagnostic }}],
                                ["Computer", {{ $ComputerDiagnostic }}],
                                ["Stats", {{ $StatisticsDiagnostic }}],
                                ["Eco", {{ $EconomicsDiagnostic }}],
                                ["Acc", {{ $AccountingDiagnostic }}],
                                ["Commerce", {{ $CommerceDiagnostic }}]
                            ]);




                            // create a chart
                            var chart = anychart.barmekko();

                            // create a bar series and set the dataDiagnostic
                            var series = chart.mekko(dataDiagnostic);

                            // set the chart title
                            chart.title("Your Average Scores");

                            chart.animation(true, 800);
                            series.name("Score");

                            // set the container id
                            chart.container("container4");

                            // initiate drawing the chart
                            chart.draw();
                            var theOddOnes = document.getElementsByClassName('anychart-credits');
                            for(var i=0; i<theOddOnes.length; i++){
                                document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                            }
                            });
                        anychart.onDocumentReady(function () {
                                // create data


                                var data = [
                                    {x: "Incorrect", value: 100-{{$EnglishDiagnostic}}},
                                    {x: "Correct", value: {{$EnglishDiagnostic}}},
                                ];

                                // create a pie chart and set the data
                                var chart = anychart.pie(data);

                                /* set the inner radius
                                (to turn the pie chart into a doughnut chart)*/
                                chart.innerRadius("35%");

                                // set the chart title
                                chart.title("Verbal Reasoning");

                                // set the container id
                                chart.container("container6");

                                // initiate drawing the chart
                                chart.draw();
                                var theOddOnes = document.getElementsByClassName('anychart-credits');
                                for(var i=0; i<theOddOnes.length; i++){
                                    document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                }
                            });
                        anychart.onDocumentReady(function () {
                                // create data


                                var data = [
                                    {x: "Incorrect", value: 100-{{$QuantitativeDiagnostic}}},
                                    {x: "Correct", value: {{$QuantitativeDiagnostic}}},
                                ];

                                // create a pie chart and set the data
                                var chart = anychart.pie(data);

                                /* set the inner radius
                                (to turn the pie chart into a doughnut chart)*/
                                chart.innerRadius("35%");

                                // set the chart title
                                chart.title("Quantitative  Reasoning");

                                // set the container id
                                chart.container("container7");

                                // initiate drawing the chart
                                chart.draw();
                                var theOddOnes = document.getElementsByClassName('anychart-credits');
                                for(var i=0; i<theOddOnes.length; i++){
                                    document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                }
                            });
                        anychart.onDocumentReady(function () {
                                // create data


                                var data = [
                                    {x: "Incorrect", value: 100-{{$AnalyticalDiagnostic}}},
                                    {x: "Correct", value: {{$AnalyticalDiagnostic}}},
                                ];

                                // create a pie chart and set the data
                                var chart = anychart.pie(data);

                                /* set the inner radius
                                (to turn the pie chart into a doughnut chart)*/
                                chart.innerRadius("35%");

                                // set the chart title
                                chart.title("Analytical  Reasoning");

                                // set the container id
                                chart.container("container8");

                                // initiate drawing the chart
                                chart.draw();
                                var theOddOnes = document.getElementsByClassName('anychart-credits');
                                for(var i=0; i<theOddOnes.length; i++){
                                    document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                }
                        });

                        
                    
                    @endif

                    
                </script>




                @if (\Request::is('questions/create') || \Request::is('profile/photo'))
                    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
                    <script src="{{URL::to('/')}}/jquery.Jcrop.min.js" defer></script>
                @endif
                
                <!-- script for sortable tables -->
                <script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js" defer></script>

                <!-- pdf -->
                @if (\Request::is('generate'))
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"
                    integrity="sha256-c9vxcXyAG4paArQG3xk6DjyW/9aHxai2ef9RpMWO44A=" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
                    <script src="{{URL::to('/')}}/html2pdf.bundle.min.js"></script>
                @endif
                

        </head>

        <body @if ( \Request::is("recommendations")) @endif class="page-header-fixed" @if ( \Request::is("diagnostic/*") || \Request::is('selection/*')) onbeforeunload=" return 'Are you really want to perform the action?'" @endif>

            @include('partials.analytics')

            <div class="page-header navbar navbar-fixed-top">
                @include('partials.header')
            </div>

            <div class="clearfix"></div>

            <div class="page-container">
                <div class="page-sidebar-wrapper" id="wrapper">
                    @include('partials.sidebar')
                </div>

                <div class="page-content-wrapper">
                    <div class="page-content">

                        @if(isset($siteTitle))
                            <h3 class="page-title">
                                {{ $siteTitle }}
                            </h3>
                        @endif

                        <div class="row">
                            <div class="col-md-12">

                                @if (Session::has('message'))
                                    <div class="note note-info">
                                        <p>{{ Session::get('message') }}</p>
                                    </div>
                                @endif
                                @if ($errors->count() > 0)
                                    <div class="note note-danger">
                                        <ul class="list-unstyled">
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @yield('content')

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="scroll-to-top"
                style="display: none;">
                <i class="fa fa-arrow-up"></i>
            </div>

            {!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
                <button type="submit">Logout</button>
            {!! Form::close() !!}

            @include('partials.javascripts')
            <script>
                @if(\Request::is('Crawler/UniversitiesRank'))

                @elseif(\Request::is('home'))
                    // document.getElementsByClassName('anychart-credits')[0].style.visibility = 'hidden';
                    // $('.anychart-credits').each(function(i, obj) {
                    //     //test
                    //     alert(i);
                    // });

                    
                
                @else

                @endif
            </script>
            <script language="Javascript" type="text/javascript" >
                
            </script>
        
        </body>
    @endauth

















    @if (\Request::is('APIreportcard/*') || 
        \Request::is('APIpersonality/*') || \Request::is('APIPersonality/result/*') || 
        \Request::is('APIdiagnostic/test/*') || \Request::is('APIdiagnostic/result/*') || 
        \Request::is('APIselection/result/*') || \Request::is('APIselection/test/*') ||
        \Request::is('APIgenerate/*'))
        <head>

            
                @include('partials.head')
                @include('partials.javascripts')


                <script>

                    @if(\Request::is('APIselection/result/*'))

                        @if($subject != '')
                            anychart.onDocumentReady(function () {
                                var data = [
                                    {x: 'Analytical', value: {{$Analytical}}},
                                    {x: 'English', value: {{$English}}},
                                    {x: 'Quantitative', value: {{$Quantitative}}},
                                ];

                                if("{{$subject}}" == "NAT-IE"){
                                    var data2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Physics', value: {{$subjectScore1}}},
                                        {x: 'Chemistry', value: {{$subjectScore2}}},
                                        {x: 'Maths', value: {{$subjectScore3}}},
                                    ];
                                    data = data2;
                                }
                                else if("{{$subject}}" == 'NAT-IM'){
                                    var data2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Physics', value: {{$subjectScore1}}},
                                        {x: 'Chemistry', value: {{$subjectScore2}}},
                                        {x: 'Bio', value: {{$subjectScore3}}},
                                    ];
                                    data = data2;
                                }
                                else if("{{$subject}}" == 'NAT-ICS'){
                                    var data2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Physics', value: {{$subjectScore1}}},
                                        {x: 'Computer', value: {{$subjectScore2}}},
                                        {x: 'Maths', value: {{$subjectScore3}}},
                                    ];
                                    data = data2;
                                }
                                else if("{{$subject}}" == 'NAT-IGS'){
                                    var data2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Maths', value: {{$subjectScore1}}},
                                        {x: 'Statistics', value: {{$subjectScore2}}},
                                        {x: 'Economics', value: {{$subjectScore3}}},
                                    ];
                                    data = data2;
                                }
                                else if("{{$subject}}" == 'NAT-ICOM'){
                                    var data2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Accounting', value: {{$subjectScore1}}},
                                        {x: 'Commerce', value: {{$subjectScore2}}},
                                        {x: 'Economics', value: {{$subjectScore3}}},
                                    ];
                                    data = data2;
                                }


                                // create a chart
                                var chart = anychart.pareto(data);

                                // get the column series and format tooltip
                                chart.getSeriesAt(0).tooltip().format("Score: {%value}");

                                // get the line series and format tooltip
                                chart.getSeriesAt(1).tooltip().format("Cumulative Weight: {%CF}");

                                // set the chart title
                                chart.title("{{$subject}}" + " Total:" + "{{$data[0]->result}}" + "/" + "{{$data[0]->total}}");

                                chart.animation(true, 800);

                                // set the container id
                                chart.container("container");

                                // initiate drawing the chart
                                chart.draw();

                                var theOddOnes = document.getElementsByClassName('anychart-credits');
                                for(var i=0; i<theOddOnes.length; i++){
                                    document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                }
                            });


                        @else
                            anychart.onDocumentReady(function () {

                                var data = [
                                    {x: 'Analytical', value: {{$Analytical}}},
                                    {x: 'English', value: {{$English}}},
                                    {x: 'Quantitative', value: {{$Quantitative}}},
                                    {x: 'Subject I', value: {{$subjectScore1}}},
                                    {x: 'Subject II', value: {{$subjectScore2}}},
                                    {x: 'Subject III', value: {{$subjectScore3}}},
                                ];



                                // create a chart
                                var chart = anychart.pareto(data);

                                // get the column series and format tooltip
                                chart.getSeriesAt(0).tooltip().format("Score: {%value}");

                                // get the line series and format tooltip
                                chart.getSeriesAt(1).tooltip().format("Cumulative Weight: {%CF}");

                                // set the chart title
                                chart.title("You Haven't Taken Any Test");

                                chart.animation(true, 800);

                                // set the container id
                                chart.container("container");

                                // initiate drawing the chart
                                chart.draw();

                                var theOddOnes = document.getElementsByClassName('anychart-credits');
                                for(var i=0; i<theOddOnes.length; i++){
                                    document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                }
                            });

                        @endif

                    @endif

                    @if(\Request::is('APIdiagnostic/result/*'))

                        anychart.onDocumentReady(function () {

                            // create a data set
                            var data = anychart.data.set([
                                ["Analytical", {{ $Analytical }}],
                                ["English", {{ $English }}],
                                ["Quantitative", {{ $Quantitative }}],
                                ["Physics", {{ $Physics }}],
                                ["Chem", {{ $Chemistry }}],
                                ["Maths", {{ $Mathematics }}],
                                ["Bio", {{ $Biology }}],
                                ["Computer", {{ $Computer }}],
                                ["Stats", {{ $Statistics }}],
                                ["Eco", {{ $Economics }}],
                                ["Acc", {{ $Accounting }}],
                                ["Commerce", {{ $Commerce }}]
                            ]);



                            
                            // create a chart
                            var chart = anychart.barmekko();

                            // create a bar series and set the data
                            var series = chart.mekko(data);

                            // set the chart title
                            chart.title("Your Average Scores");

                            chart.animation(true, 800);
                            series.name("Score");

                            // set the container id
                            chart.container("container");

                            // initiate drawing the chart
                            chart.draw();
                            
                            document.getElementsByClassName('anychart-credits-text')[0].style.visibility = 'hidden';
                            document.getElementsByClassName('anychart-credits')[0].style.visibility = 'hidden';
                            
                            document.getElementsByClassName('btn-success')[0].style.visibility = 'hidden';
                        });

                    @endif
                    
                    @if(\Request::is('APIPersonality/result/*'))
                        @if($conventional == -1)
                            $(".lastresult").hide();
                        @else
                            anychart.onDocumentReady(function () {

                                // create a data set
                                var data = anychart.data.set([
                                    ["Conventional", {{ $conventional }}],
                                    ["Enterprising", {{ $enterprising }}],
                                    ["Social", {{ $social }}],
                                    ["Artistic", {{ $artistic }}],
                                    ["Investigative", {{ $investigative }}],
                                    ["Realistic", {{ $realistic }}]
                                ]);

                                // create a chart
                                var chart = anychart.bar();

                                // create a bar series and set the data
                                var series = chart.bar(data);

                                // set the chart title
                                chart.title("Personality: {{ $result}}");

                                // set the titles of the axes
                                chart.xAxis().title("Traits");
                                chart.yAxis().title("%");
                                chart.animation(true, 800);

                                // set the container id
                                chart.container("container");

                                // initiate drawing the chart
                                chart.draw();
                                
                                document.getElementsByClassName('anychart-credits-text')[0].style.visibility = 'hidden';
                                document.getElementsByClassName('anychart-credits')[0].style.visibility = 'hidden';
                                
                                document.getElementsByClassName('btn-success')[0].style.visibility = 'hidden';
                            });

                        @endif
                    @endif
                    
                    @if( \Request::is('APIselection/test/*'))
                        function startTimer(duration, display) {
                            var timer = duration, minutes, seconds;
                            setInterval(function () {
                                minutes = parseInt(timer / 60, 10);
                                seconds = parseInt(timer % 60, 10);

                                minutes = minutes < 10 ? "0" + minutes : minutes;
                                seconds = seconds < 10 ? "0" + seconds : seconds;

                                display.textContent = minutes + ":" + seconds;

                                if (--timer < 0) {
                                    // timer = duration;
                                    document.getElementsByClassName('hiddensubmit')[0].click();
                                }
                            }, 1000);
                            
                        }

                        $( window ).on( "load", function() { 
                            var fiveMinutes = 60 * 120,
                                display = document.querySelector('#time');
                            startTimer(fiveMinutes, display);
                            
                        })

                    @endif

                    @if(\Request::is('APIdiagnostic/test/*'))
                        function startTimer(duration, display) {
                            var timer = duration, minutes, seconds;
                            setInterval(function () {
                                minutes = parseInt(timer / 60, 10);
                                seconds = parseInt(timer % 60, 10);

                                minutes = minutes < 10 ? "0" + minutes : minutes;
                                seconds = seconds < 10 ? "0" + seconds : seconds;

                                display.textContent = minutes + ":" + seconds;

                                if (--timer < 0) {
                                    // timer = duration;
                                    document.getElementsByClassName('hiddensubmit')[0].click();
                                }
                            }, 1000);
                            
                        }

                        $( window ).on( "load", function() { 
                            var fiveMinutes = 60 * 55,
                            display = document.querySelector('#time');
                            startTimer(fiveMinutes, display);
                        })

                        window.addEventListener("beforeunload", function (e) {
                            var confirmationMessage = "\o/";

                            (e || window.event).returnValue = confirmationMessage; //Gecko + IE
                            return confirmationMessage;                            //Webkit, Safari, Chrome
                        });

                        window.onbeforeunload = function () {
                            return "2";
                        };

                    @endif

                    @if( \Request::is('APIreportcard/*'))

                        //academics
                        @if($dataSSC != '')
                            @if($dataAcademic[0]->ssc == 'matric')
                                var dataAcademic;
                                @if($dataSSC[0]->track == 'Medical')
                                    anychart.onDocumentReady(function () {
                                        var dataAcademic = anychart.data.set([
                                            ["English", "{{ ($dataSSC[0]->english/150)*100}}"],
                                            ["Urdu", "{{ ($dataSSC[0]->urdu/150)*100 }}"],
                                            ["Islamiyat Ethics", "{{ ($dataSSC[0]->islamiyat_Ethics/75)*100 }}"],
                                            ["Pakistan Studies", "{{ ($dataSSC[0]->pakistan_Studies/75)*100 }}"],
                                            ["Mathematics", "{{ ($dataSSC[0]->mathematics/150)*100 }}"],
                                            ["Physics", "{{ ($dataSSC[0]->physics/150)*100 }}"],
                                            ["Chemistry", "{{ ($dataSSC[0]->chemistry/150)*100 }}"],
                                            ["Biology", "{{ ($dataSSC[0]->biology/150)*100 }}"]
                                        ]);
                                        // create a chart
                                        var chart = anychart.bar();
                                        // create a bar series and set the dataAcademic
                                        var series = chart.bar(dataAcademic);
                                        chart.title("SSC: Matric - Medical");
                                        // set the titles of the axes
                                        chart.xAxis().title("Subjects");
                                        chart.yAxis().title("%");
                                        chart.animation(true, 800);
                                        // set the container id
                                        chart.container("container1");
                                        // initiate drawing the chart
                                        chart.draw();
                                        var theOddOnes = document.getElementsByClassName('anychart-credits');
                                        for(var i=0; i<theOddOnes.length; i++){
                                            document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                        }
                                    });
                                @elseif($dataSSC[0]->track == 'Engineering')
                                    anychart.onDocumentReady(function () {
                                        var dataAcademic = anychart.data.set([
                                            ["English", "{{ ($dataSSC[0]->english/150)*100}}"],
                                            ["Urdu", "{{ ($dataSSC[0]->urdu/150)*100 }}"],
                                            ["Islamiyat Ethics", "{{ ($dataSSC[0]->islamiyat_Ethics/75)*100 }}"],
                                            ["Pakistan Studies", "{{ ($dataSSC[0]->pakistan_Studies/75)*100 }}"],
                                            ["Mathematics", "{{ ($dataSSC[0]->mathematics/150)*100 }}"],
                                            ["Physics", "{{ ($dataSSC[0]->physics/150)*100 }}"],
                                            ["Chemistry", "{{ ($dataSSC[0]->chemistry/150)*100 }}"],
                                            ["Computer", "{{ ($dataSSC[0]->computer/150)*100 }}"]
                                        ]);
                                        // create a chart
                                        var chart = anychart.bar();
                                        // create a bar series and set the dataAcademic
                                        var series = chart.bar(dataAcademic);
                                        chart.title("SSC: Matric - Engineering");
                                        // set the titles of the axes
                                        chart.xAxis().title("Subjects");
                                        chart.yAxis().title("%");
                                        chart.animation(true, 800);
                                        // set the container id
                                        chart.container("container1");
                                        // initiate drawing the chart
                                        chart.draw();

                                        var theOddOnes = document.getElementsByClassName('anychart-credits');
                                        for(var i=0; i<theOddOnes.length; i++){
                                            document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                        }
                                    });

                                @elseif($dataSSC[0]->track == 'Humanities')
                                    anychart.onDocumentReady(function () {
                                        var dataAcademic = anychart.data.set([
                                            ["English", "{{ ($dataSSC[0]->english/150)*100}}"],
                                            ["Urdu", "{{ ($dataSSC[0]->urdu/150)*100 }}"],
                                            ["Islamiyat Ethics", "{{ ($dataSSC[0]->islamiyat_Ethics/75)*100 }}"],
                                            ["Pakistan Studies", "{{ ($dataSSC[0]->pakistan_Studies/75)*100 }}"],
                                            ["Mathematics", "{{ ($dataSSC[0]->mathematics/150)*100 }}"],
                                            ["General Sciences", "{{ ($dataSSC[0]->general_sciences/150)*100 }}"],
                                            ["Economics", "{{ ($dataSSC[0]->economics/150)*100 }}"],
                                            ["Business Studies", "{{ ($dataSSC[0]->business_studies/150)*100 }}"]
                                        ]);
                                        // create a chart
                                        var chart = anychart.bar();
                                        // create a bar series and set the dataAcademic
                                        var series = chart.bar(dataAcademic);
                                        chart.title("SSC: Matric - Humanities");
                                        // set the titles of the axes
                                        chart.xAxis().title("Subjects");
                                        chart.yAxis().title("%");
                                        chart.animation(true, 800);
                                        // set the container id
                                        chart.container("container1");
                                        // initiate drawing the chart
                                        chart.draw();
                                        var theOddOnes = document.getElementsByClassName('anychart-credits');
                                        for(var i=0; i<theOddOnes.length; i++){
                                            document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                        }
                                    });

                                @endif
                            @elseif($dataAcademic[0]->ssc == 'olevels')
                                
                                var dataAcademic = [['',]];
                                @if($dataSSC[0]->art != 'null')
                                    dataAcademic.push(["Art", "{{$dataSSC[0]->art}}"]);
                                @endif
                                @if($dataSSC[0]->biology != 'null')
                                    dataAcademic.push(["Biology", "{{$dataSSC[0]->biology}}"]);
                                @endif
                                @if($dataSSC[0]->businessStudies != 'null')
                                    dataAcademic.push(["Business Studies", "{{$dataSSC[0]->businessStudies}}"]);
                                @endif
                                @if($dataSSC[0]->chemistry != 'null')
                                    dataAcademic.push(["Chemistry", "{{$dataSSC[0]->chemistry}}"]);
                                @endif
                                @if($dataSSC[0]->computerStudies != 'null')
                                    dataAcademic.push(["Computer Studies", "{{$dataSSC[0]->computerStudies}}"]);
                                @endif
                                @if($dataSSC[0]->economics != 'null')
                                    dataAcademic.push(["Economics", "{{$dataSSC[0]->economics}}"]);
                                @endif
                                @if($dataSSC[0]->englishLanguage != 'null')
                                    dataAcademic.push(["English Language", "{{$dataSSC[0]->englishLanguage}}"]);
                                @endif
                                @if($dataSSC[0]->islamiyat != 'null')
                                    dataAcademic.push(["Islamiyat", "{{$dataSSC[0]->islamiyat}}"]);
                                @endif
                                @if($dataSSC[0]->mathematicsAdditional != 'null')
                                    dataAcademic.push(["Mathematics Additional", "{{$dataSSC[0]->mathematicsAdditional}}"]);
                                @endif
                                @if($dataSSC[0]->mathematicsD != 'null')
                                    dataAcademic.push(["MathematicsD", "{{$dataSSC[0]->mathematicsD}}"]);
                                @endif
                                @if($dataSSC[0]->pakistanStudies != 'null')
                                    dataAcademic.push(["PakistanS Studies", "{{$dataSSC[0]->pakistanStudies}}"]);
                                @endif
                                @if($dataSSC[0]->religiousStudies != 'null')
                                    dataAcademic.push(["Religious Studies", "{{$dataSSC[0]->religiousStudies}}"]);
                                @endif
                                @if($dataSSC[0]->sociology != 'null')
                                    dataAcademic.push(["Sociology", "{{$dataSSC[0]->sociology}}"]);
                                @endif
                                @if($dataSSC[0]->urduFirstLanguage != 'null')
                                    dataAcademic.push(["uUrdu First Language", "{{$dataSSC[0]->urduFirstLanguage}}"]);
                                @endif
                                @if($dataSSC[0]->urduSecondLanguage != 'null')
                                    dataAcademic.push(["Urdu Second Language", "{{$dataSSC[0]->urduSecondLanguage}}"]);
                                @endif
                                anychart.onDocumentReady(function () {
                                    // create a chart
                                    var chart = anychart.bar();
                                    // create a bar series and set the dataAcademic
                                    var series = chart.bar(dataAcademic);
                                    chart.title("SSC: O-Levels");
                                    // set the titles of the axes
                                    chart.xAxis().title("Subjects");
                                    chart.yAxis().title("%");
                                    chart.animation(true, 800);
                                    // set the container id
                                    chart.container("container1");
                                    // initiate drawing the chart
                                    chart.draw();
                                    var theOddOnes = document.getElementsByClassName('anychart-credits');
                                    for(var i=0; i<theOddOnes.length; i++){
                                        document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                    }
                                });
                            @endif
                        @endif
                        @if($dataHSSC != '')
                            @if($dataAcademic[0]->hssc == 'hssc')
                                @if($dataHSSC[0]->track == 'Pre-Med')
                                    anychart.onDocumentReady(function () {
                                        var dataAcademic = anychart.data.set([
                                            ["English", "{{ ($dataHSSC[0]->english/200)*100}}"],
                                            ["Urdu", "{{ ($dataHSSC[0]->urdu/200)*100 }}"],
                                            ["Islamiyat_Ethics", "{{ ($dataHSSC[0]->islamiyat_Ethics/50)*100 }}"],
                                            ["Pakistan_Studies", "{{ ($dataHSSC[0]->pakistan_Studies/20)*100 }}"],
                                            ["Physics", "{{ ($dataHSSC[0]->physics/200)*100 }}"],
                                            ["Chemistry", "{{ ($dataHSSC[0]->chemistry/200)*100 }}"],
                                            ["Biology", "{{ ($dataHSSC[0]->biology/200)*100 }}"]
                                        ]);
                                        // create a chart
                                        var chart = anychart.bar();
                                        // create a bar series and set the dataAcademic
                                        var series = chart.bar(dataAcademic);
                                        chart.title("HSSC: Intermediate - Pre-Medical");
                                        // set the titles of the axes
                                        chart.xAxis().title("Subjects");
                                        chart.yAxis().title("%");
                                        chart.animation(true, 800);
                                        // set the container id
                                        chart.container("container2");
                                        // initiate drawing the chart
                                        chart.draw();
                                        var theOddOnes = document.getElementsByClassName('anychart-credits');
                                        for(var i=0; i<theOddOnes.length; i++){
                                            document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                        }
                                    });



                                @elseif($dataHSSC[0]->track == 'Pre-Engineering')
                                    anychart.onDocumentReady(function () {
                                        var dataAcademic = anychart.data.set([
                                            ["English", "{{ ($dataHSSC[0]->english/200)*100}}"],
                                            ["Urdu", "{{ ($dataHSSC[0]->urdu/200)*100 }}"],
                                            ["Islamiyat_Ethics", "{{ ($dataHSSC[0]->islamiyat_Ethics/50)*100 }}"],
                                            ["Pakistan_Studies", "{{ ($dataHSSC[0]->pakistan_Studies/50)*100 }}"],
                                            ["Mathematics", "{{ ($dataHSSC[0]->mathematics/200)*100 }}"],
                                            ["Physics", "{{ ($dataHSSC[0]->physics/200)*100 }}"],
                                            ["Chemistry", "{{ ($dataHSSC[0]->chemistry/200)*100 }}"],
                                        ]);
                                        // create a chart
                                        var chart = anychart.bar();
                                        // create a bar series and set the dataAcademic
                                        var series = chart.bar(dataAcademic);
                                        chart.title("HSSC: Intermediate - Pre-Engineering");
                                        // set the titles of the axes
                                        chart.xAxis().title("Subjects");
                                        chart.yAxis().title("%");
                                        chart.animation(true, 800);
                                        // set the container id
                                        chart.container("container2");
                                        // initiate drawing the chart
                                        chart.draw();
                                        
                                        var theOddOnes = document.getElementsByClassName('anychart-credits');
                                        for(var i=0; i<theOddOnes.length; i++){
                                            document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                        }
                                    });
                


                                @elseif($dataHSSC[0]->track == 'ICS')
                                    @if($dataHSSC[0]->physics != 'null')
                                        anychart.onDocumentReady(function () {
                                            var dataAcademic = anychart.data.set([
                                                ["English", "{{ ($dataHSSC[0]->english/200)*100}}"],
                                                ["Urdu", "{{ ($dataHSSC[0]->urdu/200)*100 }}"],
                                                ["Islamiyat_Ethics", "{{ ($dataHSSC[0]->islamiyat_Ethics/50)*100 }}"],
                                                ["Pakistan_Studies", "{{ ($dataHSSC[0]->pakistan_Studies/50)*100 }}"],
                                                ["Mathematics", "{{ ($dataHSSC[0]->mathematics/200)*100 }}"],
                                                ["Physics", "{{ ($dataHSSC[0]->physics/200)*100 }}"],
                                                ["Computer", "{{ ($dataHSSC[0]->computer/200)*100 }}"],
                                            ]);
                                            // create a chart
                                            var chart = anychart.bar();
                                            // create a bar series and set the dataAcademic
                                            var series = chart.bar(dataAcademic);
                                            chart.title("HSSC: Intermediate - ICS (Physics)");
                                            // set the titles of the axes
                                            chart.xAxis().title("Subjects");
                                            chart.yAxis().title("%");
                                            chart.animation(true, 800);
                                            // set the container id
                                            chart.container("container2");
                                            // initiate drawing the chart
                                            chart.draw();
                                            var theOddOnes = document.getElementsByClassName('anychart-credits');
                                            for(var i=0; i<theOddOnes.length; i++){
                                                document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                            }
                                        });
                                    @elseif($dataHSSC[0]->statistics != 'null')
                                        anychart.onDocumentReady(function () {
                                            var dataAcademic = anychart.data.set([
                                                ["English", "{{ ($dataHSSC[0]->english/200)*100}}"],
                                                ["Urdu", "{{ ($dataHSSC[0]->urdu/200)*100 }}"],
                                                ["Islamiyat_Ethics", "{{ ($dataHSSC[0]->islamiyat_Ethics/50)*100 }}"],
                                                ["Pakistan_Studies", "{{ ($dataHSSC[0]->pakistan_Studies/50)*100 }}"],
                                                ["Mathematics", "{{ ($dataHSSC[0]->mathematics/200)*100 }}"],
                                                ["Statistics", "{{ ($dataHSSC[0]->statistics/200)*100 }}"],
                                                ["Computer", "{{ ($dataHSSC[0]->computer/200)*100 }}"],
                                            ]);
                                            // create a chart
                                            var chart = anychart.bar();
                                            // create a bar series and set the dataAcademic
                                            var series = chart.bar(dataAcademic);
                                            chart.title("HSSC: Intermediate - ICS (Statistics)");
                                            // set the titles of the axes
                                            chart.xAxis().title("Subjects");
                                            chart.yAxis().title("%");
                                            chart.animation(true, 800);
                                            // set the container id
                                            chart.container("container2");
                                            // initiate drawing the chart
                                            chart.draw();
                                            var theOddOnes = document.getElementsByClassName('anychart-credits');
                                            for(var i=0; i<theOddOnes.length; i++){
                                                document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                            }
                                        });
                                    @elseif($dataHSSC[0]->economics != 'null')
                                        anychart.onDocumentReady(function () {
                                            var dataAcademic = anychart.data.set([
                                                ["English", "{{ ($dataHSSC[0]->english/200)*100}}"],
                                                ["Urdu", "{{ ($dataHSSC[0]->urdu/200)*100 }}"],
                                                ["Islamiyat_Ethics", "{{ ($dataHSSC[0]->islamiyat_Ethics/50)*100 }}"],
                                                ["Pakistan_Studies", "{{ ($dataHSSC[0]->pakistan_Studies/50)*100 }}"],
                                                ["Mathematics", "{{ ($dataHSSC[0]->mathematics/200)*100 }}"],
                                                ["Economics", "{{ ($dataHSSC[0]->economics/200)*100 }}"],
                                                ["Computer", "{{ ($dataHSSC[0]->computer/200)*100 }}"],
                                            ]);
                                            // create a chart
                                            var chart = anychart.bar();
                                            // create a bar series and set the dataAcademic
                                            var series = chart.bar(dataAcademic);
                                            chart.title("HSSC: Intermediate - ICS (Economics)");
                                            // set the titles of the axes
                                            chart.xAxis().title("Subjects");
                                            chart.yAxis().title("%");
                                            chart.animation(true, 800);
                                            // set the container id
                                            chart.container("container2");
                                            // initiate drawing the chart
                                            chart.draw();
                                            
                                            var theOddOnes = document.getElementsByClassName('anychart-credits');
                                            for(var i=0; i<theOddOnes.length; i++){
                                                document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                            }
                                        });
                                    @endif
                                @endif
                            @elseif($dataAcademic[0]->hssc == 'alevels')
                                var data2 = [['',]];
                                @if($dataHSSC[0]->accounting != 'null')
                                    data2.push(["Accounting", "{{$dataHSSC[0]->accounting}}"]);
                                @endif
                                @if($dataHSSC[0]->aICT != 'null')
                                    data2.push(["AICT", "{{$dataHSSC[0]->aICT}}"]);
                                @endif
                                @if($dataHSSC[0]->art != 'null')
                                    data2.push(["Art", "{{$dataHSSC[0]->art}}"]);
                                @endif
                                @if($dataHSSC[0]->biology != 'null')
                                    data2.push(["Biology", "{{$dataHSSC[0]->biology}}"]);
                                @endif
                                @if($dataHSSC[0]->businessStudies != 'null')
                                    data2.push(["Business Studies", "{{$dataHSSC[0]->businessStudies}}"]);
                                @endif
                                @if($dataHSSC[0]->chemistry != 'null')
                                    data2.push(["Chemistry", "{{$dataHSSC[0]->chemistry}}"]);
                                @endif
                                @if($dataHSSC[0]->computerScience != 'null')
                                    data2.push(["Computer Science", "{{$dataHSSC[0]->computerScience}}"]);
                                @endif
                                @if($dataHSSC[0]->economics != 'null')
                                    data2.push(["Economics", "{{$dataHSSC[0]->economics}}"]);
                                @endif
                                @if($dataHSSC[0]->englishLanguage != 'null')
                                    data2.push(["English Language", "{{$dataHSSC[0]->englishLanguage}}"]);
                                @endif
                                @if($dataHSSC[0]->englishLiterature != 'null')
                                    data2.push(["English Literature", "{{$dataHSSC[0]->englishLiterature}}"]);
                                @endif
                                @if($dataHSSC[0]->environmentalManagement != 'null')
                                    data2.push(["Environmental Management", "{{$dataHSSC[0]->environmentalManagement}}"]);
                                @endif
                                @if($dataHSSC[0]->globalPerspectives != 'null')
                                    data2.push(["Global Perspectives", "{{$dataHSSC[0]->globalPerspectives}}"]);
                                @endif
                                @if($dataHSSC[0]->governmentPolitics != 'null')
                                    data2.push(["Government Politics", "{{$dataHSSC[0]->governmentPolitics}}"]);
                                @endif
                                @if($dataHSSC[0]->history != 'null')
                                    data2.push(["History", "{{$dataHSSC[0]->history}}"]);
                                @endif
                                @if($dataHSSC[0]->law != 'null')
                                    data2.push(["Law", "{{$dataHSSC[0]->law}}"]);
                                @endif
                                @if($dataHSSC[0]->mathematics != 'null')
                                    data2.push(["Mathematics", "{{$dataHSSC[0]->mathematics}}"]);
                                @endif
                                @if($dataHSSC[0]->mathematicsFurther != 'null')
                                    data2.push(["Mathematics Further", "{{$dataHSSC[0]->mathematicsFurther}}"]);
                                @endif
                                @if($dataHSSC[0]->mediaStudies != 'null')
                                    data2.push(["Media Studies", "{{$dataHSSC[0]->mediaStudies}}"]);
                                @endif
                                @if($dataHSSC[0]->physics != 'null')
                                    data2.push(["Physics", "{{$dataHSSC[0]->physics}}"]);
                                @endif
                                @if($dataHSSC[0]->psychology != 'null')
                                    data2.push(["Psychology", "{{$dataHSSC[0]->psychology}}"]);
                                @endif
                                @if($dataHSSC[0]->sociology != 'null')
                                    data2.push(["Sociology", "{{$dataHSSC[0]->sociology}}"]);
                                @endif
                                @if($dataHSSC[0]->urdu != 'null')
                                    data2.push(["Urdu", "{{$dataHSSC[0]->urdu}}"]);
                                @endif
                                anychart.onDocumentReady(function () {
                                    // create a chart
                                    var chart2 = anychart.bar();
                                    // create a bar series and set the data2
                                    var series = chart2.bar(data2);
                                    chart2.title("HSSC: A-Levels");
                                    // set the titles of the axes
                                    chart2.xAxis().title("Subjects");
                                    chart2.yAxis().title("%");
                                    chart2.animation(true, 800);
                                    // set the container id
                                    chart2.container("container2");
                                    // initiate drawing the chart
                                    chart2.draw();
                                    var theOddOnes = document.getElementsByClassName('anychart-credits');
                                    for(var i=0; i<theOddOnes.length; i++){
                                        document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                    }
                                });
                            @endif
                        @endif

                        //selection
                        @if($subject != '')
                            anychart.onDocumentReady(function () {
                                var dataSelection;
                                var dataSelection = [
                                    {x: 'Analytical', value: {{$Analytical}}},
                                    {x: 'English', value: {{$English}}},
                                    {x: 'Quantitative', value: {{$Quantitative}}},
                                ];

                                if("{{$subject}}" == "NAT-IE"){
                                    var dataSelection2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Physics', value: {{$subjectScore1}}},
                                        {x: 'Chemistry', value: {{$subjectScore2}}},
                                        {x: 'Maths', value: {{$subjectScore3}}},
                                    ];
                                    dataSelection = dataSelection2;
                                }
                                else if("{{$subject}}" == 'NAT-IM'){
                                    var dataSelection2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Physics', value: {{$subjectScore1}}},
                                        {x: 'Chemistry', value: {{$subjectScore2}}},
                                        {x: 'Bio', value: {{$subjectScore3}}},
                                    ];
                                    dataSelection = dataSelection2;
                                }
                                else if("{{$subject}}" == 'NAT-ICS'){
                                    var dataSelection2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Physics', value: {{$subjectScore1}}},
                                        {x: 'Computer', value: {{$subjectScore2}}},
                                        {x: 'Maths', value: {{$subjectScore3}}},
                                    ];
                                    dataSelection = dataSelection2;
                                }
                                else if("{{$subject}}" == 'NAT-IGS'){
                                    var dataSelection2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Maths', value: {{$subjectScore1}}},
                                        {x: 'Statistics', value: {{$subjectScore2}}},
                                        {x: 'Economics', value: {{$subjectScore3}}},
                                    ];
                                    dataSelection = dataSelection2;
                                }
                                else if("{{$subject}}" == 'NAT-ICOM'){
                                    var dataSelection2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Accounting', value: {{$subjectScore1}}},
                                        {x: 'Commerce', value: {{$subjectScore2}}},
                                        {x: 'Economics', value: {{$subjectScore3}}},
                                    ];
                                    dataSelection = dataSelection2;
                                }


                                // create a chart
                                var chart = anychart.pareto(dataSelection);

                                // get the column series and format tooltip
                                chart.getSeriesAt(0).tooltip().format("Score: {%value}");

                                // get the line series and format tooltip
                                chart.getSeriesAt(1).tooltip().format("Cumulative Weight: {%CF}");

                                // set the chart title
                                chart.title("{{$subject}}" + " Total:" + "{{$dataSelection[0]->result}}" + "/" + "{{$dataSelection[0]->total}}");

                                chart.animation(true, 800);

                                // set the container id
                                chart.container("container3");

                                // initiate drawing the chart
                                chart.draw();

                                var theOddOnes = document.getElementsByClassName('anychart-credits');
                                for(var i=0; i<theOddOnes.length; i++){
                                    document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                }
                            });


                        @else
                            anychart.onDocumentReady(function () {

                                var dataSelection = [
                                    {x: 'Analytical', value: {{$Analytical}}},
                                    {x: 'English', value: {{$English}}},
                                    {x: 'Quantitative', value: {{$Quantitative}}},
                                    {x: 'Subject I', value: {{$subjectScore1}}},
                                    {x: 'Subject II', value: {{$subjectScore2}}},
                                    {x: 'Subject III', value: {{$subjectScore3}}},
                                ];



                                // create a chart
                                var chart = anychart.pareto(dataSelection);

                                // get the column series and format tooltip
                                chart.getSeriesAt(0).tooltip().format("Score: {%value}");

                                // get the line series and format tooltip
                                chart.getSeriesAt(1).tooltip().format("Cumulative Weight: {%CF}");

                                // set the chart title
                                chart.title("You Haven't Taken Any Test");

                                chart.animation(true, 800);

                                // set the container id
                                chart.container("container3");

                                // initiate drawing the chart
                                chart.draw();

                                var theOddOnes = document.getElementsByClassName('anychart-credits');
                                for(var i=0; i<theOddOnes.length; i++){
                                    document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                }
                            });

                        @endif

                        //diagnostic
                        anychart.onDocumentReady(function () {

                            // create a dataDiagnostic set
                            var dataDiagnostic = anychart.data.set([
                                ["Analytical", {{ $AnalyticalDiagnostic }}],
                                ["English", {{ $EnglishDiagnostic }}],
                                ["Quantitative", {{ $QuantitativeDiagnostic }}],
                                ["Physics", {{ $PhysicsDiagnostic }}],
                                ["Chem", {{ $ChemistryDiagnostic }}],
                                ["Maths", {{ $MathematicsDiagnostic }}],
                                ["Bio", {{ $BiologyDiagnostic }}],
                                ["Computer", {{ $ComputerDiagnostic }}],
                                ["Stats", {{ $StatisticsDiagnostic }}],
                                ["Eco", {{ $EconomicsDiagnostic }}],
                                ["Acc", {{ $AccountingDiagnostic }}],
                                ["Commerce", {{ $CommerceDiagnostic }}]
                            ]);




                            // create a chart
                            var chart = anychart.barmekko();

                            // create a bar series and set the dataDiagnostic
                            var series = chart.mekko(dataDiagnostic);

                            // set the chart title
                            chart.title("Your Average Scores");

                            chart.animation(true, 800);
                            series.name("Score");

                            // set the container id
                            chart.container("container4");

                            // initiate drawing the chart
                            chart.draw();
                            var theOddOnes = document.getElementsByClassName('anychart-credits');
                            for(var i=0; i<theOddOnes.length; i++){
                                document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                            }
                        });

                        //personality
                        @if($conventional == -1)
                            $(".lastresult").hide();
                        @else
                            anychart.onDocumentReady(function () {

                                // create a dataPersonality set
                                var dataPersonality = anychart.data.set([
                                    ["Conventional", {{ $conventional }}],
                                    ["Enterprising", {{ $enterprising }}],
                                    ["Social", {{ $social }}],
                                    ["Artistic", {{ $artistic }}],
                                    ["Investigative", {{ $investigative }}],
                                    ["Realistic", {{ $realistic }}]
                                ]);

                                // create a chart
                                var chart = anychart.bar();

                                // create a bar series and set the dataPersonality
                                var series = chart.bar(dataPersonality);

                                // set the chart title
                                chart.title("Personality: {{ $result}}");

                                // set the titles of the axes
                                chart.xAxis().title("Traits");
                                chart.yAxis().title("%");
                                chart.animation(true, 800);

                                // set the container id
                                chart.container("container5");

                                // initiate drawing the chart
                                chart.draw();
                                var theOddOnes = document.getElementsByClassName('anychart-credits');
                                for(var i=0; i<theOddOnes.length; i++){
                                    document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                }
                            });

                        @endif

                    @endif

                    @if( \Request::is('APIgenerate/*'))
                        //personality
                        anychart.onDocumentReady(function () {

                            // create a data set
                            var dataPersonality = anychart.data.set([
                                    ["Conventional", {{ $conventional }}],
                                    ["Enterprising", {{ $enterprising }}],
                                    ["Social", {{ $social }}],
                                    ["Artistic", {{ $artistic }}],
                                    ["Investigative", {{ $investigative }}],
                                    ["Realistic", {{ $realistic }}]
                            ]);

                            // create a chart
                            var chart = anychart.polar();

                            // create a bar series and set the data
                            var series = chart.polygon(dataPersonality);

                            // set the type of the x-scale
                            chart.xScale("ordinal");

                            // enable sorting points by x
                            chart.sortPointsByX(true);

                            // set the inner radius
                            chart.innerRadius(50);

                            // set the interactivity mode
                            chart.interactivity().hoverMode("single");

                            // set the chart title
                            chart.title("");
                            series.name("Score"); 
                            series.normal().fill("#00cc99", 0.3);
                            series.hovered().fill("#00cc99", 0.1);
                            series.selected().fill("#00cc99", 0.5);
                            series.normal().stroke("#00cc99", 1, "10 5", "round");
                            series.hovered().stroke("#00cc99", 2, "10 5", "round");
                            series.selected().stroke("#00cc99", 4, "10 5", "round");

                            series.normal().fill("#7bc0f7", 0.3);
                            series.hovered().fill("#7bc0f7", 0.1);
                            series.selected().fill("#7bc0f7", 0.5);
                            series.normal().stroke("#7bc0f7", 1, "10 5", "round");
                            series.hovered().stroke("#7bc0f7", 2, "10 5", "round");
                            series.selected().stroke("#7bc0f7", 4, "10 5", "round");

                            chart.animation(true, 800);

                            // set the container id
                            chart.container("container5");

                            // initiate drawing the chart
                            chart.draw();

                            var theOddOnes = document.getElementsByClassName('anychart-credits');
                            for(var i=0; i<theOddOnes.length; i++){
                                document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                            }
                        });

                        //academics
                        @if($dataSSC != '')
                            @if($dataAcademic[0]->ssc == 'matric')
                                var dataAcademic;
                                @if($dataSSC[0]->track == 'Medical')
                                    anychart.onDocumentReady(function () {
                                        var dataAcademic = anychart.data.set([
                                            ["English", "{{ ($dataSSC[0]->english/150)*100}}"],
                                            ["Urdu", "{{ ($dataSSC[0]->urdu/150)*100 }}"],
                                            ["Islamiyat Ethics", "{{ ($dataSSC[0]->islamiyat_Ethics/75)*100 }}"],
                                            ["Pakistan Studies", "{{ ($dataSSC[0]->pakistan_Studies/75)*100 }}"],
                                            ["Mathematics", "{{ ($dataSSC[0]->mathematics/150)*100 }}"],
                                            ["Physics", "{{ ($dataSSC[0]->physics/150)*100 }}"],
                                            ["Chemistry", "{{ ($dataSSC[0]->chemistry/150)*100 }}"],
                                            ["Biology", "{{ ($dataSSC[0]->biology/150)*100 }}"]
                                        ]);
                                        // create a chart
                                        var chart = anychart.bar();
                                        // create a bar series and set the dataAcademic
                                        var series = chart.bar(dataAcademic);
                                        chart.title("SSC: Matric - Medical");
                                        // set the titles of the axes
                                        chart.xAxis().title("Subjects");
                                        chart.yAxis().title("%");
                                        chart.animation(true, 800);
                                        // set the container id
                                        chart.container("container1");
                                        // initiate drawing the chart
                                        chart.draw();
                                        var theOddOnes = document.getElementsByClassName('anychart-credits');
                                        for(var i=0; i<theOddOnes.length; i++){
                                            document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                        }
                                    });
                                @elseif($dataSSC[0]->track == 'Engineering')
                                    anychart.onDocumentReady(function () {
                                        var dataAcademic = anychart.data.set([
                                            ["English", "{{ ($dataSSC[0]->english/150)*100}}"],
                                            ["Urdu", "{{ ($dataSSC[0]->urdu/150)*100 }}"],
                                            ["Islamiyat Ethics", "{{ ($dataSSC[0]->islamiyat_Ethics/75)*100 }}"],
                                            ["Pakistan Studies", "{{ ($dataSSC[0]->pakistan_Studies/75)*100 }}"],
                                            ["Mathematics", "{{ ($dataSSC[0]->mathematics/150)*100 }}"],
                                            ["Physics", "{{ ($dataSSC[0]->physics/150)*100 }}"],
                                            ["Chemistry", "{{ ($dataSSC[0]->chemistry/150)*100 }}"],
                                            ["Computer", "{{ ($dataSSC[0]->computer/150)*100 }}"]
                                        ]);
                                        // create a chart
                                        var chart = anychart.bar();
                                        // create a bar series and set the dataAcademic
                                        var series = chart.bar(dataAcademic);
                                        chart.title("SSC: Matric - Engineering");
                                        // set the titles of the axes
                                        chart.xAxis().title("Subjects");
                                        chart.yAxis().title("%");
                                        chart.animation(true, 800);
                                        // set the container id
                                        chart.container("container1");
                                        // initiate drawing the chart
                                        chart.draw();

                                        var theOddOnes = document.getElementsByClassName('anychart-credits');
                                        for(var i=0; i<theOddOnes.length; i++){
                                            document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                        }
                                    });

                                @elseif($dataSSC[0]->track == 'Humanities')
                                    anychart.onDocumentReady(function () {
                                        var dataAcademic = anychart.data.set([
                                            ["English", "{{ ($dataSSC[0]->english/150)*100}}"],
                                            ["Urdu", "{{ ($dataSSC[0]->urdu/150)*100 }}"],
                                            ["Islamiyat Ethics", "{{ ($dataSSC[0]->islamiyat_Ethics/75)*100 }}"],
                                            ["Pakistan Studies", "{{ ($dataSSC[0]->pakistan_Studies/75)*100 }}"],
                                            ["Mathematics", "{{ ($dataSSC[0]->mathematics/150)*100 }}"],
                                            ["General Sciences", "{{ ($dataSSC[0]->general_sciences/150)*100 }}"],
                                            ["Economics", "{{ ($dataSSC[0]->economics/150)*100 }}"],
                                            ["Business Studies", "{{ ($dataSSC[0]->business_studies/150)*100 }}"]
                                        ]);
                                        // create a chart
                                        var chart = anychart.bar();
                                        // create a bar series and set the dataAcademic
                                        var series = chart.bar(dataAcademic);
                                        chart.title("SSC: Matric - Humanities");
                                        // set the titles of the axes
                                        chart.xAxis().title("Subjects");
                                        chart.yAxis().title("%");
                                        chart.animation(true, 800);
                                        // set the container id
                                        chart.container("container1");
                                        // initiate drawing the chart
                                        chart.draw();
                                        var theOddOnes = document.getElementsByClassName('anychart-credits');
                                        for(var i=0; i<theOddOnes.length; i++){
                                            document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                        }
                                    });

                                @endif
                            @elseif($dataAcademic[0]->ssc == 'olevels')
                                
                                var dataAcademic = [['',]];
                                @if($dataSSC[0]->art != 'null')
                                    dataAcademic.push(["Art", "{{$dataSSC[0]->art}}"]);
                                @endif
                                @if($dataSSC[0]->biology != 'null')
                                    dataAcademic.push(["Biology", "{{$dataSSC[0]->biology}}"]);
                                @endif
                                @if($dataSSC[0]->businessStudies != 'null')
                                    dataAcademic.push(["Business Studies", "{{$dataSSC[0]->businessStudies}}"]);
                                @endif
                                @if($dataSSC[0]->chemistry != 'null')
                                    dataAcademic.push(["Chemistry", "{{$dataSSC[0]->chemistry}}"]);
                                @endif
                                @if($dataSSC[0]->computerStudies != 'null')
                                    dataAcademic.push(["Computer Studies", "{{$dataSSC[0]->computerStudies}}"]);
                                @endif
                                @if($dataSSC[0]->economics != 'null')
                                    dataAcademic.push(["Economics", "{{$dataSSC[0]->economics}}"]);
                                @endif
                                @if($dataSSC[0]->englishLanguage != 'null')
                                    dataAcademic.push(["English Language", "{{$dataSSC[0]->englishLanguage}}"]);
                                @endif
                                @if($dataSSC[0]->islamiyat != 'null')
                                    dataAcademic.push(["Islamiyat", "{{$dataSSC[0]->islamiyat}}"]);
                                @endif
                                @if($dataSSC[0]->mathematicsAdditional != 'null')
                                    dataAcademic.push(["Mathematics Additional", "{{$dataSSC[0]->mathematicsAdditional}}"]);
                                @endif
                                @if($dataSSC[0]->mathematicsD != 'null')
                                    dataAcademic.push(["MathematicsD", "{{$dataSSC[0]->mathematicsD}}"]);
                                @endif
                                @if($dataSSC[0]->pakistanStudies != 'null')
                                    dataAcademic.push(["PakistanS Studies", "{{$dataSSC[0]->pakistanStudies}}"]);
                                @endif
                                @if($dataSSC[0]->religiousStudies != 'null')
                                    dataAcademic.push(["Religious Studies", "{{$dataSSC[0]->religiousStudies}}"]);
                                @endif
                                @if($dataSSC[0]->sociology != 'null')
                                    dataAcademic.push(["Sociology", "{{$dataSSC[0]->sociology}}"]);
                                @endif
                                @if($dataSSC[0]->urduFirstLanguage != 'null')
                                    dataAcademic.push(["uUrdu First Language", "{{$dataSSC[0]->urduFirstLanguage}}"]);
                                @endif
                                @if($dataSSC[0]->urduSecondLanguage != 'null')
                                    dataAcademic.push(["Urdu Second Language", "{{$dataSSC[0]->urduSecondLanguage}}"]);
                                @endif
                                anychart.onDocumentReady(function () {
                                    // create a chart
                                    var chart = anychart.bar();
                                    // create a bar series and set the dataAcademic
                                    var series = chart.bar(dataAcademic);
                                    chart.title("SSC: O-Levels");
                                    // set the titles of the axes
                                    chart.xAxis().title("Subjects");
                                    chart.yAxis().title("%");
                                    chart.animation(true, 800);
                                    // set the container id
                                    chart.container("container1");
                                    // initiate drawing the chart
                                    chart.draw();
                                    var theOddOnes = document.getElementsByClassName('anychart-credits');
                                    for(var i=0; i<theOddOnes.length; i++){
                                        document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                    }
                                });
                            @endif
                        @endif

                        @if($dataHSSC != '')
                            @if($dataAcademic[0]->hssc == 'hssc')
                                @if($dataHSSC[0]->track == 'Pre-Med')
                                    anychart.onDocumentReady(function () {
                                        var dataAcademic = anychart.data.set([
                                            ["English", "{{ ($dataHSSC[0]->english/200)*100}}"],
                                            ["Urdu", "{{ ($dataHSSC[0]->urdu/200)*100 }}"],
                                            ["Islamiyat_Ethics", "{{ ($dataHSSC[0]->islamiyat_Ethics/50)*100 }}"],
                                            ["Pakistan_Studies", "{{ ($dataHSSC[0]->pakistan_Studies/20)*100 }}"],
                                            ["Physics", "{{ ($dataHSSC[0]->physics/200)*100 }}"],
                                            ["Chemistry", "{{ ($dataHSSC[0]->chemistry/200)*100 }}"],
                                            ["Biology", "{{ ($dataHSSC[0]->biology/200)*100 }}"]
                                        ]);
                                        // create a chart
                                        var chart = anychart.bar();
                                        // create a bar series and set the dataAcademic
                                        var series = chart.bar(dataAcademic);
                                        chart.title("HSSC: Intermediate - Pre-Medical");
                                        // set the titles of the axes
                                        chart.xAxis().title("Subjects");
                                        chart.yAxis().title("%");
                                        chart.animation(true, 800);
                                        // set the container id
                                        chart.container("container2");
                                        // initiate drawing the chart
                                        chart.draw();
                                        var theOddOnes = document.getElementsByClassName('anychart-credits');
                                        for(var i=0; i<theOddOnes.length; i++){
                                            document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                        }
                                    });



                                @elseif($dataHSSC[0]->track == 'Pre-Engineering')
                                    anychart.onDocumentReady(function () {
                                        var dataAcademic = anychart.data.set([
                                            ["English", "{{ ($dataHSSC[0]->english/200)*100}}"],
                                            ["Urdu", "{{ ($dataHSSC[0]->urdu/200)*100 }}"],
                                            ["Islamiyat_Ethics", "{{ ($dataHSSC[0]->islamiyat_Ethics/50)*100 }}"],
                                            ["Pakistan_Studies", "{{ ($dataHSSC[0]->pakistan_Studies/50)*100 }}"],
                                            ["Mathematics", "{{ ($dataHSSC[0]->mathematics/200)*100 }}"],
                                            ["Physics", "{{ ($dataHSSC[0]->physics/200)*100 }}"],
                                            ["Chemistry", "{{ ($dataHSSC[0]->chemistry/200)*100 }}"],
                                        ]);
                                        // create a chart
                                        var chart = anychart.bar();
                                        // create a bar series and set the dataAcademic
                                        var series = chart.bar(dataAcademic);
                                        chart.title("HSSC: Intermediate - Pre-Engineering");
                                        // set the titles of the axes
                                        chart.xAxis().title("Subjects");
                                        chart.yAxis().title("%");
                                        chart.animation(true, 800);
                                        // set the container id
                                        chart.container("container2");
                                        // initiate drawing the chart
                                        chart.draw();
                                        
                                        var theOddOnes = document.getElementsByClassName('anychart-credits');
                                        for(var i=0; i<theOddOnes.length; i++){
                                            document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                        }
                                    });
                


                                @elseif($dataHSSC[0]->track == 'ICS')
                                    @if($dataHSSC[0]->physics != 'null')
                                        anychart.onDocumentReady(function () {
                                            var dataAcademic = anychart.data.set([
                                                ["English", "{{ ($dataHSSC[0]->english/200)*100}}"],
                                                ["Urdu", "{{ ($dataHSSC[0]->urdu/200)*100 }}"],
                                                ["Islamiyat_Ethics", "{{ ($dataHSSC[0]->islamiyat_Ethics/50)*100 }}"],
                                                ["Pakistan_Studies", "{{ ($dataHSSC[0]->pakistan_Studies/50)*100 }}"],
                                                ["Mathematics", "{{ ($dataHSSC[0]->mathematics/200)*100 }}"],
                                                ["Physics", "{{ ($dataHSSC[0]->physics/200)*100 }}"],
                                                ["Computer", "{{ ($dataHSSC[0]->computer/200)*100 }}"],
                                            ]);
                                            // create a chart
                                            var chart = anychart.bar();
                                            // create a bar series and set the dataAcademic
                                            var series = chart.bar(dataAcademic);
                                            chart.title("HSSC: Intermediate - ICS (Physics)");
                                            // set the titles of the axes
                                            chart.xAxis().title("Subjects");
                                            chart.yAxis().title("%");
                                            chart.animation(true, 800);
                                            // set the container id
                                            chart.container("container2");
                                            // initiate drawing the chart
                                            chart.draw();
                                            var theOddOnes = document.getElementsByClassName('anychart-credits');
                                            for(var i=0; i<theOddOnes.length; i++){
                                                document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                            }
                                        });
                                    @elseif($dataHSSC[0]->statistics != 'null')
                                        anychart.onDocumentReady(function () {
                                            var dataAcademic = anychart.data.set([
                                                ["English", "{{ ($dataHSSC[0]->english/200)*100}}"],
                                                ["Urdu", "{{ ($dataHSSC[0]->urdu/200)*100 }}"],
                                                ["Islamiyat_Ethics", "{{ ($dataHSSC[0]->islamiyat_Ethics/50)*100 }}"],
                                                ["Pakistan_Studies", "{{ ($dataHSSC[0]->pakistan_Studies/50)*100 }}"],
                                                ["Mathematics", "{{ ($dataHSSC[0]->mathematics/200)*100 }}"],
                                                ["Statistics", "{{ ($dataHSSC[0]->statistics/200)*100 }}"],
                                                ["Computer", "{{ ($dataHSSC[0]->computer/200)*100 }}"],
                                            ]);
                                            // create a chart
                                            var chart = anychart.bar();
                                            // create a bar series and set the dataAcademic
                                            var series = chart.bar(dataAcademic);
                                            chart.title("HSSC: Intermediate - ICS (Statistics)");
                                            // set the titles of the axes
                                            chart.xAxis().title("Subjects");
                                            chart.yAxis().title("%");
                                            chart.animation(true, 800);
                                            // set the container id
                                            chart.container("container2");
                                            // initiate drawing the chart
                                            chart.draw();
                                            var theOddOnes = document.getElementsByClassName('anychart-credits');
                                            for(var i=0; i<theOddOnes.length; i++){
                                                document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                            }
                                        });
                                    @elseif($dataHSSC[0]->economics != 'null')
                                        anychart.onDocumentReady(function () {
                                            var dataAcademic = anychart.data.set([
                                                ["English", "{{ ($dataHSSC[0]->english/200)*100}}"],
                                                ["Urdu", "{{ ($dataHSSC[0]->urdu/200)*100 }}"],
                                                ["Islamiyat_Ethics", "{{ ($dataHSSC[0]->islamiyat_Ethics/50)*100 }}"],
                                                ["Pakistan_Studies", "{{ ($dataHSSC[0]->pakistan_Studies/50)*100 }}"],
                                                ["Mathematics", "{{ ($dataHSSC[0]->mathematics/200)*100 }}"],
                                                ["Economics", "{{ ($dataHSSC[0]->economics/200)*100 }}"],
                                                ["Computer", "{{ ($dataHSSC[0]->computer/200)*100 }}"],
                                            ]);
                                            // create a chart
                                            var chart = anychart.bar();
                                            // create a bar series and set the dataAcademic
                                            var series = chart.bar(dataAcademic);
                                            chart.title("HSSC: Intermediate - ICS (Economics)");
                                            // set the titles of the axes
                                            chart.xAxis().title("Subjects");
                                            chart.yAxis().title("%");
                                            chart.animation(true, 800);
                                            // set the container id
                                            chart.container("container2");
                                            // initiate drawing the chart
                                            chart.draw();
                                            
                                            var theOddOnes = document.getElementsByClassName('anychart-credits');
                                            for(var i=0; i<theOddOnes.length; i++){
                                                document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                            }
                                        });
                                    @endif
                                @endif
                            @elseif($dataAcademic[0]->hssc == 'alevels')
                                var data2 = [['',]];
                                @if($dataHSSC[0]->accounting != 'null')
                                    data2.push(["Accounting", "{{$dataHSSC[0]->accounting}}"]);
                                @endif
                                @if($dataHSSC[0]->aICT != 'null')
                                    data2.push(["AICT", "{{$dataHSSC[0]->aICT}}"]);
                                @endif
                                @if($dataHSSC[0]->art != 'null')
                                    data2.push(["Art", "{{$dataHSSC[0]->art}}"]);
                                @endif
                                @if($dataHSSC[0]->biology != 'null')
                                    data2.push(["Biology", "{{$dataHSSC[0]->biology}}"]);
                                @endif
                                @if($dataHSSC[0]->businessStudies != 'null')
                                    data2.push(["Business Studies", "{{$dataHSSC[0]->businessStudies}}"]);
                                @endif
                                @if($dataHSSC[0]->chemistry != 'null')
                                    data2.push(["Chemistry", "{{$dataHSSC[0]->chemistry}}"]);
                                @endif
                                @if($dataHSSC[0]->computerScience != 'null')
                                    data2.push(["Computer Science", "{{$dataHSSC[0]->computerScience}}"]);
                                @endif
                                @if($dataHSSC[0]->economics != 'null')
                                    data2.push(["Economics", "{{$dataHSSC[0]->economics}}"]);
                                @endif
                                @if($dataHSSC[0]->englishLanguage != 'null')
                                    data2.push(["English Language", "{{$dataHSSC[0]->englishLanguage}}"]);
                                @endif
                                @if($dataHSSC[0]->englishLiterature != 'null')
                                    data2.push(["English Literature", "{{$dataHSSC[0]->englishLiterature}}"]);
                                @endif
                                @if($dataHSSC[0]->environmentalManagement != 'null')
                                    data2.push(["Environmental Management", "{{$dataHSSC[0]->environmentalManagement}}"]);
                                @endif
                                @if($dataHSSC[0]->globalPerspectives != 'null')
                                    data2.push(["Global Perspectives", "{{$dataHSSC[0]->globalPerspectives}}"]);
                                @endif
                                @if($dataHSSC[0]->governmentPolitics != 'null')
                                    data2.push(["Government Politics", "{{$dataHSSC[0]->governmentPolitics}}"]);
                                @endif
                                @if($dataHSSC[0]->history != 'null')
                                    data2.push(["History", "{{$dataHSSC[0]->history}}"]);
                                @endif
                                @if($dataHSSC[0]->law != 'null')
                                    data2.push(["Law", "{{$dataHSSC[0]->law}}"]);
                                @endif
                                @if($dataHSSC[0]->mathematics != 'null')
                                    data2.push(["Mathematics", "{{$dataHSSC[0]->mathematics}}"]);
                                @endif
                                @if($dataHSSC[0]->mathematicsFurther != 'null')
                                    data2.push(["Mathematics Further", "{{$dataHSSC[0]->mathematicsFurther}}"]);
                                @endif
                                @if($dataHSSC[0]->mediaStudies != 'null')
                                    data2.push(["Media Studies", "{{$dataHSSC[0]->mediaStudies}}"]);
                                @endif
                                @if($dataHSSC[0]->physics != 'null')
                                    data2.push(["Physics", "{{$dataHSSC[0]->physics}}"]);
                                @endif
                                @if($dataHSSC[0]->psychology != 'null')
                                    data2.push(["Psychology", "{{$dataHSSC[0]->psychology}}"]);
                                @endif
                                @if($dataHSSC[0]->sociology != 'null')
                                    data2.push(["Sociology", "{{$dataHSSC[0]->sociology}}"]);
                                @endif
                                @if($dataHSSC[0]->urdu != 'null')
                                    data2.push(["Urdu", "{{$dataHSSC[0]->urdu}}"]);
                                @endif
                                anychart.onDocumentReady(function () {
                                    // create a chart
                                    var chart2 = anychart.bar();
                                    // create a bar series and set the data2
                                    var series = chart2.bar(data2);
                                    chart2.title("HSSC: A-Levels");
                                    // set the titles of the axes
                                    chart2.xAxis().title("Subjects");
                                    chart2.yAxis().title("%");
                                    chart2.animation(true, 800);
                                    // set the container id
                                    chart2.container("container2");
                                    // initiate drawing the chart
                                    chart2.draw();
                                    var theOddOnes = document.getElementsByClassName('anychart-credits');
                                    for(var i=0; i<theOddOnes.length; i++){
                                        document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                    }
                                });
                            @endif
                        @endif

                        //selection
                        @if($subject != '')
                            anychart.onDocumentReady(function () {
                                var dataSelection;
                                var dataSelection = [
                                    {x: 'Analytical', value: {{$Analytical}}},
                                    {x: 'English', value: {{$English}}},
                                    {x: 'Quantitative', value: {{$Quantitative}}},
                                ];

                                if("{{$subject}}" == "NAT-IE"){
                                    var dataSelection2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Physics', value: {{$subjectScore1}}},
                                        {x: 'Chemistry', value: {{$subjectScore2}}},
                                        {x: 'Maths', value: {{$subjectScore3}}},
                                    ];
                                    dataSelection = dataSelection2;
                                }
                                else if("{{$subject}}" == 'NAT-IM'){
                                    var dataSelection2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Physics', value: {{$subjectScore1}}},
                                        {x: 'Chemistry', value: {{$subjectScore2}}},
                                        {x: 'Bio', value: {{$subjectScore3}}},
                                    ];
                                    dataSelection = dataSelection2;
                                }
                                else if("{{$subject}}" == 'NAT-ICS'){
                                    var dataSelection2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Physics', value: {{$subjectScore1}}},
                                        {x: 'Computer', value: {{$subjectScore2}}},
                                        {x: 'Maths', value: {{$subjectScore3}}},
                                    ];
                                    dataSelection = dataSelection2;
                                }
                                else if("{{$subject}}" == 'NAT-IGS'){
                                    var dataSelection2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Maths', value: {{$subjectScore1}}},
                                        {x: 'Statistics', value: {{$subjectScore2}}},
                                        {x: 'Economics', value: {{$subjectScore3}}},
                                    ];
                                    dataSelection = dataSelection2;
                                }
                                else if("{{$subject}}" == 'NAT-ICOM'){
                                    var dataSelection2 = [
                                        {x: 'Analytical', value: {{$Analytical}}},
                                        {x: 'English', value: {{$English}}},
                                        {x: 'Quantitative', value: {{$Quantitative}}},
                                        {x: 'Accounting', value: {{$subjectScore1}}},
                                        {x: 'Commerce', value: {{$subjectScore2}}},
                                        {x: 'Economics', value: {{$subjectScore3}}},
                                    ];
                                    dataSelection = dataSelection2;
                                }


                                // create a chart
                                var chart = anychart.pareto(dataSelection);

                                // get the column series and format tooltip
                                chart.getSeriesAt(0).tooltip().format("Score: {%value}");

                                // get the line series and format tooltip
                                chart.getSeriesAt(1).tooltip().format("Cumulative Weight: {%CF}");

                                // set the chart title
                                chart.title("{{$subject}}" + " Total:" + "{{$dataSelection[0]->result}}" + "/" + "{{$dataSelection[0]->total}}");

                                chart.animation(true, 800);

                                // set the container id
                                chart.container("container3");

                                // initiate drawing the chart
                                chart.draw();

                                var theOddOnes = document.getElementsByClassName('anychart-credits');
                                for(var i=0; i<theOddOnes.length; i++){
                                    document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                }
                            });


                        @else
                            anychart.onDocumentReady(function () {

                                var dataSelection = [
                                    {x: 'Analytical', value: {{$Analytical}}},
                                    {x: 'English', value: {{$English}}},
                                    {x: 'Quantitative', value: {{$Quantitative}}},
                                    {x: 'Subject I', value: {{$subjectScore1}}},
                                    {x: 'Subject II', value: {{$subjectScore2}}},
                                    {x: 'Subject III', value: {{$subjectScore3}}},
                                ];



                                // create a chart
                                var chart = anychart.pareto(dataSelection);

                                // get the column series and format tooltip
                                chart.getSeriesAt(0).tooltip().format("Score: {%value}");

                                // get the line series and format tooltip
                                chart.getSeriesAt(1).tooltip().format("Cumulative Weight: {%CF}");

                                // set the chart title
                                chart.title("You Haven't Taken Any Test");

                                chart.animation(true, 800);

                                // set the container id
                                chart.container("container3");

                                // initiate drawing the chart
                                chart.draw();

                                var theOddOnes = document.getElementsByClassName('anychart-credits');
                                for(var i=0; i<theOddOnes.length; i++){
                                    document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                }
                            });

                        @endif

                        //diagnostic
                        anychart.onDocumentReady(function () {

                            // create a dataDiagnostic set
                            var dataDiagnostic = anychart.data.set([
                                ["Analytical", {{ $AnalyticalDiagnostic }}],
                                ["English", {{ $EnglishDiagnostic }}],
                                ["Quantitative", {{ $QuantitativeDiagnostic }}],
                                ["Physics", {{ $PhysicsDiagnostic }}],
                                ["Chem", {{ $ChemistryDiagnostic }}],
                                ["Maths", {{ $MathematicsDiagnostic }}],
                                ["Bio", {{ $BiologyDiagnostic }}],
                                ["Computer", {{ $ComputerDiagnostic }}],
                                ["Stats", {{ $StatisticsDiagnostic }}],
                                ["Eco", {{ $EconomicsDiagnostic }}],
                                ["Acc", {{ $AccountingDiagnostic }}],
                                ["Commerce", {{ $CommerceDiagnostic }}]
                            ]);




                            // create a chart
                            var chart = anychart.barmekko();

                            // create a bar series and set the dataDiagnostic
                            var series = chart.mekko(dataDiagnostic);

                            // set the chart title
                            chart.title("Your Average Scores");

                            chart.animation(true, 800);
                            series.name("Score");

                            // set the container id
                            chart.container("container4");

                            // initiate drawing the chart
                            chart.draw();
                            var theOddOnes = document.getElementsByClassName('anychart-credits');
                            for(var i=0; i<theOddOnes.length; i++){
                                document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                            }
                            });
                        anychart.onDocumentReady(function () {
                                // create data


                                var data = [
                                    {x: "Incorrect", value: 100-{{$EnglishDiagnostic}}},
                                    {x: "Correct", value: {{$EnglishDiagnostic}}},
                                ];

                                // create a pie chart and set the data
                                var chart = anychart.pie(data);

                                /* set the inner radius
                                (to turn the pie chart into a doughnut chart)*/
                                chart.innerRadius("35%");

                                // set the chart title
                                chart.title("Verbal Reasoning");

                                // set the container id
                                chart.container("container6");

                                // initiate drawing the chart
                                chart.draw();
                                var theOddOnes = document.getElementsByClassName('anychart-credits');
                                for(var i=0; i<theOddOnes.length; i++){
                                    document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                }
                            });
                        anychart.onDocumentReady(function () {
                                // create data


                                var data = [
                                    {x: "Incorrect", value: 100-{{$QuantitativeDiagnostic}}},
                                    {x: "Correct", value: {{$QuantitativeDiagnostic}}},
                                ];

                                // create a pie chart and set the data
                                var chart = anychart.pie(data);

                                /* set the inner radius
                                (to turn the pie chart into a doughnut chart)*/
                                chart.innerRadius("35%");

                                // set the chart title
                                chart.title("Quantitative  Reasoning");

                                // set the container id
                                chart.container("container7");

                                // initiate drawing the chart
                                chart.draw();
                                var theOddOnes = document.getElementsByClassName('anychart-credits');
                                for(var i=0; i<theOddOnes.length; i++){
                                    document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                }
                            });
                        anychart.onDocumentReady(function () {
                                // create data


                                var data = [
                                    {x: "Incorrect", value: 100-{{$AnalyticalDiagnostic}}},
                                    {x: "Correct", value: {{$AnalyticalDiagnostic}}},
                                ];

                                // create a pie chart and set the data
                                var chart = anychart.pie(data);

                                /* set the inner radius
                                (to turn the pie chart into a doughnut chart)*/
                                chart.innerRadius("35%");

                                // set the chart title
                                chart.title("Analytical  Reasoning");

                                // set the container id
                                chart.container("container8");

                                // initiate drawing the chart
                                chart.draw();
                                var theOddOnes = document.getElementsByClassName('anychart-credits');
                                for(var i=0; i<theOddOnes.length; i++){
                                    document.getElementsByClassName('anychart-credits')[i].style.visibility = 'hidden';
                                }
                        });

                        
                    
                    @endif

                    
                </script>

                
                <!-- script for sortable tables -->
                <script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js" defer></script>

                <!-- pdf -->
                @if (\Request::is('generate'))
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"
                    integrity="sha256-c9vxcXyAG4paArQG3xk6DjyW/9aHxai2ef9RpMWO44A=" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
                    <script src="{{URL::to('/')}}/html2pdf.bundle.min.js"></script>
                @endif
                

        </head>

        <body style="background-color:white" @if ( \Request::is("recommendations")) @endif class="page-header-fixed" @if ( \Request::is("diagnostic/*") || \Request::is('selection/*')) onbeforeunload=" return 'Are you really want to perform the action?'" @endif>

            @include('partials.analytics')


            <div class="clearfix"></div>

            <div class="page-content">

                @if(isset($siteTitle))
                    <h3 class="page-title">
                        {{ $siteTitle }}
                    </h3>
                @endif

                <div class="row"  style="padding-right: 0px">
                    <div class="col-md-12">

                        @if (Session::has('message'))
                            <div class="note note-info">
                                <p>{{ Session::get('message') }}</p>
                            </div>
                        @endif
                        @if ($errors->count() > 0)
                            <div class="note note-danger">
                                <ul class="list-unstyled">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @yield('content')

                    </div>
                </div>

            </div>  

            

            @include('partials.javascripts')
        </body>

    @else
        @guest
            <script>
                window.location = "/login";
            </script>
        @endguest
    @endif
</html>
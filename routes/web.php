<?php
Route::get('/', function () {
    /* return redirect('/home'); */
    return View::make('Index/index');
});
    

//crawler
Route::get('Crawler','CrawlerController@index');
Route::get('Crawler/Universities','CrawlerController@universities');
Route::get('Crawler/UniversitiesRank','CrawlerController@Rank');
Route::get('Crawler/UniversitiesCampuses','CrawlerController@universitiescampuses');

//ocr
Route::get('OCR','OcrController@index');
Route::get('OCR/UploadNew','OcrController@uploadNew');
Route::post('OCR/upload', 'OcrController@upload')->name('upload');
Route::get('OCR/Images','OcrController@images');
Route::post('OCR/Images/delete','OcrController@delete');
Route::post('OCR/Images/toggleRead','OcrController@toggleRead');
Route::get('OCR/Conversion','OcrController@Conversion');
Route::post('OCR/Conversion/Process','OcrController@process');
Route::post('OCR/Conversion/Process/Success','OcrController@processSuccess');

//Reported Questions 
Route::get('/report/{Qid}/{rMessage}','ReportController@store');
Route::get('/viewreports','ReportController@index');
Route::post('/updateReportstatus/{id}','ReportController@update');
Route::get('/suggestion/{sugcom}/{sugcomtext}','SuggestionController@store');
Route::get('/viewsuggestions','SuggestionController@index');
    //api
    Route::get('/report/{id}/{Qid}/{rMessage}','ReportController@APIstore');


//questions create
Route::get('questions/images/{option}', 'QuestionsController@images');
Route::get('questions/chooseImage', 'QuestionsController@chooseImage');
Route::get('questions/crop/{x}/{y}/{w}/{h}/{img}/{OCR_id}', 'QuestionsController@crop')->where('img', '(.*(?:%2F:)?.*)');;

//no use
Route::get('OCR/test','OcrController@test');

//personality
Route::get('personality', 'PersonalityController@index');
Route::get('personality/test', 'PersonalityController@test');
Route::post('personality/store', 'PersonalityController@store');
    //api
    Route::get('APIpersonality/test/{id}', 'PersonalityController@APItest');
    Route::post('APIpersonality/store', 'PersonalityController@APIstore');
    Route::get('APIPersonality/result/{id}', 'PersonalityController@APIPersonalityResult');

//diagnostic
Route::get('diagnostic', 'DiagnosticController@index');
Route::get('diagnostic/{subject}', 'DiagnosticController@test');
Route::post('diagnostic/store', 'DiagnosticController@store');
    //api
    Route::get('APIdiagnostic/test/{id}/{subject}', 'DiagnosticController@APItest');
    Route::post('APIdiagnostic/store', 'DiagnosticController@APIstore');
    Route::get('APIdiagnostic/result/{id}', 'DiagnosticController@APIDiagnosticResult');

//selection
Route::get('selection', 'SelectionController@index');
Route::get('selection/{category}', 'SelectionController@test');
Route::post('selection/store', 'SelectionController@store');
    //api
    Route::get('APIselection/test/{id}/{category}', 'SelectionController@APItest');
    Route::post('APIselection/store', 'SelectionController@APIstore');
    Route::get('APIselection/result/{id}', 'SelectionController@APISelectionResult');

//academics
Route::get('academics', 'AcademicsController@index');
Route::get('academics/ssc/matriculation/{track}', 'AcademicsController@matriculation');
Route::post('academics/ssc/matriculation/store', 'AcademicsController@matriculationStore');
Route::get('academics/hssc/intermediate/{track}', 'AcademicsController@intermediate');
Route::post('academics/hssc/intermediate/store', 'AcademicsController@intermediateStore');
Route::get('academics/ssc/olevels', 'AcademicsController@olevels');
Route::post('academics/ssc/olevels/store', 'AcademicsController@olevelsStore');
Route::get('academics/hssc/alevels', 'AcademicsController@alevels');
Route::post('academics/hssc/alevels/store', 'AcademicsController@alevelsStore');

//gettingstarted
Route::get("/gettingstarted", function(){
    return View::make("gettingstarted.gettingstarted");
});

//reportcard
Route::get('reportcard', 'ReportCardController@index');
    //api
    Route::get('APIreportcard/{id}', 'ReportCardController@APIindex');

//recommendation
Route::get('recommendations', 'RecommendationsController@index');
Route::get('generate', 'RecommendationsController@generate');
Route::get('pdf', 'RecommendationsController@pdf');
Route::get('/pdf2', function() {
    $html = view('index.perindex')->render();
    return PDF::load($html)->show();

});
    //api
    Route::get('APIrecommendations/{id}', 'RecommendationsController@APIindex');
    Route::get('APIgenerate/{id}', 'RecommendationsController@APIgenerate');


//frontend
Route::get('/UIdetails','CorelayerController@UIdetails');
Route::get('/UIdetails/action','CorelayerController@action')->name('UIdetails.action');
Route::get('/CPdetails/{id}','CorelayerController@CPdetails');
Route::get('/DPdetails/{id}','CorelayerController@DPdetails');
Route::get('/CPAll','CorelayerController@CPAll');
Route::get('/DPAll','CorelayerController@DPAll');
Route::get('per/test', 'PersonalityController@pertest');
Route::post('per/store', 'PersonalityController@perstore');
Route::get("/per", function(){
    return View::make("index.perindex");
});
Route::get("/about", function(){
    return View::make("index.about");
});
Route::get("/contact", function(){
    return View::make("index.contact");
});

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');
$this->get('oauth2google', 'Auth\Oauth2Controller@oauth2google')->name('oauth2google');
$this->get('googlecallback', 'Auth\Oauth2Controller@googlecallback')->name('googlecallback');
$this->get('oauth2facebook', 'Auth\Oauth2Controller@oauth2facebook')->name('oauth2facebook');
$this->get('facebookcallback', 'Auth\Oauth2Controller@facebookcallback')->name('facebookcallback');
$this->get('oauth2github', 'Auth\Oauth2Controller@oauth2github')->name('oauth2github');
$this->get('githubcallback', 'Auth\Oauth2Controller@githubcallback')->name('githubcallback');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('auth.register');
$this->post('register', 'Auth\RegisterController@register')->name('auth.register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('auth.password.email');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');


Route::group(['middleware' => 'auth'], function () {
    //dashboard home
    Route::get('/home', 'HomeController@index');
    
    //no use
    Route::resource('tests', 'TestsController');
    
    //user management
    Route::resource('roles', 'RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'UsersController');
    Route::post('users_mass_destroy', ['uses' => 'UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('user_actions', 'UserActionsController');
    
    //subjects
    Route::resource('topics', 'TopicsController');
    Route::post('topics_mass_destroy', ['uses' => 'TopicsController@massDestroy', 'as' => 'topics.mass_destroy']);
    
    //questions
    Route::resource('questions', 'QuestionsController');
    Route::post('questions_mass_destroy', ['uses' => 'QuestionsController@massDestroy', 'as' => 'questions.mass_destroy']);
    
    //questions options
    Route::resource('questions_options', 'QuestionsOptionsController');
    Route::post('questions_options_mass_destroy', ['uses' => 'QuestionsOptionsController@massDestroy', 'as' => 'questions_options.mass_destroy']);
    
    //test results
    Route::resource('results', 'ResultsController');
    Route::post('results_mass_destroy', ['uses' => 'ResultsController@massDestroy', 'as' => 'results.mass_destroy']);

    //universities
    Route::get('/University_views','UniversityController@index');
    Route::get('University_views/Unicreate','UniversityController@create');
    Route::get('/Uni_edit/{Uni_id}','UniversityController@edit');
    Route::post('/Uni_update/{Uni_id}','UniversityController@update');
    Route::get('/Delete/{Uni_id}','UniversityController@destroy');
    Route::post('/University_Store','UniversityController@store');
    Route::post('/University_Store_Rank','UniversityController@storeRank');
    Route::get('/Universities', 'UniversitiesSearch@index');
    Route::get('/Universities/action', 'UniversitiesSearch@action')->name('index.action');
    
    //profile
    Route::get('profile', 'ProfileController@index');
    Route::post('profile/store', 'ProfileController@store');
    Route::get('profile/password', 'ProfileController@password');
    Route::post('/profile/password/check', 'ProfileController@passwordCheck');
    Route::get('/profile/photo', 'ProfileController@photo');
    Route::post('/profile/photo/save', 'ProfileController@photoSave');
    
    //departments
    Route::get('/Department_views','DepartmentController@index');
    Route::get('/Department_views/Depcreate','DepartmentController@create');
    Route::get('/Dep_edit/{id}','DepartmentController@edit');
    Route::post('/Dep_update/{id}','DepartmentController@update');
    Route::delete('/Dep_Delete/{id}','DepartmentController@destroy');
    Route::post('/Department_Store','DepartmentController@store');
    Route::get('/Dep_edit_request/{id}','DepartmentController@edit_request');
    Route::post('/Dep_update_request/{id}','DepartmentController@update_request');
    Route::get('/Department/{id}','DepartmentController@edit');

    //cities
    Route::post('/City_Store','CityController@store');
    Route::get('/City_views','CityController@index');
    Route::get('/City_views/Citycreate','CityController@create');
    Route::get('/City_edit/{id}','CityController@edit');
    Route::post('/City_update/{id}','CityController@update');
    Route::get('/City_edit_request/{id}','CityController@edit_request');
    Route::post('/City_update_request/{id}','CityController@update_request');
    Route::delete('/City_Delete/{id}','CityController@destroy');
    Route::get('/Campus/{id}','CityController@edit');

    //corelayer
    Route::get('/CorelayerController/{id}','CorelayerController@show');
    Route::get('/CorelayerController_Dep/{id}','CorelayerController@show_departments');
    Route::get('/dashboard','CorelayerController@dashboard');


    

});

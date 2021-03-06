<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('logout', function(){
    Auth::logout();
    return redirect('login');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'company'], function () {
    Route::get('/', function() { return view('company'); });
    Route::get('data', 'CompanyController@data');
});

Route::group(['prefix' => 'plant'], function () {
    Route::get('/', function() { return view('plant'); });
    Route::get('data', 'PlantController@data');
});

Route::group(['prefix' => 'plantsection'], function () {
    Route::get('/', function() { return view('plantsection'); });
    Route::get('data', 'PlantSectionController@data');
});

Route::group(['prefix' => 'plantsubsection'], function () {
    Route::get('/', function() { return view('plantsubsection'); });
    Route::get('data', 'PlantSubSectionController@data');
});

Route::group(['prefix' => 'equipment'], function () {
    Route::get('/', function() { return view('equipment'); });
    Route::get('data', 'EquipmentController@data');
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/', function() { return view('user'); });
    Route::get('data', 'UserController@data');
});

Route::group(['prefix' => 'ast'], function () {
    Route::get('/', function() { return view('analysis_ast'); });
    Route::get('data', 'AnalysisASTController@data');
});

Route::group(['prefix' => 'pv'], function () {
    Route::get('/', function() { return view('analysis_pv'); });
    Route::get('data', 'AnalysisPVController@data');
});

Route::group(['prefix' => 'piping'], function () {
    Route::get('/', function() { return view('analysis_piping'); });
    Route::get('data', 'AnalysisPipingController@data');
});

Route::group(['prefix' => 'he'], function () {
    Route::get('/', function() { return view('analysis_he'); });
    Route::get('data', 'AnalysisHEController@data');
});

Route::group(['prefix' => 'prd'], function () {
    Route::get('/', function() { return view('analysis_prd'); });
    Route::get('data', 'AnalysisPRDController@data');
});

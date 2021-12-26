<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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



Auth::routes();

 Route::middleware(['guest'])->group(function () {

    Route::get('/', function () {

        return view('auth.login');

    });

});

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth' ]
    ], function(){

        Route::get('/dashboard', 'HomeController@index')->name('dashboard');

        Route::resource('Grades', 'Grade\GradeController');



         //==============================Classrooms============================
        Route::group(['namespace' => 'Classroom'], function () {
             Route::resource('Classrooms', 'ClassroomController');
             Route::post('delete_all', 'ClassroomController@delete_all')->name('delete_all');

             Route::post('Filter_Classes', 'ClassroomController@Filter_Classes')->name('Filter_Classes');

         });

     //==============================Sections============================

     Route::group(['namespace' => 'Sections'], function () {

        Route::resource('Sections', 'SectionController');

        Route::get('/classes/{id}', 'SectionController@getclasses');

        });

     //==============================parents============================

        Route::view('add_parent','livewire.show_Form');

     //==============================Teachers============================
     Route::group(['namespace' => 'Teachers'], function () {
        Route::resource('Teachers', 'TeacherController');
    });

    });



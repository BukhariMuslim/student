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

Route::resource('/student', 'StudentController');

Route::resource('/instructor', 'InstructorController');

Route::resource('/course', 'CourseController');

Route::resource('/payment', 'PaymentController');

Route::get('/other/getTotalStudentWithCourse', 'StudentController@getTotalStudentWithCourse')
    ->name('getTotalStudentWithCourse');

Route::get('/other/getFemaleInstructor', 'InstructorController@getFemaleInstructor')
    ->name('getFemaleInstructor');

Route::get('/other/inActiveStudent', 'StudentController@inActiveStudent')
    ->name('inActiveStudent');

Route::get('/other/enrollMoreThanTwo', 'StudentController@enrollMoreThanTwo')
    ->name('enrollMoreThanTwo');

Route::get('/other/totalPayment', 'StudentController@totalPayment')
    ->name('totalPayment');

Route::get('/other/haventPaid', 'StudentController@haventPaid')
    ->name('haventPaid');

Route::get('/other/highestPayment', 'StudentController@highestPayment')
    ->name('highestPayment');

Route::get('/other', function () {
    return view('other.index');
})->name('other');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

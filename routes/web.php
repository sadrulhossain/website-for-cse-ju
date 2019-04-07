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

//User route group
Route::group(['namespace' => 'user'], 
	function(){
		Route::get('/', 'cseController@index')->name('csehome');
		Route::resource('teachers', 'teachersController');
		Route::get('staffs', 'staffsController@index')->name('staffs');
                Route::get('syllabus', 'syllabusController@index')->name('syllabus');
                Route::post('syllabus/show', 'syllabusController@show')->name('syllabus.show');
                Route::get('journal', 'journalController@index')->name('journal');
                Route::get('pmscs', 'pmscsController@index')->name('pmscs');
                Route::get('notices', 'noticeController@index')->name('notices');
                Route::get('events', 'eventController@index')->name('events');
                Route::get('events/{event}', 'eventController@view')->name('view_event');
                Route::get('newslist', 'newsController@index')->name('news_all');


});

//Admin route group
Route::group(['namespace' => 'admin'], 
	function(){
        Route::get('admin/home', 'homeController@index')->name('admin.dashboard');
        Route::resource('admin/notice', 'noticeController');
        Route::resource('admin/event', 'eventController');
        Route::resource('admin/news', 'newsController');
        Route::resource('admin/course', 'courseController');

        Route::group(['namespace' => 'admin'],
                function(){
                        Route::resource('admin/admin_teacher', 'teacherController');
                        Route::resource('admin/admin_education', 'educationController');
                        Route::resource('admin/admin_experience', 'experienceController');
                        Route::resource('admin/admin_journal', 'journalController');
                });

        Route::resource('teacher/teacher', 'teachercontroller');
        Route::resource('teacher/education', 'educationController');
        Route::resource('teacher/experience', 'experienceController');
        Route::resource('teacher/journal', 'journalController');

        Route::resource('admin/staff', 'staffController');


        Route::resource('admin/admin_register', 'registerController');
});


Auth::routes();

Route::group(['namespace' => 'admin\Auth'], 
function(){
        Route::get('admin', 'LoginController@showLoginForm')->name('admin.login');
        Route::post('admin', 'LoginController@Login');
        Route::get('admin-password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
        Route::post('admin-password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
        Route::get('admin-password/reset/{token}', 'ResetPasswordController@showResetForm')->name('admin.password.reset');
        Route::post('admin-password/reset', 'ResetPasswordController@reset');
});


//Route::get('/home', 'HomeController@index')->name('home');


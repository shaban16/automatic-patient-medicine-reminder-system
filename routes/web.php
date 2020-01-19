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

Route::get('/','DashboardController@index');

Route::resource('/diabetic_medicine','DiabeticMedicineController');

Route::resource('/diabetic_food','DiabeticFoodController');

Route::resource('/heart_medicine','HeartMedicineController');

Route::resource('/heart_food','HeartFoodController');

Route::resource('/patient_detail','PatientDetailController');

Route::resource('/schedule','ScheduleController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


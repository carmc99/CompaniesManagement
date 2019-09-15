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

Route::get('/home', 'HomeController@index')->name('home');

// Autentificacion
Route::get("/", ["as" => "login.show", "uses"=>"Auth\LoginController@showLoginForm"]);
Route::post("/", ["as" => "login", "uses"=>"Auth\LoginController@login"]);
Route::post("logout", ["as" => "logout", "uses"=>"Auth\LoginController@logout"]);



// Arquitectura REST
// Empleado
Route::resource('employee', 'EmployeeController');
// Empresa
Route::resource('company', 'CompanyController');

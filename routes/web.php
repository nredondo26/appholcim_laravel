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

//Route::get('/', function () { return view('welcome');});

Route::get('/', function () {return view('index'); })->middleware('loging');
Route::get('welcome','AdminController@index');
/*Rutas del Login*/
Route::post('login', 'LoginController@login')->name('login');
Route::post('logout/', 'LoginController@logout')->name('logout');
/*Fin Rutas del Login*/

Route::get('certificados','AdminController@indexcertificados');
Route::get('insert_certificados','AdminController@insert_certificados'); 
Route::post('r-certificados','AdminController@strorecertificados'); 

Route::get('cursos','AdminController@indexcursos');
Route::get('insert_cursos','AdminController@insert_cursos');
Route::post('r-cursos','AdminController@strorecursos'); 

Route::get('alumnos','AdminController@indexalumnos'); 
Route::get('insert_alumnos','AdminController@insert_alumnos'); 
Route::post('r-alumnos','AdminController@strorealumnos'); 

Route::get('perfil', 'AdminController@perfil');
Route::post('u-perfil', 'AdminController@updateperfil');

Route::post('generarcertificado', 'CertificadoController@generarcertificado');
Route::get('consultaralumno', 'CertificadoController@consultaralumno');

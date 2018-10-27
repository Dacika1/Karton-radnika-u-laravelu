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

Route::get('/', 'HomeController@index')->name('home');

Route::get('podaci/delete/{id}','PodaciController@destroy')->name('podaciDelete');
Route::resource('podaci','PodaciController');
Route::resource('skolovanje','SkolovanjeController');
Route::post('izmeni','SkolovanjeController@update');
Route::resource('poslediplomske','PoslediplomskeController');
Route::resource('master','MasterController');
Route::resource('magistarske','MagistarskeController');
Route::resource('doktorske','DoktorskeController');
Route::resource('izborno','IzbornoController');
Route::resource('boravci','BoravciController');
Route::resource('jezik','JezikController');
Route::resource('biografija','BiografijaController');
Route::resource('citiranost','CitiranostController');
Route::resource('saradnja','SaradnjaController');
Route::resource('recenzije','RecenzijeController');
Route::resource('nastavni','NastavniController');
Route::resource('sadasnji','SadasnjiController');
Route::resource('rukovodjenje','RukovodjenjeController');
Route::resource('mentor','MentorController');
Route::resource('predhodni','PredhodniController');
Route::resource('kursevi','KurseviController');
Route::resource('odrzavanje','OdrzavanjeController');
Route::resource('priznanja','PriznanjaController');
Route::post('izmeni','PriznanjaController@update');
Route::resource('finansiraMinistarstvo','FinansiraMinistarstvoController');
Route::resource('medjunarodni','MedjunarodniController');
Route::get('profil','SlikaController@index');
Route::post('profil','SlikaController@store');
Route::resource('casopis','CasopisController');
Route::resource('casopis1','Caspois1Contoller');
Route::get('/search','CasopisController@search');
Route::get('provereno/{casopis}','CasopisController@finish')->name('casopis.finish');
Route::resource('casopis2','Casopis2Controller');
Route::resource('casopis3','Casopis3Controller');
Route::resource('casopis4','Casopis4Controller');
Route::resource('casopis5','Casopis5Controller');
Route::resource('casopis6','Casopis6Controller');
Route::resource('casopis7','Casopis7Controller');
Route::resource('casopis8','Casopis8Controller');
Route::resource('casopis9','Casopis9Controller');
Route::resource('casopis10','Casopis10Controller');





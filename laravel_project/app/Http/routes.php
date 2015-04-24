<?php

//use Illuminate\Html\FormFacade;

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */


Route::get('show', 'HomeController@show');
Route::get('show#contact', ['as' => 'contact', 'uses' => 'HomeController@show']);
Route::post('contact', ['as' => 'contact_store', 'uses' => 'HomeController@store']);
//Route::get('/', function() {

  //  return view('home');
//});
Route::post('/language', array(
    'before' => 'csrf',
    'as' => 'language-chooser',
    'uses' => 'LanguageController@chooser'
    
));







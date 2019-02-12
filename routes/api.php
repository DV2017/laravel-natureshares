<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//   return $request->user();
// });

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');

Route::group(['middleware' => 'auth:api'], function () {
  Route::post('user', 'UserController@show');
  Route::post('logout', 'UserController@logout');
});

/**
 * user authorization via middleware
 * to do custom guards
 */
Route::group(['middleware' => 'auth:api'], function () {
  Route::get('companies', 'Api\CompanyController@index');
  Route::get('companies/{company}', 'Api\CompanyController@show');
  Route::get('companies/{company}/projects', 'Api\CompanyController@projects');

  Route::get('projects', 'Api\ProjectController@index');
  Route::get('projects/{project}', 'Api\ProjectController@show');
  Route::get('projects/{project}/values', 'Api\ProjectController@values');

  Route::get('values', 'Api\ValueController@index');
  Route::get('values/{value}', 'Api\ValueController@show');
  Route::get('values/{value}/projects', 'Api\ValueController@projects');

  //for users to create their 'portfolio' of projects - mapped to middleware
  Route::post('projects/{project}/attach', 'Api\ProjectController@attach');
  Route::post('projects/{project}/detach', 'Api\ProjectController@detach');

  //for users to create their 'portfolio' of values -- mapped to middleware
  Route::post('values/{value}/attach', 'Api\ValueController@attach');
  Route::post('values/{value}/detach', 'Api\ValueController@detach');

  //attach projects to values and vice versa in a belongsToMany relationship
  Route::post('projects/{project}/attachValue/{value}', 'Api\ProjectValueController@attach');
  Route::post('projects/{project}/detachValue/{value}', 'Api\ProjectValueController@detach');
});


/**
 * user identified with role = host
 * To Do custom guards
 */
//For Hosts to modify company data
Route::group(['middleware' => 'auth:api'], function () {
  Route::post('companies', 'Api\CompanyController@store');
  Route::put('companies/{company}', 'Api\CompanyController@update');
  Route::delete('companies/{company}', 'Api\CompanyController@destroy');

//For Hosts to modify project data
  Route::post('projects', 'Api\ProjectController@store');
  Route::put('projects/{project}', 'Api\ProjectController@update');
  Route::delete('projects/{project}', 'Api\ProjectController@destroy');
});
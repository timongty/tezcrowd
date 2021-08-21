<?php

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

Route::get('/', ['uses' => 'PagesController@home'])->name('home');
Route::get('/about', ['uses' => 'PagesController@about'])->name('about');


Route::get('/projects', ['uses' => 'ProjectController@showAll'])->name('show_all_projects');
Route::get('/project/{id}', ['uses' => 'ProjectController@show'])->name('show_project');
Route::get('/start', ['uses' => 'ProjectController@create'])->name('create_project');

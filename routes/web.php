<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;

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

// Route::get('/', function () {
//     return view('login');
// });

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Auth::routes();

Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');

Auth::routes();
Route::get('/eventpage', [App\Http\Controllers\HomeController::class, 'eventpage'])->name('eventpage');
Route::get('/edit_report', [App\Http\Controllers\HomeController::class, 'edit_report'])->name('edit_report');
Route::get('/past_archives', [App\Http\Controllers\HomeController::class, 'past_archives'])->name('past_archives');
Route::get('/current_archives', [App\Http\Controllers\HomeController::class, 'current_archives'])->name('current_archives');
Route::get('/newReport', [App\Http\Controllers\HomeController::class, 'newReport'])->name('newReport');
Route::get('/all_agents', [App\Http\Controllers\HomeController::class, 'all_agents'])->name('all_agents');
Route::get('/one_agent', [App\Http\Controllers\HomeController::class, 'one_agent'])->name('one_agent');
Route::get('/all_users', [App\Http\Controllers\HomeController::class, 'all_users'])->name('all_users');
Route::get('/one_user', [App\Http\Controllers\HomeController::class, 'one_user'])->name('one_user');
Route::get('/agent_groups', [App\Http\Controllers\HomeController::class, 'agent_groups'])->name('agent_groups');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/statistics', [App\Http\Controllers\HomeController::class, 'statistics'])->name('statistics');

<?php

use App\Http\Controllers\ChangeLangController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SubscritionController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::view('/', 'menu.index');

Route::view('index', 'menu.index');

Route::view('aboutus', 'menu.aboutus');

Route::view('solutions', 'menu.solutions');

Route::view('sectors', 'menu.sectors');

Route::view('partners', 'menu.partners');

//Route::view('clients', 'menu.clients');
Route::get('clients', [ClientsController::class, 'index']);

Route::view('jobs', 'menu.jobs');
Route::view('jobs-details', 'jobs-details');

Route::get('job-application', [JobApplicationController::class, 'create']);
Route::post('job-application',[JobApplicationController::class, 'store']);

Route::view('news', 'menu.news');
Route::view('news-details', 'news-details');

Route::get('contactus', [ContactUsController::class, 'create']);
Route::post('contactus', [ContactUsController::class, 'store']);

Route::get('lang/{locale}', [ChangeLangController::class, 'changeLanguage'])->name('lang');

Route::post('/search',[NewsController::class, 'search'] )->name('search');

Route::get('/subscribe',[SubscritionController::class, 'create'] )->name('subscribe');
Route::post('/subscribe',[SubscritionController::class, 'store'] )->name('subscribe');



//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

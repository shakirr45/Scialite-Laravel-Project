<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;



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

Route::get('/', function () {
    return view('welcome');
});

route::get('/check', [HomeController::class, 'check'])->middleware(['auth', 'admin']); // admin check


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');


Route::group(['namespace' => 'App\Http\Controllers', 'middleware' =>'auth'], function(){

    route::get('/pages', [PageController::class, 'index'])->name('page.index');
    route::post('/page-insert', [PageController::class, 'pageInsert'])->name('page.insert');
    route::get('/page-view/{id}', [PageController::class, 'pageView'])->name('page.view');
    route::post('/page-post-store', [PageController::class, 'pagePostStore'])->name('page-post-store');






});













Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

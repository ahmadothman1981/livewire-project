<?php

use App\Http\Controllers\ProfileController;
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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
*/
//================FRONT ROUTES=================
Route::prefix('/')->name('front.')->group(function () {
    //INDEX PAGE
    Route::view('', 'front.index')->name('index');
    //ABOUT PAGE
    Route::view('/about', 'front.about')->name('about');
    //CONTACT PAGE
    Route::view('/contact', 'front.contact')->name('contact');
    //ProjectS PAGE
    Route::view('/projects', 'front.project')->name('projects');
    //Service Page
    Route::view('/services', 'front.service')->name('services');
    //Team Page
    Route::view('/team', 'front.team')->name('team');
    //TESTIMONIALS PAGE
    Route::view('/testimonials', 'front.testimonial')->name('testimonials');
});
//================ADMIN ROUTES=================
Route::prefix('/admin/')->name('admin.')->group(function () {
    Route::middleware('admin')->group(function () {
    //INDEX PAGE
    Route::view('/dashboard', 'admin.index')->name('index');
    //Setting PAGE
    Route::view('/setting', 'admin.setting.index')->name('setting');
    //skils PAGE
    Route::view('/skills', 'admin.skills.index')->name('skills');
    //Subscribe PAGE
    Route::view('/subscribe', 'admin.subscribers.index')->name('subscribers');
    //Counter PAGE
    Route::view('/counters', 'admin.counters.index')->name('counters');
    //Service PAGE
    Route::view('/services', 'admin.services.index')->name('services');
    //Message PAGE
    Route::view('/messages', 'admin.messages.index')->name('messages');
    //Category PAGE
    Route::view('/categories', 'admin.categories.index')->name('categories');
    });
    //login PAGE
    Route::view('/login', 'admin.auth.login')->middleware('guest:admin')->name('login');
});
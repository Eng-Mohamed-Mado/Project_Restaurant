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

Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::get('menu', function () {
    return view('home.menu');
})->name('menu');

Route::get('chefs', function () {
    return view('home.chefs');
})->name('chefs');

Route::get('about', function () {
    return view('home.about');
})->name('about');

Route::get('contact', function () {
    return view('home.contact');
})->name('contact');

Route::get('blog', function () {
    return view('home.blog');
})->name('blog');

Route::get('signin', function () {
    return view('home.signin');
})->name('signin');

Route::get('signup', function () {
    return view('home.signup');
})->name('signup');

Route::get('cart-view', function () {
    return view('home.cartView');
})->name('cart-view');

Route::get('faq', function () {
    return view('home.faq');
})->name('faq');

Route::get('menu-details', function () {
    return view('home.menuDetails');
})->name('menu-details');

Route::get('profile', function () {
    return view('home.profile');
})->name('profile');

Route::get('privacy-policy', function () {
    return view('home.privacyPolicy');
})->name('privacy-policy');

Route::get('checkout', function () {
    return view('home.checkOut');
})->name('checkout');

Route::get('payment', function () {
    return view('home.payment');
})->name('payment');

Route::get('blog-details', function () {
    return view('home.blogDetials');
})->name('blog-details');

Route::get('older-inovice', function () {
    return view('home.olderInvoice');
})->name('older-inovice');

// ======================== {Admin} ============================
Route::get('dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');


Route::get('employees', function () {
    return view('admin.employees');
})->name('employees');


Route::get('visitor', function () {
    return view('admin.visitor');
})->name('visitor');

Route::get('foods', function () {
    return view('admin.foods');
})->name('foods');

Route::get('older', function () {
    return view('admin.older');
})->name('older');

Route::get('book', function () {
    return view('admin.book');
})->name('book');

// ============= {Create Admin} ================

Route::get('create-foods', function () {
    return view('admin.createFoods');
})->name('create-foods');


Route::get('create-employees', function () {
    return view('admin.createEmp');
})->name('create-employees');


Route::get('create-older', function () {
    return view('admin.createOlder');
})->name('create-older');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile1', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile1', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile1', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
require __DIR__.'/auth.php';
<?php
use App\Http\Controllers\frontendController;

use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

 Route::middleware('auth')->group(function () {
     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');


// Route::get('index', function () {
//     return view('frontend.index');
// });
Route::get('blog', function () {
    return view('frontend.blog');
});
Route::get('portfolio', function () {
    return view('frontend.portfolio');
});
// Route::get('login', function () {
//     return view('frontend.login');
// });
// Route::get('signup', function () {
//     return view('frontend.signup');
// });
<?php

use App\Http\Controllers\AccurateController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

Route::get('/testing', [AccurateController::class, 'index'])->name('testing');

Route::get('/aol_back', [AccurateController::class, 'aolback'])->name('aol_back');

// Route::get('/auth/redirect', function () {
//     return Socialite::driver('aol')->redirect();
// });

// Route::get('/auth/callback', function () {
//     $user = Socialite::driver('aol')->user();
//     return $user;
// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

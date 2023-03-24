<?php

use App\Http\Controllers\HomeController;
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


Route::get('login', function () {
    return redirect('admin/login');
})->name('login');

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'home']);
Route::get('register', [HomeController::class, 'register']);
Route::post('register/store', [HomeController::class, 'storeRegister'])->name('register.store');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

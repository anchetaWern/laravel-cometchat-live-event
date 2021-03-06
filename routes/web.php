<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EventsManagementController;
use App\Http\Controllers\EventsController;

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
Route::get('/', function() {
    App\Models\User::create([
        'cometchat_user_id' => 'afsfs',
        'name' => 'yoh',
        'email' => 'yoh@gmail.com',
        'password' => bcrypt('kasejin'),
    ]);
    return 'ok';
});

Route::get('/events/create', [EventsManagementController::class, 'index']);
Route::post('/events/create', [EventsManagementController::class, 'create']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'create']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('/events', [EventsController::class, 'index']);
    Route::get('/event/{id}', [EventsController::class, 'detail']);
});

<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Modules\Core\Http\Controllers\CoreController;
use Modules\Auth\Http\Controllers\AuthController;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\User\Http\Controllers\UserController;

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

Route::get('/', [CoreController::class,'index'], ['canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),])->name('index');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

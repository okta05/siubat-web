<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\superadmin\UserController;
use App\Http\Controllers\Backend\SuperAdmin\EventController;
use App\Http\Controllers\Backend\SuperAdmin\BerandaController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;


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

Route::get('/dashboard', function () {
    // return view('dashboard');
    return view('backend.superadmin.index');
})->middleware(['auth', 'verified', 'disable_back'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::middleware('auth', 'ceklevel:superadmin')->group(function () {
Route::get('/viewUser', [UserController::class, 'viewUser'])->name('view_user');
Route::get('/addUser', [UserController::class, 'addUser'])->name('user.add');
Route::post('/userStore', [UserController::class, 'storeUser'])->name('users.store');
});

Route::middleware('auth', 'ceklevel:superadmin, admin')->group(function () {
Route::get('/viewEvent', [EventController::class, 'viewEvent'])->name('view_event');
});

// Route::middleware('auth','ceklevel:superadmin')->group(function () {
//     Route::get('/halaman-user', [BerandaController::class, 'user'])->name('halaman-user');
//     Route::get('/halaman-event', [BerandaController::class, 'event'])->name('halaman-event');    
// });
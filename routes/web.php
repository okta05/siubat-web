<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\superadmin\UserController;
use App\Http\Controllers\Backend\SuperAdmin\AcaraController;
use App\Http\Controllers\Backend\SuperAdmin\UMKMController;
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
    // return view('welcome');

    return view('auth.login');
});

Route::get('/dashboard', function () {
    // return view('dashboard');
    return view('backend.superadmin.index');
})->middleware(['auth', 'verified', 'disable_back'])->name('dashboard');

Route::middleware('auth', 'ceklevel:superadmin,admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'view'])->name('profile.view');
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
Route::get('/edit/{id}', [UserController::class, 'UserEdit'])->name('users.edit');
Route::post('/update/{id}', [UserController::class, 'UserUpdate'])->name('users.update');
Route::get('/delete/{id}', [UserController::class, 'UserDelete'])->name('users.delete');
});

Route::middleware('auth', 'ceklevel:superadmin,admin')->group(function () {
Route::get('/view', [AcaraController::class, 'viewAcara'])->name('view_acara');
Route::get('/add', [AcaraController::class, 'addAcara'])->name('acara.add');
Route::post('/store', [AcaraController::class, 'storeAcara'])->name('acaras.store');
});

Route::middleware('auth', 'ceklevel:superadmin,admin')->group(function () {
    Route::get('/viewUMKM', [UMKMController::class, 'viewUMKM'])->name('view_umkm');
    Route::get('/addUMKM', [UMKMController::class, 'addUMKM'])->name('umkm.add');
    Route::post('/UMKMStore', [UMKMController::class, 'storeUMKM'])->name('umkms.store');
    Route::get('/edit/umkm/{id}', [UMKMController::class, 'UMKMEdit'])->name('umkm.edit');
    Route::post('/update/umkm/{id}', [UMKMController::class, 'UMKMUpdate'])->name('umkms.update');
    Route::get('/delete/umkm/{id}', [UMKMController::class, 'UMKMDelete'])->name('umkms.delete');
    });

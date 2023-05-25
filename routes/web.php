<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\superadmin\ProfileController;
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
    // return view('auth.login');
});

Route::middleware('auth','disable_back')->group(function () {
    Route::get('/login');
});

// Route::get('/dashboard', function () {
//   
//     return view('backend.superadmin.index');
// })->middleware(['auth', 'verified', 'disable_back'])->name('dashboard');

Route::middleware('auth',  'ceklevel:superadmin,admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'ProfilView'])->name('profile.view');
    Route::get('/profileEdit', [ProfileController::class, 'ProfilEdit'])->name('profile.edit');
});

Route::middleware('auth', 'verified', 'disable_back')->group(function () {
    Route::get('/dashboard', [BerandaController::class, 'beranda'])->name('dashboard');
});

require __DIR__.'/auth.php';

Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::middleware('auth', 'ceklevel:superadmin')->group(function () {
    Route::get('/user/view', [UserController::class, 'viewUser'])->name('view_user');
    Route::get('/user/add', [UserController::class, 'addUser'])->name('user.add');
    Route::post('/user/store', [UserController::class, 'storeUser'])->name('users.store');
    Route::get('/user/edit/{id}', [UserController::class, 'UserEdit'])->name('users.edit');
    Route::post('/user/update/{id}', [UserController::class, 'UserUpdate'])->name('users.update');
    Route::get('/user/delete/{id}', [UserController::class, 'UserDelete'])->name('users.delete');
});

Route::middleware('auth', 'ceklevel:superadmin,admin')->group(function () {
    Route::get('/view', [AcaraController::class, 'viewAcara'])->name('view_acara');
    Route::get('/event/add/', [AcaraController::class, 'addAcara'])->name('acara.add');
    Route::post('/event/store', [AcaraController::class, 'storeAcara'])->name('acaras.store');
    Route::get('/event/edit/{id}', [AcaraController::class, 'AcaraEdit'])->name('acaras.edit');
    Route::post('/event/update/{id}', [AcaraController::class, 'AcaraUpdate'])->name('acaras.update');
    Route::get('/event/delete/{id}', [AcaraController::class, 'AcaraDelete'])->name('acaras.delete');
});

Route::middleware('auth', 'ceklevel:superadmin,admin')->group(function () {
    Route::get('/UMKM/view', [UMKMController::class, 'viewUMKM'])->name('view_umkm');
    Route::get('/UMKM/add', [UMKMController::class, 'addUMKM'])->name('umkm.add');
    Route::post('/UMKM/store/', [UMKMController::class, 'storeUMKM'])->name('umkms.store');
    Route::get('/UMKM/edit/{id}', [UMKMController::class, 'UMKMEdit'])->name('umkm.edit');
    Route::post('/UMKM/update/{id}', [UMKMController::class, 'UMKMUpdate'])->name('umkms.update');
    Route::get('/UMKM/delete/{id}', [UMKMController::class, 'UMKMDelete'])->name('umkms.delete');
    });

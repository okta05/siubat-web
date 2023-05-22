<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\superadmin\UserController;
use App\Http\Controllers\Backend\SuperAdmin\AcaraController;
use App\Http\Controllers\Backend\SuperAdmin\UMKMController;
use App\Http\Controllers\Backend\superadmin\ProfileController;
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

require __DIR__.'/auth.php';

Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::middleware('auth', 'ceklevel:superadmin')->group(function () {
Route::get('/viewUser', [UserController::class, 'viewUser'])->name('view_user');
Route::get('/addUser', [UserController::class, 'addUser'])->name('user.add');
Route::post('/userStore', [UserController::class, 'storeUser'])->name('users.store');
Route::get('/edit/{id}', [UserController::class, 'UserEdit'])->name('users.edit');
Route::post('/update/{id}', [UserController::class, 'UserUpdate'])->name('users.update');
Route::get('/delete/user/{id}', [UserController::class, 'UserDelete'])->name('users.delete');
});

Route::middleware('auth', 'ceklevel:superadmin,admin')->group(function () {
Route::get('/view', [AcaraController::class, 'viewAcara'])->name('view_acara');
Route::get('/add', [AcaraController::class, 'addAcara'])->name('acara.add');
Route::post('/store', [AcaraController::class, 'storeAcara'])->name('acaras.store');
Route::get('/delete/event/{id}', [AcaraController::class, 'AcaraDelete'])->name('acaras.delete');
});

Route::middleware('auth', 'ceklevel:superadmin,admin')->group(function () {
    Route::get('/viewUMKM', [UMKMController::class, 'viewUMKM'])->name('view_umkm');
    Route::get('/addUMKM', [UMKMController::class, 'addUMKM'])->name('umkm.add');
    Route::post('/UMKMStore', [UMKMController::class, 'storeUMKM'])->name('umkms.store');
    Route::get('/edit/umkm/{id}', [UMKMController::class, 'UMKMEdit'])->name('umkm.edit');
    Route::post('/update/umkm/{id}', [UMKMController::class, 'UMKMUpdate'])->name('umkms.update');
    Route::get('/delete/umkm/{id}', [UMKMController::class, 'UMKMDelete'])->name('umkms.delete');
    });

    Route::middleware('auth', 'ceklevel:superadmin,admin')->group(function () {
        Route::get('/vieww', [ProfileController::class, 'profileView'])->name('profile.view');
        });

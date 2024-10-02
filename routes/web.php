<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\userController;
use App\Http\Controllers\domesticTransferController;
use App\Http\Controllers\localTranferController;
use App\Http\Controllers\InternationalTransferController;
use App\Http\Controllers\TransactionHistoryController;
use App\Http\Controllers\AccountStatementController;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\AccountSettingsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\uploadPassportController;
use App\Http\Controllers\AdminLoginController;


Route::get('/', function () {
    return Inertia::render('Auth/Login', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
    ]);
});
Route::post('/register', [userController::class, 'store']);
Route::post('/logout', [userController::class, 'logout']);
Route::post('/upload-passport', [uploadPassportController::class, 'store']);
Route::get('/admin-login', [AdminLoginController::class, 'index']);
Route::post('/admin-login', [AdminLoginController::class, 'loginAdmin'])->name('admin.login');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard/User');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(['middleware' => 'auth'], function() {
    Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::get('domestic-transfer', [domesticTransferController::class, 'index']);
    Route::get('local-transfer', [localTranferController::class, 'index']);
    Route::get('international-transfer', [InternationalTransferController::class, 'index']);
    Route::get('transaction-history', [TransactionHistoryController::class, 'index']);
    Route::get('account-statement', [AccountStatementController::class, 'index']);
    Route::get('my-profile', [MyProfileController::class, 'index']);
    Route::get('account-settings', [AccountSettingsController::class, 'index']);
    Route::get('contact-us', [ContactUsController::class, 'index']);
});
Route::group(['middleware' => 'auth'], function() {
//    Route::get('admin-login', [AdminLoginController::class, 'index'])->name('admin.login');
    Route::get('admin-dashboard', [AdminLoginController::class, 'authenticated'])->name('admin.dashboard');
    Route::get('view-user/{user_id}', [AdminLoginController::class, 'viewUser'])->name('user.edit');
    Route::post('update-account-balance/{user_id}', [AdminLoginController::class, 'updateUserAccount'])->name('user.account');

});

require __DIR__.'/auth.php';

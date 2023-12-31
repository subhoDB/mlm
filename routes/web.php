<?php

use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

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

// Route::get('register', function() {
//     return redirect(route('register'));
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/my-profile', function () {
        return view('account.my-profile');
    })->name('my-profile');
    Route::get('/my-bank', function () {
        return view('account.my-bank');
    })->name('my-bank');
    Route::get('/change-password', function () {
        return view('account.change-password');
    })->name('change-password');
    Route::get('/kyc-upload', function () {
        return view('account.kyc-upload');
    })->name('kyc-upload');

    Route::get('/add-member', function () {
        return view('member.add');
    })->name('member.create');

    Route::get('/member', [MemberController::class, 'index'])->name('member.index');
    Route::post('/member-store', [MemberController::class, 'store'])->name('member.store');
    Route::post('/member-update', [MemberController::class, 'update'])->name('member.update');
    Route::get('/member-show/{introducer_key}', [MemberController::class, 'show'])->name('member.show');
});

<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\MemberController;
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

Route::get('/dashboard  ', function () {
    return view('administrator/contents/dashboard');
});
// website
Route::get('/', function () {
    return view('website/website');
});
// login
Route::get('/login', function () {
    return view('administrator/auth/login');
});
// register
Route::get('/register', function () {
    return view('administrator/auth/register');
});
// forgot
Route::get('/forgot', function () {
    return view('administrator/auth/forgot');
});

// Jabatan
Route::get('jabatan', [JobController::class, 'index'])->name('jabatan');
// Route::post('category.store', [CategoryController::class, 'store'])->name('category.store');
// end Jabatan

// daftar anggota
Route::get('list_member', [MemberController::class, 'index'])->name('list_member');
Route::post('member.store', [MemberController::class, 'store'])->name('member.store');
// end daftar anggota
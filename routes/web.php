<?php

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

Route::get('/', function () {
    return view('index');
});


Route::get('/contact', [\App\Http\Controllers\ContactController::class,"index"])->name("contact");
Route::post('/contact', [\App\Http\Controllers\ContactController::class,"sendMail"])->name("sendMail");
Route::get('/contact/complete', [\App\Http\Controllers\ContactController::class,"complete"])->name("contact.complete");


Route::get('/admin/blogs', [\App\Http\Controllers\Admin\AdminBlogController::class,"index"])->name("admin.blogs.index");
Route::get('/admin/blogs/create', [\App\Http\Controllers\Admin\AdminBlogController::class,"create"])->name("admin.blogs.create");
Route::post('/admin/blogs/', [\App\Http\Controllers\Admin\AdminBlogController::class,"store"])->name("admin.blogs.store");
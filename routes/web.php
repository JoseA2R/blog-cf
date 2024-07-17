<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\XSSController;
use App\Http\Controllers\BlogController;
use App\Middleware\XSS;

Route::get('/', function () {
    return view('welcome');
});

/* Route::match(['get', 'post'], '/', function () {
    var_dump('hello');
    return view('welcome');
});

Route::get('blog/{id?}', function ($id = null) {
    return($id);
})->name('specific-blog');

Route::prefix('admin')->group(function () {
    Route::get('dashboard', function () {
        dump('Hello, Admin!');
    })->name('dashboard');

    Route::get('dashboard/admin', function () {
        return 'Admin dashboard';
    })->name('dashboard.admin');

    Route::prefix('users')->group(function () {
        Route::get('/', function () {
            return 'Users dashboard';
        })->name('users');

        Route::get('{id}/edit', function ($id) {
            return "Edit user with ID: $id";
        })->name('users.edit');
    });
});

Route::controller(TestController::class)->group(function () {
    Route::get('test','index');
    Route::get('test/{id}', 'show');
    Route::post('test', 'store')->name('test');
    Route::put('test/{id}', 'update');
    Route::delete('test/{id}', 'destroy');
});

Route::fallback(function () {
    return '404 Page Not Found';
}); */

Route::match(['get', 'post'], '/blog', [BlogController::class, 'index'])->name('blog');

Route::get('xss', [XssController::class, 'xss']);

Route::post('specific-post', [BlogController::class,'specificPost'])->name('specific-post');

Route::get('create-post', [BlogController::class, 'createPost'])->name('create');

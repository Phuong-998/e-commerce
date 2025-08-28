<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

Route::get('/admin/index', function () {
    return view('admin.layouts.layout');
})->name('admin.index');

Route::get('/admin/login', function () {
    return view('admin.login.index');
})->name('admin.login.form');

Route::post('/admin/login', [App\Http\Controllers\HomeController::class, 'login'])->name('admin.login');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\RoleUsers;

Route::get('/', function (){
    return view('admin.dashboard');
})->name('dashboard');

// gestión de roles
Route::resource('roles', RoleController::class);

// gestión de usuarios
Route::resource('users', RoleUsers::class);

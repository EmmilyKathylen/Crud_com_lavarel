<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get(uri:'/', action: [HomeController::class,'index'])->name(name: 'home');
//Route::get(uri:'/users', action: [UserController::class,'index'])->name(name:'users.index');
//Route::get(uri:'/users/create', action: [UserController::class,'create'])->name(name:'users.create');
//Route::post(uri:'/users', action: [UserController::class,'store'])->name(name:'users.store');
//Route::post(uri:'/users/{user}', action: [UserController::class,'show'])->name(name:'users.show');
//Route::get(uri:'/users/{user}/edit', action: [UserController::class,'edit'])->name(name:'users.edit');
//Route::put(uri:'/users/{user}', action: [UserController::class,'update'])->name(name:'users.update');
//Route::delete(uri:'/users/{user}', action: [userController::class,'destroy'])->name(name:'users.destroy');
Route:: resource('users', UserController::class);









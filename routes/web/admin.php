<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\Admin\FirstController;
use App\Http\Controllers\Admin\LastController;
use App\Http\Controllers\Admin\PanelController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SecondController;
use App\Http\Controllers\Admin\ThirdController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::namespace('')->group(function () {
    Route::get('/', [PanelController::class ,'index'])->name('panel');
    Route::resource('/products', ProductController::class);
    Route::resource('/categories', CategoryController::class);
    Route::patch('/categories/status/{category}', [CategoryController::class , "changeStatus"])->name('categories.changeStatus');
    Route::resource('/discounts', DiscountController::class);
    Route::resource('/first_banners', FirstController::class);
    Route::resource('/second_banners', SecondController::class);
    Route::resource('/third_banners', ThirdController::class);
    Route::resource('/last_banners', LastController::class);
    Route::resource('/users', UserController::class);
});

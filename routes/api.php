<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProductsController;
use App\Models\Products;

// Route lấy danh sách tất cả tài khoản, tôi  muốn tách biệt các route này với các route khác

Route::get('/accounts', [AccountController::class, 'index']);
    
// Route lấy thông tin một tài khoản

Route::get('/accounts/login', [AccountController::class, 'getAccount']);

// Route tạo mới một tài khoản
Route::post('/accounts/create', [AccountController::class, 'create']);

// Edit accounts
Route::Patch('/accounts/edit/{id}', [AccountController::class, 'update']);

Route::get('/accounts/products', [ProductsController::class, 'index']);
<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/info', [ApiController::class, 'info']);
Route::get('/usul', [ApiController::class, 'usul']);
Route::get('/faq', [ApiController::class, 'faq']);
Route::get('/sop', [ApiController::class, 'sop']);  
Route::get('/aturan', [ApiController::class, 'aturan']);
Route::post('/aturan/{id}',[ApiController::class, 'show']);
Route::post('/tambah-usul', [ApiController::class, 'store']);
Route::post('/tanya', [ApiController::class, 'tanya']);
Route::get('/cari',[ApiController::class, 'pencarian']);

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
  
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});
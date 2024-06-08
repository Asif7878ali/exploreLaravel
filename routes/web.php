<?php
use App\Http\Controllers\RouteController;
use App\Http\Controllers\UserController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', [RouteController::class ,'home']);
Route::get('/form', [RouteController::class, 'form'])->name('formpage');
Route::post('/register' , [UserController::class , 'store']);
Route::get('/view/data' , [UserController::class , 'view']);
Route::get('/delete/{id}' , [UserController::class , 'delete']);
Route::get('/edit/{id}' , [UserController::class , 'edit']);
Route::post('/update/{id}' , [UserController::class , 'update']);
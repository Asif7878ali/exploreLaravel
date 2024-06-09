<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//All UI Routes
Route::get('/', function() {
    return view('welcome');
});
Route::get('/form', function(){
    return view('form');
} );
//All Api Routes
Route::post('/register' , [UserController::class , 'store']);
Route::get('/view/data' , [UserController::class , 'view']);
Route::get('/delete/{id}' , [UserController::class , 'delete']);
Route::get('/edit/{id}' , [UserController::class , 'edit']);
Route::post('/update/{id}' , [UserController::class , 'update']);
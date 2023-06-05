<?php

use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/', function () {
    
    if(Auth::guest()){
        return Redirect::guest('login');
    }
    else{
        return Redirect::guest('admin/dashbaord');
    }
   

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::group(["middleware"=>"auth"],function(){

    Route::resource('admin/admin',UserController::class);
        

    Route::get('admin/dashbaord',function(){
        return view('admin.dashbaord');
    });

    
});



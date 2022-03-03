<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
USE App\Http\Controllers\Dashboard\Productcontroller;
use App\Http\Controllers\Dashboardcontroller;
use App\Http\Controllers\Dashboard\ProductController as DashboardProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('dashboard',Dashboardcontroller::class)->name('dashboard');

route::get('dashboard/products/index' , [Productcontroller::class,'index'])->name('dashboard.products.index');
route::get('dashboard/products/create' ,[Productcontroller::class ,'create'])->name('dashboard.products.create');
route::post('dashboard/products/store', [Productcontroller::class , 'store'])->name('dashboard.products.store');
Route::get('dashboard/products/edit/{id}' , [Productcontroller::class , 'edit'])->name('dashboard.products.edit');
Route::put('dashboard/products/update/{id}',[Productcontroller::class , 'update'])->name('dashboard.products.update');
route::delete('dashboard/products/destroy/{id}',[Productcontroller::class,'destroy'])->name('dashboard.products.destroy');
route::patch('dashboard/products/status/toggle{id}',[Productcontroller::class,'status toggle'])->name('dashboard.products.toggle');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

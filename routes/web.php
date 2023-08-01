<?php

use App\Http\Controllers\Admin\MainController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', [MainController::class, 'index'])->name('admin.main.index');

    Route::group(['namespace' => 'User', 'prefix'=>'users'], function (){
        Route::get('/', [\App\Http\Controllers\Admin\User\IndexController::class, 'index'])->name('admin.user.index');
        Route::get('/create', [\App\Http\Controllers\Admin\User\CreateController::class, 'index'])->name('admin.user.create');
        Route::post('/', [\App\Http\Controllers\Admin\User\StoreController::class, 'index'])->name('admin.user.store');
        Route::get('/{user}', [\App\Http\Controllers\Admin\User\ShowController::class, 'index'])->name('admin.user.show');
        Route::get('/{user}/edit', [\App\Http\Controllers\Admin\User\EditController::class, 'index'])->name('admin.user.edit');
        Route::patch('/{user}', [\App\Http\Controllers\Admin\User\UpdateController::class, 'index'])->name('admin.user.update');
        Route::delete('/{user}', [\App\Http\Controllers\Admin\User\DeleteController::class, 'index'])->name('admin.user.delete');
    });

    Route::group(['namespace' => 'Department', 'prefix'=>'departments'], function (){
        Route::get('/', [\App\Http\Controllers\Admin\Department\IndexController::class, 'index'])->name('admin.department.index');
        Route::get('/create', [\App\Http\Controllers\Admin\Department\CreateController::class, 'index'])->name('admin.department.create');
        Route::post('/', [\App\Http\Controllers\Admin\Department\StoreController::class, 'index'])->name('admin.department.store');
        Route::get('/{department}', [\App\Http\Controllers\Admin\Department\ShowController::class, 'index'])->name('admin.department.show');
        Route::get('/{department}/edit', [\App\Http\Controllers\Admin\Department\EditController::class, 'index'])->name('admin.department.edit');
        Route::patch('/{department}', [\App\Http\Controllers\Admin\Department\UpdateController::class, 'index'])->name('admin.department.update');
        Route::delete('/{department}', [\App\Http\Controllers\Admin\Department\DeleteController::class, 'index'])->name('admin.department.delete');
    });

    Route::group(['namespace' => 'Position', 'prefix'=>'positions'], function (){
        Route::get('/', [\App\Http\Controllers\Admin\Position\IndexController::class, 'index'])->name('admin.position.index');
        Route::get('/create', [\App\Http\Controllers\Admin\Position\CreateController::class, 'index'])->name('admin.position.create');
        Route::post('/', [\App\Http\Controllers\Admin\Position\StoreController::class, 'index'])->name('admin.position.store');
        Route::get('/{position}', [\App\Http\Controllers\Admin\Position\ShowController::class, 'index'])->name('admin.position.show');
        Route::get('/{position}/edit', [\App\Http\Controllers\Admin\Position\EditController::class, 'index'])->name('admin.position.edit');
        Route::patch('/{position}', [\App\Http\Controllers\Admin\Position\UpdateController::class, 'index'])->name('admin.position.update');
        Route::delete('/{position}', [\App\Http\Controllers\Admin\Position\DeleteController::class, 'index'])->name('admin.position.delete');
    });
});

<?php

use App\Http\Controllers\CarouselController;
use App\Http\Controllers\FrontendControllers;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VideoController;
use App\Models\Icone;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [FrontendControllers::class, 'home'])->name('home');


Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



// Carousels
Route::get('/admin/carousel', [CarouselController::class, 'index'])->name('carousel.index');
Route::get('admin/carousel/create', [CarouselController::class, 'create'])->name('carousel.create');
Route::post('admin/carousel/store', [CarouselController::class, 'store'])->name('carousel.store');
Route::delete('/admin/carousel/{id}/destroy', [CarouselController::class, 'destroy'])->name('carousel.destroy');
Route::get('/admin/carousel/{id}/edit', [CarouselController::class, 'edit'])->name('carousel.edit');
Route::put('/admin/carousel/{id}', [CarouselController::class, 'update'])->name('carousel.update');


// Services
Route::get('/admin/services', [ServiceController::class, 'index'])->name('service.index');
Route::get('admin/services/create', [ServiceController::class, 'create'])->name('service.create');
Route::post('admin/services/store', [ServiceController::class, 'store'])->name('service.store');
Route::delete('/admin/services/{id}/destroy', [ServiceController::class, 'destroy'])->name('service.destroy');
Route::get('/admin/services/{id}/edit', [ServiceController::class, 'edit'])->name('service.edit');
Route::put('/admin/services/{id}', [ServiceController::class, 'update'])->name('service.update');



// Services
Route::get('/admin/video', [VideoController::class, 'index'])->name('video.index');
Route::get('/admin/video/{id}/edit', [VideoController::class, 'edit'])->name('video.edit');
Route::put('/admin/video/{id}', [VideoController::class, 'update'])->name('video.update');
Route::get('/admin/video/{id}/show', [VideoController::class, 'show'])->name('video.show');

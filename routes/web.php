<?php

use App\Http\Controllers\CarouselController;
use App\Http\Controllers\FrontendControllers;
use App\Models\Icone;
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

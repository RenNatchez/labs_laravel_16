<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\BackController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContenuController;
use App\Http\Controllers\FrontendControllers;
use App\Http\Controllers\GooglemapsController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TESTController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\VerifController;
use App\Http\Controllers\VideoController;
use App\Models\Googlemaps;
use App\Models\Icone;
use App\Models\Newsletter;
use App\Models\Service;
use App\Models\Testimonial;
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
Route::get('/services', [FrontendControllers::class, 'services'])->name('services');
Route::get('/contact', [FrontendControllers::class, 'contact'])->name('contact');
Route::get('/blog', [FrontendControllers::class, 'blog'])->name('blog');

Route::get('/blog/post/{id}', [FrontendControllers::class, 'blogshow'])->name('blog.show'); 
Route::post('/blog/post/addcomment/{article}', [FrontendControllers::class, 'addcomment'])->name('blog.addcom'); 
Route::get('/blog/categorie/{id}', [FrontendControllers::class, 'categorie'])->name('categorie');
Route::get('/blog/tag/{id}', [FrontendControllers::class, 'tag'])->name('tag');
Route::get('/blog/recherche', [FrontendControllers::class, 'search'])->name('search');



require __DIR__.'/auth.php';

Route::get('/dashboard', [BackController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');
//Mail
Route::post('/mail', [FrontendControllers::class, 'mailling'])->name('mail');
Route::post('/mail/newsletter', [FrontendControllers::class, 'newsletter'])->name('newsletter');



Route::middleware('auth')->group(function() {
    Route::middleware('admin_redac')->group(function() {
        // articles
        Route::get('/admin/articles', [ArticlesController::class, 'index'])->name('articles.index');
        Route::get('admin/articles/create', [ArticlesController::class, 'create'])->name('articles.create');
        Route::post('admin/serviarticlesces/store', [ArticlesController::class, 'store'])->name('articles.store');
        Route::delete('/admin/articles/{id}/destroy', [ArticlesController::class, 'destroy'])->name('articles.destroy');
        Route::get('/admin/articles/{id}/edit', [ArticlesController::class, 'edit'])->name('articles.edit');
        Route::put('/admin/articles/{id}', [ArticlesController::class, 'update'])->name('articles.update');
        
        Route::middleware('admin')->group(function() {
            Route::get('/admin/articles/corbeille', [ArticlesController::class, 'corbeille'])->name('articles.corbeille');
            Route::put('/admin/articles/reset/{id}', [ArticlesController::class, 'reset'])->name('articles.reset');
                // Carousels
            Route::get('/admin/carousel', [CarouselController::class, 'index'])->name('carousel.index');
            Route::get('admin/carousel/create', [CarouselController::class, 'create'])->name('carousel.create');
            Route::post('admin/carousel/store', [CarouselController::class, 'store'])->name('carousel.store');
            Route::delete('/admin/carousel/{id}/destroy', [CarouselController::class, 'destroy'])->name('carousel.destroy');
            Route::get('/admin/carousel/{id}/edit', [CarouselController::class, 'edit'])->name('carousel.edit');
            Route::put('/admin/carousel/{id}', [CarouselController::class, 'update'])->name('carousel.update');
            // Contenus
            Route::get('/admin/contenus', [ContenuController::class, 'index'])->name('contenu.index');
            Route::get('/admin/contenus/site', [ContenuController::class, 'updatesite'])->name('contenu.update.site');
            Route::put('/admin/contenu/site', [ContenuController::class, 'editsite'])->name('contenu.edit.site');
            Route::get('/admin/contenus/contact', [ContenuController::class, 'updatecontact'])->name('contenu.update.contact');
            Route::put('/admin/contenu/contact', [ContenuController::class, 'editcontact'])->name('contenu.edit.contact');
            // Services
            Route::get('/admin/services', [ServiceController::class, 'index'])->name('service.index');
            Route::get('admin/services/create', [ServiceController::class, 'create'])->name('service.create');
            Route::post('admin/services/store', [ServiceController::class, 'store'])->name('service.store');
            Route::delete('/admin/services/{id}/destroy', [ServiceController::class, 'destroy'])->name('service.destroy');
            Route::get('/admin/services/{id}/edit', [ServiceController::class, 'edit'])->name('service.edit');
            Route::put('/admin/services/{id}', [ServiceController::class, 'update'])->name('service.update');
            // Video
            Route::get('/admin/video', [VideoController::class, 'index'])->name('video.index');
            Route::get('/admin/video/{id}/edit', [VideoController::class, 'edit'])->name('video.edit');
            Route::put('/admin/video/{id}', [VideoController::class, 'update'])->name('video.update');
            Route::get('/admin/video/{id}/show', [VideoController::class, 'show'])->name('video.show');
            // Testimonial
            Route::get('/admin/testimonial', [TestimonialController::class, 'index'])->name('testimonial.index');
            Route::get('admin/testimonial/create', [TestimonialController::class, 'create'])->name('testimonial.create');
            Route::post('admin/testimonial/store', [TestimonialController::class, 'store'])->name('testimonial.store');
            Route::delete('/admin/testimonial/{id}/destroy', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');
            Route::get('/admin/testimonial/{id}/edit', [TestimonialController::class, 'edit'])->name('testimonial.edit');
            Route::put('/admin/testimonial/{id}', [TestimonialController::class, 'update'])->name('testimonial.update');
            // Contact
            Route::get('/admin/contact', [ContactController::class, 'index'])->name('contact.index');
            Route::delete('/admin/Contact/{id}/destroy', [ContactController::class, 'destroy'])->name('contact.destroy');
            // newsletter
            Route::get('/admin/newsletter', [NewsletterController::class, 'index'])->name('newsletter.index');
            Route::delete('/admin/newsletter/{id}/destroy', [NewsletterController::class, 'destroy'])->name('newsletter.destroy');
            // googlemaps
            Route::get('/admin/googlemaps', [GooglemapsController::class, 'index'])->name('googlemaps.index');
            Route::get('/admin/googlemaps/{id}/edit', [GooglemapsController::class, 'edit'])->name('googlemaps.edit');
            Route::put('/admin/googlemaps/{id}', [GooglemapsController::class, 'update'])->name('googlemaps.update');
            // Verif
            Route::get('/admin/validate', [VerifController::class, 'index'])->name('verif.index');
            Route::get('/admin/validate/membres', [VerifController::class, 'membre'])->name('verif.membre');
            Route::get('/admin/validate/membres/{id}/edit', [VerifController::class, 'membredit'])->name('verif.membre.edit');
            Route::put('/admin/validate/membres/{id}', [VerifController::class, 'membreupdate'])->name('verif.membre.update');
            Route::delete('/admin/Validate/membres/{id}/destroy', [VerifController::class, 'membredestroy'])->name('verif.membre.destroy');
            Route::get('/admin/validate/articles', [VerifController::class, 'article'])->name('verif.article');
            Route::get('/admin/validate/articles/{id}/edit', [VerifController::class, 'articledit'])->name('verif.article.edit');
            Route::put('/admin/validate/articles/{id}', [VerifController::class, 'articleupdate'])->name('verif.article.update');
            Route::delete('/admin/Validate/articles/{id}/destroy', [VerifController::class, 'articledestroy'])->name('verif.article.destroy');
            Route::get('/admin/validate/commentaires', [VerifController::class, 'commentaire'])->name('verif.commentaire');
            Route::get('/admin/validate/commentaires/{id}/edit', [VerifController::class, 'commentairedit'])->name('verif.commentaire.edit');
            Route::put('/admin/validate/commentaires/{id}', [VerifController::class, 'commentaireupdate'])->name('verif.commentaire.update');
            Route::delete('/admin/Validate/commentaires/{id}/destroy', [VerifController::class, 'commentairedestroy'])->name('verif.commentaire.destroy');
        });
    });
});


<?php

use App\Http\Controllers\ControllersView;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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
Route::get('/',[PostController::class,'showhome'])->name('home');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('show');
Route::get('/search', [PostController::class, 'search'])->name('search');
Route::get('/Aboutus',[ControllersView::class,'about'])->name('about');
Route::get('/villas-vente', [PostController::class, 'villasVente'])->name('villas.vente');
Route::get('/villas-LA', [PostController::class, 'villas_LA'])->name('villas.LA');
Route::get('/villas-LS', [PostController::class, 'villas_LS'])->name('villas.LS');
Route::get('/appartements-vente', [PostController::class, 'appartement_Vente'])->name('appartement.vente');
Route::get('/appartements-LA', [PostController::class, 'appartement_LA'])->name('appartement.LA');
Route::get('/appartements-LS', [PostController::class, 'appartement_LS'])->name('appartement.LS');
Route::get('/terrains', [PostController::class, 'terrains'])->name('terrains');
Route::get('/demeures-vente', [PostController::class, 'demeure_Vente'])->name('demeure.vente');
Route::get('/demeures-LA', [PostController::class, 'demeure_LA'])->name('demeure.LA');
Route::get('/demeures-LS', [PostController::class, 'demeure_LS'])->name('demeure.LS');
Route::get('/localcomercial-vente', [PostController::class, 'comerc_Vente'])->name('comerc.vente');
Route::get('/localcomercial-LA', [PostController::class, 'comerc_LA'])->name('comerc.LA');
Route::get('/localcomercial-LS', [PostController::class, 'comerc_LS'])->name('comerc.LS');
Route::get('/residence-vente', [PostController::class, 'residence_Vente'])->name('residence.vente');
Route::get('/residence-LA', [PostController::class, 'residence_LA'])->name('residence.LA');
Route::get('/residence-LS', [PostController::class, 'residence_LS'])->name('residence.LS');
Route::get('/duplex-vente', [PostController::class, 'duplex_Vente'])->name('duplex.vente');
Route::get('/duplex-LA', [PostController::class, 'duplex_LA'])->name('duplex.LA');
Route::get('/duplex-LS', [PostController::class, 'duplex_LS'])->name('duplex.LS');
Route::get('/Maisonette-vente', [PostController::class, 'Maisonette_Vente'])->name('Maisonette.vente');
Route::get('/Maisonette-LA', [PostController::class, 'Maisonette_LA'])->name('Maisonette.LA');
Route::get('/Maisonette-LS', [PostController::class, 'Maisonette_LS'])->name('Maisonette.LS');
Route::get('/Contact_us',[ControllersView::class,'contact'])->name('contact');
Route::get('/Properties_map',[ControllersView::class,'map'])->name('properties_map');
Route::get('detail/{id}', [PostController::class,'modal'])->name('modal');






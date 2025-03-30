<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServiceController;

Route::get('/', [PublicController::class, 'paginaHomeFunction'])->name('paginaHome');



Route::get('/Negozio',[ShopController::class, 'paginaNegozioFunction'] )->name('paginaNegozio');

Route::get('dettagliNegozio/{id}',[ShopController::class, 'paginaDettagliNegozioFunction'] )->name('paginaDettagliNegozio');




Route::get('/galleria', [GalleryController::class, 'paginaGalleriaFunction'])->name('paginaGalleria');

Route::get('dettagliFuorilegge/{uri}',[GalleryController::class, 'paginaDettagliFuorileggeFunction'])->name('paginaDettagliFuorilegge');




Route::get('/Servizi', [ServiceController::class, 'paginaServiziFunction'])->name('paginaServizi');




Route::get('/chiSiamo', [PublicController::class, 'paginaChiSiamoFunction'] )->name('paginaChiSiamo');


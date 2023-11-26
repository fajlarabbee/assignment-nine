<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\BlogPageController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PortfolioPageController;
use App\Http\Controllers\ResumePageController;
use Illuminate\Support\Facades\Route;

Route::name('page.')->group(function(){
    Route::get('/', [HomePageController::class, 'index'])->name('index');
    Route::get('/resume', [ResumePageController::class, 'index'])->name('resume');

    Route::get('/contact', [ContactPageController::class, 'index'])->name('contact');
    Route::post('/contact', [ContactPageController::class, 'store'])->name('contact.store');

    Route::get('/about', [AboutPageController::class, 'index'])->name('about');
    Route::get('/blog', [BlogPageController::class, 'index'])->name('blog');

    Route::get('/projects', [PortfolioPageController::class, 'index'])->name('portfolio');

});

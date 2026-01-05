<?php

use App\Modules\Blog\Http\Controllers\BlogCategoryController;
use App\Modules\Blog\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth'])->group(function () {
    // Blog Management
    Route::get('blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('blog', [BlogController::class, 'store'])->name('blog.store');
    Route::get('blog/{blog}', [BlogController::class, 'show'])->name('blog.show');
    Route::get('blog/{blog}/edit', [BlogController::class, 'edit'])->name('blog.edit');
    Route::post('blog/{blog}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('blog/{blog}', [BlogController::class, 'destroy'])->name('blog.destroy');

    // Blog Category Management
    Route::get('blog-category', [BlogCategoryController::class, 'index'])->name('blog-category.index');
    Route::get('blog-category/create', [BlogCategoryController::class, 'create'])->name('blog-category.create');
    Route::post('blog-category', [BlogCategoryController::class, 'store'])->name('blog-category.store');
    Route::get('blog-category/{blog_category}', [BlogCategoryController::class, 'show'])->name('blog-category.show');
    Route::get('blog-category/{blog_category}/edit', [BlogCategoryController::class, 'edit'])->name('blog-category.edit');
    Route::post('blog-category/{blog_category}', [BlogCategoryController::class, 'update'])->name('blog-category.update');
    Route::delete('blog-category/{blog_category}', [BlogCategoryController::class, 'destroy'])->name('blog-category.destroy');
});


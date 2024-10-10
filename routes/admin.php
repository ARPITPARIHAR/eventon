<?php

use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Backend\FormController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\RoomController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\BuyerController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\SampleController;
use App\Http\Controllers\Backend\VendorController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;

// Middleware-protected dashboard routes
Route::middleware(['auth', IsAdmin::class])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::get('business-info', 'businessSettings')->name('business-setting');
        Route::post('business-info', 'businessSettingsUpdate')->name('business-setting-update');
        Route::get('profile', 'profile')->name('profile');
        Route::post('profile', 'profileUpdate')->name('profile.update');
    });

    // Teammember routes


    // Information routes

});

// Contact routes
Route::controller(ContactController::class)->group(function () {
    Route::get('/contacts', 'index')->name('contact.index');
    Route::delete('contacts/{id}/delete', 'delete')->name('contacts.delete');
});

Route::controller(FormController::class)->group(function () {
    Route::get('/form', 'index')->name('form.index');
    Route::delete('forms/{id}/delete', 'delete')->name('participations.delete');
    Route::get('forms/{id}/download', 'download')->name('participations.download');
});
Route::get('/contact/index', [ContactController::class, 'index'])->name('contact.index');
Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'submit'])->name('category.store');
Route::get('/vendor/index', [VendorController::class, 'index'])->name('vendor.index');
Route::delete('/vendor/{id}', [VendorController::class, 'destroy'])->name('vendor.destroy');
Route::get('/team/index', [TeamController::class, 'index'])->name('team.index');
Route::delete('/team/{id}', [TeamController::class, 'destroy'])->name('team.destroy');

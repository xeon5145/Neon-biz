<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

// Common Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
// Common Controllers

// Admin Controllers
// Admin Controllers

// Client Controllers
use App\Http\Controllers\Client\Modules\InventoryController;
use App\Http\Controllers\Client\Modules\InvoiceController;
// Client Controllers

Route::get('/', [HomeController::class, 'Index'])->name('home');

Route::get('/dashboard', [UserController::class, 'userDashboard'])->middleware(['auth', 'verified'])->name('dashboard');

// Admin Routes
Route::middleware(['admin'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('user-password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});
// Admin Routes

// Client Routes
Route::middleware(['client'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('user-password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');

    Route::get('inventory/dashboard', [InventoryController::class, 'Index'])->name('inventory.dashboard');
    Route::get('invoiceManagement/dashboard', [InvoiceController::class, 'Index'])->name('invoice.dashboard');
});
// Client Routes

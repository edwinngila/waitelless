<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TellerController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// tellers
Route::get('/teller', [TellerController::class, 'getUserTickets'])->name('getUserTickets');
Route::get('/tellerCompleteTicket', [TellerController::class, 'completeTicket'])->name('completeTicket');
Route::get('/tellerClearTicket', [TellerController::class, 'clearTicket'])->name('clearTicket');
Route::get('/tellerNextTicket', [TellerController::class, 'nextTicket'])->name('nextTicket');


// customer tickets
Route::get('/selections', [TicketController::class, 'create'])->name('create');

//BUX
Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('dash');

Route::get('/staff', function () {
    // Check if the view exists before returning it
    if (view()->exists('staff')) {
        return view('staff');
    } else {
        return "View 'staff' not found!";
    }
});

Route::get('/report', function () {
    // Check if the view exists before returning it
    if (view()->exists('report')) {
        return view('report');
    } else {
        return "View 'report' not found!";
    }
});

Route::get('/index', function () {
    // Check if the view exists before returning it
    if (view()->exists('index')) {
        return view('index');
    } else {
        return "View 'index' not found!";
    }
});

Route::get('/dash', function () {
    // Check if the view exists before returning it
    if (view()->exists('dash')) {
        return view('dash');
    } else {
        return "View 'dash' not found!";
    }
});

Route::resource('/service_points', App\Http\Controllers\ServicePointController::class)
->names([
    'index' => 'servicePoints.index',
    'store' => 'servicePoints.store',
    'show' => 'servicePoints.show',
    'update' => 'servicePoints.update',
    'destroy' => 'servicePoints.destroy',
    'create' => 'servicePoints.create',
    'edit' => 'servicePoints.edit'
]);

Route::resource('/services', App\Http\Controllers\ServiceController::class)
->names([
    'index' => 'services.index',
    'store' => 'services.store',
    'show' => 'services.show',
    'update' => 'services.update',
    'destroy' => 'services.destroy',
    'create' => 'services.create',
    'edit' => 'services.edit'
]);

Route::resource('/transactions', App\Http\Controllers\TransactionController::class)
    ->names([
        'index' => 'transactions.index',
        'store' => 'transactions.store',
        'show' => 'transactions.show',
        'update' => 'transactions.update',
        'destroy' => 'transactions.destroy',
        'create' => 'transactions.create',
        'edit' => 'transactions.edit'
    ]);

// Route::get('/profile', function () {
//     // Check if the view exists before returning it
//     if (view()->exists('profile')) {
//         return view('profile');
//     } else {
//         return "View 'profile' not found!";
//     }
// });

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Home Page Route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Appointment Page Route
Route::get('/appointment', function () {
    return view('pages.appointment');
})->name('appointment');

// Appointment Form Submission Route
Route::post('/appointment-submit', [AppointmentController::class, 'store'])->name('appointment.submit');

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


use Illuminate\Support\Facades\Artisan;

Route::get('/run-migrations', function () {
    Artisan::call('migrate --force');
    Artisan::call('db:seed');
    return '✅ Migrations and seeders have been run.';
});

Route::get('/seed-doctors', function () {
    Artisan::call('db:seed', [
        '--class' => 'DoctorSeeder',
        '--force' => true,
    ]);
    return '✅ DoctorSeeder ran';
});
Route::get('/seed-services', function () {
    Artisan::call('db:seed', [
        '--class' => 'ServiceSeeder',
        '--force' => true,
    ]);
    return '✅ ServiceSeeder ran';
});


require __DIR__ . '/auth.php';

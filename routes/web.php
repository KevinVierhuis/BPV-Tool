<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusController; // Add this if it's not already at the top

Route::get('/', function () {
    return view('home');
});

Route::get('/bpv-gegevensblad.blade.php', function () {
    return view('bpv-gegevensblad');
});

Route::get('/studentzaken', function () {
    return view('studentzaken'); // Replace with your actual view name
})->name('studentzaken');

// This is the route for the docentzaken page
Route::get('/docentzaken', [StatusController::class, 'index'])->name('docentzaken');

Route::get('/editStatus/{student}', [StatusController::class, 'edit'])->name('editStatus');
Route::put('/editStatus/{student}', [StatusController::class, 'update'])->name('updateStatus');


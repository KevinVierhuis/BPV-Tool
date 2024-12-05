<?php

// Gebruik de Student model in deze seeder file
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusController;

// Maak de students tabel aan

Route::get('/', function () {
    return view('home');
});

// Route for the bpv-gegevensblad page
Route::get('/bpv-gegevensblad.blade.php', function () {
    return view('bpv-gegevensblad');
});

// Route for the studentzaken page
Route::get('/studentzaken', function () {
    return view('studentzaken'); // Replace with your actual view name
})->name('studentzaken');

// Route for the docentzaken page
Route::get('/docentzaken', [StatusController::class, 'index'])->name('docentzaken');

// Route for the editStatus page
Route::get('/editStatus/{student}', [StatusController::class, 'edit'])->name('editStatus');
Route::put('/editStatus/{student}', [StatusController::class, 'update'])->name('updateStatus');


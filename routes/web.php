<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('partials.home.home');
})->name('app.home');

Route::get('/about', function () {
    return view('partials.about.about');
})->name('app.about');

Route::get('/courses', function () {
    return view('partials.courses.courses');
})->name('app.courses');

Route::get('/contact', function () {
    return view('partials.contact.contact');
})->name('app.contact');

// Specialization Detail Routes
Route::get('/specialization/web-development', function () {
    return view('partials.specializations.web-development');
})->name('app.web-development');

Route::get('/specialization/mobile-development', function () {
    return view('partials.specializations.mobile-development');
})->name('app.mobile-development');

Route::get('/specialization/cybersecurity', function () {
    return view('partials.specializations.cybersecurity');
})->name('app.cybersecurity');

Route::get('/specialization/data-science', function () {
    return view('partials.specializations.data-science');
})->name('app.data-science');

Route::get('/specialization/cloud-computing', function () {
    return view('partials.specializations.cloud-computing');
})->name('app.cloud-computing');

Route::get('/specialization/devops', function () {
    return view('partials.specializations.devops');
})->name('app.devops');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';



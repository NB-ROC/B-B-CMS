<?php

use App\Http\Controllers\BnbController;
use App\Http\Controllers\ProfileController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ContactController;

Route::get('/', function () {
    if (count(\App\Models\Bnb::all()) == 0)
    {
        return view('welcome');
    }
    else
    {
        return view('page.index');
    }
});

Route::get('/dashboard', function () {
    $contacts = Contact::all();
    return view('dashboard', compact('contacts') );
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('contact', ContactController::class);
Route::resource('bnb', BnbController::class);
Route::get('/contact/increment', [ContactController::class, 'increment'])->name('contact.increment');
Route::get('/contact/decrement', [ContactController::class, 'decrement'])->name('contact.decrement');

require __DIR__.'/auth.php';

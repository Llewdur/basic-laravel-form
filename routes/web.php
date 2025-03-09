<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserFormController;

Route::get('/', [UserFormController::class, 'create'])->name('user-form.show');

Route::post('/', [UserFormController::class, 'store'])->name('user-form.submit');

Route::get('/thank-you', function () {
    return view('thankyou');
})->name('thankyou');


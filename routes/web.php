<?php

use App\Http\Controllers\ProfileController;
use App\Models\YogaClass;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.home');
})->name('home');

Route::get('/classes', function () {
    return view('web.classes');
})->name('classes');

Route::get('/classes/{class}', function (YogaClass $class) {
    return view('web.class-show', ['class' => $class]);
})->name('class.show');

Route::get('/contacts', function () {
    return view('web.contacts');
})->name('contacts');

<?php

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



Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('/tasks', function () {
    return view('tasks.index');
})->name('tasks');

Route::get('/events', function () {
    return view('events.index');
})->name('events');

Route::get('/organizations', function(){
    return view('organizations.index');
})->name('organizations');

Route::get('/members', function(){
    return view('members.index');
})->name('members');

Route::get('/announcements', function(){
    return view('announcements.index');
})->name('announcements');

Route::get('/finances', function(){
    return view('finances.index');
})->name('finances');

Route::get('/documents', function(){
    return view('documents.index');
})->name('documents');



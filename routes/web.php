<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/dashboard.show', function () {
    return view('dashboard.show');
})->name('dashboard.show');

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');
Route::patch('/tasks/{task}/status', [TaskController::class, 'updateStatus'])->name('tasks.updateStatus');

Route::get('/events.index', function () {
    return view('events.index');
})->name('events.index');

Route::get('/organizations.index', function(){
    return view('organizations.index');
})->name('organizations.index');

Route::get('/members.index', function(){
    return view('members.index');
})->name('members.index');

Route::get('/announcements.index', function(){
    return view('announcements.index');
})->name('announcements.index');

Route::get('/finances.index', function(){
    return view('finances.index');
})->name('finances.index');

Route::get('/documents.index', function(){
    return view('documents.index');
})->name('documents.index');

Route::get('/organizations.index', function(){
    return view('organizations.index');
})->name('organizations.index');



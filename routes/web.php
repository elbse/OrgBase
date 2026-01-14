<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\TransactionController;

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



// Landing / dashboard
Route::get('/', fn () => view('dashboard.index'));
Route::get('/dashboard.show', fn () => view('dashboard.show'))->name('dashboard.show');

// Tasks
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');
Route::patch('/tasks/{task}/status', [TaskController::class, 'updateStatus'])->name('tasks.updateStatus');

// Events (static view)
Route::get('/events.index', fn () => view('events.index'))->name('events.index');

// Organizations (static view)
Route::get('/organizations.index', fn () => view('organizations.index'))->name('organizations.index');

// Members
Route::get('/members', [MemberController::class, 'index'])->name('members.index');
Route::get('/members/create', [MemberController::class, 'create'])->name('members.create');
Route::post('/members', [MemberController::class, 'store'])->name('members.store');
Route::get('/members/{member}', [MemberController::class, 'show'])->name('members.show');
Route::get('/members/{member}/edit', [MemberController::class, 'edit'])->name('members.edit');
Route::put('/members/{member}', [MemberController::class, 'update'])->name('members.update');
Route::delete('/members/{member}', [MemberController::class, 'destroy'])->name('members.destroy');

// Announcements (static views)
Route::get('/announcements.index', fn () => view('announcements.index'))->name('announcements.index');
Route::get('/announcements/create', fn () => view('announcements.create'))->name('announcements.create');
Route::get('/announcements/{announcement}', fn (string $announcement) => view('announcements.show', compact('announcement')))->name('announcements.show');

// Finances
Route::get('/finances', [TransactionController::class, 'index'])->name('finances.index');
Route::post('/finances', [TransactionController::class, 'store'])->name('finances.store');
// Backwards-compat: old URL /finances.index redirects to current route
Route::get('/finances.index', fn () => redirect()->route('finances.index'));

// Documents
Route::get('/documents.index', [DocumentController::class, 'index'])->name('documents.index');
Route::get('/documents/create', [DocumentController::class, 'create'])->name('documents.create');
Route::post('/documents', [DocumentController::class, 'store'])->name('documents.store');
Route::get('/documents/{document}', [DocumentController::class, 'show'])->name('documents.show');
Route::get('/documents/{document}/download', [DocumentController::class, 'download'])->name('documents.download');
Route::delete('/documents/{document}', [DocumentController::class, 'destroy'])->name('documents.destroy');

// Profile & settings
Route::get('/profile', fn () => view('profile.show', ['user' => Auth::user()]))->name('profile.show');
Route::get('/settings/workspace', fn () => view('settings.workspace'))->name('settings.workspace');
Route::get('/notifications', fn () => view('notifications.index'))->name('notifications.index');

// Auth
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// routes/api.php

Route::middleware(['auth:sanctum'])->group(function () {
    Route::prefix('organizations/{organizationId}')->group(function () {
        
        // Members routes
        Route::get('/members', [MemberController::class, 'index']);
        Route::get('/members/filter-options', [MemberController::class, 'getFilterOptions']);
        Route::post('/members', [MemberController::class, 'store']);
        Route::get('/members/{memberId}', [MemberController::class, 'show']);
        Route::put('/members/{memberId}', [MemberController::class, 'update']);
        Route::delete('/members/{memberId}', [MemberController::class, 'destroy']);
        
    });
});
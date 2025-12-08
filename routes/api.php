<?php

use App\Http\Controllers\Api\MemberController as ApiMemberController;
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
        Route::get('/members', [ApiMemberController::class, 'index']);
        Route::get('/members/filter-options', [ApiMemberController::class, 'getFilterOptions']);
        Route::post('/members', [ApiMemberController::class, 'store']);
        Route::get('/members/{memberId}', [ApiMemberController::class, 'show']);
        Route::put('/members/{memberId}', [ApiMemberController::class, 'update']);
        Route::delete('/members/{memberId}', [ApiMemberController::class, 'destroy']);
        
    });
});
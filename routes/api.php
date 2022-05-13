<?php

    use App\Http\Controllers\Api\AuthController;
    use App\Http\Controllers\Api\CardController;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register API routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | is assigned the "api" middleware group. Enjoy building your API!
    |
    */

    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/account', function (Request $request) {
            return $request->user();
        })->name('private-route');

        Route::get('/card', [CardController::class, 'index'])
            ->name('card');
    });

    Route::post('/register', [AuthController::class, 'register']);

    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/logout', [AuthController::class, 'logout']);

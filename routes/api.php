<?php

    use App\Http\Controllers\Api\AuthController;
    use App\Http\Controllers\Api\CardController;
    use App\Http\Controllers\Api\ClothesController;
    use App\Http\Requests\UpdateAccountRequest;
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

        Route::post('/account', function (UpdateAccountRequest $request) {
            $request->user()->update($request->validated());
        });

        Route::get('/card', [CardController::class, 'index'])
            ->name('card');
    });

    Route::apiResource('clothe', ClothesController::class);

    Route::post('/register', [AuthController::class, 'register'])
        ->name('register');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login');

    Route::get('/logout', [AuthController::class, 'logout'])
        ->name('logout');

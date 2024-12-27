<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);
Route::get('/auth', function () {
    return response()->json(['message' => 'Hello World']);
})->middleware('jwt.auth');

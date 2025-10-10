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

// API routes for VDUHSC 2025
Route::prefix('wces2025')->group(function () {
  // Programme API
  Route::prefix('programme')->group(function () {
    Route::get('/sessions', function () {
      return response()->json([
        'message' => 'Programme sessions API endpoint'
      ]);
    });

    Route::get('/speakers', function () {
      return response()->json([
        'message' => 'Speakers API endpoint'
      ]);
    });
  });

  // User management API
  Route::prefix('user')->group(function () {
    Route::post('/register', function () {
      return response()->json([
        'message' => 'User registration API endpoint'
      ]);
    });

    Route::post('/login', function () {
      return response()->json([
        'message' => 'User login API endpoint'
      ]);
    });
  });

  // Sponsors API
  Route::get('/sponsors', function () {
    return response()->json([
      'message' => 'Sponsors API endpoint'
    ]);
  });
});

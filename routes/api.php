<?php

use App\Http\Middleware\NpmMiddleware;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/val/content/v1/contents', [\App\Http\Controllers\WrapperController::class, 'contents'])-> middleware('npm')->name(name: 'contents');
Route::get('/val/ranked/v1/leaderboards/by-act/{actId}', [\App\Http\Controllers\WrapperController::class, 'leaderboardsByActId'])-> middleware('npm')->name(name: 'leaderboardsByActId');
Route::get('/val/status/v1/platform-data', [\App\Http\Controllers\WrapperController::class, 'platformdata'])->name(name: 'platformdata');
Route::get('/v1/bundles', [\App\Http\Controllers\WrapperController::class, 'bundles'])-> middleware('npm')->name(name: 'bundles');
Route::get('/v1/maps', [\App\Http\Controllers\WrapperController::class, 'maps'])-> middleware('npm')->name(name: 'maps');
Route::get('/user/identitas', function (){
    return [
        'code' => '0',
        'data' => [
            'npm'=>'197006038',
            'nama'=>'Daffa Rahma Putra',
            'email'=>'197006038@student.unsil.ac.id'
        ]
        ];
})-> middleware('npm');
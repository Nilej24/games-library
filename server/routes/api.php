<?php

use App\Models\Score;
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

Route::get('/scores/{game}', function ($game) {
    return Score::where('game', $game)->get();
});

Route::post('/scores', function () {

    request()->validate([
        'game' => 'required',
        'player_name' => 'required',
        'value' => 'required',
    ]);

    return Score::create([
        'game' => request('game'),
        'player_name' => request('player_name'),
        'value' => request('value'),
    ]);

});

<?php

use App\Http\Controllers\TradeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/', [TradeController::class, 'index']);
    Route::get('/success', [TradeController::class, 'success_index']);
    Route::get('/failure', [TradeController::class, 'failure_index']);
    Route::get('/details/id', [TradeController::class, 'details']);
    Route::get('add', [TradeController::class, 'add']);
    Route::post('addJournal', [TradeController::class, 'addJournal']);
});

// Route::get('/details/id', function()
// {
//     return view('frontend.tradeDetail');
// });

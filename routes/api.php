<?php
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ServesController;
use App\Http\Controllers\ServesPageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeDevController;

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

Route::apiResource('contact', ContactController::class);
Route::apiResource('subscribe',SubscribeController::class);
Route::post('logos/update/{id}',[LogoController::class,'updata']);
Route::get('logos',[LogoController::class,'index']);
Route::get('logotest',[LogoController::class,'logotest']);


Route::get('logos/{id}',[LogoController::class,'show']);
Route::delete('logos/{id}',[LogoController::class,'destroy']);
Route::post('logos',[LogoController::class,'store']);

Route::post('serves',[ServesController::class,'store']);

Route::post('serves/page',[ServesPageController::class,'store']);
Route::post('type/div',[TypeDevController::class,'store']);


//


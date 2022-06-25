<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\MemberController;
use  App\Http\Controllers\DriverController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\OngoingOrderController;
use App\Http\Controllers\CompleteOrderController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('order/id', [OrderController::class, 'search']);
Route::post('order/add', [OrderController::class, 'store']);

Route::get('vorder', [OrderController::class, 'vieworders']);

Route::get('vorder/{id}', [OrderController::class, 'viewordersbyid']);

Route::get('onorder', [OngoingOrderController::class, 'vieworders']);

Route::get('onorder/{id}', [OngoingOrderController::class, 'viewordersbyid']);

Route::get('complete', [CompleteOrderController::class, 'vieworders']);

Route::get('complete/{id}', [CompleteOrderController::class, 'viewordersbyid']);

Route::post('mem/add', [MemberController::class, 'addMember']);

Route::get('member', [MemberController::class, 'displayMember']);

Route::get('member/{id}', [MemberController::class, 'memberbyid']);

Route::post('add/driver', [DriverController::class, 'addDriver']);

Route::get('driver', [DriverController::class, 'displayDriver']);

Route::get('driver/{id}', [DriverController::class, 'displayDriverByid']);

Route::post('add/owner', [OwnerController::class, 'addOwner']);

Route::get('add/owner/{id}', [OwnerController::class, 'addDriverToOwner']);

Route::get('owner', [OwnerController::class, 'displayOwner']);

Route::post('add/ongoing', [OngoingOrderController::class, 'insert']);

Route::post('add/complete', [CompleteOrderController::class, 'insert']);

Route::delete('delete/order/{id}', [OrderController::class, 'delete']);

Route::delete('delete/ongoing/{id}', [OngoingOrderController::class, 'delete']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



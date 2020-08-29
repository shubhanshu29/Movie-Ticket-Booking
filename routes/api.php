<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('ticket', 'TicketsController@index');
Route::get('ticket/{id}','TicketsController@getTicketByID');
Route::post('ticket/create', 'TicketsController@createTicket');
Route::put('ticket/{ticket}', 'TicketsController@updateTicket');
Route::delete('ticket/{ticket}', 'TicketsController@deleteTicket');
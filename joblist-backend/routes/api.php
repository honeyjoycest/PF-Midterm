<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItJobsListController;
use App\Models\ItJobsList;

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

Route::get('/itjobslists',[ItJobsListController::class,'index']);
Route::get('/itjobslists/{itjobslist}',[ItJobsListController::class,'show']);

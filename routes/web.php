<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\EventManagement\EventManagementController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [EventManagementController::class, 'index'])->name('index');

Route::post('/add-ticket', [EventManagementController::class, 'addTicket'])->name('addTicket');

Route::post('/', [EventManagementController::class, 'index'])->name('index');

<?php

use App\Jobs\SendNotificationsJob;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-notifications', function() {
    SendNotificationsJob::dispatch();
    return 'Envio dos e-mails está sendo processado, assim que finalizar você receberá uma notificação!';
});
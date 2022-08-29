<?php

use App\Http\Controllers\PdfController;
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

Route::get('/', function () {
    return phpinfo();
});

Route::get('download/pdf/{identification}', [PdfController::class, 'download']);
Route::get('download/pdf/preview/{identification}', [PdfController::class, 'preview']);
Route::get('download/excel', 'App\Http\Controllers\ExcelController@download');

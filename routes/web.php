<?php

use App\Http\Controllers\QrCodeController;
use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

Route::get('qrcode2', function () {
    return QrCode::size(300)->generate('I Love You');
});
Route::get('/qrcode',[QrCodeController::class,'index'])->name('qrcode');
Route::get('/text-generate',[QrCodeController::class,'text'])->name('text');
Route::get('/email-generate',[QrCodeController::class,'email'])->name('email');
Route::get('/phone-generate',[QrCodeController::class,'phone'])->name('phone');
Route::post('/result',[QrCodeController::class,'result'])->name('qrcode-generator');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiriesController;
use App\Models\Inquiries;

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
    return view('welcome');
});
Route::middleware(['auth'])->group(function () {
Route::get('/dashboard', function () {
    $data['count_inq'] = (new \App\Models\Inquiries())->count();
    return view('dashboard',$data);
})->name('dashboard');

// Route::resource('user', [UserController::class]);

Route::resource('inquiries', InquiriesController::class);
Route::put('/inquiries/{$id}', [InquiriesController::class,'show'] );
});
require __DIR__.'/auth.php';

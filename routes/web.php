<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\ImageUploadController;
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

Route::get('/', [ProductController::class, 'redirect']);
Route::get('/home', [ProductController::class, 'home']);

Route::middleware(['auth'])->group(function() {
    Route::get('/products/create', [ProductController::class, 'create']);
    Route::get('/products', [ProductController::class, 'index']);
    Route::get('/products/{id}', [ProductController::class, 'show']);
    Route::post('/products/create/confirm', [ProductController::class, 'store']);
    Route::get('/owned', [ProductController::class, 'owned']);
    Route::get('/products/{id}/loan', [ProductController::class, 'loan']);
    Route::get('/myloans', [ProductController::class, 'myloans']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';

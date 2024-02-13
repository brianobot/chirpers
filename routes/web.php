<?php

use App\Http\Controllers\ChirperController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;

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

Route::get("/info", function () {
    $time = date('Y-m-d');
    $luckyNumber = rand(0, 10);
    return response("info is the key time: " . $time . '<br/>' . "lucky number: " . $luckyNumber);
})->name('info.index');


Route::resource('chirps', ChirperController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']
);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// route for chirp resource 


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

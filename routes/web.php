
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RepertoireController;
use App\Http\Controllers\SenderController;

use App\Models\Repertoire;


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

Route::post('repertoire', [RepertoireController::class, 'store'])->name("repertori");

Route::post('send', [SenderController::class, 'send'])->name("send");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {

        $mails = Repertoire::get();

        return view('dashboard', [
            'mails' => $mails
        ]);
    })->name('dashboard');
});

<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::resource('branches', BrancheController::class)->middleware(['auth']);
Route::resource('matieres', MatiereController::class)->middleware(['auth']);
Route::get('profs/{prof}/matieres', [App\Http\Controllers\ProfController::class, 'matieres'])->middleware(['auth']);
Route::resource('profs', ProfController::class)->middleware(['auth']);
Route::resource('etudients', EtudientController::class)->middleware(['auth']);
Route::get('ajouter-notes/{matiere}', [NoteController::class, 'createAjouterNote']);
Route::post('ajouter-notes', [NoteController::class, 'ajouterNote']);
Route::get('test', function () {
    return Auth::user()->matieres;
})->middleware(['auth']);
require __DIR__ . '/auth.php';

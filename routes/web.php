<?php

//use Illuminate\Foundation\Application;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
//use Inertia\Inertia;

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
    $titolo = "Home";


    return view('pages.welcome', ['titolo' => $titolo]);
})->name('welcome');

Route::get('/contatti', function () {
    $titolo = "contatti";

    return view('pages.contatti',['titolo' => $titolo]);
})->name('contatti');
Route::get('/chi sono', function () {
    $titolo = "Chi sono";

    return view('pages.chi sono',['titolo' => $titolo]);
})->name('chi sono');

Route::get('/articoli', function () {

    $titolo = "Articoli disponibili";
    $articoli = [0 => ['title' => 'Fleximan colpisce ancora', 'category' => 'Mistero', 'description' => 'Non si sa ancora nulla sulla persona dietro a questi atti, si sa solamente che viene chiamato fleximan'],
    1 => ['title' => 'Mbappe al Real Madrid', 'category' => 'Sport', 'description' => 'Il giocatore francese lascirà il Paris Saint-German e amdrà al Real Marid alla fine di questa stagione'],
    2 => ['title' => 'Pokemon investiga PalWorld', 'category' => 'Videogiochi', 'description' => 'La compagnia Pokemon sta indagando su possibile plegio del nuovo gioco PalWorld']];
    return view('pages.articoli', ['titolo' => $titolo,'articoli' => $articoli]);
})->name('articoli');

Route::get('/articoli/{id}', function($id) {
    $articoli = [
        0 => ['title' => 'Fleximan colpisce ancora', 'category' => 'Mistero', 'description' => 'Non si sa ancora nulla sulla persona dietro a questi atti, si sa solamente che viene chiamato fleximan'],
        1 => ['title' => 'Mbappe al Real Madrid', 'category' => 'Sport', 'description' => 'Il giocatore francese lascirà il Paris Saint-German e amdrà al Real Marid alla fine di questa stagione'],
        2 => ['title' => 'Pokemon investiga PalWorld', 'category' => 'Videogiochi', 'description' => 'La compagnia Pokemon sta indagando su possibile plegio del nuovo gioco PalWorld']
    ];

    return view('pages.dettaglio', ['articolo' => $articoli[$id], ]);
})->name('ArtCompleto');


Route::post('/contatti/invio', [Controller::class,'RiceviInformazioni'])->name('contacts.informazioni');
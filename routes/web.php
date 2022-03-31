<?php

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
    return view('index');
})->name('inicio');

Route::get('/Sobre-la-saga', function () {
    return view('about');
})->name('saga');

Route::get('/Personajes', function () {
    return view('gallery');
})->name('personajes');

Route::get('/contactanos', function () {
    $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://dog.ceo/api/breeds/image/random/12');
        $datos = json_decode($response->getBody()->getContents(), true);
        for($i=0;  $i<10; $i++){ 
            $Perro[$i] = $datos["message"][$i];
            }
    return view('contact',['Perro'=>$Perro]);
})->name('contactanos');


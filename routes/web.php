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
    return view('home');
});

Route::get('/contact', function(){
    $data = [
        'membri' => [
            'membro1' => [
                'nome' => 'Pietro',
                'cognome' => 'Zimatti',
                'email' => 'pietro.zimatti@gmail.com',
                'n_tel' => '3345566998'
            ],
            'membro2' => [
                'nome' => 'Andrea',
                'cognome' => 'Pierotto',
                'email' => 'andrea.pierotto@gmail.com',
                'n_tel' => '3359684524'
            ],
            'membro3' => [
                'nome' => 'Gino',
                'cognome' => 'Soccio',
                'email' => 'gino.soccio@gmail.com',
                'n_tel' => '3374589652'
            ]
        ]
    ];
    
    return view('contact', $data);
});

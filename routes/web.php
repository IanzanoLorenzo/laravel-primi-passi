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
    $links = [
        [
            'path' => '/',
            'name' => 'Home'
        ],
        [
            'path' => '/contact',
            'name' => 'Contatti'
        ],
        [
            'path' => '/product',
            'name' => 'Prodotti'
        ]
    ];

    return view('home', compact('links'));
});

Route::get('/contact', function(){
    $membri = [
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
    ];
    
    return view('contact', compact('membri'));
});

Route::get('/product', function(){
    $prodotti = [
        [
            'nome' => 'Pane',
            'prezzo' => '3.50'
        ],
        [
            'nome' => 'Grissini',
            'prezzo' => '4.50'
        ],
        [
            'nome' => 'Pizza',
            'prezzo' => '6.00'
        ]
        ];

    return view('product', compact('prodotti'));
});

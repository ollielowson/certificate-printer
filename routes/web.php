<?php

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

Route::get('/', function() {
    return view('welcome');
});

Route::get('/certificates', function() {
    $data = [
        'pages' => [
            'Unplugging Power Supplies' => 'Jack Mumford',
            'Plugging things into the UPS' => 'Jack Mumford',
            'Making loud noises' => 'Jack Mumford',
        ]
    ];

//    return view('certificate', $data);
    $pdf = PDF::loadView('certificate', $data);

    return $pdf->stream('certificates');
});

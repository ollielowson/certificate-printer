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

Route::get('/certificate', function() {
    $data = [
        'pages' => [
            'Muppet Award'  => 'Richard Wood',
            'Tindall Award' => 'Jack Mumford',
        ]
    ];

//    return view('certificate', $data);
    $pdf = PDF::loadView('certificate', $data);
    $pdf->setOptions([
        'debugLayoutBlocks' => true,

    ]);

    return $pdf->stream();
});

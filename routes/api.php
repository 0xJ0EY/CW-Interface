<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/route/', function () {
    $filePath = base_path() . '/last_option.txt';

    $content = file_get_contents($filePath);
    $content = json_decode($content, true);

    $return = [];
    $return['content'] = $content['content'];
    $return['name'] = $content['name'];

    return json_encode($return);
});


Route::get('/reset/', function () {
    $filePath = base_path() . '/last_option.txt';
    file_put_contents($filePath, '');
});

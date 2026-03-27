<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('index');
});

Route::post('/save', function (Request $request) {

    $data = "Име: " . $request->name . "\n";
    $data .= "Град: " . $request->city . "\n";
    $data .= "Село: " . $request->village . "\n";
    $data .= "Искане: " . $request->items . "\n";
    $data .= "-------------------\n";

    Storage::append('requests.txt', $data);

    return "Заявката е изпратена успешно!";
});
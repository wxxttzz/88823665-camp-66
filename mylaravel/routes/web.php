<?php
// filepath: c:\xampp\htdocs\88823665-camp-66\mylaravel\routes\web.php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/multiplication', function () {
    return view('multiplication');
});

Route::post('/multiplication', function (Request $request) {
    $number = $request->input('number');
    return view('multiplication', ['number' => $number]);
});
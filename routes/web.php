<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gunjan', function () {
    return 'hello ginjan' ;
});

Route::get('/gun', function () {
    return view('gun');
});
Route::get('/hello', function () {

    $orderDetail = ['orderId' =>123123];
    return view('order.order' ,$orderDetail);
});
Route::get('/student', function () {

    $mystudents = ['std1' =>'gunjan'];
    return view('order.order')->with($mystudents);
});
Route::get('/friends', function () {

    $myfriends = ['frnd1' =>'archu'];
    return view('order.order')->with($myfriends);
});
 
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

use App\User;
use App\Address;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert', function()
{
    $user = User::findOrFail(1);

    $address = new Address(['city' => 'Berlin']);

    $user->address()->save($address);
});



Route::get('/update', function()
{
    $address = Address::whereCity('Zanzibar')->first();

    $address->city = "Budapest";

    $address->save();
});



Route::get('/read', function()
{
    $user = User::findOrFail(1);

    return $user->address->city;

});



Route::get('/delete', function()
{
   $user = User::findOrFail(1);

   $user->address->delete();

});
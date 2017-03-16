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
use App\Post;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/create', function()
{
    $user = User::findOrFail(1);

    $post = new Post(['title'=>'Fourth post', 'content'=>'More and more']);

    $user->posts()->save($post);

});


Route::get('/read', function()
{
    $user = User::findOrFail(1);

    foreach ($user->posts as $post) {

        echo ($post->title . "<br>");
    }

});


Route::get('/update', function()
{

    $user = User::findOrFail(1);

    $user->posts()->whereId(1)->update(['title'=>'It just gets better', 'content'=>'Look at all the stuff we can do']);

});



Route::get('/delete', function()
{

    $user = User::findOrFail(1);

    $user->posts()->whereId(2)->delete();

    return "success!";

});
<?php

use App\Country;
use App\Post;
use App\User;
use App\Photo;
use App\Tag;

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
   return view('welcome');

});

//
//
//
//Route::get('/about', function () {
//    return "HI about page";
//
//});
//
//
//
//Route::get('/contact', function () {
//
//    return "yoyoyo";
//
//});
//
//
//Route::get('/post/{id}', function($id){
//
//    return "This is post number " . $id;
//
//
//});
//
//Route::get('/admin/posts/example', array('as'=>'admin.home', function(){
//
//$url = route('admin.home');
//
//return "The URL of this page is " . $url;
//
//}));

// Route::resource('posts', 'PostsController');
//
//Route::get('/contact', 'PostsController@contact');
//
//Route::get('post/{id}/{name}', 'PostsController@show_post');



//Route::get('/insert', function(){
//
//    DB::insert('insert into posts(title, content) values(?, ?)', ['New ideas on PHP', 'How about using Laravel']);
//
//});

//Route::get('/read', function(){
//
//   $results = DB::select('select * from posts where id = ?', [1]);
//
//   foreach($results as $post){
//
//       return ($post->title . "<br>" . $post->content);
//
//   }
//
//});

//Route::get('/update', function(){
//
//    $updated = DB::update('update posts set title = "Updated title" where id = ?', [1]);
//
//    return $updated;
//
//});

//
//Route::get('/delete', function(){
//
//    $deleted = DB::delete('delete from posts where id = ?', [1]);
//
//    return ("Row " . $deleted . " successfully removed from database");
//
//});


/*
 *
 * ELOQUENT
 *
 */

//Route::get('/read', function() {
//
//    $posts = Post::all();
//
//   foreach($posts as $post) {
//
//       return $post->title;
//
//   }
//
//});

//Route::get('/find', function() {
//
//    $post = Post::find(2);
//
//    return $post->title;
//
//});


//Route::get('/findwhere', function() {
//
//$posts = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();
//
//return $posts;
//
//});
//
//
//Route::get('/findmore', function() {
//
//   $posts = Post::findOrFail(3);
//
//   return $posts;
//
//});
//
//Route::get('/basicinsert', function() {
//
//    $post = new Post;
//
//    $post->title = 'Look at this shiny new title';
//    $post->content = 'Full of interesting facts and ideas';
//
//    $post->save();
//
//});
//
//
//Route::get('/basicupdate', function() {
//
//    $updatedPost = Post::find(4);
//
//    $updatedPost->title = 'Actually think this is better';
//
//    $updatedPost->save();
//
//});

//
//Route::get('/create', function() {
//
//    Post::create(['title'=>'create method', 'content'=>'Oh crikey I just made a method']);
//
//});
//
//Route::get('/update', function() {
//
//    Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'For a sunny Tuesday', 'content'=>'There is nothing better than coffee and sausages']);
//
//});

//Route::get('/delete', function() {
//
//    $post = Post::find(6);
//
//    $post->delete();
//
//});


//Route::get('/newdelete', function() {
//
//    Post::destroy(4);
//
//});
//
//Route::get('/softdelete', function() {
//
//   Post::find(3)->delete();
//
//});


//Route::get('/readsoftdelete', function() {
//
//    $post = Post::onlyTrashed()->where('is_admin', 0)->get();
//
//    return $post;
//
//});

//
//Route::get('/restoredeleted', function() {
//
//    Post::withTrashed()->where('is_admin', 0)->restore();
//
//});


//Route::get('/forcedelete', function() {
//
//    Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
//
//});

//Route::get('/user/{id}/post/', function($id) {
//
//    return User::find($id)->post->title;
//
//});
//
//
//Route::get('post/{id}/user', function($id) {
//
//  return Post::find($id)->user->name;
//
//});


//Route::get('/posts', function() {
//
//    $user = User::find(1);
//
//    foreach($user->posts as $post) {
//
//        echo $post->title;
//
//    };
//
//});
//
//Route::get('user/{id}/role', function($id) {
//
////    $user = User::find($id);
////
////    foreach($user->roles as $role){
////
////        return $role->roleName;
////
////    }
//
//    $user = User::find($id)->roles()->orderBy('id', 'desc')->get();
//
//    return $user;
////
////});
//
//
//Route::get('user/pivot', function() {
//
//    $user = User::find();
//
//    foreach($user->roles as $role){
//
//        return $role->pivot->created_at;
//
//    }
//
//});
//
//Route::get('/user/country', function() {
//
//    $country = Country::find(4);
//
//    foreach($country->posts as $post){
//
//            return $post->title;
//
//        }
//
//});
//
//
////Polymorphic relations
//
//
//
//Route::get('/post/photos', function() {
//
//    $post = Post::find(1);
//
//    foreach($post->photos as $photo) {
//
//        echo $photo->path . "<br>";
//
//    }
//
//});


//
//Route::get('photo/{id}/post', function($id) {
//
//    $photo = Photo::findOrFail($id);
//
//    return $photo->imageable;
//
//});


//Polymorphic many to many

//Route::get('/post/tag', function()
//{
//
//    $post = Post::find(1);
//
//    foreach ($post->tags as $tag) {
//
//        echo $tag->name;
//    }
//
//});
//
//
//Route::get('/tag/post', function()
//{
//
//    $tag = Tag::find(2);
//
//    foreach ($tag->posts as $post) {
//
//        return $post->title;
//
//    }
//
//
//});


//CRUD application



Route::group(['middleware'=>'web'], function ()
{

    Route::resource('/posts', 'PostsController');

});
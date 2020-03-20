<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@homepage');

Route::get('/register', function () {
    return view('pages.register');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/profile', function () {
    return view('account.profile');
});

$p = 'post';
Route::get('/post', 'PostController@newPost');
Route::post('/post', 'PostController@CreatePost');
Route::get('/post/like/{postid}',   ['as' => $p . 'redirect',   'uses' => 'PostController@addLike']);
Route::get('/post/dislike/{postid}',   ['as' => $p . 'redirect',   'uses' => 'PostController@removeLike']);
Route::post('/post/addcomment',   ['as' => $p . 'redirect',   'uses' => 'PostController@addComment']);

$s = 'social.';
Route::get('/social/redirect/{provider}',   ['as' => $s . 'redirect',   'uses' => 'Auth\AuthController@getSocialRedirect']);
Route::get('/social/handle/{provider}',     ['as' => $s . 'handle',     'uses' => 'Auth\AuthController@getSocialHandle']);

$g = 'game';
Route::get('/games/all', 'GameController@viewGames');
Route::get('/games/{gameid}/', 'GameController@viewSingleGames');
Route::get('/games/upload/', 'GameController@addGames');
Route::post('/games/upload/', 'GameController@uploadGame');

Route::post('/register', 'RegisterController@CreateUser');
Route::post('/login', 'RegisterController@postLogin');

Route::post('profile/upload', ['as' => 'profile.upload', 'uses' => 'RegisterController@upload']);



Route::post('profile/update', ['as' => 'profile.update', 'uses' => 'AccountController@updateUser']);

Route::get('chat/{username}', 'ChatController@startChat');

Route::get('livestream/inquiry', 'LivestreamController@makeInquiry');
Route::post('livestream/inquiry', 'LivestreamController@sendInquiry');

Route::post('sendMessage', 'ChatController@sendMessage');
Route::post('isTyping', 'ChatController@isTyping');
Route::post('notTyping', 'ChatController@notTyping');
Route::post('retrieveChatMessages', 'ChatController@retrieveChatMessages');
Route::post('retrieveTypingStatus', 'ChatController@retrieveTypingStatus');

Route::get('product/{id}', 'ProductController@getProduct')->where('id', '[0-9]+');;
Route::post('product/add', 'ProductController@addItem');

Route::get('shop/cart', 'ProductController@showCart');
Route::post('shop/checkout', 'ProductController@showCheckout');
Route::post('shop/proceed', 'ProductController@doCheckout');

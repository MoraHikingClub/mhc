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

use App\Knowledge;

Route::get('/', [
    'as' => 'index',
    'uses' => 'PagesController@getIndex'
]);

Route::get('/about/aboutus',function() {
    return view('about');
})->name('about');

Route::get('/blog', [
    'as' => 'blog',
    'uses' => 'PostController@index'
]);

Route::get('/blog/{slug}', [
    'as' => 'blog.single', 
    'uses' => 'PagesController@getSingle'
])->where('slug', '[\w\d\-\_]+');

Route::get('/tag/{name}', [
    'as' => 'tags.view', 
    'uses' => 'PagesController@getSingleTag'
])->where('name', '[\w\d\-\_]+');

Route::get('/contact', function() {
    return view('contact');
})->name('contact');
Route::post('/contact', ['as' => 'postContact', 'uses' => 'PagesController@postMail']);

Route::get('/memories', ['as' => 'gallery', 'uses' => 'PagesController@gallery']);

Route::get('/about/commitee', function() {
    return view('commitee');
})->name('commitee');

Route::get('/about/members', [
    'uses' => 'MemberController@index',
    'as' => 'members'
]);

Route::get('/news', ['uses' => 'PostController@news', 'as' => 'posts.news']);
Route::get('/news/{slug}', [
    'uses' => 'PagesController@getSingleNews',
    'as' => 'news.single'
])->where('slug', '[\w\d\-\_]+');

// Route::get('/wisdom' , function() {
//     return view('wisdom');
// })->name('wisdom');

Route::get('/trails' , function() {
    return view('trails');
})->name('trails');

Route::get('/signin', function(){
    return redirect()->route('getSignin');
});

Route::resource('tags', 'TagController', ['except' => 'create']);
Route::resource('posts', 'PostController', ['middleware' => 'auth', 'except' => ['index', 'news']]);
Route::resource('albums', 'AlbumController', ['middleware' => 'auth', 'except' => 'show']);

Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);
Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);
Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);
Route::delete('comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);

Route::get('/list/posts',[
    'uses' => 'PostController@list',
    'as' => 'posts.list',
    'middleware' => 'auth'
]);

Route::get('/list/news',[
    'uses' => 'PostController@news_list',
    'as' => 'posts.news_list',
    'middleware' => 'auth'
]);

Route::get('/auth/signin', function(){
    if(!Auth::check()){
        return view('auth.signin');
    }else{
        return redirect()->route('account.dashboard');
    }
})->name('getSignin');

Route::get('/auth/signup', function(){
    return view('auth.signup');
    //return redirect()->route('index');
})->name('getSignup');

Route::post('/auth/signup', 'UserController@SignUp')->name('signup');
Route::post('/auth/signin', 'UserController@SignIn')->name('signin');
Route::get('/auth/signout', 'UserController@SignOut')->name('signout');


//routes for reset password
Route::get('/auth/account/resetpassword', [
    'as' => 'resetpassword.view',
    'uses' => 'UserController@resetPasswordView'
]);

Route::post('/auth/account/resetpassword/post', [
    'as' => 'resetpassword.post',
    'uses' => 'UserController@resetPasswordPost'
]);

Route::get('/auth/account/{api}/changepassword', [
    'as' => 'resetpassword.change',
    'uses' => 'UserController@resetPasswordChange'
]);

Route::post('/auth/account/{api}/changepassword', [
    'as' => 'resetpassword.update',
    'uses' => 'UserController@resetPasswordUpdate'
]);



//Account routes
Route::get('/account', [
    'as' => 'account.account',
    'uses' => 'PagesController@getAccount',
    'middleware' => 'auth'
]);

Route::get('/account/edit', [
    'as' => 'account.edit',
    'uses' => 'PagesController@getAccountEdit',
    'middleware' => 'auth'
]);

Route::put('/account/update', [
    'as' => 'account.update',
    'uses' => 'UserController@updateUser',
    'middleware' => 'auth'
]);

Route::get('/account/password/change', [
    'as' => 'password.change',
    'uses' => 'UserController@changePassword',
    'middleware' => 'auth'
]);

Route::post('/account/password/update', [
    'as' => 'password.update',
    'uses' => 'UserController@updatePassword',
    'middleware' => 'auth'
]);


//knowledge routes
Route::resource('knowledge','KnowledgeController',['middleware' => 'auth', 'except' => 'index']);
Route::get('/knowledge', [
    'uses' => 'KnowledgeController@index',
    'as' => 'knowledge.index'
]);
Route::get('/list/knowledge',[
    'uses' => 'KnowledgeController@list',
    'as' => 'knowledge.list',
    'middleware' => 'auth'
]);
Route::get('/viewknowledge/{id}',[
    'uses' => 'KnowledgeController@singleCard',
    'as' => 'knowledge.singleCard'
]);

Route::post('/', 'PagesController@launch');

//Admin panel
Route::get('/overview', [
    'as' => 'account.overview',
    'uses' => 'PagesController@overview',
    'middleware' => 'auth'
]);

Route::get('/dashboard', [
    'as' => 'account.dashboard', 
    'uses' => 'PagesController@getDashboard',
    'middleware' => 'auth'
]);

Route::get('/admin/activeusers', [
    'as' => 'admin.activeusers',
    'uses' => 'AdminController@activeUsers',
    'middleware' => 'auth'
]);

Route::get('/admin/pendingusers', [
    'as' => 'admin.pendingusers',
    'uses' => 'AdminController@pendingUsers',
    'middleware' => 'auth'
]);

Route::get('/searchpendingusers',[
    'as' => 'admin.searchpendingusers',
    'uses' => 'AdminController@searchPendingUsers'
]);

Route::get('/searchactiveusers',[
    'as' => 'admin.searchactiveusers',
    'uses' => 'AdminController@searchActiveUsers'
]);

Route::get('/pdf', 'PagesController@pdf')->name('pdf');

Route::post('/admin/activateuser',[
    'as' => 'admin.activateuser',
    'uses' => 'AdminController@activateUser'
]);
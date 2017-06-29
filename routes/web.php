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

use Illuminate\Support\Facades\Auth;


/**************** Front controller ****************/

Route::get('/', 'HomeController@index');
Route::get('/qui-sommes-nous', function(){return view('home/qui-sommes-nous');});
Route::get('/projets', function () {return view('home/projets');});
Route::get('/dons', function () {return view('home/dons');});
Route::get('/article/{id}', 'HomeController@show')->where('id', '[0-9]+');
Route::get('/sengager', function () {
    $data = '';
    return view('home/page-inscription')->with('data', $data);
});
Route::post('/sengager', "HomeController@store_member");
Route::get('/contact', function(){ return view('home/contact');});




/***** Admin Users *****/

Auth::routes();


/**************** admin ****************/

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/membres', 'AdminController@show_members');



/***** CRUD post control *****/

Route::get('/admin/new-post', 'PostController@create');
Route::post('/admin/new-post', 'PostController@store');
Route::get('/admin/post/{id}', 'PostController@show')->where('id', '[0-9]+');
Route::post('/admin/post/{id}', 'PostController@update')->where('id', '[0-9]+');
Route::get('/admin/post/{id}/delete', 'PostController@delete')->where('id', '[0-9]+');



/***** history post control *****/

Route::get('/admin/post-history/{id}', 'PostController@show_history')->where('id', '[0-9]+');
Route::get('/admin/post-delete', 'PostController@show_delete')->where('id', '[0-9]+');
Route::get('/admin/post-delete-restaure/{numero_article}', 'PostController@restaure_delete')->where('numero_article', '[0-9]+');
Route::get('/admin/post-restaure/{history_id}/{post_id}', 'PostController@restaure_history')->where(['history_id' => '[0-9]+','post_id' => '[0-9]+']);


/***** tag/categorie control *****/

Route::get('/admin/new-tag-or-categorie','TaxonomieController@index');
Route::post('/admin/new-tag-or-categorie','TaxonomieController@create');
Route::get('/admin/new-tag-or-categorie/{id}','TaxonomieController@delete')->where('id', '[0-9]+');












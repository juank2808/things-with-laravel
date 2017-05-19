<?php

use \Illuminate\Auth\Middleware\Authenticate;

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

Route::get('/', [
    'as'    =>'home', 
    'uses'  =>'FrontController@index'
]);
Route::get('search/category/{name}',[
    'as'    =>'search.category',
    'uses'  =>'FrontController@searchCategory',
]);
Route::get('search/tag/{name}',[
    'as'    =>'search.tags',
    'uses'  =>'FrotController@searchTags',
]);
Route::get('view/article/{id}',[
    'as'    => 'view.article',
    'uses'  =>'FrontController@viewArticle',
    
]);


//rutead de los admin
Route::group(['prefix' => 'admin','middleware' => 'auth'], function(){
    //log admin
    Route::resource('home', 'HomeController');
    Route::get('/admin/home', ['as' =>'home', function(){
    return view('home');
    }
    ]);
    //usuarios
    Route::resource('users', 'UsersController');
    Route::get('users/{id}/destroy',[
        'uses'  =>'UsersController@destroy',
        'as'    =>'admin.users.destroy'
    ]);
    Route::get('users/{id}/edit/',[
        'uses'  =>      'UsersController@edit',
        'as'    =>      'admin.users.edit'
        ]);
    
    //categorias
    Route::resource('categories', 'CategoryController');
    Route::get('categories/{id}/destroy',[
        
        'uses'  =>      'CategoryController@destroy',
        'as'    =>      'admin.categories.destroy'
    ]);
    route::get('categories/{id}/edit',[
        
        'uses'  =>      'CategoryController@edit',
        'as'    =>      'admin.categories.edit'
    ]);
    
    //tags
    Route::resource('tags', 'TagsController');
    Route::get('tags/{id}/destroy',[
        
        'uses'  =>      'TagsController@destroy',
        'as'    =>      'admin.tags.destroy'
    ]);
    Route::get('tags/{id}/edit',[
        
        'uses'  =>      'TagsController@edit',
        'as'    =>      'admin.tags.edit'
    ]);
    //articulos
    Route::resource('articles', 'ArticlesController');
    Route::get('articles/{id}/destroy',[
        
        'uses'  =>      'ArticlesController@destroy',
        'as'    =>      'admin.articles.destroy'
    ]);
    Route::get('articles/{id}/edit',[
        
        'uses'  =>      'ArticlesController@edit',
        'as'    =>      'admin.articles.edit'
    ]);
    Route::get('images',[
        'uses'  =>      'ImageController@index',
        'as'    =>      'admin.images.index'
    ]);
});


Auth::routes();

Route::get('welcome', 'HomeController@index');
 Route::get('/logout', function () {
        Auth::logout();
        return redirect('/');
    });

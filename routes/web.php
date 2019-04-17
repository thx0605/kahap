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

Route::get('/', function () {
    return redirect() -> route('index');
});
Route::group(['prefix' => 'admin'], function() {

    Route::get('/',[
        'as' => 'index',
        'uses' => 'HomeController@index'
    ]);

    Route::group(['prefix' => 'members'], function() {

        Route::get('/',[
            'as' => 'members',
            'uses' => 'MembersController@index'
        ]);
        Route::get('create',[
            'as' => 'create',
            'uses' => 'MembersController@create'
        ]);
        Route::post('create',[
            'as' => 'createPost',
            'uses' => 'MembersController@createPost'
        ]);
        Route::get('edit/{id}',[
            'as' => 'edit',
            'uses' => 'MembersController@edit'
        ]);
        Route::put('edit',[
            'as' => 'editPost',
            'uses' => 'MembersController@editPost'
        ]);
        Route::delete('delete',[
            'as' => 'delete',
            'uses' => 'MembersController@delete'
        ]);
        Route::post('search',[
            'as' => 'search',
            'uses' => 'MembersController@search'
        ]);
    });

});
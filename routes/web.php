<?php
/*-----------------------------------------------------------------
- Test routes
-----------------------------------------------------------------*/
Route::get('test', function (){
	return 'Hello Denapia!';
});

/*-----------------------------------------------------------------
- Admin routes
-----------------------------------------------------------------*/

// Dashboard
Route::get('/', 'DenapiaController@dashboard')->name('dashboard');

// Users
Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
	Route::get('/', 'DenapiaUserController@index')->name('index');
	Route::get('create', 'DenapiaUserController@create')->name('create');
	Route::post('/', 'DenapiaUserController@store')->name('store');
	Route::get('{user}/edit', 'DenapiaUserController@edit')->name('edit');
	Route::put('{user}', 'DenapiaUserController@update')->name('update');
	Route::delete('{user}/trash', 'DenapiaUserController@trash')->name('trash');
	Route::put('{user}/restore', 'DenapiaUserController@restore')->name('restore');
	Route::delete('{user}', 'DenapiaUserController@destroy')->name('destroy');
});


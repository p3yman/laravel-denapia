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
Route::get('/', 'DenapiaController@dashboard')->name('dashboard');
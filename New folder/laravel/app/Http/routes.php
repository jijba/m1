<?php
Route::post('get_details', 'LeaderController@index');
Route::controllers([

	'auth' => 'Auth\AuthController',

	'password' => 'Auth\PasswordController'
      
]);
?>
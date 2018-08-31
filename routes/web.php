<?php

//Rutas de la vista publica
Route::get('/', 'PagesController@home')->name('pages.home');
Route::get('nosotros', 'PagesController@about')->name('pages.about');
Route::get('event', 'PagesController@event')->name('pages.event');
Route::get('event/show/{event}', 'PagesController@showevent')->name('event.show');
Route::get('contacto', 'PagesController@contact')->name('pages.contact');
Route::post('contacto/send', 'PagesController@store')->name('pages.contact.send');

//Rutas de iniocio del panel de control
Route::get('admin', 'PagesController@index')->middleware('auth');
//*************************************Rutas de autentificacion*********************************************
// Authentication...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Password Resets...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
//**********************************************************************************************************  
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function(){

       //Rutas de vista para contenidos
       Route::get('news', 'NewsController@index')->name('admin.news.index');
       Route::get('events', 'EventsController@index')->name('admin.events.index');
       Route::get('messages', 'MessagesController@index')->name('admin.messages.index');
       Route::get('users', 'UsersController@index')->name('admin.users.index');

       //Rutas de creacion para contenidos
       Route::get('news/create', 'NewsController@create')->name('admin.news.create');
       Route::post('news', 'NewsController@store')->name('admin.news.store');
       Route::get('events/create', 'EventsController@create')->name('admin.events.create');
       Route::post('events', 'EventsController@store')->name('admin.events.store');
       Route::get('messages/create', 'MessagesController@create')->name('admin.messages.create');
       Route::get('users/create', 'UsersController@create')->name('admin.users.create');
       Route::post('users', 'UsersController@store')->name('admin.users.store');

       //Rutas de muetra detallada para contenidos
       Route::get('news/{new}', 'NewsController@show')->name('admin.news.show');
       Route::get('events/{event}', 'EventsController@show')->name('admin.events.show');
       Route::get('messages/{message}', 'MessagesController@show')->name('admin.messages.show');
       Route::get('users/{user}', 'UsersController@show')->name('admin.users.show');

       //Rutas de eliminacion para contenidos
       Route::delete('news/{new}', 'NewsController@destroy')->name('admin.news.destroy');
       Route::delete('events/{event}', 'EventsController@destroy')->name('admin.events.destroy');
       Route::delete('messages/{message}', 'MessagesController@destroy')->name('admin.messages.destroy');
       Route::delete('users/{user}', 'UsersController@destroy')->name('admin.users.destroy');

       

});
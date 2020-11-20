<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;

$adminRoute = config('base.admin_route');
$moduleRoute = 'users';

Route::group(['prefix'=>$adminRoute],function(Router $router) use($adminRoute,$moduleRoute){
   $router->group(['prefix'=>$moduleRoute],function(Router $router) use ($adminRoute,$moduleRoute){
       $router->get('index','UsersController@getIndex')->name('wadmin::users.index.get');
       $router->get('create','UsersController@getCreate')->name('wadmin::users.create.get');
       $router->post('create','UsersController@postCreate')->name('wadmin::users.create.post');
       $router->get('edit/{id}','UsersController@getEdit')->name('wadmin::users.edit.get');
       $router->post('edit/{id}','UsersController@postEdit')->name('wadmin::users.edit.post');
   });
});

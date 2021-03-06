<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;

$adminRoute = config('base.admin_route');
$moduleRoute = 'acl';

Route::group(['prefix'=>$adminRoute.'/'.$moduleRoute],function(Router $router) use($adminRoute,$moduleRoute){
    $router->group(['prefix'=>'permission'],function(Router $router) use ($adminRoute,$moduleRoute){
        $router->get('index','PermissionController@getIndex')->name('wadmin::permission.index.get');
    });

    $router->group(['prefix'=>'role'], function(Router $route) use($adminRoute,$moduleRoute){
        $route->get('index','RoleController@getIndex')->name('wadmin::role.index.get');
        $route->get('create','RoleController@getCreate')->name('wadmin::role.create.get');
        $route->post('create','RoleController@postCreate')->name('wadmin::role.create.post');
        $route->get('edit/{id}','RoleController@getEdit')->name('wadmin::role.edit.get');
        $route->post('edit/{id}','RoleController@postEdit')->name('wadmin::role.edit.post');
        $route->get('delete/{id}','RoleController@getDelete')->name('wadmin::role.delete.get');
    });

});

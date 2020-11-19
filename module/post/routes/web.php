<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;

$adminRoute = config('base.admin_route');
$moduleRoute = 'post';

Route::group(['prefix'=>$adminRoute],function(Router $router) use($adminRoute,$moduleRoute){
    $router->group(['prefix'=>$moduleRoute],function(Router $router) use ($adminRoute,$moduleRoute){
        $router->get('index','PostController@getIndex')->name('wadmin::post.index.get');
        $router->get('create','PostController@getCreate')->name('wadmin::post.create.get');
        $router->post('create','PostController@postCreate')->name('wadmin::post.create.post');
    });
});

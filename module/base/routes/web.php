<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;

$adminRoute = config('base.admin_route');
$moduleRoute = 'dashboard';

Route::group(['prefix'=>$adminRoute], function(Router $router) use($adminRoute,$moduleRoute){
    $router->group(['prefix'=>$moduleRoute], function(Router $router) use($adminRoute,$moduleRoute){
        $router->get('index','DashboardController@getIndex')->name('wadmin::dashboard.index.get');
    });
});



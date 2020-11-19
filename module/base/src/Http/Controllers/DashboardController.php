<?php


namespace Base\Http\Controllers;


use Barryvdh\Debugbar\Controllers\BaseController;

class DashboardController extends BaseController
{
    function getIndex(){
        return view('wadmin-dashboard::dashboard');
    }
}

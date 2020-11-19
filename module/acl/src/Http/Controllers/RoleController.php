<?php


namespace Acl\Http\Controllers;


use Acl\Repositories\RoleRepository;
use Barryvdh\Debugbar\Controllers\BaseController;
use Barryvdh\Debugbar\LaravelDebugbar;
use Illuminate\Http\Request;

class RoleController extends BaseController
{
    protected $ro;
    public function __construct(RoleRepository $repository)
    {
        $this->ro = $repository;
    }

    public function getIndex(){
        $data = $this->ro->orderBy('name','asc')->all();
        return view('wadmin-acl::role.index',
            ['data'=>$data]
        );
    }

}

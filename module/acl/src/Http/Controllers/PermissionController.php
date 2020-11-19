<?php


namespace Acl\Http\Controllers;


use Acl\Repositories\PermissionRepository;
use Barryvdh\Debugbar\Controllers\BaseController;
use Barryvdh\Debugbar\LaravelDebugbar;
use Illuminate\Http\Request;

class PermissionController extends BaseController
{
    private $perm;
    public function __construct(PermissionRepository $repository)
    {
        $this->perm = $repository;
    }

    public function getIndex()
    {
        $perms = $this->perm->orderBy('module', 'asc')->all();
        return view('wadmin-acl::permission.index', [
            'data' => $perms
        ]);
    }

}

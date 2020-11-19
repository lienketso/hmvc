<?php


namespace Acl\Http\Controllers;


use Acl\Http\Requests\RoleCreateRequest;
use Acl\Repositories\RoleRepository;
use Barryvdh\Debugbar\Controllers\BaseController;
use Barryvdh\Debugbar\LaravelDebugbar;
use Base\Supports\FlashMessage;
use Illuminate\Http\Request;
use Mockery\Exception;

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

    public function getCreate(){
        return view('wadmin-acl::role.create');
    }

    public function postCreate(RoleCreateRequest $request){
        $data = $request->except(['_token','continue_post']);
        try{
            $this->ro->create($data);
            if($request->has('continue_post')){
                return redirect()->route('wadmin::role.create.get')
                    ->with(FlashMessage::returnMessage('create'));
            }
            return redirect()->route('wadmin::role.index.get')
                ->with(FlashMessage::returnMessage('create'));
        }catch (Exception $e){
            return $e->getMessage();
        }
    }

}

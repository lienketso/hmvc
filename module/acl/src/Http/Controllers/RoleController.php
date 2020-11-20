<?php


namespace Acl\Http\Controllers;


use Acl\Http\Requests\RoleCreateRequest;
use Acl\Http\Requests\RoleEditRequest;
use Acl\Repositories\PermissionRepository;
use Acl\Repositories\RoleRepository;
use Barryvdh\Debugbar\Controllers\BaseController;
use Barryvdh\Debugbar\LaravelDebugbar;
use Base\Supports\FlashMessage;
use DebugBar\DebugBar;
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
            DebugBar::addThrowable($e->getMessage());
            return redirect()->back()->withErrors(config('messages.error'));
        }
    }

    public function getEdit($id, PermissionRepository $permissionRepository){
        $role = $this->ro->find($id);
        $perm = $permissionRepository->orderBy('module','asc')->all();
        $currentPerms = $role->perms()->get()->toArray();
        $args = [];
        foreach ($currentPerms as $pe) {
            $args[] = $pe['id'];
        }
        return view('wadmin-acl::role.edit',[
            'data'=>$role,
            'perm'=>$perm,
            'currentPerms'=>$args
        ]);
    }

    public function postEdit($id,RoleEditRequest $request){
        $data = $request->only(['display_name','description']);
        try{
            $editRole = $this->ro->update($data,$id);
            $this->ro->sync($id,'perms',$request->permission);
            return redirect()->route('wadmin::role.index.get')
                ->with(FlashMessage::returnMessage('edit'));
        }catch (\Exception $e){
            return redirect()->back()->with($e->getMessage());
        }
    }

    public function getDelete($id){
        try {
            $role = $this->ro->find($id);
            $userRole = $role->users()->get();
            if (count($userRole) == 0) {
                $this->ro->delete($id);
                return redirect()->back()->with(FlashMessage::returnMessage('delete'));
            } else {
                return redirect()->back()->withErrors(config('messages.role_error'));
            }
        } catch (\Exception $e) {
            Debugbar::addThrowable($e->getMessage());
            return redirect()->back()->withErrors(config('messages.role_error'));
        }
    }

}

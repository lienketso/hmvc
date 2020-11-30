<?php

namespace Users\Http\Controllers;

use Acl\Repositories\RoleRepository;
use Barryvdh\Debugbar\Controllers\BaseController;
use Base\Supports\FlashMessage;
use Users\Http\Requests\UsersCreateRequest;
use Users\Http\Requests\UsersEditRequest;
use Users\Repositories\UsersRepository;

class UsersController extends BaseController
{
    protected $users;
    public function __construct(UsersRepository $repository)
    {
        $this->users = $repository;
    }

    public function getIndex(){
        $data = $this->users->orderBy('created_at','desc')->all();
        return view('wadmin-users::index',['data'=>$data]);
    }
    public function getCreate(RoleRepository $roleRepository){
        $roles = $roleRepository->orderBy('name','asc')->all();
        return view('wadmin-users::create',[
            'roles'=>$roles
        ]);
    }
    public function postCreate(UsersCreateRequest $request){
        try{
            $data = $request->except(['_token','continue_post']);
            $createData = $this->users->create($data);
            $createData->roles->sync($data['role']);
            if($request->has('continue_post')){
                return redirect()
                    ->route('wadmin::users.create.get')
                    ->with(FlashMessage::returnMessage('create'));
            }
            return redirect()->route('wadmin::users.index.get')
                ->with(FlashMessage::returnMessage('create'));
        }catch (\Exception $e){
            return redirect()->back()->withErrors(config('messages.error'));
        }

    }

    public function getEdit($id, RoleRepository $roleRepository){
        $data = $this->users->find($id);
        $roles = $roleRepository->orderBy('name','asc')->all();
        $currentRole = $data->roles()->first();

        return view('wadmin-users::edit',[
            'data'=>$data,
            'roles'=>$roles,
            'currentRole'=>$currentRole
        ]);
    }

    public function postEdit($id, UsersEditRequest $request){
        try {
            if ($request->get('password') == null) {
                $data = $request->except(['_token', 'email', 'password', 're_password']);
            } else {
                $data = $request->except(['_token', 'email']);
            }
            $editData = $this->users->update($data,$id);
            $editData->roles()->sync($data['role']);
            return redirect()->route('wadmin::users.index.get')
                ->with(FlashMessage::returnMessage('edit'));
        }catch (\Exception $e){
            return redirect()->back()->withErrors(config('messages.error'));
        }
    }

}

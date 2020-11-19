<?php

namespace Users\Http\Controllers;

use Barryvdh\Debugbar\Controllers\BaseController;
use Base\Supports\FlashMessage;
use Users\Http\Requests\UsersCreateRequest;
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
    public function getCreate(){
        return view('wadmin-users::create');
    }
    public function postCreate(UsersCreateRequest $request){
        try{
            $data = $request->except(['_token','continue_post']);
            $this->users->create($data);
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
}

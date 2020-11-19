<?php
namespace Post\Http\Controllers;

use Barryvdh\Debugbar\Controllers\BaseController;
use Barryvdh\Debugbar\LaravelDebugbar;
use Base\Supports\FlashMessage;
use Illuminate\Http\Request;
use Post\Http\Requests\PostCreateRequest;
use Post\Models\Post;
use Post\Repositories\PostRepository;

class PostController extends BaseController
{
    protected $po;
    public function __construct(PostRepository $repository)
    {
        $this->po = $repository;
    }

    public function getIndex(){
        $data = $this->po->orderBy('created_at','desc')->all();
        return view('wadmin-post::index',['data'=>$data]);
    }
    public function getCreate(){
        return view('wadmin-post::create');
    }
    public function postCreate(PostCreateRequest $request){
        try {
            $data = $request->except(['_token','continue_post']);
            $this->po->create($data);
            return redirect()->route('wadmin::post.index.get')->with(FlashMessage::returnMessage('create'));
        }catch (\Exception $e){
            return $e->getMessage();
        }
    }

}

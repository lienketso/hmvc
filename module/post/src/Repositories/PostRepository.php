<?php


namespace Post\Repositories;


use Prettus\Repository\Eloquent\BaseRepository;
use Post\Models\Post;

class PostRepository extends BaseRepository
{
    public function model()
    {
        return Post::class;
    }
}

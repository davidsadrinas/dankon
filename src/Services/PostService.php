<?php

namespace Blog\Services;

//use Illuminate\Http\Request;

use App\Post;

use Blog\API\PostAPI as PostAPI;

class PostService implements PostAPI
{
	public function createPost($newPostMessage): Post
	{
		//dd($newPostMessage);
		$newPost=Post::create($newPostMessage);

        return $newPost;
	}
}


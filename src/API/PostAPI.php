<?php

namespace Blog\API;

//use Illuminate\Http\Request;//
use Blog\API\PostService;

interface PostAPI {

	public function createPost($newPostRequest);
	

}
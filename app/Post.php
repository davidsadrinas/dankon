<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = ['id', 'user_id', 'name', 'body', 'file'];


	public function user(){
    	return $this->belongsTo(User::tag);
    }
}

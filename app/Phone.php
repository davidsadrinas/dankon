<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = ['id', 'name', 'description'];


    public function Client(){
        return $this->hasOne(Client::tag);
    }
}

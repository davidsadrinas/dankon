<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = ['id', 'code', 'number'];


    public function Client(){
        return $this->hasOne(Client::class);
    }
}

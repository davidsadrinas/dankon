<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['id', 'name', 'cuit'];

    public function addresses(){
        return $this->hasMany(Address::tag);
    }

    public function phones(){
        return $this->hasMany(Phone::tag);
    }
}

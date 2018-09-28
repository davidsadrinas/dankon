<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['id', 'name', 'fantasy_name', 'cuit'];

    public function addresses(){
        return $this->belongsToMany(Address::tag);
    }

    public function phones(){
        return $this->belongsToMany(Phone::tag);
    }
}

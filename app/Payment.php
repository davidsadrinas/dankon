<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['id', 'name', 'description'];

    public function orders(){
        return $this->HasMany(Order::class);
    }
}

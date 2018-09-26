<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['id', 'street', 'street_number', 'zip_code', 'city', 'province', 'country'];


    public function client(){
        return $this->belongsToMany(Client::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['id', 'user_id', 'user_id', 'brand_id', 'category_id', 'name', 'description',
        'uxpack','unit_value','sell_value'];

    public function user(){
        return $this->belongsTo(User::tag);
    }
    public function client(){
        return $this->belongsTo(Client::tag);
    }
    public function payment(){
        return $this->belongsTo(Payment::tag);
    }
    public function paymentstatus(){
        return $this->belongsTo(PaymentStatus::tag);
    }
    public function items(){
        return $this->belongsToMany(Item::tag);
    }
}

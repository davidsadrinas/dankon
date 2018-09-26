<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['id', 'user_id', 'user_id', 'brand_id', 'category_id', 'name', 'description',
        'uxpack','unit_value','sell_value'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function payment(){
        return $this->belongsTo(Payment::class);
    }
    public function paymentstatus(){
        return $this->belongsTo(PaymentStatus::class);
    }
    public function orders(){
        return $this->belongsToMany(Item::class, 'item_order', 'order_id', 'item_id');
    }
}

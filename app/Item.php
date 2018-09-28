<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['id', 'dankon_code', 'name', 'description', 'uxpack', 'presentation','brand_id', 'category_id',
        'image', 'sugest_price', 'buy_price', 'sell_price'];

    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function orders(){
        return $this->belongsToMany(Item::class, 'item_order', 'order_id', 'item_id');
    }
}

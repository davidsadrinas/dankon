<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['id', 'user_id', 'user_id', 'brand_id', 'category_id', 'name', 'description',
        'uxpack','unit_value','sell_value'];

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

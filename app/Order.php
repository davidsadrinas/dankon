<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id', 'user_id', 'client_id', 'payment_id', 'paymentstatus_id', 'name',
        'total_pay','total_fact','total_nofact'];

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
    public function items(){
        return $this->belongsToMany(Item::class);
    }

}

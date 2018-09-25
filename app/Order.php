<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id', 'user_id', 'client_id', 'payment_id', 'paymentstatus_id', 'name',
        'total_pay','total_fact','total_nofact'];

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

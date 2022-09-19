<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'order_date',
        'status',
        'user_id',
        'amount',
        'signature',
    ];

    public function details()
    {
    	return $this->hasMany(CartDetail::class);
    }
    
    public function getTotalAttribute()
    {
    	$total = 0;
    	foreach ($this->details as $detail) {
    		$total += $detail->quantity * $detail->product->price;
    	}
    	return $total;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    // cart_id
    // public function getOrderAttribute()
    // {
    //     $order = $this->orders()->where('order_date', $this->order_date)->first();
    //     return $order;
    // }
}

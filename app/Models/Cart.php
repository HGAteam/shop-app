<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\MassPrunable;

class Cart extends Model
{
    use HasFactory, SoftDeletes, MassPrunable;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'order_date',
        'status',
        'ip',
    ];

    public function details()
    {
        return $this->hasMany(CartDetail::class);
    }

    public function total()
    {
        $total = 0;
        foreach ($this->details as $detail) {
            $total += $detail->product->price;
        }
        return $total;
    }

    public function prunable(): Builder
    {
        return static::where('created_at', '<=', now()->subMonth());
    }
    
    protected function pruning()
    {
        //
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // 出品中
    const STATE_SELLING = 'selling';
    // 購入済み
    const STATE_BOUGHT = 'bought';

    protected $casts = [
        'bought_at' => 'datetime',
    ];

    public function secondaryCategory()
    {
        return $this->belongsTo(SecondaryCategory::class);
    }

    public function getIsStateSellingAttribute()
    {
        return $this->state === self::STATE_SELLING;
    }
    public function getIsStateBoughtAttribute()
    {
        return $this->state === self::STATE_BOUGHT;
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }
    public function buyer()
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }

    public function condition()
    {
        return $this->belongsTo(ItemCondition::class, 'item_condition_id');
    }
    public function size()
    {
        return $this->belongsTo(ItemSize::class, 'item_size_id');
    }

    public function carts()
    {
        return $this->belongsToMany(
            Cart::class,
            'line_items',
        )->withPivot(['id', 'quantity']);
    }
}

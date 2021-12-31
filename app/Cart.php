<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function products()
    {
        return $this->belongsToMany(
            Product::class,
            'line_items',
        )->withPivot(['id', 'quantity']);
    }
    public function items()
    {
        return $this->belongsToMany(
            Item::class,
            'line_items',
        )->withPivot(['id', 'quantity']);
    }
}

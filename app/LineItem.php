<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineItem extends Model
{
    protected $fillable = ['cart_id', 'item_id', 'quantity'];
}

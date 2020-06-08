<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ColorProduct extends Pivot
{
    protected $fillable = ['quantity', 'product_id', 'waist_id'];
}

<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShopProducts extends Model
{
    protected $table = 'shop_products';

    protected $fillable = [
        'category_id',
        'options_category_id',
        'slug',
        'name'
    ];

}

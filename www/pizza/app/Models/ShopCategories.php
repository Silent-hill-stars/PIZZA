<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class ShopCategories extends Model
{
    /**
     * @var string
     */
    protected $table = 'shop_categories';

    /**
     * @var string[]
     */
    protected $fillable = [
        'parent_id',
        'slug',
        'name'
    ];

    /**
     * @return HasMany
     */
    public function category(): HasMany
    {
        return $this->hasMany(ShopCategories::class, 'parent_id', 'id');
    }

    /**
     * @return HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(ShopProducts::class, 'category_id', 'id');
    }
}

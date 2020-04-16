<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Product
 *
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $id
 * @property string $product_name
 * @property string $product_description
 * @property float $product_price
 * @property int $category_id
 * @property-read \App\ProductCategory $categories
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereProductDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereProductName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereProductPrice($value)
 */
class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'product_name', 'product_description', 'product_price',
        'product_quantity', 'category_id', 'product_category'
    ];

    public function category()
    {
        return $this->belongsTo('App\ProductCategory');
    }

    public function image()
    {
        return $this->hasMany('App\Image');
    }
}

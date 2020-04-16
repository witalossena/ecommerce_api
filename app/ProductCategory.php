<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ProductCategory
 *
 * @property int $id
 * @property string $category_name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductCategory whereCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProductCategory whereId($value)
 * @mixin \Eloquent
 */
class ProductCategory extends Model
{

    public $timestamps = false;

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    protected $fillable = [
        'category_name'
    ];
}

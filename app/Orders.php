<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Orders
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Orders newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Orders newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Orders query()
 * @mixin \Eloquent
 */
class Orders extends Model
{
    protected $primaryKey = 'order_id';
}

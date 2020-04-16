<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "image";

    protected $fillable = [
        'image_path'
    ];

    public function product()
    {
        return $this->belongsTo('App\Product');

    }

}

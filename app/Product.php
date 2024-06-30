<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable= [
        "name",
        "details",
        "image",
        "price",
        "discount",
        "category_id"
    ];
}

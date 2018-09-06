<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ["name", "slug"];


    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getRouteKeyName()
    {
        return "slug";
    }


    // Custom methods
    public function getProductQty()
    {
        $quantity = 0;
        foreach ($this->products as $product) {
            $quantity += $product->quantity;
        }
        return $quantity;
    }

    public function scopeAddedRelations($query)
    {
        $query->with(["products", "comments"]);
    }


}

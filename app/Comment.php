<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = ["body", "user_id", "product_id", "category_id", "brand_id", "condition_id", "status"];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function condition()
    {
        return $this->belongsTo(Condition::class);
    }


    // Custom methods
    public static function scopeApproved($query)
    {
        $query->where("status", 1);
    }

    public function scopeAddedRelations($query)
    {
        $query->with(["user", "product", "category", "brand", "condition"]);
    }


}

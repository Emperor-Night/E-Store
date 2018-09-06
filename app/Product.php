<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TraitsHelpers\PhotoHelper;

class Product extends Model
{
    use PhotoHelper;

    protected $fillable = [
        "name", "slug", "description", "price", "quantity", "is_android",
        "is_threeD", "photo_id", "user_id", "category_id", "brand_id", "condition_id",
    ];

    public $storagePath = "/public/images/products/";
    public $photoPath = "/storage/images/products/";


    public function photo()
    {
        return $this->belongsTo(Photo::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
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

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getRouteKeyName()
    {
        return "slug";
    }


    // Custom methods
    public static function scopeSimilar($query)
    {
        $search = request()->search;
        $query->where("name", "LIKE", "%" . $search . "%");
    }

    public static function scopeCustomOrder($query)
    {
        $sortArr = getSorting();
        $query->orderBy($sortArr['order'], $sortArr['way']);
    }

    public static function scopePriceSort($query)
    {
        $priceArr = getPrice();
        $query->whereBetween("price", $priceArr);
    }

    public static function scopeBrandSort($query)
    {
        $brandIdsArr = request("brands") ? request("brands") : Brand::pluck("id", "id")->all();
        $query->whereIn("brand_id", $brandIdsArr);
    }

    public static function scopeConditionSort($query)
    {
        $ids = request("conditions") ? request("conditions") : Condition::pluck("id", "id")->all();
        $query->whereIn("condition_id", $ids);
    }

    public static function scopeAndroidSort($query)
    {
        $ids = request("android") ? request("android") : [0, 1];
        $query->whereIn("is_android", $ids);
    }

    public static function scopeThreeDSort($query)
    {
        $ids = request("threeD") ? request("threeD") : [0, 1];
        $query->whereIn("is_threeD", $ids);
    }

    public static function scopeFilter($query)
    {
        $query->similar()->brandSort()->androidSort()->threeDSort()
            ->conditionSort()->priceSort()->customOrder()->frontRelations();
    }

    public function scopeAddedRelations($query)
    {
        $query->basicRelations()->with("comments");
    }

    public function scopeBasicRelations($query)
    {
        $query->with(["user", "category", "brand", "condition", "photo"]);
    }

    public function scopeFrontRelations($query)
    {
        $query->basicRelations()->with(["comments" => function ($query) {
            $query->approved();
        }]);
    }


}

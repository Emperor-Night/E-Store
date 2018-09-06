<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Photo extends Model
{

    protected $fillable = ["name", "size"];


    public function product()
    {
        return $this->hasOne(Product::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }


    // Custom methods
    public function getPhotoPath()
    {
        if ($this->product) {
            return $this->product->getPhotoPath();
        } elseif ($this->user) {
            return $this->user->getPhotoPath();
        } else {
            return "http://via.placeholder.com/70x70";
        }
    }

    public function getStoragePath()
    {
        if ($this->product) {
            return $this->product->getStoragePath();
        } elseif ($this->user) {
            return $this->user->getStoragePath();
        }
    }

    public function deletePhotoFile()
    {
        if (file_exists(public_path() . $this->getPhotoPath())) {
            Storage::delete($this->getStoragePath());
        }
    }


    // Custom methods
    public function scopeAddedRelations($query)
    {
        $query->with(["product.photo", "user.photo"]);
    }


}

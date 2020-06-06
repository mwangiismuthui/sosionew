<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\ProductPhoto;
use App\Seo;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    use SoftDeletes;
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function productphotos(){
        return $this->hasMany(ProductPhoto::class);
    }
    public function seo(){
        return $this->hasMany(Seo::class);
    }
}

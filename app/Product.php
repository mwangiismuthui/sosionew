<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\ProductPhoto;
use App\Seo;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Traits\UsesUUID;
class Product extends Model
{

    use UsesUUID;
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

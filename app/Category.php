<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Traits\UsesUUID;
class Category extends Model
{
    

    use UsesUUID;
    use SoftDeletes;
    public function products(){
        return $this->hasMany(Product::class);
    }
}

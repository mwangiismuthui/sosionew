<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Product;
class ProductPhoto extends Model
{

    use SoftDeletes;
    public function product(){
        return $this->belongsTo(Product::class);
    }
}

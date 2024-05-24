<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductType;
use App\Models\Subsubcategory;
class Category extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function subsubcategories(){
        return $this->hasMany(Subsubcategory::class);
    }
    public function subcategories(){
        return $this->hasMany(ProductType::class);
    }
}
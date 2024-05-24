<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }
    protected $fillable = [
       'category_id',
       'admin_id',
'title',
'price',
'description',
'image',
'product_type_id','mrp'
    ];
}

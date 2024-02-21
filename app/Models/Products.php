<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $filter = ['product_name', 'product_description', 'product_image', 'product_category_id', 'cost_price', 'sell_price', 'promotion_price', 'stock', 'size'];		
    
    public function category(): HasOne
    {
        return $this->hasOne(ProductCategory::class, 'id', 'product_category_id');
    }
}

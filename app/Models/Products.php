<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $filter = ['product_name', 'product_description', 'product_image', 'product_category_id', 'cost_price', 'sell_price', 'promotion_price', 'stock', 'size'];				
}

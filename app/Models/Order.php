<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'total'
    ];

    public function products(){

        return $this->belongsToMany(Product::class, 'products_orders', 'order_id', 'product_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

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

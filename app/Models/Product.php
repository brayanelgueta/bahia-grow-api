<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'description',
        'sell_price',
        'buy_price',
        'quantity',
        'delivery_price'
    ];

    public function orders(){

        return $this->belongsToMany(Order::class, 'products_orders', 'product_id', 'order_id');
    }

    public function images(){

        return $this->hasMany(Image::class, 'product_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Image extends Model
{
    protected $table = 'images';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'image'
    ];

    public function product(){

        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}

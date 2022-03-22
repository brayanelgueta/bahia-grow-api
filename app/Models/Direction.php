<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    protected $table = 'directions';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'street'
    ];
}

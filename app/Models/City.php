<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Province;

class City extends Model
{
    protected $table = 'cities';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name'
    ];

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id', 'id');
    }
}

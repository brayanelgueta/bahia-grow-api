<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\City;
use App\Models\Region;

class Province extends Model
{
    protected $table = 'provinces';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name'
    ];

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }

    public function cities()
    {
        return $this->hasMany(City::class, 'province_id');
    }
}

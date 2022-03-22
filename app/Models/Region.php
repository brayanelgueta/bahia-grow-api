<?php

namespace App\Models;
use App\Models\Province;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'region';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name'
    ];

    public function provinces()
    {
        return $this->hasMany(Province::class, 'region_id');
    }
}

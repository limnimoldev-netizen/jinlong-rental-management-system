<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Unit;

class Property extends Model
{

    protected $table = 'properties';

    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'type',
        'status',
        'units',
        'image',
        'address',
    ];

    public function units(): HasMany
    {
        return $this->hasMany(Unit::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Property;


class Unit extends Model
{

    protected $table = 'units';

    protected $primaryKey = 'id';
    protected $fillable = [
        'property_id',
        'unit_number',
        'price',
        'status',
        
    ];

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }
}
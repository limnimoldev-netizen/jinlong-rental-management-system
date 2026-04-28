<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Property;
use App\Models\Tenant;
use App\Models\Lease;


class Unit extends Model
{
    protected $table = 'units';

    protected $primaryKey = 'id';
    
    protected $fillable = [
        'property_id',
        'unit_number',
        'type',
        'bedrooms',
        'bathrooms',
        'square_feet',
        'price',
        'status',
        'description',
        'is_furnished',
    ];

    protected $casts = [
        'is_furnished' => 'boolean',
        'price' => 'decimal:2',
    ];

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }

    public function tenants(): HasMany
    {
        return $this->hasMany(Tenant::class);
    }

    public function leases(): HasMany
    {
        return $this->hasMany(Lease::class);
    }

    public function getCurrentTenant()
    {
        return $this->tenants()->where('is_current', true)->first();
    }

    public function isAvailable(): bool
    {
        return $this->status === 'available';
    }

    public function isOccupied(): bool
    {
        return $this->status === 'occupied';
    }

    public function getStatusColor(): string
    {
        return match($this->status) {
            'available' => 'green',
            'occupied' => 'red',
            'maintenance' => 'yellow',
            'reserved' => 'blue',
            default => 'gray',
        };
    }

    public function getFormattedPrice(): string
    {
        return '$' . number_format($this->price, 2);
    }

    public function getFormattedSize(): string
    {
        return number_format($this->square_feet) . ' sq ft';
    }
}

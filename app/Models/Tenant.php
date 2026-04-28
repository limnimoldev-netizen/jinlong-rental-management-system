<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Lease;

class Tenant extends Model
{

    protected $table = 'tenants';

    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'phone',
        'email',
      
    ];

    public function leases(): HasMany
    {
        return $this->hasMany(Lease::class);
    }
}


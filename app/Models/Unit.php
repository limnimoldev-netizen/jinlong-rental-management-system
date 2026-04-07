<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Unit extends Model
{
    protected $table = 'units';

    protected $primaryKey = 'id';

    protected $fillable = [
        'property_id',
        'tenant_id',
        'start_date',
        'end_date',
        'lease_id'
    ];

     public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

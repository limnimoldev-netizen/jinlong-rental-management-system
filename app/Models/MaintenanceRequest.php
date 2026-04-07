<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class MaintenanceRequest extends Model
{
    protected $table = 'maintenancea_requests';

    protected $primaryKey = 'id';

    protected $fillable = [
        'start_date',
        'property_id',
        'issue',
        'status'
        
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

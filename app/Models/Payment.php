<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Payment extends Model
{
    protected $table = 'payments';

    protected $primaryKey = 'id';

    protected $fillable = [
        'lease_id',
        'amount',
        'status',
        'payment_date'
        
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

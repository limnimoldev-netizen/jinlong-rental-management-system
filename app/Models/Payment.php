<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Lease;




class Payment extends Model
{
    protected $table = 'payments';

    protected $primaryKey = 'id';
    protected $fillable = [
        'lease_id',
        'tenant_id',
        'amount',
        'method',
        'payment_date',
        'status',

        
    ];
    
    public function lease(): BelongsTo
    {
        return $this->belongsTo(Lease::class);
    }
}
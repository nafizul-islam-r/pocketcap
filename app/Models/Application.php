<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'user_id',
        'business_name',
        'business_type',
        'business_description',
        'business_duration',
        'business_location',
        'requested_amount',
        'equity_percentage',
        'payment_status',
        'status',
    ];

    protected $casts = [
        'requested_amount' => 'decimal:2',
        'equity_percentage' => 'decimal:2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function investments()
    {
        return $this->hasMany(Investment::class);
    }
}

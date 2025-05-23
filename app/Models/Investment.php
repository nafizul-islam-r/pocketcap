<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    protected $fillable = [
        'user_id',
        'application_id',
        'amount_invested',
        'platform_fee',
        'payment_status',
    ];

    protected $casts = [
        'amount_invested' => 'decimal:2',
        'platform_fee' => 'decimal:2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}

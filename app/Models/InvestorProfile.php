<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestorProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'email',
        'dob',
        'profession',
        'company',
        'business_interest',
        'nid_passport_number',
        'nid_passport_photo',
        'bank_statement_pdf',
    ];

    // Investor belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

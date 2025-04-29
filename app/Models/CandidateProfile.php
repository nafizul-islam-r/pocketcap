<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'email',
        'dob',
        'father_name',
        'mother_name',
        'present_address',
        'permanent_address',
        'profession',
        'company',
        'business_interest',
        'nid_passport_number',
        'nid_passport_photo',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReferral extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'position', 'parent_id', 'referral_id'
    ];

    /**
     * @return belongsTo
     */
    public function users()
    {
        return $this->belongsTo(User::class, 'referral_id', 'id');
    }

    /**
     * @return belongsTo
     */
    public function referralUsers()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

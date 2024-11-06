<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $fillable = [
        'user_id',
        'contract_id',
        'rating',
        'comments',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}

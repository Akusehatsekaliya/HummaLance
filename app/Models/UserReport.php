<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserReport extends Model
{
    //
    protected $fillable = [
        "user_id",
        "message",
        "reported_user_id"
    ];
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSetting extends Model
{
    protected $fillable =
    [
        'users_id',
        'languages_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function language()
    {
        return $this->belongsTo(Language::class, 'languages_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $fillable = [
        'project_id',
        'user_id',
        'message',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Project()
    {
        return $this->belongsTo(Project::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    //
    protected $fillable = [
        'project_id',
        'user_id'
    ];

    public function Project()
    {
        return $this->belongsTo(Project::class);
    }
    public function User() {
        return $this->belongsTo(User::class);
    }
}
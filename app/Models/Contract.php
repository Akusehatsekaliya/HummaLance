<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    //
    protected $fillable = [
        'project_id',
        'user_id',
        'status',
        'start_date',
        'end_date',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Project()
    {
        return $this->belongsTo(Project::class);
    }
    public function Payments()
    {
        return $this->hasMany(Payment::class);
    }
    public function Reviews()
    {
        return $this->hasMany(Review::class);
    }
}

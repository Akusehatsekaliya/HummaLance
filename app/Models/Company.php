<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'job_position',
        'country',
        'company_field',
        'start_date',
        'end_date'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

}

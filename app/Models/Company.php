<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $filllable = [
        'user_id',
        'name',
        'country',
        'addres',
        'company_field',
        'start_date',
        'end_date'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

}

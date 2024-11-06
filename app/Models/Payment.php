<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable = [
        'contract_id',
        'amount',
        'status',
        'payment_date',
        'user_id',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Contract()
    {
        return $this->belongsTo(Contract::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public $incrementing = false;
    public $keyType = 'char';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'reference_id',
        'contract_id',
        'amount',
        'status',
        'payment_date',
        'user_id',
        'payment_method',
        'payment_channel',
        'invoice_url',
        'expiry_date',
        'paid_amount',
        'ref',
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentLog extends Model
{
    use HasFactory;

    protected $table = 'payment_logs';

    protected $casts = [
        'created_at' => 'datetime:Y:m:d H:i:s',
        'updated_at' => 'datetime:Y:m:d H:i:s'
    ];

    protected $fillable = [
        'status', 'payment_type', 'order_id', 'raw_response'
    ];
}

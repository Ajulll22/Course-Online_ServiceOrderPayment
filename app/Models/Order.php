<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $casts = [
        'created_at' => 'datetime:Y:m:d H:i:s',
        'updated_at' => 'datetime:Y:m:d H:i:s',
        'metadata' => 'array'
    ];

    protected $fillable = [
        'status', 'user_id', 'course_id', 'snap_url', 'metadata'
    ];
}

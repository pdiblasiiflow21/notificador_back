<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'order_id',
        'shipment_id',
        'tracking_id',
        'state',
        'state_class',
        'items',
        'sender',
        'receiver',
        'value',
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'customer_number',
        'invoice_number',
        'product_name',
        'status',
        'order_date',
    ];
}

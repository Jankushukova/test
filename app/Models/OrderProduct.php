<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderProduct extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'count',
        'price',
        'order_id',
        'product_id'
    ];
}
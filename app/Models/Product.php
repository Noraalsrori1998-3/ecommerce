<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table=['products'];

    protected $fillable = [
        'title',
        'details',
        'images',
        'color',
        'order_date',
        'vend_id',
        'product_features',
        'rating',
        'price_y',
        'price_d',
        'user_id',
        'cat_id',
        'reports_id',
        'rating_vote',
        'type',
        'product_status',

    ];
}
